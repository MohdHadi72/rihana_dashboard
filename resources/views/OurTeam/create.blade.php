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
                                                href=" ">OurTeam</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Our Team  Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Team Page</h4>
                
                                    <form action="{{url('StoreTeamData')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- } --}}
                                        <div class="row">
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                    <label for="first_image" class="col-sm-4 col-form-label">Team Member Image<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="file" name="TeamImg" id="" accept="image/*" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">Team Peragraph<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <textarea class="form-control txtOnly" type="text" name="TeamPeragraph" placeholder="Enter Peragraph" id="" required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">Team Heading<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly" type="text" name="TeamHeading" placeholder="Enter Team Heading" id="" required>
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
