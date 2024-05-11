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
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
                                        <li class="breadcrumb-item active"><a
                                                href=" ">Logo</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Logo Update</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Update</h4>
                
                                    <form action="{{route('LogoUpdate' , $logodata->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{-- } --}}
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="form-group row">
                                                    <label for="first_image" class="col-sm-4 col-form-label">Logo Image<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                      <input type="file" class="form-control-file mt-2" id="first_image" name="Logo">
                                                    @if($logodata->Logo)
                                                    <div style="width: 100px; height: auto;" class="homeimage mt-3">
                                                        <img src="/logos/{{ $logodata->Logo }}" style="width: 100%; border-radius: 10%;" alt="Home Image">
                                                    </div>
                                                    @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100"> 
                                            <button type="submit" class="btn btn-primary">Update</button>
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
