<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>
    .container {
        width: 700px;
        height: 200px;
        border: 1px solid grey;
        margin: auto;
        padding: 4px;
    }
    .navbar{
        background-color: #4e555b;
        height: 100px;
    }
</style>
<body>
<nav id="navbar" class="navbar mb-4">
    <center>
        <h3 style="color: white;">
            History
        </h3>
    </center>
</nav>
@foreach($response as $r)
    <div class="container mb-3">
        <a href="/chat/user/{{$r['user']->id}}" class="d-flex justify-content-between">
            <div class="col-md-4" style="margin-top: 3px">
                <img src="{{url($r['user']->foto)}}" alt="avatar"
                     class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1"
                     style="width: 100px; height: 100px">
            </div>
            <div class="col-md-8" style="margin-top: 3px">
                <h4>{{$r['user']->nama}}</h4>
            </div>
        </a>
    </div>
@endforeach
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>

