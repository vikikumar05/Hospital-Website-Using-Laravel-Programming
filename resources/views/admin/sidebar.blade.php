<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="index.html" style="color: white;">One-Health</a>
        <a class="sidebar-brand brand-logo-mini" href="index.html">🩺</a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="admin/assets/images/faces/face28.png" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">Viki Kumar</h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        
        <li class="nav-item menu-items">
            <a class="nav-link"
                href="{{ url('add_doctor_view') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Add Doctors</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link"
                href="{{ url('show_appointment') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">Appointment</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link"
                href="{{ url('show_doctor') }}">
                <span class="menu-icon">
                    <i class="mdi mdi-file-document-box"></i>
                </span>
                <span class="menu-title">All Doctors</span>
            </a>
        </li>

    </ul>
</nav>