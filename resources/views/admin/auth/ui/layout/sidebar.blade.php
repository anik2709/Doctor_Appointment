<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- LOGO -->
        <a href="index-2.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset("admin/assets/images/logo.png")}}" alt="" height="16">
                    </span>
            <span class="logo-sm">
                        <img src="{{asset("admin/assets/images/logo_sm.png")}}" alt="" height="16">
                    </span>
        </a>

        <!-- LOGO -->
        <a href="index-2.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset("admin/assets/images/logo-dark.png")}}" alt="" height="16">
                    </span>
            <span class="logo-sm">
                        <img src="{{asset("admin/assets/images/logo_sm_dark.png")}}" alt="" height="16">
                    </span>
        </a>

        <div class="h-100" id="leftside-menu-container" data-simplebar>
            @if(Auth::user()->user_roll === 'admin')


            <!--- Sidemenu -->
               <ul class="side-nav">


                    {{--                <li class="side-nav-title side-nav-item">Navigation</li>--}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDashboards" aria-expanded="false"
                           aria-controls="sidebarDashboards" class="side-nav-link">
                            <i class="uil-home-alt"></i>
                            <span class="badge bg-success float-end"></span>
                            <span> Dashboards </span>
                        </a>

                        {{--          this is dashboard side-nav-bar

                         <div class="collapse" id="sidebarDashboards">--}}
                        {{--                        <ul class="side-nav-second-level">--}}
                        {{--                            <li>--}}
                        {{--                                <a href="dashboard-analytics.html">Analytics</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="index-2.html">Ecommerce</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="dashboard-projects.html">Projects</a>--}}
                        {{--                            </li>--}}
                        {{--                            <li>--}}
                        {{--                                <a href="dashboard-wallet.html">E-Wallet <span class="badge rounded bg-danger font-10 float-end">New</span></a>--}}
                        {{--                            </li>--}}
                        {{--                        </ul>--}}
                        {{--                    </div>--}}
                    </li>



                    {{--     Blog Part start    --}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarBlogs" aria-expanded="false"
                           aria-controls="sidebarBlogs" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Blogs </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarBlogs">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('post.index')}}">Add new blog</a>
                                </li>
                                <li>
                                    <a href="{{route('post.blog_list')}}">All blog List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--     Blog Part end    --}}


                    {{--     Testimonial Part start    --}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarTestimonials" aria-expanded="false"
                           aria-controls="sidebarBlogs" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Testimonial </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarTestimonials">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('testimonial.add')}}">Add new testimonial</a>
                                </li>
                                <li>
                                    <a href="{{route('testimonial.list')}}">All testimonial List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--     Testimonial Part end    --}}


                    {{--     Service Part start    --}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarServices" aria-expanded="false"
                           aria-controls="sidebarBlogs" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Service </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarServices">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('service.add')}}">Add new service</a>
                                </li>
                                <li>
                                    <a href="{{route('service.list')}}">All service List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--     Service Part end    --}}


                    {{--     Partner Part start    --}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarPartners" aria-expanded="false"
                           aria-controls="sidebarPartners" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Partner </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarPartners">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('partner.add')}}">Add new partner</a>
                                </li>
                                <li>
                                    <a href="{{route('partner.list')}}">All partner List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--     Partner Part end    --}}


                    {{--     Dr. information Part start    --}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarDoctors" aria-expanded="false"
                           aria-controls="sidebarBlogs" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Doctor </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarDoctors">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('doctor.add')}}">Add Doctor Information</a>
                                </li>
                                {{--                            <li>--}}
                                {{--                                <a href="{{route('doctor_activity.add')}}">Add Doctor Activity and Presentation</a>--}}
                                {{--                            </li>--}}
                                {{--                            <li>--}}
                                {{--                                <a href="{{route('doctor_qualification.add')}}">Add Doctor's Academic Qualification</a>--}}
                                {{--                            </li>--}}
                                {{--                            <li>--}}
                                {{--                                <a href="{{route('doctor_award.add')}}">Add Doctor's Academic Award & Distinction</a>--}}
                                {{--                            </li>--}}
                                <li>
                                    <a href="{{route('doctor.list')}}">All Doctor List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    {{--     Dr. information Part end    --}}



                    {{--      Online Appointment Application List Start--}}

                    <li class="side-nav-item">
                        <a data-bs-toggle="collapse" href="#sidebarOnlineAppointmentApplicationList"
                           aria-expanded="false" aria-controls="sidebarBlogs" class="side-nav-link">
                            <i class="uil-store"></i>
                            <span> Online Appointment Application List </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarOnlineAppointmentApplicationList">
                            <ul class="side-nav-second-level">
                                <li>
                                    <a href="{{route('online_appointment.list')}}">Appointment List</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                   {{--      Online Appointment Application List End--}}


                   {{--      Online Appointment Application List Start--}}

                   <li class="side-nav-item">
                       <a data-bs-toggle="collapse" href="#sidebarCategory"
                          aria-expanded="false" aria-controls="sidebarBlogs" class="side-nav-link">
                           <i class="uil-store"></i>
                           <span> Category </span>
                           <span class="menu-arrow"></span>
                       </a>
                       <div class="collapse" id="sidebarCategory">
                           <ul class="side-nav-second-level">
                               <li>
                                   <a href="{{route('category.add')}}">Add Category</a>
                               </li>
                               <li>
                                   <a href="{{route('category.list')}}">Category List</a>
                               </li>
                           </ul>
                       </div>
                   </li>

                   {{--      Online Appointment Application List End--}}
               </ul>
            @endif

        </div>
        <!-- Sidebar -left -->

    </div>
    <!-- Left Sidebar End -->


    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topbar-menu float-end mb-0">
                    <li class="dropdown notification-list d-lg-none">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="drip-icons-search not-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                            <form class="p-3">
                                <input type="text" class="form-control" placeholder="Search ..."
                                       aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>
                    <li class="dropdown notification-list topbar-dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset("admin/assets/images/flags/us.jpg")}}" alt="user-image"
                                 class="me-0 me-sm-1" height="12">
                            <span class="align-middle d-none d-sm-inline-block">English</span> <i
                                class="mdi mdi-chevron-down d-none d-sm-inline-block align-middle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu">

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset("admin/assets/images/flags/germany.jpg")}}" alt="user-image"
                                     class="me-1" height="12"> <span class="align-middle">German</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset("admin/assets/images/flags/italy.jpg")}}" alt="user-image"
                                     class="me-1" height="12"> <span class="align-middle">Italian</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset("admin/assets/images/flags/spain.jpg")}}" alt="user-image"
                                     class="me-1" height="12"> <span class="align-middle">Spanish</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <img src="{{asset("admin/assets/images/flags/russia.jpg")}}" alt="user-image"
                                     class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-bell noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title px-3">
                                <h5 class="m-0">
                                            <span class="float-end">
                                                <a href="javascript: void(0);" class="text-dark">
                                                    <small>Clear All</small>
                                                </a>
                                            </span>Notification
                                </h5>
                            </div>

                            <div class="px-3" style="max-height: 300px;" data-simplebar>

                                <h5 class="text-muted font-13 fw-normal mt-0">Today</h5>
                                <!-- item-->
                                <a href="javascript:void(0);"
                                   class="dropdown-item p-0 notify-item card unread-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp <small
                                                        class="fw-normal text-muted ms-1">1 min ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>


                                <!-- item-->
                                <a href="javascript:void(0);"
                                   class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-info">
                                                    <i class="mdi mdi-account-plus"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Admin <small
                                                        class="fw-normal text-muted ms-1">1 hours ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">New user registered</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">Yesterday</h5>
                                <!-- item-->


                                <a href="javascript:void(0);"
                                   class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="{{asset("admin/assets/images/users/avatar-2.jpg")}}"
                                                         class="img-fluid rounded-circle" alt=""/>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Cristina Pride <small
                                                        class="fw-normal text-muted ms-1">1 day ago</small></h5>
                                                <small class="noti-item-subtitle text-muted">Hi, How are you? What about
                                                    our next meeting</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <h5 class="text-muted font-13 fw-normal mt-0">30 Dec 2021</h5>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                   class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon bg-primary">
                                                    <i class="mdi mdi-comment-account-outline"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Datacorp</h5>
                                                <small class="noti-item-subtitle text-muted">Caleb Flakelar commented on
                                                    Admin</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);"
                                   class="dropdown-item p-0 notify-item card read-noti shadow-none mb-2">
                                    <div class="card-body">
                                        <span class="float-end noti-close-btn text-muted"><i class="mdi mdi-close"></i></span>
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0">
                                                <div class="notify-icon">
                                                    <img src="{{asset("admin/assets/images/users/avatar-4.jpg")}}"
                                                         class="img-fluid rounded-circle" alt=""/>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 text-truncate ms-2">
                                                <h5 class="noti-item-title fw-semibold font-14">Karen Robinson</h5>
                                                <small class="noti-item-subtitle text-muted">Wow ! this admin looks good
                                                    and awesome design</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <div class="text-center">
                                    <i class="mdi mdi-dots-circle mdi-spin text-muted h3 mt-0"></i>
                                </div>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);"
                               class="dropdown-item text-center text-primary notify-item border-top border-light py-2">
                                View All
                            </a>

                        </div>
                    </li>

                    <li class="dropdown notification-list d-none d-sm-inline-block">
                        <a class="nav-link dropdown-toggle arrow-none" data-bs-toggle="dropdown" href="#" role="button"
                           aria-haspopup="false" aria-expanded="false">
                            <i class="dripicons-view-apps noti-icon"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated dropdown-lg p-0">

                            <div class="p-2">
                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset("admin/assets/images/brands/slack.png")}}" alt="slack">
                                            <span>Slack</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset("admin/assets/images/brands/github.png")}}" alt="Github">
                                            <span>GitHub</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset("admin/assets/images/brands/dribbble.png")}}"
                                                 alt="dribbble">
                                            <span>Dribbble</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="row g-0">
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset("admin/assets/images/brands/bitbucket.png")}}"
                                                 alt="bitbucket">
                                            <span>Bitbucket</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset("admin/assets/images/brands/dropbox.png")}}"
                                                 alt="dropbox">
                                            <span>Dropbox</span>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="dropdown-icon-item" href="#">
                                            <img src="{{asset("admin/assets/images/brands/g-suite.png")}}"
                                                 alt="G Suite">
                                            <span>G Suite</span>
                                        </a>
                                    </div>
                                </div> <!-- end row-->
                            </div>

                        </div>
                    </li>

                    <li class="notification-list">
                        <a class="nav-link end-bar-toggle" href="javascript: void(0);">
                            <i class="dripicons-gear noti-icon"></i>
                        </a>
                    </li>

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user arrow-none me-0" data-bs-toggle="dropdown" href="#"
                           role="button" aria-haspopup="false"
                           aria-expanded="false">
                                    <span class="account-user-avatar">
                                        <img src="{{asset("admin/assets/images/users/avatar-1.jpg")}}" alt="user-image"
                                             class="rounded-circle">
                                    </span>
                                    <span>
                                        <span class="account-user-name">{{\Auth::user()->full_name}}</span>
                                        <span class="account-position">{{\Auth::user()->user_roll}}</span>
                                    </span>
                        </a>
                        <div
                            class="dropdown-menu dropdown-menu-end dropdown-menu-animated topbar-dropdown-menu profile-dropdown">
                            <!-- item-->
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-circle me-1"></i>
                                <span>My Account</span>
                            </a>

                            <!-- item-->
                            <a href="{{route('contact_us.add')}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-edit me-1"></i>
                                <span>Settings</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lifebuoy me-1"></i>
                                <span>Support</span>
                            </a>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-lock-outline me-1"></i>
                                <span>Lock Screen</span>
                            </a>

                            <!-- item-->
                            <a href="{{route('logout')}}" class="dropdown-item notify-item" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                <i class="mdi mdi-logout me-1"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>
                <button class="button-menu-mobile open-left">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="app-search dropdown d-none d-lg-block">
                    <form>
                        <div class="input-group">
                            <input type="text" class="form-control dropdown-toggle" placeholder="Search..."
                                   id="top-search">
                            <span class="mdi mdi-magnify search-icon"></span>
                            <button class="input-group-text btn-primary" type="submit">Search</button>
                        </div>
                    </form>

                    {{--                    <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">--}}
                    {{--                        <!-- item-->--}}
                    {{--                        <div class="dropdown-header noti-title">--}}
                    {{--                            <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>--}}
                    {{--                        </div>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                    {{--                            <i class="uil-notes font-16 me-1"></i>--}}
                    {{--                            <span>Analytics Report</span>--}}
                    {{--                        </a>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                    {{--                            <i class="uil-life-ring font-16 me-1"></i>--}}
                    {{--                            <span>How can I help you?</span>--}}
                    {{--                        </a>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                    {{--                            <i class="uil-cog font-16 me-1"></i>--}}
                    {{--                            <span>User profile settings</span>--}}
                    {{--                        </a>--}}

                    {{--                        <!-- item-->--}}
                    {{--                        <div class="dropdown-header noti-title">--}}
                    {{--                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="notification-list">--}}
                    {{--                            <!-- item-->--}}
                    {{--                            <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                    {{--                                <div class="d-flex">--}}
                    {{--                                    <img class="d-flex me-2 rounded-circle" src="{{asset("admin/assets/images/users/avatar-2.jpg")}}" alt="Generic placeholder image" height="32">--}}
                    {{--                                    <div class="w-100">--}}
                    {{--                                        <h5 class="m-0 font-14">Erwin Brown</h5>--}}
                    {{--                                        <span class="font-12 mb-0">UI Designer</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}

                    {{--                            <!-- item-->--}}
                    {{--                            <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
                    {{--                                <div class="d-flex">--}}
                    {{--                                    <img class="d-flex me-2 rounded-circle" src="{{asset("admin/assets/images/users/avatar-5.jpg")}}" alt="Generic placeholder image" height="32">--}}
                    {{--                                    <div class="w-100">--}}
                    {{--                                        <h5 class="m-0 font-14">Jacob Deo</h5>--}}
                    {{--                                        <span class="font-12 mb-0">Developer</span>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}
                    {{--                            </a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            </div>
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <form class="d-flex">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-light" id="dash-daterange">
                                        <span class="input-group-text bg-primary border-primary text-white">
                                                    <i class="mdi mdi-calendar-range font-13"></i>
                                                </span>
                                    </div>
                                    <a href="javascript: void(0);" class="btn btn-primary ms-2">
                                        <i class="mdi mdi-autorenew"></i>
                                    </a>
                                    <a href="javascript: void(0);" class="btn btn-primary ms-1">
                                        <i class="mdi mdi-filter-variant"></i>
                                    </a>
                                </form>
                            </div>
                            <h4 class="page-title">Dashboard</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="end-bar">

            <div class="rightbar-title">
                <a href="javascript:void(0);" class="end-bar-toggle float-end">
                    <i class="dripicons-cross noti-icon"></i>
                </a>
                <h5 class="m-0">Settings</h5>
            </div>

            <div class="rightbar-content h-100" data-simplebar>

                <div class="p-3">
                    <div class="alert alert-warning" role="alert">
                        <strong>Customize </strong> the overall color scheme, sidebar menu, etc.
                    </div>

                    <!-- Settings -->
                    <h5 class="mt-3">Color Scheme</h5>
                    <hr class="mt-1"/>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="light"
                               id="light-mode-check" checked>
                        <label class="form-check-label" for="light-mode-check">Light Mode</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="color-scheme-mode" value="dark"
                               id="dark-mode-check">
                        <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                    </div>


                    <!-- Width -->
                    <h5 class="mt-4">Width</h5>
                    <hr class="mt-1"/>
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="fluid" id="fluid-check"
                               checked>
                        <label class="form-check-label" for="fluid-check">Fluid</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="width" value="boxed" id="boxed-check">
                        <label class="form-check-label" for="boxed-check">Boxed</label>
                    </div>


                    <!-- Left Sidebar-->
                    <h5 class="mt-4">Left Sidebar</h5>
                    <hr class="mt-1"/>
                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="default" id="default-check">
                        <label class="form-check-label" for="default-check">Default</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="theme" value="light" id="light-check"
                               checked>
                        <label class="form-check-label" for="light-check">Light</label>
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" name="theme" value="dark" id="dark-check">
                        <label class="form-check-label" for="dark-check">Dark</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="fixed" id="fixed-check"
                               checked>
                        <label class="form-check-label" for="fixed-check">Fixed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="condensed"
                               id="condensed-check">
                        <label class="form-check-label" for="condensed-check">Condensed</label>
                    </div>

                    <div class="form-check form-switch mb-1">
                        <input class="form-check-input" type="checkbox" name="compact" value="scrollable"
                               id="scrollable-check">
                        <label class="form-check-label" for="scrollable-check">Scrollable</label>
                    </div>

                    <div class="d-grid mt-4">
                        <button class="btn btn-primary" id="resetBtn">Reset to Default</button>

                        <a href="https://themes.getbootstrap.com/product/hyper-responsive-admin-dashboard-template/"
                           class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                    </div>
                </div> <!-- end padding-->

            </div>
        </div>

        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="{{asset("admin/assets/js/vendor.min.js")}}"></script>
        <script src="{{asset("admin/assets/js/app.min.js")}}"></script>

        <!-- third party js -->
        <script src="{{asset("admin/assets/js/vendor/apexcharts.min.js")}}"></script>
        <script src="{{asset("admin/assets/js/vendor/jquery-jvectormap-1.2.2.min.js")}}"></script>
        <script src="{{asset("admin/assets/js/vendor/jquery-jvectormap-world-mill-en.js")}}"></script>
        <!-- third party js ends -->

        <!-- demo app -->
        <script src="{{asset("admin/assets/js/pages/demo.dashboard.js")}}"></script>
        <!-- end demo js-->


