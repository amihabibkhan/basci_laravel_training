<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Member List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"><h2>Member List</h2></div>
                        <div class="col-6 text-end"><a class="btn btn-primary" href="{{ route('index') }}">Create Member</a></div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table text-center table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Profile Picture</th>
                            <th>Name</th>
                            <th>Phone Number</th>
                            <th>E-mail</th>
                            <th>Balance</th>
                            <th>Action</th>
                        </tr>

                        @foreach($members as $member)
                            <tr>
                                <td>{{ $member->id }}</td>
                                <td><img style="width: 50px" src="{{ asset('storage') }}/{{ $member->profile_picture }}" alt=""></td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->phone_number }}</td>
                                <td>{{ $member->email }}</td>
                                <td>{{ $member->balance }}</td>
                                <td>
                                    <a href="{{ route('viewMember', $member->id) }}" class="btn btn-dark"><i class="fa-regular fa-eye"></i></a>
                                    <a href="{{ route('updateMember', $member->id) }}" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a>
                                    <a href="{{ route('deleteMember', $member->id) }}" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
