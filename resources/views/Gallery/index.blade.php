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
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                        <li class="breadcrumb-item active"><a
                                                href=" ">Gallery</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Galley</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Gallery Info</h4>
                                    {{-- @if (session('status'))
                                        <div class="alert alert-primary mb-1 mt-1">
                                            {{ session('status') }}
                                        </div>
                                    @endif --}}
                                    <form action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-sm-4 col-form-label">First Name
                                                        <span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly"
                                                            type="text" name="fname" placeholder="First Name"
                                                            id="example-text-input"  required>
                                                        {{-- @error('fname')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-sm-4 col-form-label">Middle Name
                                                        <span style="color: red">*</span></label>
                                                    <div class="col-sm-10"><input class="form-control txtOnly"
                                                            type="text" name="mname" placeholder="Middle Name"  
                                                            id="example-text-input">
                                                        {{-- @error('mname')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="example-text-input" class="col-sm-4 col-form-label">Last
                                                        Name
                                                        <span style="color: red">*</span></label>
                                                    <div class="col-sm-10"><input class="form-control txtOnly"
                                                            type="text" name="lname" placeholder="Last Name" value=""
                                                            id="example-text-input" required>
                                                        {{-- @error('lname')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="example-text-input"
                                                        class="col-sm-4 col-form-label">Phone Number<span
                                                            style="color: red">*</span></label>
                                                    <div class="col-sm-10"><input class="form-control phone"
                                                            type="number" name="phone" placeholder="Phone Number" value=""
                                                            maxlength="10" id="example-text-input" required>
                                                        {{-- @error('phone')
                                                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}
                                                            </div>
                                                        @enderror --}}
                                                        
                                                        <div class="mt-3 w-25">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
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
