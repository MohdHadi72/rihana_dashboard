@include('header')
@include('leftsidebar')
<div id="preloader">
    <div id="status">
        <div class="spinner" style="display: none"></div>
    </div>
</div>
<!-- Begin page -->
<div id="wrapper">

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            @include('topbar')
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/Home') }}">Home</a></li>
                                        <li class="breadcrumb-item active"><a
                                                href=" ">Feature</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Feature  Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Feature Page</h4>
                
                                    <form action="{{url('featureStore')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- } --}}
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_image" class="col-sm-4 col-form-label">Feature Peragraph<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="FeaturePeragraph" id="FeaturePeragraph" placeholder="Enter Feature Peragraph"  required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_image" class="col-sm-4 col-form-label">Feature Icon<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="FeatureIcon" id="" accept="image/*" required>
                                                      </div>
                                                    </div>
                                                  </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">Feature Heading<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control txtOnly" type="text" name="FeatureHeading" placeholder="Enter Feature Heading" id="FeatureHeading" required>
                                                    </div>
                                                  </div>
                                                </div>
                                                
                                                <div class="col-xl-6">
                                                  <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">Feature About<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                      <textarea class="form-control txtOnly" type="text" name="FeatureAbout" placeholder="Enter Feature About" id="FeatureAbout" required></textarea>
                                                    </div>
                                                  </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                  <label for="first_heading" class="col-sm-4 col-form-label">Feature Image<span style="color: red">*</span></label>
                                                  <div class="col-sm-10">
                                                    <input class="form-control" type="file" name="FeatureImage" id="FeatureImage" accept="image/*" required>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100"> <!-- Adjusted width to 100% and centered -->
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end Basic info -->
                </div>

            </div><!-- Page content Wrapper -->

        </div><!-- content -->
    </div>
</div>
@include('footer')
