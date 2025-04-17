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


            <div align="center" style="padding-top: 100px;">
                <table>
                    <tr style="background-color: black; color: white;">
                        <th style="padding: 15px;">Client Name</th>
                        <th style="padding: 15px;">Email</th>
                        <th style="padding: 15px;">Phone</th>
                        <th style="padding: 15px;">Doctor Name</th>
                        <th style="padding: 15px;">Date</th>
                        <th style="padding: 15px;">Message</th>
                        <th style="padding: 15px;">Status</th>
                        <th style="padding: 15px;">Approve</th>
                        <th style="padding: 15px;">Cancel</th>
                        <th style="padding: 15px;">Send Mail</th>
                    </tr>


                    @foreach ($data as $appoint)
                    <tr align="center" style="background-color: grey;">
                        <td style="color: black;">{{ $appoint->name }}</td>
                        <td style="color: black;">{{ $appoint->email }}</td>
                        <td style="color: black;">{{ $appoint->phone }}</td>
                        <td style="color: black;">{{ $appoint->doctor }}</td>
                        <td style="color: black;">{{ $appoint->date }}</td>
                        <td style="color: black;">{{ $appoint->message }}</td>
                        <td style="color: black;">{{ $appoint->status }}</td>
                        <td style="color: black;">
                            <a class="btn btn-success" href="{{ url('approved', $appoint->id) }}">Approved</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="{{ url('cancelled', $appoint->id) }}">Cancel</a>
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('emailview', $appoint->id) }}">Send Mail</a>
                        </td>
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