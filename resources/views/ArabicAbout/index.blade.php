@include('ArabicRihana.header')
@include('ArabicRihana.leftsidebar')
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
            @include('ArabicRihana.topbar')
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/Home') }}">بيت</a></li>
                                        <li class="breadcrumb-item active"><a href="#">عن</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">حول المعلومات</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title and breadcrumb -->
                    <a href="{{url('/ArbCreate')}}" class="btn btn-primary mt-3 mb-3" >إنشاء جديد حول</a>
                    <!-- start Basic info  -->

                    @if (session('success'))
                    <div class="alert alert-primary mb-3 mt-1" id="successMessage">
                        {{ session('success') }}
                    </div>

                    <script>
                      setInterval(function(){
                      document.getElementById("successMessage").style.display = "none";
                     },4000)
                                          
                    </script>
                   @endif
                    @if (session('error'))
                    <div class="alert alert-danger mb-3 mt-1" id="errorMessage">
                        {{ session('error') }}
                    </div>

                    <script>
                      setInterval(function(){
                      document.getElementById("errorMessage").style.display = "none";
                     },4000)
                                          
                    </script>
                   @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">About Page</h4>
                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-striped table-bordered border-primary">
                                            <thead>
                                                <tr>
                                                    <th>رقم</th>
                                                    <th>حول العنوان</th>
                                                    <th>حول الفقرة</th>
                                                    <th>أجراءات</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($ArbAboutData as $ArbAboutData)  
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $ArbAboutData->ArbAboutHeading }}</td>
                                                        <td>{{ $ArbAboutData->ArbAboutPeragraph  }}</td>
                                                        <td>
                                                            <a class="btn btn-primary" href="{{url('ArbAboutEdit' , $ArbAboutData->id)}}"><i class="fa fa-edit"></i></a>
                                                            <a href="{{url('ArbAboutDelete', $ArbAboutData->id)}}" class="btn btn-danger delete-about" data-id="{{$ArbAboutData->id}}"><i class="fas fa-trash-alt"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        


                                    </div>
                                </div>
                            </div>
                        </div><!-- end col -->
                    </div>
                    <!-- end Basic info -->
                </div>
            </div><!-- Page content Wrapper -->
        </div><!-- content -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('.delete-about').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        
        const aboutId = item.getAttribute('data-id');
        
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'Cancel',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // User confirmed deletion, perform deletion action here
                window.location.href = "{{ url('ArbAboutDelete') }}/" + aboutId;
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // User clicked cancel, do nothing
            }
        });
    });
});
</script>
</div>
@include('ArabicRihana.footer')
