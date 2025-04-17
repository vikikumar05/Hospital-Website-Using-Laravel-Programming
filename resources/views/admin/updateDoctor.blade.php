<!DOCTYPE html>
<html lang="en">

<head>

    <base href="/public">
    @include('admin.css')

    <style type="text/css">
        label {
            display: inline-block;
            width: 100px;
        }
    </style>


</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')


        <!-- Navbar -->
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">

            <!-- @if(session()->has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    {{ session()->get('message') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>

            @endif -->


            <div class="container" align="center" style="padding-top: 80px">

                <form action="{{ url('editdoctor', $datas->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 10px;">
                        <label>Doctor Name: </label>
                        <input type="text" name="name" value="{{ $datas->name }}" style="color: black;">
                    </div>

                    <div style="padding: 10px;">
                        <label>Phone: </label>
                        <input type="text" name="phone" value="{{ $datas->phone }}" style="color: black;">
                    </div>

                    <div style="padding: 10px;">
                        <label>Speciality: </label>
                        <input type="text" name="speciality" value="{{ $datas->speciality }}" style="color: black;">
                    </div>

                    <div style="padding: 10px;">
                        <label>Room: </label>
                        <input type="text" name="room" value="{{ $datas->room }}" style="color: black;">
                    </div>

                    <div style="padding: 10px;">
                        <label>Old Image:</label>
                        <img src="doctorimage/{{ $datas->image }}" height="100" width="100" alt="image">
                    </div>

                    <div>
                        <label>Change Image: </label>
                        <input type="file" name="file" style="color: black;">
                    </div>

                    <div>
                        <input type="submit" name="submit" class="btn btn-primary" value="Update Doctor"
                            style="padding: 10px; margin-top: 15px;">
                    </div>

                </form>
            </div>


        </div>


    </div>

    <!-- Scripts files -->
    @include('admin.script')



</body>

</html>