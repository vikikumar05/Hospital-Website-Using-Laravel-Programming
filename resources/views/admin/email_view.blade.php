<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 200px;
        }
    </style>

</head>

<body>

    <div class="container-scroller">

        <!-- sidebar -->
        @include('admin.sidebar')

        <!-- Navbar -->
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 80px;">

                @if(session()->has('message'))

                    <div class="alert alert-success alert-dismissible fade show" role="alert">

                        {{ session()->get('message') }}

                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>

                @endif


                <form action="{{ url('sendemail', $data->id) }}" method="POST">
                    @csrf

                    <div style="padding:15px;">
                        <label>Greeting </label>
                        <input type="text" style="color: black;" name="greeting" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Body </label>
                        <input type="text" style="color: black;" name="body" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Action Text</label>
                        <input type="text" style="color: black;" name="actionurl" >
                    </div>

                    <div style="padding:15px;">
                        <label>Action Url</label>
                        <input type="text" style="color: black;" name="actiontext" >
                    </div>

                    <div style="padding:15px;">
                        <label>End Part</label>
                        <input type="text" style="color: black;" name="endpart" required="">
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success" value="Send">
                    </div>

                </form>
            </div>
        </div>

        <!-- Scripts files -->
        @include('admin.script')

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    </div>

</body>

</html>