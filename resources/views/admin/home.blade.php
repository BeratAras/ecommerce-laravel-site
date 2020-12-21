@extends('admin.admin_layouts')

@section('admin_content')
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
        <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="index.html">Starlight</a>
            <span class="breadcrumb-item active">Dashboard</span>
        </nav>

        <div class="sl-pagebody">

            <div class="row row-sm">
                <div class="col-sm-6 col-xl-3">
                    <div class="card pd-20 bg-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$850</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
                    <div class="card pd-20 bg-info">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Week's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$4,625</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-purple">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$11,908</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
                <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
                    <div class="card pd-20 bg-sl-primary">
                        <div class="d-flex justify-content-between align-items-center mg-b-10">
                            <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                            <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
                        </div><!-- card-header -->
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                            <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
                        </div><!-- card-body -->
                        <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                            <div>
                                <span class="tx-11 tx-white-6">Gross Sales</span>
                                <h6 class="tx-white mg-b-0">$2,210</h6>
                            </div>
                            <div>
                                <span class="tx-11 tx-white-6">Tax Return</span>
                                <h6 class="tx-white mg-b-0">$320</h6>
                            </div>
                        </div><!-- -->
                    </div><!-- card -->
                </div><!-- col-3 -->
            </div><!-- row -->

            <div class="row row-sm mg-t-20">
                <div class="col-xl-4 mg-t-20 mg-xl-t-0">
                    <div class="card widget-messages mg-t-20">
                        <div class="card-header">
                            <span>Mesajlar</span>
                            <a href=""><i class="icon ion-more"></i></a>
                        </div>
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item list-group-item-action media">
                                <img src="../img/img10.jpg" alt="">
                                <div class="media-body">
                                    <div class="msg-top">
                                        <span>Mienard B. Lumaad</span>
                                        <span>4:09am</span>
                                    </div>
                                    <p class="msg-summary">Many desktop publishing packages and web page editors now use...
                                    </p>
                                </div>
                            </a>
                        </div>
                        <div class="card-footer">
                            <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Daha Fazlası</a>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- sl-pagebody -->
        <footer class="sl-footer">
            <div class="footer-left">
                <div class="mg-b-2">Copyright &copy; 2020. Berat Aras. All Rights Reserved.</div>
            </div>
            <div class="footer-right d-flex align-items-center">
                <span class="tx-uppercase mg-r-10">Beni Takip Et:</span>
                <a target="_blank" class="pd-x-5"
                    href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i
                        class="fa fa-facebook tx-20"></i></a>
                <a target="_blank" class="pd-x-5"
                    href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i
                        class="fa fa-twitter tx-20"></i></a>
            </div>
        </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
