@include('header')
@include('leftsidebar')
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
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
                                                href=" ">About</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">About Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">About Page</h4>
                               
                                    <form action=" {{route('About.Store')}} " method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{----}}
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_image" class="col-sm-4 col-form-label">Heading One <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="AboutHeadingOne" id="AboutHeadingOne"  placeholder="Enter Heading One" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="second_image" class="col-sm-4 col-form-label">Heading Two<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="AboutHeadingTwo" id="AboutHeadingTwo"  placeholder="Enter Heading Two" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="third_image" class="col-sm-4 col-form-label">Heading Three<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="AboutHeadingThree" id="AboutHeadingThree"  placeholder="Enter Heading Three" required>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="third_image" class="col-sm-4 col-form-label">Heading Four<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="text" name="AboutHeadingFour" id="AboutHeadingFour"  placeholder="Enter Heading Four" required>
                                                    </div>
                                                </div>
                                            </div>
                                    
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">Peragraph One<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly" type="text" name="AboutPeragraphOne" placeholder="Enter Peragraph One" id="AboutPeragraphOne" required>
                                                        {{-- @error('first_heading')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="second_heading" class="col-sm-4 col-form-label">Peragraph Two<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly" type="text" name="AboutPeragraphTwo" placeholder="Enter Peragraph Two" id="AboutPeragraphTwo" required>
                                                        {{-- @error('second_heading')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                            
                                                <div class="form-group row">
                                                    <label for="third_heading" class="col-sm-4 col-form-label">Peragraph Three<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control " type="text" name="AboutPeragraphThree" placeholder="Enter Peragraph Three" required>
                                                        {{-- @error('phone')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="third_heading" class="col-sm-4 col-form-label">Peragraph Four<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control " type="text" name="AboutPeragraphFour" placeholder="Enter Peragraph Four" required>
                                                        {{-- @error('phone')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                                        @enderror --}}
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
