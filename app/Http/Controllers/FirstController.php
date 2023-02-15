<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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


        Member::create([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
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
        Member::find($id)->delete();
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

        Member::find($id)->update([
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'about' => $request->about,
            'balance' => $request->balance,
        ]);

        return redirect(route('memberList'));
    }
}
