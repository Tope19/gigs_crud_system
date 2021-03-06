@extends('dashboard.layout.app')
@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="float-right page-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Gigs</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
                <h5 class="page-title">Dashboard</h5>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cube-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">New Gigs</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +11% </span> <span class="ml-2 text-muted">From previous period</span>
                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 1325</p>
                            </div>
                            <h5 class="m-0">1456<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-account-network float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">New Companies</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                                <span class="badge badge-success"> +22% </span> <span class="ml-2 text-muted">From previous period</span>
                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 3426</p>
                            </div>
                            <h5 class="m-0">3567<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-tag-text-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Average Wages</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-danger"> -02% </span> <span class="ml-2 text-muted">From previous period</span>
                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 15.8</p>
                            </div>
                            <h5 class="m-0">14.5<i class="mdi mdi-arrow-down text-danger ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon">
                            <i class="mdi mdi-cart-outline float-right mb-0"></i>
                        </div>
                        <h6 class="text-uppercase mb-0">Total Wages</h6>
                    </div>
                    <div class="card-body">
                        <div class="border-bottom pb-4">
                            <span class="badge badge-success"> +10% </span> <span class="ml-2 text-muted">From previous period</span>
                        </div>
                        <div class="mt-4 text-muted">
                            <div class="float-right">
                                <p class="m-0">Last : 14256</p>
                            </div>
                            <h5 class="m-0">15234<i class="mdi mdi-arrow-up text-success ml-2"></i></h5>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


    </div><!-- container fluid -->
@endsection
