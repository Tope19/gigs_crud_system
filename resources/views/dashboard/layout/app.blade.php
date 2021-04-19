<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Dashboard</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="ThemeDesign" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="{{ $admin_source }}/assets/plugins/morris/morris.css">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

        <!-- Plugins css -->
        <link href="{{ $admin_source }}/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <link href="{{ $admin_source }}/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="{{ $admin_source }}/assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" />

        <!-- DataTables -->
        <link href="{{ $admin_source }}/assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ $admin_source }}/assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{ $admin_source }}/assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <link href="{{ $admin_source }}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="{{ $admin_source }}/assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="{{ $admin_source }}/assets/css/style.css" rel="stylesheet" type="text/css">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
        @toastr_css

    </head>
    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <div class="left-side-logo d-block d-lg-none">
                    <div class="text-center">
                        <a href="{{ url('/')}}" class="logo">Gigs Center</a>
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ route('home') }}" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admin.gigs.index') }}" class="waves-effect"><i class="dripicons-user-group"></i> <span> Gigs </span> </span></a>

                            </li>

                            <li>
                                <a href="{{ route('admin.companies.index') }}" class="waves-effect"><i class="dripicons-store"></i> <span> Company </span> </span></a>

                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="dripicons-user"></i> <span> Account </span> </span></a>

                            </li>


                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>
            <!-- Left Sidebar End -->

            <!-- Start right Content here -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">

                    <!-- Top Bar Start -->
                    <div class="topbar">

                        <div class="topbar-left	d-none d-lg-block">
                            <div class="text-center">

                                <a href="#" class="logo">Gigs</a>
                            </div>
                        </div>

                        <nav class="navbar-custom">

                            <ul class="list-inline float-right mb-0">
                                <li class="list-inline-item notification-list dropdown d-none d-sm-inline-block">
                                    <form role="search" class="app-search">
                                        <div class="form-group mb-0">
                                            <input type="text" class="form-control" placeholder="Search..">
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-email-outline noti-icon"></i>
                                        <span class="badge badge-danger badge-pill noti-icon-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <span class="badge badge-danger float-right">367</span>
                                            <h5>Messages</h5>
                                        </div>
                                        


                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-success badge-pill noti-icon-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <span class="badge badge-danger float-right">84</span>
                                            <h5>Notification</h5>
                                        </div>



                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            View All
                                        </a>

                                    </div>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                       aria-haspopup="false" aria-expanded="false">
                                        <img src="{{ $admin_source }}/assets/images/users/user-1.jpg" alt="user" class="rounded-circle">
                                        <b style="color: black">{{ Auth::user()->name }} </b>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                        <a class="dropdown-item" href="{{ route('logout') }}"><i class="mdi mdi-logout m-r-5 text-muted"></i> Logout</a>
                                    </div>
                                </li>

                            </ul>

                            <ul class="list-inline menu-left mb-0">
                                <li class="list-inline-item">
                                    <button type="button" class="button-menu-mobile open-left waves-effect">
                                        <i class="ion-navicon"></i>
                                    </button>
                                </li>
                            </ul>

                            <div class="clearfix"></div>

                        </nav>

                    </div>
                    <!-- Top Bar End -->

                    <div class="page-content-wrapper ">

                        <div class="row">
                            <div class="col-sm-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <i class="material-icons">close</i>
                                        </button>
                                        <span>{{$error }}</span>
                                @endforeach
                            </div>
                        </div>

                        @yield('content')

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    Â© 2018 <b>Drixo</b> <span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ $admin_source }}/assets/js/jquery.min.js"></script>
        <script src="{{ $admin_source }}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{ $admin_source }}/assets/js/modernizr.min.js"></script>
        <script src="{{ $admin_source }}/assets/js/detect.js"></script>
        <script src="{{ $admin_source }}/assets/js/fastclick.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.slimscroll.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.blockUI.js"></script>
        <script src="{{ $admin_source }}/assets/js/waves.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.nicescroll.js"></script>
        <script src="{{ $admin_source }}/assets/js/jquery.scrollTo.min.js"></script>

        <!-- skycons -->
        <script src="{{ $admin_source }}/assets/plugins/skycons/skycons.min.js"></script>

        <!-- skycons -->
        <script src="{{ $admin_source }}/assets/plugins/peity/jquery.peity.min.js"></script>

        <!--Morris Chart-->
        <script src="{{ $admin_source }}/assets/plugins/morris/morris.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/raphael/raphael-min.js"></script>

        <!-- dashboard -->
        <script src="{{ $admin_source }}/assets/pages/dashboard.js"></script>

        <!-- Required datatable js -->
        <script src="{{ $admin_source }}/assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="{{ $admin_source }}/assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/jszip.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="{{ $admin_source }}/assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Plugins js -->
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="{{ $admin_source }}/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script>

        <!-- Plugins Init js -->
        <script src="{{ $admin_source }}/assets/pages/form-advanced.js"></script>

        <!-- Datatable init js -->
        <script src="{{ $admin_source }}/assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="{{ $admin_source }}/assets/js/app.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>

        <script>
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": '{{ csrf_token() }}',
                },
            });

            $('#country_id').change(function(){
                var url = $(this).find('option:selected').attr('aria-url');
                let state_list = [];
                $.ajax({
                    url: url,
                    type: 'GET',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);

                        state_list = [];
                        jQuery.each(data , function(index){
                            let state = data[index];
                            state_list.push('<option value="'+ state.id +'">'+ state.name +'</option>');
                        });
                        $('#state_id').html(state_list)

                    }

                });
            })
        </script>

        <script>
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": '{{ csrf_token() }}',
                },
            });

            $('#country_id_add').change(function(){
                var url = $(this).find('option:selected').attr('aria-url');
                let state_list_add = [];
                $.ajax({
                    url: url,
                    type: 'GET',
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        console.log(data);

                        state_list_add = [];
                        jQuery.each(data , function(index){
                            let state_add = data[index];
                            state_list_add.push('<option value="'+ state_add.id +'">'+ state_add.name +'</option>');
                        });
                        $('#state_id_add').html(state_list_add)

                    }

                });
            })
        </script>
        @toastr_js

    </body>
    @toastr_render
</html>
