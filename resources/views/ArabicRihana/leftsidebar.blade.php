<div class="left side-menu">
    <!-- Button to open the sidebar -->
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
      <i class="ion-close"></i>
    </button>
    <!-- LOGO -->
    <div class="topbar-left">
      <div class="text-center bg-logo">
        <a href="{{url('/')}}" class="logo"><img src="/assets/images/logo-light.png" alt="" style="width: 30px"> &nbsp;حديقة الريحانة</a>
      </div>
    </div>
    <div class="sidebar-user">
      <img src="/assets/images/images.jpeg" class="wd-80 ht-80 rounded-circle" style="object-fit: cover;" alt="Profile Picture">
      <h6 class="">ريحانة</h6>
      <ul class="list-unstyled list-inline mb-0 mt-2">           
        <!-- Additional buttons can be added here -->
      </ul>
    </div>
    <div class="sidebar-inner slimscrollleft">
      <div id="sidebar-menu">
        <ul>
          <li class="menu-title">رئيسي</li>
          <li>
            <a href="{{url('/ArbHome')}}" class="waves-effect"><i class="fa-solid fa-house"></i><span> بيت</span></a>
          </li>
          <li>
            <a href="{{url('/Arblogo')}}" class="waves-effect"><i class="fa-brands fa-slack"></i><span> شعار</span></a>
          </li>
          <li>
            <a href="{{ url('/ArbAbout') }}" class="waves-effect"><i class="fa-solid fa-address-card"></i><span> عن</span></a>
          </li>
          <li>
            <a href="{{ url('/ArbOurTeam') }}" class="waves-effect"><i class="fa-solid fa-people-group"></i> <span>فريقنا</span></a>
          </li>
          <li>
            <a href="{{url('/ArbGallery ')}}" class="waves-effect"><i class="fa fa-area-chart"></i><span>صالة عرض </span></a>
          </li>
          {{-- <li>
            <a href="{{url('/')}}" class="waves-effect"><i class="fa-brands fa-think-peaks"></i><span>سمات</span></a>
          </li> --}}
          <li>
            <a href="{{url('/ArbContact')}}" class="waves-effect"><i class="fa-solid fa-address-book"></i><span> اتصال</span></a>
          </li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>
    <!-- Button to close the sidebar -->
   
  </div>

  