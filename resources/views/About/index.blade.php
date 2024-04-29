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
                                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Home Info</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title and breadcrumb -->
                    <a href="{{url('/Create')}}" class="btn btn-primary mt-3 mb-3" >Create New Home</a>
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
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">About Page</h4>
                                    <div class="table-responsive">
                                        <table id="datatable-buttons" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Heading One</th>
                                                    <th>Heading Two</th>
                                                    <th>Heading Three</th>
                                                    <th>Heading Four</th>
                                                    <th>Paragraph One</th>
                                                    <th>Paragraph Two</th>
                                                    <th>Paragraph Three</th>
                                                    <th>Paragraph Four</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead> 
                                            <tbody>
                                                @foreach ($AboutData as $aboutData)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$aboutData->AboutHeadingOne}}</td>
                                                    <td>{{$aboutData->AboutHeadingTwo}}</td>
                                                    <td>{{$aboutData->AboutHeadingThree}}</td>
                                                    <td>{{$aboutData->AboutHeadingFour}}</td>
                                                    <td>{{$aboutData->AboutPeragraphOne}}</td>
                                                    <td>{{$aboutData->AboutPeragraphTwo}}</td>
                                                    <td>{{$aboutData->AboutPeragraphThree}}</td>
                                                    <td>{{$aboutData->AboutPeragraphFour}}</td>
                                                    <td>
                                                        <a class="btn btn-primary" href="{{url('editAbout' , $aboutData->id)}}"><i class="fa fa-edit"></i></a>
                                                        <a href="{{url('DeleteAbout', $aboutData->id)}}" class="btn btn-danger" onclick="return confirm('Are You Sure To Delete This About')"><i class="fas fa-trash-alt"></i></a>
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
</div>
@include('footer')
