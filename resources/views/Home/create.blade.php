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
                                                href=" ">Home</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Home Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Home Page</h4>
                
                                    <form action="{{route('Home.Store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- } --}}
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_image" class="col-sm-4 col-form-label">Home Image<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="HomeImg1" id="first_image" accept="image/*" required>
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group row">
                                                    <label for="second_image" class="col-sm-4 col-form-label">Second Image <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="HomeImg2" id="second_image" accept="image/*" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="third_image" class="col-sm-4 col-form-label">Third Image <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="HomeImg3" id="third_image" accept="image/*" required>
                                                    </div>
                                                </div> --}}
                                            </div>
                                    
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">Image Heading <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly" type="text" name="HomeHeading1" placeholder="Heading" id="first_heading" required>
                                                        {{-- @error('first_heading')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                {{-- <div class="form-group row">
                                                    <label for="second_heading" class="col-sm-4 col-form-label">Second Heading <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly" type="text" name="HomeHeading2" placeholder="Second Heading" id="second_heading" required> --}}
                                                        {{-- @error('second_heading')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
                                                    {{-- </div>
                                                </div> --}}
                                            
                                                {{-- <div class="form-group row">
                                                    <label for="third_heading" class="col-sm-4 col-form-label">Third Heading <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control " type="text" name="HomeHeading3" placeholder="Third Heading"  required> --}}
                                                        {{-- @error('phone')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
                                                    {{-- </div>
                                                </div> --}}
                                            
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
