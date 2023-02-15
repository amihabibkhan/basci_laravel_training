<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6"><h2>Update Member</h2></div>
                            <div class="col-6 text-end"><a class="btn btn-primary" href="{{ route('memberList') }}">Member List</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('updateMemberFormSubmit') }}" method="POST">
                            @csrf
                            <input type="hidden" value="{{ $member->id }}" name="id">
                            <div class="mb-2">
                                <label for="">Name</label>
                                <input type="text" class="form-control" value="{{ $member->name }}" name="name">
                            </div>
                            <div class="mb-2">
                                <label for="">Phone Number</label>
                                <input type="text" class="form-control" value="{{ $member->phone_number }}" name="phone_number">
                            </div>
                            <div class="mb-2">
                                <label for="">E-mail</label>
                                <input type="email" class="form-control" value="{{ $member->email }}" name="email">
                            </div> 
                            <div class="mb-2">
                                <label for="">About</label>
                                <input type="text" class="form-control" value="{{ $member->about }}" name="about">
                            </div>
                            <div class="mb-2">
                                <label for="">Balance</label>
                                <input type="number" class="form-control" value="{{ $member->balance }}" name="balance">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success">Update Member</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
