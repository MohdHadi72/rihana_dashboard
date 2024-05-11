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
                                        <li class="breadcrumb-item"><a href="{{ url('/') }}">بيت</a></li>
                                        <li class="breadcrumb-item active"><a
                                                href=" ">شعار</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">معلومات الشعار</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->
                    <a href="{{url('/ArblogosCreate')}}" class="btn btn-primary mt-3 mb-3" >إنشاء شعار جديد</a>
                    <!-- start Basic info  -->
                    @if (session('success'))
                    <div class="alert alert-primary mb-3 mt-1" id="successMessage">
                        {{ session('success') }}
                    </div>
                    <script>
                        setInterval(() => {
                            setInterval(function(){
                      document.getElementById("successMessage").style.display = "none";
                     },4000)
                            
                        }, 4000);
                    </script>
                        @endif
                    <div class="row">
                      <div class="col-12">
                          <div class="card">
                              <div class="card-body">
                                  <h4 class="mt-0 header-title">صفحة الشعار</h4>
                                  <table id="datatable-buttons" class="table table-border table-bordered border-primary" style="collapse; border-spacing: 0; width: 100%; ">
                                      <thead>
                                          <tr>
                                              <th>رقم</th>
                                              <th>صورة الشعار</th>
                                              <th>فعل</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                           @foreach ($logodata as $logodata) 
                                          <tr>
                                             <td>{{$loop->iteration}}</td>
                                            <td><img src="/ArbLogoimag/{{$logodata->ArbLogo}}" style="width: 100px; border-radius: 10%;" alt="Logo"></td>
                                            
                                              <td>
                                          <a class="btn btn-primary" href="{{url('logosEdit' , $logodata->id)}}"><i class="fa fa-edit"></i></a>
                                        <a href="{{url('logosDelete' , $logodata->id)}}" class="btn btn-danger delete-home" data-id="{{$logodata->id}}"><i class="fa fa-trash"></i></a>

                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
                    
                </div>

            </div><!-- Page content Wrapper -->

        </div><!-- content -->
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.querySelectorAll('.delete-home').forEach(item => {
    item.addEventListener('click', event => {
        event.preventDefault();
        
        const homeId = item.getAttribute('data-id');
        
        Swal.fire({
            title: 'هل أنت متأكد؟',
            text: 'أنت على وشك حذف بيانات المنزل هذه!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'نعم، احذفه!',
            cancelButtonText: 'يلغي',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                // User confirmed deletion, perform deletion action here
                window.location.href = "{{ url('logosDelete') }}/" + homeId;
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                // User clicked cancel, do nothing
            }
        });
    });
});
</script>
@include('ArabicRihana.footer')
