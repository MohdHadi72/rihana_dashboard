@include('ArabicRihana.header')

<!-- Loader -->
<!-- Begin page -->
<div id="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @include('ArabicRihana.leftsidebar')
    <!-- Left Sidebar End -->
    <!-- Topbar start -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @include('ArabicRihana.topbar')
            <!-- Topbar End-->

            <!-- Start right Content here -->
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item">
                                            <a href="{{url('/ArbHome')}}">بيت</a>
                                        </li>
                                        <li class="breadcrumb-item active">
                                            لوحة القيادة
                                        </li>
                                    </ol>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div></div></div></div></div>
            <!-- End Right content here -->
        </div>
    </div>
</div>
                    <!-- end page title end breadcrumb -->
 @include('ArabicRihana.footer')