<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Counseling Hour Management</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/template/meterial.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->

    </head>
    <body>

         


            <div class=" container-fluid">
                <div class="backgradiant">
                    <img class="logo" src="{{ asset('css/pictures/logo.png') }}" rel="stylesheet">
                    <nav class="navbar">

                        <ul >
                            @if (Route::has('login'))

                        @auth
                        @if(auth()->user()->userType == 'faculty')
                        
                        <form action="{{Route('faculty.home')}}" method="get">
                        <input type="submit" class="btn btn-primary" value="FacultyHome">
                        </form>
                        @else
                        <a  class="btn btn-primary "href="{{ url('/home') }}"></a>
                        @endif
                         @else
                         <li><a   class="login" href="{{ route('login') }}">LOGIN</a></li>

                        @if (Route::has('register'))
                        <li > <a class="signup" href="{{ route('register') }}">SIGNUP</a></li>
                        @endif
                         @endauth

                        @endif


                        </ul>

                    </nav>
                    <div class="row" >
                        <div class="col-sm-3 col-md-3 "></div>
                        
                        <div  class=" head col-sm-6 col-md-6 ">
                            <h1 class="heading" style="margin-top:1rem" >
                                    COUNSELING PORTAL
                            </h1>

                        
                        </div>
                        <div class="col-sm-3 col-md-3 "></div>
                    </div>
                        <!-- First picture and card-->
                    <div class="row first">
                        <div class="col-sm-6 ">

                                <img  class="sadman" src="{{ asset('css/pictures/sadface.svg') }}">


                        </div>
                        <div class="col-sm-6 ">
                            <div class="card-body card1">
                                <h2> Feeling Confused...!!
                                </h2>
                                <p>
                                    Don’t be confused at any topic anymore.
                                        Book a counseling meeting and enjoy your
                                        study life
                                </p>

                            </div>
                        </div>

                    </div>
                      <!-- middle arrow-->
                    <div class="row">
                        <div class="col-sm-3  col-md-3 "></div>
                        <div class="col-sm-6 col-md-6 ">
                            <img  class="arrow" src="{{ asset('css/pictures/arrow.svg') }}">
                        </div>
                        <div class="col-sm-3  col-md-3 "></div>


                    </div>
                     <!-- 2nd picture and card-->
                    <div class="row">
                        <div class="col-sm-6  ">

                            <div class="card-body  card2">
                                <h2>Counseling is the key to clearity..!
                                </h2>
                                <p>
                                    Our Teachers are willing to help you in
                                    every step all you need to do is book a meeting with them .
                                </p>

                            </div>

                        </div>
                        <div class="col-sm-6  ">
                            <img  class="happyman" src="{{ asset('css/pictures/happy-student.svg') }}">


                        </div>

                    </div>
                </div>



            </div>



    </body>
</html>
