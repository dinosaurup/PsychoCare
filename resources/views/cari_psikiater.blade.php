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
        #navbar {
            width: 500px;
            top: -95px;
            margin-bottom: 2px;
            right: -15px;
            margin-left: 1050px;
        }

        #search {
            background-image: url('https://t4.ftcdn.net/jpg/02/60/15/53/240_F_260155395_pOmXlNeaQHQvEG4i15IiIWi88SJu7Swn.jpg');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 5px;
        }

        #profil {
           position: fixed;
            right: 25px;
            top: 0;
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
            {{--            <i class="fa fa-bell" aria-hidden="true"></i>--}}
            <div class="user-logo">
            </div>
        </div>
        <ul class="list-unstyled components mb-5">
            <li class="active">
                <a href="/pasien"><span class="fa fa-home mr-3"></span> Home</a>
            </li>
            <li>
                <a href="/pasien/cariPsikiater"><span class="fa fa-search mr-3"></span> Cari Dokter</a>
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

    <div id="content" class="p-4 p-md-5 pt-2">
        <div class="col-md-7">
            <input type="text" name="search" id="search" placeholder="Search for names.."/>
        </div>

        <div class="col-4" id="navbar">
            <table id="profil">
                <tr>
                    <td>
                        <strong style="font-size:large">{{$nama->username}}</strong>
                    </td>
                    <td>
                        <img src="{{url($nama->foto)}}"
                             alt="avatar"
                             class="avatar rounded-circle d-flex nmr-2 z-depth-1"
                             style="width:80px; height: 80px;">
                    </td>
                </tr>
            </table>
        </div>
        <div style="background-color: lightgray">
            <center>

                <div class="row">
                    @foreach($user as $u)
                        <div class="col-4">

                            <div class="card mb-4" style="height: 270px" id="item" user="{{$u->nama}}">
                                <div class="row no-gutters">
                                    @csrf
                                    <div class="col-md-3 mr-4">
                                        <img src="{{url($u->foto)}}" class="card-img" alt="..."
                                             style="width: 150px; height:150px">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card-body item">
                                            <table>
                                                <tr>
                                                    <th>
                                                        <li class="fa fa-user-circle mr-4">
                                                    </th>
                                                    <td><h5 class="card-title" id="name"> {{$u->nama}}</h5></td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        <li class="fa fa-envelope mr-4">
                                                    </th>
                                                    <td><p>{{$u->email}}</p></td>
                                                </tr>
                                                <tr>
                                                    <th><p>Rp.</p></th>
                                                    <td><p>{{$u->tarif}}</p></td>
                                                </tr>
                                            </table>
                                            <a class="btn btn-primary"
                                               href="{{url('/chat/psikiater/'.$u->id)}}">chat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </center>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
{{--<script src="assets/js/jquery.min.js"></script>--}}
<script src="/assets/js/popper.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js"></script>

<script type="text/javascript">
    let dataListId = [];
    $(document).ready(() => {
        $("#item").each(function (index, e) {
            dataListId.push(e.getAttribute("user").toLowerCase());
        })
    });

    $("#search").keyup((e) => {
        let searchText = e.target.value;
        $(".card").each(function (index, e) {
            e.style.display = "none";
            console.log(e.getAttribute("user").toLowerCase(), searchText, e.getAttribute("user").toLowerCase().includes(searchText.toLowerCase()));
            if (e.getAttribute("user").toLowerCase().includes(searchText.toLowerCase())) {
                e.style.display = "block";
            }
        })
        console.log(e.target.value);
    })
</script>
</body>
</html>
