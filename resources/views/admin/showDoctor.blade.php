<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')

        <!-- Navbar -->
        @include('admin.navbar')


        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding  : 100px;">
                <table>
                    <tr style="background-color: black; color: white;">
                        <th style="padding: 15px;">Doctor Name</th>
                        <th style="padding: 15px;">Phone</th>
                        <th style="padding: 15px;">Speciality</th>
                        <th style="padding: 15px;">Room No</th>
                        <th style="padding: 15px;">Image</th>
                        <th style="padding: 15px;">Delete</th>
                        <th style="padding: 15px;">Update</th>
                    </tr>

                    @foreach ($data as $doctor)
                    <tr align="center" style="background-color: grey;">
                        <td style="color: black;">{{ $doctor->name }}</td>
                        <td style="color: black;">{{ $doctor->phone }}</td>
                        <td style="color: black;">{{ $doctor->speciality }}</td>
                        <td style="color: black;">{{ $doctor->room }}</td>
                        <td><img height="100px" width="100px" src="doctorimage/{{ $doctor->image }}"></td>
                        <td><a onclick="return confirm('Are you sure totdelete this?')" href="{{ url('delete_doctor',$doctor->id) }}" class="btn btn-danger">Delete</a></td>
                        <td><a href="{{ url('update_doctor',$doctor->id) }}" class="btn btn-primary">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>

    <!-- Scripts files -->
    @include('admin.script')



</body>

</html>