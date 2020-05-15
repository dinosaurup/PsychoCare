<!doctype html>
<html lang="en">
<head>
    <title>PsychoCare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <style>
        .bungkus1 {
            width: 700px;
            height: 600px;
            background-color: #95999c;
            margin-left: 160px;
            margin-right: 160px;
        }

        .col-6 a {
            width: 100px;
            height: 40px;
            background-color: orange;
            border-radius: 12px;
            margin-top: 10px;
            margin-left: 250px;

        }
        #identitas{
            margin-top: 100px;
        }
    </style>
</head>
<body>

<div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
        <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
            </button>
        </div>
        <!-- <div class="img bg-wrap text-center py-4" style="background-image: url(images/bg_1.jpg);"> -->
        <div class="img bg-wrap text-center py-4">
            <div class="user-logo">
                <h2 class="mb-4" style="color: white">PsychoCare</h2>
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="/pasien"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li>
                <a href="/pasien/cariPsikiater"><span class="fa fa-search mr-3"></span> Cari Dokter</a>
            </li>
            </li>
            <li>
                <a href="/history/chat"><span class="fa fa-history mr-3"></span>History</a>
            </li>
            <li>
                <a href="/pasien/profil"><span class="fa fa-user-circle mr-3"></span> Profil</a>
            </li>
            <li>
                <a href="{{url('/signout')}}"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
            </li>
        </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="p-4 p-md-5 pt-5">
        <div class="container">
            <div class="bungkus1" style="background-color: #95999c">
                <div class="row">

                    <div class="col-5">
                        <img src="{{url($pasien->foto)}}"
                             alt="avatar"
                             class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1"
                             style="width:250px; height: 250px; margin-top:100px; margin-left:15px">
                    </div>
                    <div class="col-6" style="background-color: #b9bbbe; height: 500px; right: 0">
                        <a class="btn btn-warning" href="/edit/profil">Edit Profil</a>

                        <table id="identitas">
                            <tr>
                                <th><li class="fa fa-user-circle mr-4"><label style="font-size: medium"> Fullname</label></li></th>
                                <td> <h5> {{$pasien->nama}} </h5></td>
                            </tr>
                            <tr>
                                <th><li class="fa fa-user-circle mr-4"><label style="font-size: medium">Username</label></li></th>
                                <td> <h5>{{$pasien->username}}</h5></td>
                            </tr>
                            <tr>
                                <th><li class="fa fa-envelope mr-4"><label style="font-size: medium">Email</label></li></th>
                                <td><h5>{{$pasien->email}}</h5></td>
                            </tr>
                            <tr>
                                <th> <li class="fa fa-address-book mr-4"><label style="font-size: medium"> Phone</label></li></th>
                                <td><h5>{{$pasien->telepon}}</h5></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>
</body>
</html>
