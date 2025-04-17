<!DOCTYPE html>
<html lang="en">

<head>
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


                <form action="{{ url('add_doc') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div style="padding:15px;">
                        <label>Doctor Name: </label>
                        <input type="text" style="color: black;" name="name" placeholder="Enter Doctor Name" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Phone: </label>
                        <input type="number" style="color: black;" name="phone" placeholder="+91 0000000000" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Doctor Speciality</label>
                        <select name="speciality" id="" style="color: black; width: 200px;">
                            <option value="">--Select--</option>
                            <option value="cardiologists ">Cardiologists(Heart) </option>
                            <option value="dermatologists ">Dermatologists(Skin) </option>
                            <option value="neurologists ">Neurologists </option>
                            <option value="ophthalmologist">Ophthalmologist(Eye)</option>
                        </select>
                    </div>

                    <div style="padding:15px;">
                        <label>Room No: </label>
                        <input type="text" style="color: black;" name="room" placeholder="Enter Room Number" required="">
                    </div>

                    <div style="padding:15px;">
                        <label>Doctor Image: </label>
                        <input type="file" name="image" required="">
                    </div>

                    <div style="padding:15px;">
                        <input type="submit" class="btn btn-success" value="Add Doctor" >
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