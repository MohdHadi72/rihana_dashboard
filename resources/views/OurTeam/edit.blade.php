@include('header')
@include('leftsidebar')
<div id="preloader">
    <div id="status">
        <div class="spinner" style="display: none"></div>
    </div>
</div>

<style>

 
.form-control-file {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
    width: 100%;  
    box-sizing: border-box;  
}

 
.col-form-label {
    font-weight: bold;
    color: #333;  
}

</style>
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
                                        <li class="breadcrumb-item active"><a href=" ">Home</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Update Home</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->

                   
                        {{-- @endif --}}
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Update Home Page</h4>

                                    <form action="{{url('UpdataTeam' , $EditTeam->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                          <div class="col-xl-10">
                                            <div class="form-group row">
                                                <label for="first_image" class="col-sm-4 col-form-label">Team Member Image<span style="color: red">*</span></label>
                                                <div class="col-sm-10">
                                                  <input type="file" class="form-control-file mt-2" id="" name="TeamImg">
                                                    @if($EditTeam->TeamImg)
                                                    <div style="width: 100px; height: auto;" class="homeimage mt-3">
                                                        <img src="/productimage/{{ $EditTeam->TeamImg }}" style="width: 100%; border-radius: 10%;" alt="TeamImage">
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
    
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                  <label for="first_heading" class="col-sm-4 col-form-label">Team Peragraph<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                      <textarea class="form-control txtOnly" type="text" name="TeamPeragraph"    required>{{ $EditTeam->TeamPeragraph }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                  <label for="first_heading" class="col-sm-4 col-form-label">Team Heading<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                      <input class="form-control txtOnly" type="text" name="TeamHeading"   value="{{ $EditTeam->TeamHeading }}" required> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-3 w-100"> <!-- Adjusted width to 100% and centered -->
                                            <button type="submit" class="btn btn-primary edit-team">Update</button>

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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelector('.edit-team').addEventListener('click', event => {
    event.preventDefault();

    Swal.fire({
        title: 'Are you sure?',
        text: 'You are about to edit this Home data!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, edit it!',
        cancelButtonText: 'Cancel',
        reverseButtons: true
    }).then((result) => {
        if (result.isConfirmed) {
            // User confirmed edit, submit the form
            document.querySelector('form').submit();
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // User clicked cancel, do nothing
        }
    });
});
</script>
@include('footer')
