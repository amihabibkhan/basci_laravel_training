<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $member->name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6"><h2>{{ $member->name }}</h2></div>
                        <div class="col-6 text-end">
                            <a class="btn btn-primary" href="{{ route('memberList') }}">Member List</a>
                            <a class="btn btn-dark" href="{{ route('index') }}">Create Member</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $member->id }}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{ $member->name }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $member->email }}</td>
                        </tr>
                        <tr>
                            <th>Phone Number</th>
                            <td>{{ $member->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Balance</th>
                            <td>{{ $member->balance }}</td>
                        </tr>
                        <tr>
                            <th>About</th>
                            <td>{{ $member->about }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
