@include('ArabicRihana.header')
@include('ArabicRihana.leftsidebar')
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
            @include('ArabicRihana.topbar')
            <div class="page-content-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title-box">
                                <div class="btn-group float-right">
                                    <ol class="breadcrumb hide-phone p-0 m-0">
                                        <li class="breadcrumb-item"><a href="{{ url('/Home') }}">بيت</a></li>
                                        <li class="breadcrumb-item active"><a
                                                href=" ">اتصال</a></li>
                                    </ol>
                                </div>
                                <h4 class="page-title">معلومات الاتصال</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title end breadcrumb -->

                    <!-- start Basic info  -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">صفحة الاتصال</h4>
                               
                                    <form action="{{url('ArbContactStore')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        {{----}}
                                        <div class="row">
                                          <div class="col-xl-10">
                                            <div class="form-group row">
                                                <label for="first_image" class="col-sm-4 col-form-label">رقم <span style="color: red">*</span></label>
                                                <div class="col-sm-10">
                                                    <input class="form-control" type="text" name="ArbNumber" id="Number" placeholder="أدخل رقم" required>
                                                    <small class="text-danger" id="numberError" style="display: none;">الرجاء إدخال رقم صالح مكون من 10 أو 14 رقمًا.</small>
                                                </div>
                                            </div>
                                        </div>
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">عنوان<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control txtOnly" type="text" name="ArbAddress" placeholder="أدخل العنوان" id="Address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-10">
                                                <div class="form-group row">
                                                    <label for="first_heading" class="col-sm-4 col-form-label">بريد إلكتروني<span style="color: red">*</span></label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control enailOnly" type="email" name="ArbEmail" placeholder="أدخل البريد الإلكتروني" id="Emal" required>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="mt-3 w-100"> <!-- Adjusted width to 100% and centered -->
                                            <button type="submit" class="btn btn-primary">يُقدِّم</button>
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
<script>
  document.getElementById("Number").addEventListener("input", function(event) {
      let input = event.target.value;
      let numberError = document.getElementById("numberError");
      if (!/^\d{10}$/.test(input) && !/^\d{14}$/.test(input)) {
          numberError.style.display = "block";
          event.target.setCustomValidity("رقم غير صالح. الرجاء إدخال رقم صالح مكون من 10 أو 12 رقمًا.");
      } else {
          numberError.style.display = "none";
          event.target.setCustomValidity("");
      }
  });
</script>
@include('ArabicRihana.footer')
