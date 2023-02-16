<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class FirstController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    // create member
    public function createMember(Request $request)
    {
        // Member::create($request->all());
        $path = null;

        if ($request->has('profile_picture')){
            $path = $request->file('profile_picture')->store('profile_picture');
        }

        Member::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'profile_picture' => $path,
            'password' => Hash::make($request->password),
            'about' => $request->about,
            'balance' => $request->balance,
        ]);

        return redirect(route('memberList'));
    }

    // member list
    public function memberList()
    {
        $members = Member::all();
        return view('members', compact('members'));
    }

    // delete member
    public function deleteMember($id)
    {

        $member = Member::find($id);
        $path = $member->profile_picture;
        Storage::delete($path);
        $member->delete();
        return back();
    }

    // view member
    public function viewMember($id)
    {
        $member = Member::find($id);
        return view('view', compact('member'));
    }

    // update member
    public function updateMember($id)
    {
        $member = Member::find($id);
        return view('update', compact('member'));
    }


    // create member
    public function updateMemberFormSubmit(Request $request)
    {
        $id = $request->id;
        $member = Member::find($id);

        $path = $member->profile_picture;

        if ($request->has('profile_picture')){
            Storage::delete($path);
            $path = $request->file('profile_picture')->store('profile_picture');
        }

        $member->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'profile_picture' => $path,
            'password' => Hash::make($request->password),
            'about' => $request->about,
            'balance' => $request->balance,
        ]);

        return redirect(route('memberList'));
    }
}
