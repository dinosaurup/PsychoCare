{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>--}}
{{--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"--}}
{{--          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"--}}
{{--          crossorigin="anonymous">--}}
{{--    <!-- Chat CSS -->--}}
{{--    <link href="css/addons-pro/chat.css" rel="stylesheet">--}}
{{--    <!-- Chat CSS - minified-->--}}
{{--    <link href="css/addons-pro/chat.min.css" rel="stylesheet">--}}
{{--    <style>--}}
{{--        .card.chat-room .members-panel-1,--}}
{{--        .card.chat-room .chat-1 {--}}
{{--            position: relative;--}}
{{--            overflow-y: scroll;--}}
{{--        }--}}

{{--        .card.chat-room .members-panel-1 {--}}
{{--            height: 570px;--}}
{{--        }--}}

{{--        .card.chat-room .chat-1 {--}}
{{--            height: 800px;--}}
{{--            width:800px;--}}
{{--            margin-top: 0px;--}}
{{--        }--}}

{{--        .card.chat-room .friend-list li {--}}
{{--            border-bottom: 1px solid #e0e0e0;--}}
{{--        }--}}

{{--        .card.chat-room .friend-list li:last-of-type {--}}
{{--            border-bottom: none;--}}
{{--        }--}}

{{--        .scrollbar-light-blue::-webkit-scrollbar-track {--}}
{{--            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);--}}
{{--            background-color: #F5F5F5;--}}
{{--            border-radius: 10px;--}}
{{--        }--}}

{{--        .scrollbar-light-blue::-webkit-scrollbar {--}}
{{--            width: 12px;--}}
{{--            background-color: #F5F5F5;--}}
{{--        }--}}

{{--        .scrollbar-light-blue::-webkit-scrollbar-thumb {--}}
{{--            border-radius: 10px;--}}
{{--            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);--}}
{{--            background-color: #82B1FF;--}}
{{--        }--}}

{{--        .rare-wind-gradient {--}}
{{--            background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));--}}
{{--            background-image: -webkit-linear-gradient(bottom, #a8edea 0%, #fed6e3 100%);--}}
{{--            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);--}}
{{--        }--}}
{{--        .card-body{--}}
{{--            top: 100px;--}}

{{--        }--}}
{{--        #navbar{--}}
{{--            position: fixed;--}}
{{--            width: 800px;--}}
{{--            height: 100px;--}}
{{--        }--}}
{{--        #position{--}}
{{--            margin-top: 100px;--}}
{{--            position: relative;--}}
{{--        }--}}
{{--    </style>--}}

{{--</head>--}}
{{--<body>--}}
{{--<div class="card rare-wind-gradient chat-room">--}}
{{--    <div class="card-body">--}}

{{--        <!-- Grid row -->--}}
{{--        <div class="row px-lg-2 px-2">--}}

{{--            <div class="col-md-1 col-xl-1 cpl-md-3 px-lg-auto px-0"></div>--}}
{{--            <!-- Grid column -->--}}
{{--            <div class="col-md-10 col-xl-10 cpl-md-3 px-lg-auto px-0">--}}

{{--                <div class="chat-message">--}}
{{--                    <nav  id="navbar" style="height: 120px; background-color: #17a2b8;">--}}
{{--                        <a class="d-flex justify-content-lg-center">--}}
{{--                            <div>--}}
{{--                                <img src="https://tse3.mm.bing.net/th?id=OIP.giAAw4v-belo6MWhVDGHiAHaFj&pid=Api&P=0&w=241&h=182" alt="avatar"--}}
{{--                                     class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1"--}}
{{--                                     style="width:120px; height: 120px">--}}
{{--                            </div>--}}
{{--                            <div class="text-small justify-content-center">--}}
{{--                                <strong>Beathris}</strong>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                    </nav>--}}

{{--                    <ul class="list-unstyled chat-1 scrollbar-light-blue" id="position">--}}
{{--                        @foreach($pesan as $p)--}}
{{--                            <li class="d-flex mb-2">--}}
{{--                                <div class="card text-black" style="width: 100rem; align-items: end; background-color: #c8cbcf">--}}
{{--                                    <div class="card-body">--}}
{{--                                        <p class="pesan">--}}
{{--                                            qwerytsarcyavewtybhrwy--}}
{{--                                        </p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--            <!-- Grid column -->--}}
{{--            <div class="col-md-1 col-xl-1 cpl-md-3 px-lg-auto px-0"></div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</div>--}}

{{--<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"--}}
{{--        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"--}}
{{--        crossorigin="anonymous"></script>--}}
{{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"--}}
{{--        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"--}}
{{--        crossorigin="anonymous"></script>--}}

{{--</body>--}}
{{--</html>--}}


