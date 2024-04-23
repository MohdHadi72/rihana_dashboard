<div class="left side-menu">
  <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
      <i class="ion-close"></i></button><!-- LOGO -->
  <div class="topbar-left">
      <div class="text-center bg-logo">
          <a href="/" class="logo"><i class="fa-solid fa-compact-disc"></i> &nbsp; Rihana Park
              </a><!-- <a href="index.html" class="logo"><img src="assets/images/logo.png" height="24" alt="logo"></a> -->
      </div>
  </div>
  <div class="sidebar-user">
      {{-- @if (auth()->check()) --}}
      
          
      {{-- @else --}}
        
      <img src="/assets/images/face15.jpeg" class="wd-80 ht-80 rounded-circle"
      style="object-fit: cover;" alt="Profile Picture">
     
      {{-- @endif --}}

      <h6 class=""> </h6>
       
      <ul class="list-unstyled list-inline mb-0 mt-2">

          {{-- <li class="list-inline-item">
              <a
                  href="#"
                  class=""
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Profile"
                  ><i class="dripicons-user text-purple"></i
              ></a>
          </li> --}}
          {{-- <li class="list-inline-item">
             <a
                  href="#"
                  class=""
                  data-toggle="tooltip"
                  data-placement="top"
                  title="Settings"
                  ><i class="dripicons-gear text-dark"></i
              ></a>
          </li> --}}
           
          </li>
      </ul>
  </div>
  <div class="sidebar-inner slimscrollleft">
      <div id="sidebar-menu">
          <ul>
              <li class="menu-title">Main</li>
       
              <li>
                  <a href="/" class="waves-effect"><i class="fa-solid fa-house"></i><span> HOME</span></a>
              </li>
              <li>
                  <a href="{{ url('/About') }}" class="waves-effect"><i class="fa-solid fa-address-card"></i>
                      <span> ABOUT</span></a>
              </li>
             
              <li>
                  <a href="('/addZone') }}" class="waves-effect"><i class="fa fa-area-chart"></i><span>GALLERY </span></a>
              </li>
              <li>
                <a href="('/addZone') }}" class="waves-effect"><i class="fa-brands fa-think-peaks"></i><span> FEATURES</span></a>
            </li>
            <li>
              <a href="('/addZone') }}" class="waves-effect"><i class="fa-brands fa-servicestack"></i><span> SERVICES</span></a>
          </li>
            <li>
              <a href="('/addZone') }}" class="waves-effect"><i class="fa-solid fa-address-book"></i><span> CONTACT</span></a>
          </li>
              
            
              {{-- @endif --}}
             
              {{-- @if(Auth::check() && Auth::user()->roles->contains('name', 'Admin') ) --}}
             
              
                  {{-- @endif --}}
          </ul>
      </div>
      <div class="clearfix"></div>
  </div>
  <!-- end sidebarinner -->
</div>
