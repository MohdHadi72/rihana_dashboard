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
                                <h4 class="page-title">بيت </h4>
                            </div>
                        </div>
                    </div>
                                        <a href="{{url('/CreateHome')}}" class="btn btn-primary mt-3 mb-3" >إنشاء منزل جديد</a>
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
                                        @if (session('error'))
                                        <div class="alert alert-danger mb-3 mt-1" id="errorMessage">
                                            {{ session('error') }}
                                        </div>
                                        <script>
                                            setInterval(() => {
                                                setInterval(function(){
                                          document.getElementById("errorMessage").style.display = "none";
                                         },4000)
                                                
                                            }, 4000);
                                        </script>
                                            @endif
                                            
                                        <div class="row">
                                          <div class="col-12">
                                              <div class="card">
                                                  <div class="card-body">
                                                      <h4 class="mt-0 header-title">الصفحة الرئيسية</h4>
                                                      <table id="datatable-buttons" class="table table-border table-bordered border-primary" style="collapse; border-spacing: 0; width: 100%; ">
                                                          <thead>
                                                              <tr>
                                                                  <th>رقم </th>
                                                                  {{-- <th>Image One</th>
                                                                  <th>Image Two</th> --}}
                                                                  <th>صورة المنزل</th>
                                                                  <th>عنوان </th>
                                                                  {{-- <th>Heading Two</th>
                                                                  <th>Heading Three</th> --}}
                                                                  <th>فعل</th>
                                                              </tr>
                                                          </thead>
                                                          <tbody>
                                                               {{-- @foreach ($HomeData as $HomeData)  --}}
                                                              <tr>
                                                                {{-- <td>{{$loop->iteration}}</td> --}}
                                                                <td>1</td>
                                                                <td><img src="/productimage/" style="width: 100px; border-radius: 10%;" alt="Image One"></td>
                                                                {{-- <td>{{$HomeData->HomeHeading1}}</td> --}}
                                                                <td>sdakf</td>
                                                                {{-- <td>{{$HomeData->HomeHeading2}}</td>
                                                                <td>{{$HomeData->HomeHeading3}}</td> --}}
                                                                <td>hhasdfha</td>
                                                                  <td>
                                                            <a class="btn btn-primary" href=""><i class="fa fa-edit"></i></a>
                                                            <a href="" class="btn btn-danger delete-home" data-id=""><i class="fa fa-trash"></i></a>
                    
                                                                  </td>
                                                              </tr>
                                                              {{-- @endforeach --}}
                                                          </tbody>
                                                      </table>
                                                      {{-- {!! $data->links() !!} --}}
                                                  </div>
                                              </div>
                                          </div><!-- end col -->
                                      </div>
                                        
                                        <!-- end Basic info -->
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
                                title: 'Are you sure?',
                                text: 'You are about to delete this Home data!',
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonText: 'Yes, delete it!',
                                cancelButtonText: 'Cancel',
                                reverseButtons: true
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    // User confirmed deletion, perform deletion action here
                                    window.location.href = "{{ url('deleteHome') }}/" + homeId;
                                } else if (result.dismiss === Swal.DismissReason.cancel) {
                                    // User clicked cancel, do nothing
                                }
                            });
                        });
                    });
                    </script>
                    {{-- @include('footer') --}}
                    
                </div>
                <!-- container -->
            </div>
            <!-- End Right content here -->
        </div>
    </div>
</div>
                    <!-- end page title end breadcrumb -->
 @include('ArabicRihana.footer')