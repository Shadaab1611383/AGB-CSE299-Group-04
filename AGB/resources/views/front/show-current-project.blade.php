<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('front') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('front') }}/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>AGB</title>
</head>
<body class="bg-comp">

<header>

    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(45, 87, 122)">
        <a class="navbar-brand" href="#">Adarsha Gram Binirman</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('aacomplaint.show') }}">Action Against Complaint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"href="{{ route('complain') }}">Complaint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('cprojects.show') }}">Current Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"href="#">Profile</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>

<section>
    <div class="container mt-5">
        <h1 class="text-center text-capitalize comp-header pb-2" style="background-color: whitesmoke;color: tomato">Current Projects</h1>
        <table class="table">
        <thead>
        <tr>
       
        <th>ID</th>
        <th>Project</th>
        <th>Last Updated</th>
        </tr>
        </thead>
        @foreach($cprojects as $cproject)
        <tbody>
        <tr>
        <td>{{ $cproject->id }}</td>
        <td>{{ $cproject->current_project }}</td>
        <td>{{ $cproject->updated_at }}</td>

        </tr>
        <tbody>
        @endforeach

        </table>
    </div>
</section>
<section>
    <div class="container mt-5">

        



<script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ asset('front') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
