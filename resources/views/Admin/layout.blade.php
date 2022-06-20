<!DOCTYPE html>
<html lang="en">
<head>
    <link href="{{asset('theme/css/app.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="canonical" href="https://demo-basic.adminkit.io/charts-chartjs.html" />
    <title>@yield('title')</title>
    <script src="{{asset('tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
</head>
<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="#">
                    <span class="align-middle">myWellBeing</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item @if (Request::is('dashboard')) active @endif">
                        <a class="sidebar-link" href="{{ route('panel') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                         </a>
                    </li>

                    <li class="sidebar-item @if (Request::is('view-requests')) active @endif">
                        <a class="sidebar-link" href="{{url('view-requests')}}">
                            <i class="align-middle" data-feather="requests"></i> <span class="align-middle">Requests</span>
                         </a>
                    </li>

                    <li class="sidebar-item @if (Request::is('view-zipcode')) active @endif">
                        <a class="sidebar-link" href="{{url('view-zipcode')}}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Zip Codes</span>
                         </a>
                    </li>

                    <li class="sidebar-item @if (Request::is('view-therapists')) active @endif">
                        <a class="sidebar-link" href="{{url('view-therapists')}}">
                            <i class="align-middle" data-feather="requests"></i> <span class="align-middle">Therapists</span>
                         </a>
                    </li>

                    <li class="sidebar-item @if (Request::is('all-students')) active @endif">
                        <a class="sidebar-link" href="{{ route('all-students') }}">
                            <i class="align-middle" data-feather="requests"></i> <span class="align-middle">Students</span>
                        </a>
                    </li>

                    <!-- <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-attendances')}}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Atendances</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-requests')}}">
                            <i class="align-middle" data-feather="users"></i> <span class="align-middle">Leave Requests</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-languages')}}">
                            <i class="align-middle" data-feather="hash"></i> <span class="align-middle">Languages</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-lectures')}}">
                            <i class="align-middle" data-feather="film"></i> <span class="align-middle">Lectures</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-documentations')}}">
                            <i class="align-middle" data-feather="book"></i> <span class="align-middle">Documentation</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-interviews')}}">
                            <i class="align-middle" data-feather="video"></i> <span class="align-middle">Interviews</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-registrations')}}">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Registered Students</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('composer-email')}}">
                            <i class="align-middle" data-feather="mail"></i> <span class="align-middle">Send Email</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('send-sms')}}">
                            <i class="align-middle" data-feather="message-square"></i> <span class="align-middle">Send SMS</span>
                         </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('view-messages')}}">
                            <i class="align-middle" data-feather="inbox"></i> <span class="align-middle">Messages</span>
                         </a>
                    </li> --> 

                </ul>
            </div>
        </nav>

        <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                <i class="hamburger align-self-center"></i>
                </a>

                <!-- <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
                        <li class="nav-item dropdown">
                            <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                                <div class="position-relative">
                                    <i class="align-middle" data-feather="bell"></i>
                                    <span class="indicator"></span>
                                </div>
                            </a>
                           
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="user"></i>Profiles</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="lock"></i> Change Password</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                                <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                                <div class="dropdown-divider"></div>
                                <a><form action="#" method="post">@csrf <button type="submit" style="background: none;border: none"><i class="align-middle me-1" data-feather="power"></i>Log out</button></form></a>
                            </div>
                        </li>
                    </ul>
                </div> -->
            </nav>
            

<main class="content" style="padding: none !important">
<div class="container-fluid ">

    @yield("content")


    <!-- <footer class="footer">
        <div class="container-fluid">
            <div class="row text-muted">
                <div class="col-6 text-start">
                    <p class="mb-0">
                        <a class="text-muted" href="#" target="_blank"><strong>Online Layyah</strong></a> &copy;
                    </p>
                </div>
                
                <div class="col-6 text-end">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Support</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Help Center</a>
                        </li>
                        
                        <li class="list-inline-item">
                            <a class="text-muted" href="#" target="_blank">Privacy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer> -->
            <!-- End Footer -->
</div>
</main>
</div>

<script rel="stylesheet" src="{{asset('theme/js/app.js')}}"></script>
<script rel="stylesheet" src="{{asset('theme/js/search.js')}}"></script>


</body>

</html>