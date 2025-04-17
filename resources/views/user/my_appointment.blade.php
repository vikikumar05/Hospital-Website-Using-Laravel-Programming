<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>One Health - Medical Center</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/redirect') }}"><span class="text-primary">One</span>-Health</a>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/redirect') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/redirect#doc_tor') }}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/redirect#latest') }}">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/redirect#contact') }}">Book Appointment</a>
                        </li>

                        <!-- For login and logout -->
                        @if(Route::has('login'))
                            @auth

                                <li class="nav-item">
                                    <a class="nav-link" style="background-color: lightgray; color: black;"
                                        href="{{url('myappointment')}}">My Appointment</a>
                                </li>


                                <x-app-layout>
                                </x-app-layout>

                            @else
                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                                </li>

                                <li class="nav-item">
                                    <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                                </li>

                            @endauth
                        @endif


                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert">

            {{ session()->get('message') }}

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>

    @endif

    <br>


    <div align="center" style="padding: 50px;">
        <table>
            <tr style="background-color: grey;">
                <th style="padding:10px; font-size: 20px; color: black;">Doctor Name </th>
                <th style="padding:10px; font-size: 20px; color: black;">Date </th>
                <th style="padding:10px; font-size: 20px; color: black;">Message </th>
                <th style="padding:10px; font-size: 20px; color: black;">Status </th>
                <th style="padding:10px; font-size: 20px; color: black;">Cancel Appointment </th>
            </tr>

            @foreach ($appoint as $appoints)

                <tr style="background-color: lightgrey; color: black;" align="center">
                    <td style="padding:10px; font-size: 20px; color: black;">{{ $appoints->doctor }}</td>
                    <td style="padding:10px; font-size: 20px; color: black;">{{ $appoints->date }}</td>
                    <td style="padding:10px; font-size: 20px; color: black;">{{ $appoints->message }}</td>
                    <td style="padding:10px; font-size: 20px; color: black;">{{ $appoints->status }}</td>
                    <td><a class="bt btn-danger" onclick="return confirm('Are you sure to delete this appointment.')"
                            href="{{ url('cancel_appoint', $appoints->id) }}">Cancel</a></td>
                </tr>

            @endforeach

        </table>


    </div>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>