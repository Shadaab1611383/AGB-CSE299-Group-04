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
                    <a class="nav-link" href="{{ route('aacomplaint.show') }}">Action Aginst Complaint</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('complain') }}">Complaint<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('cprojects.show') }}">Current Projects<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Profile</a>
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
        <h1 class="text-center text-capitalize comp-header pb-2" style="background-color: whitesmoke;color: tomato">Send Us Your Complaint</h1>
    </div>
</section>
<section>
    <div class="container mt-5">

        @if($message = Session::get('message'))
            <h3 class="text-center text-success">{{ $message }}</h3>
        @endif

        <form action="{{ route('complaint.save') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name" style="font-size: 20px;font-weight: bold">*Name:</label>
                <input type="name" name="name" class="form-control" id="name" placeholder="Enter Your Name">
            </div>
            <div class="form-group">
                <label for="email" style="font-size: 20px;font-weight: bold">Email Address (Optional):</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email Address">
            </div>
            <div class="form-group">
                <label for="phn" style="font-size: 20px;font-weight: bold">*Phone Number:</label>
                <input type="phn" class="form-control" name="phone" id="phn" placeholder="Enter Your Phone Number">
            </div>
            <div class="form-group">
                <label for="sbj" style="font-size: 20px;font-weight: bold">*Subject:</label>
                <input type="sbj" class="form-control" name="subject" id="sbj" placeholder="Enter Your Subject">
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="8" name="comment" id="comment" placeholder="Write Your Comments Here"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg btn-block" style="background-color: rgb(45, 87, 122);border-color: gold">Submit</button>
            </div>
        </form>
    </div>
</section>



<script src="{{ asset('front') }}/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="{{ asset('front') }}/js/bootstrap.bundle.min.js"></script>
</body>
</html>
