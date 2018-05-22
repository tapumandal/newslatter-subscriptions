<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

          <meta name="viewport" content="width=device-width, initial-scale=1">

          {{-- For Modal --}}
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          {{-- For Modal --}}

        <title>Newslatter Subscription</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->

        {{-- Custom Js Files--}}

        <script src="{{ asset('js/custom.js') }}"></script>
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            h4.modal-title {
                color: black;
                font-weight: bold;
            }
            .modal-footer{
                border: none;
            }
        </style>
    </head>
    <body>







        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">


                <!-- Newslatter Subscription Modal -->
                <div class="modal fade" id="newsLatterSubsModal" role="dialog">
                    <div class="modal-dialog">

                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                          <h4 class="modal-title">Subscribe to get the exciting updates</h4>
                          <span class="newslattersubswarrning"></span>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                  <input style="color: black;" type="email" id="subscribed_email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default email_subscribed" data-dismiss="modal">Subscribe</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">X</button>
                        </div>
                      </div>
                    </div>
                </div>
                  <!-- Newslatter Subscription Modal -->

                <div class="title m-b-md">
                    Newslatter Subscription
                </div>

                <div class="links">
                    <a href="http://tapumandal.me">Visit My Site</a>
                    <a href="https://github.com/tapumandal">Find Me @ Github </a>
                    <a href="">online.tapu@gmail.com</a>
                </div>

                <div class="links" style="padding-top: 10px;">
                    <button type="button" class="" style="padding: 8px; color:white; border: 1px solid gray; border-radius: 5px; background-color:gray;" data-toggle="modal" data-target="#newsLatterSubsModal">Open Modal</button>
                </div>

            </div>
        </div>
    </body>
</html>
