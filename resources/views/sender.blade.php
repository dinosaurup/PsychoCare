<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
          crossorigin="anonymous">
    <!-- Chat CSS -->
    <link href="css/addons-pro/chat.css" rel="stylesheet">
    <!-- Chat CSS - minified-->
    <link href="css/addons-pro/chat.min.css" rel="stylesheet">
    <style>
        .card.chat-room .members-panel-1,
        .card.chat-room .chat-1 {
            position: relative;
            overflow-y: scroll;
        }

        .card.chat-room .members-panel-1 {
            height: 570px;
        }

        .card.chat-room .chat-1 {
            height: 475px;
        }

        .card.chat-room .friend-list li {
            border-bottom: 1px solid #e0e0e0;
        }

        .card.chat-room .friend-list li:last-of-type {
            border-bottom: none;
        }

        .scrollbar-light-blue::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        .scrollbar-light-blue::-webkit-scrollbar {
            width: 12px;
            background-color: #F5F5F5;
        }

        .scrollbar-light-blue::-webkit-scrollbar-thumb {
            border-radius: 10px;
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
            background-color: #82B1FF;
        }

        .rare-wind-gradient {
            background-image: -webkit-gradient(linear, left bottom, left top, from(#a8edea), to(#fed6e3));
            background-image: -webkit-linear-gradient(bottom, #a8edea 0%, #fed6e3 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
        }

        .card-body {
            top: 10px;
        }

        .kirim {
            border-radius: 12px;
            width: 120px;
            height: 50px;
            background-color: #17a2b8;
        }

        .position-right {
            left: 1100px;
        }

        .position-left {
            right: 1100px;
        }

        /*background-color: #82B1FF;*/
        /*}*/
    </style>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('1be904462b8fc1e25e70', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('form-submitted', function (data) {
            // alert(JSON.stringify(data));
            if (data.room_chat === $('#room_id').val() && data.to === $('#user_id').val()) {
                // code for notification put in this
                $('#position').append(`
                    <div>
                        <div class="card text-black mb-2" style="max-width: 30rem; background-color: #9fcdff;">
                            <div class="card-body">
                                 <p class="pesan">${$("#chat").val()}
                                 </p>
                            </div>
                        </div>
                    </div>`);
            }
        });

    </script>

</head>
<body>
<div class="card rare-wind-gradient chat-room">
    <div class="card-body">

        <!-- Grid row -->
        <div class="row px-lg-2 px-2">

            <div class="col-md-1 col-xl-1 cpl-md-3 px-lg-auto px-0"></div>
            <!-- Grid column -->
            <div class="col-md-10 col-xl-10 cpl-md-3 px-lg-auto px-0">

                <div class="chat-message">
                    <nav style="height: 100px; background-color: #17a2b8;">
                        <a class="d-flex justify-content-lg-center">
                            <table>
                                <tr>
                                    <td><img src="{{url(($to->foto))}}" alt="avatar"
                                             class="avatar rounded-circle d-flex align-self-center mr-2 z-depth-1"
                                             style="width:100px; height: 100px"></td>
                                    <td>
                                        <strong>{{$to->nama}}</strong>
                                    </td>
                                </tr>
                            </table>
                        </a>
                    </nav>

                    <div class="list-unstyled chat-1 scrollbar-light-blue" style="display: grid" id="position">
                        @foreach($pesan as $p)
                            @if($p->from == $id)
                                <div>
                                    <div class="card text-black mb-2"
                                         style="max-width: 30rem; background-color: #9fcdff; float: right;">
                                        <div class="card-body">
                                            <p class="pesan">
                                                {{$p->pesan}} from {{$p->from}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div>
                                    <div class="card text-black mb-2" style="max-width: 30rem; background-color: #9fcdff;">
                                        <div class="card-body">
                                            <p class="pesan">
                                                {{$p->pesan}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div>
                        <div class="white">
                            <div class="form-group basic-textarea">
                                @csrf
                                <input type="hidden" name="user_id" id="user_id" value="{{$id}}">
                                <input type="hidden" name="room_id" id="room_id" value="{{$room->id}}">
                                <textarea class="form-control pl-2 my-0" name="chat" id="chat" rows="3"
                                          placeholder="Type your message here..."></textarea>
                            </div>
                        </div>
                        <center>
                            <button type="button" id="kirim" class="kirim" style="top:1px">Send</button>
                        </center>
                    </div>
                </div>

            </div>
            <!-- Grid column -->
            <div class="col-md-1 col-xl-1 cpl-md-3 px-lg-auto px-0"></div>

        </div>

    </div>
</div>

<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
<script>
    $(".kirim").on("click", () => {
        let chat = $("#chat").val();
        $('#position').append(`
            <div>
                <div class="card text-black mb-2" style="max-width: 30rem; background-color: #9fcdff; float: right">
                    <div class="card-body">
                         <p class="pesan">${chat}
                         </p>
                    </div>
                </div>
            </div>`);
        $('#chat').val('');
        $.ajax({
            type: 'POST',
            url: '/sender',
            data: {
                '_token': $('input[name=_token]').val(),
                'chat': chat,
                'user_id': $("#user_id").val(),
                'room_id': $("#room_id").val()
            },
            success: function (data) {
                console.log("data already save!")
            }
        });
        console.log(data);
    });
</script>
</body>
</html>


