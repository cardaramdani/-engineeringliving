



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    @yield('tambahan_link')
    <link rel="stylesheet" href="{{asset('/assets/css/Sidebar_submenu-dashboard/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>@yield('title')</title>
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>
<body>
<div class="wrapper">
  <!--header menu start-->
      <div class="header">
        <div class="header-menu">
          <div class="title">Eng<span>ineering</span></div>
          <div class="sidebar-btn">
            <i class="fas fa-bars"></i>
          </div>
          <ul>
            <li>
              @yield('li_tambahan')

            </li>
            <li><a href="#"><i class="fas fa-bell"></i></a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
            <li>

              <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i></a>
            </li>
          </ul>
        </div>
      </div>
      <!--header menu end-->

<!--sidebar start-->
      <div class="sidebar">
        <div class="sidebar-menu">
          <center class="profile">
          <a href="{{ url('/dataIMG_user/'.Auth::user()->gambar) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
            <img src="{{ url('/dataIMG_user/'.Auth::user()->gambar) }}" alt="" >
            </a>
            <!-- <p href="#" onclick="event.preventDefault();
                document.getElementById('profile-form').submit();"><span>{{ Auth::user()->username }}</span></p>
              <form id="profile-form" action="/profile/{{Auth::user()->id}}" method="get" style="display: none;">
                  @csrf
              </form> -->
          </center>
          <li class="item" id="profile">
            <a href="#profile" class="menu-btn">
              <i class="fas fa-user"></i><span>{{ Auth::user()->username }}<i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="#" onclick="event.preventDefault();
                    document.getElementById('profile-form').submit();"><i class="fas fa-user"></i><span>MyProfile</span>
                  </a>
                  <form id="profile-form" action="/profile/{{Auth::user()->id}}" method="get" style="display: none;">
                      @csrf
                  </form>

                  <a href="#" onclick="event.preventDefault();
                  document.getElementById('updatepass').submit();"><i class="fas fa-lock"></i><span>Change Password</span></a>
                  <form id="updatepass" action="{{ route('password.change') }}" method="get" style="display: none;">
                      @csrf
                  </form>

                  <a href="{{ url('/schedule')}}"><i class="fas fa-calendar-alt"></i><span>Schedule kerja</span></a>
                </div>
          </li>
          <li class="item">
            <a href="{{ url('/homescreen')}}" class="menu-btn">
              <i class="fas fa-home"></i><span>Home</span>
            </a>
          </li>
@role('Admin|')
          <li class="item" id="Sop">
            <a href="#Sop" class="menu-btn">
              <i class="fas fa-book-open"></i><span>Sop <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/SOP')}}"><i class="fas fa-briefcase"></i><span>SOP eng</span></a>
                  <a href="{{ url('/SOP')}}"><i class="fas fa-briefcase"></i><span>SOP tr</span></a>
                  <a href="{{ url('/SOP')}}"><i class="fas fa-briefcase"></i><span>SOP fa</span></a>
                </div>
          </li>
@endrole
@role('Admin|Eng-spv|Eng-teknisi|')
          <li class="item" id="PM">
            <a href="#PM" class="menu-btn">
              <i class="fas fa-tools"></i><span>PM <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                  <div class="sub-menu">
                    <a href="{{ url('/ac')}}"><i class="fas fa-fan"></i><span>AC</span></a>
                    <a href="{{ url('/cwt')}}"><i class="fas fa-dice-d6"></i><span>Clean Water Tank</span></a>
                    <a href="{{ url('/fan')}}"><i class="fas fa-fan"></i><span>EF & IF</span></a>
                    <a href="{{ url('/pmfirealarm')}}"><i class="fas fa-bullhorn"></i><span>Fire Alarm</span></a>
                    <a href="{{ url('/pmfirepump')}}"><i class="fas fa-fire-extinguisher"></i><span>Fire Pump</span></a>
                    <a href="{{ url('/pmgenset')}}"><i class="fas fa-oil-can"></i><span>Genset</span></a>
                    <a href="{{ url('/gondola')}}"><i class="fas fa-ellipsis-v"></i><span>Gondola</span></a>
                    <a href="{{ url('/hydrant')}}"><i class="fas fa-fire-extinguisher"></i><span>Hydrant Box</span></a>
                    <a href="{{ url('/pmpanel')}}"><i class="fas fa-charging-station"></i><span>Panel Power</span></a>
                    <a href="{{ url('/pmpompa')}}"><i class="fas fa-address-card"></i><span>Pompa</span></a>
                    <a href="{{ url('/rooftank')}}"><i class="fas fa-dice-d6"></i><span>Roof Tank</span></a>
                    <a href="{{ url('/pmstp')}}"><i class="fas fa-water"></i><span>STP</span></a>
                    <a href="{{ url('/toilet')}}"><i class="fas fa-toilet"></i><span>Toilet</span></a>
                  </div>
          </li>
          <li class="item" id="LogSheet">
            <a href="#LogSheet" class="menu-btn">
              <i class="fas fa-tasks"></i><span>LogSheet <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/amr')}}"><i class="fas fa-bolt"></i><span>AMR</span></a>
                  <a href="{{ url('/boosterpump')}}"><i class="fas fa-atom"></i><span>Booster Pump</span></a>
                  <a href="{{ url('/firepump')}}"><i class="fas fa-fire-extinguisher"></i><span>Fire Pump</span></a>
                  <a href="{{ url('/genset')}}"><i class="fas fa-oil-can"></i><span>Genset</span></a>
                  <a href="{{ url('/logbook')}}"><i class="fas fa-book"></i><span>LogBooks</span></a>
                  <a href="{{ url('/pdam')}}"><i class="fas fa-tint"></i><span>PDAM</span></a>
                  <a href="{{ url('/PowerHouse')}}"><i class="fas fa-charging-station"></i><span>Power House</span></a>
                  <a href="{{ url('/stp')}}"><i class="fas fa-water"></i><span>STP</span></a>
                  <a href="{{ url('/sumpitpump')}}"><i class="fas fa-atom"></i><span>Sumpit Pump</span></a>
                  <a href="{{ url('/transferpump')}}"><i class="fas fa-atom"></i><span>Transfer Pump</span></a>
                </div>
          </li>
@endrole
@role('Admin|Eng-spv|Eng-teknisi|Finance-Acounting')
          <li class="item" id="Utility">
            <a href="#Utility" class="menu-btn">
              <i class="fas fa-bolt"></i><span>Utility <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/watermeterunit')}}"><i class="fas fa-tint"></i><span>Water Meter Unit</span></a>
                  <a href="{{ url('/kwhunit')}}"><i class="fas fa-bolt"></i><span>Kwh Meter Unit</span></a>
                  <a href="{{ url('/kwhcomersile')}}"><i class="fas fa-bolt"></i><span>Kwh Meter Comersile</span></a>
                </div>
          </li>
@endrole
@role('Admin')
          <li class="item" id="bast">
            <a href="#bast" class="menu-btn">
              <i class="fas fa-book"></i><span>bast <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/coo')}}"><i class="fas fa-archive"></i><span>COO</span></a>
                  <a href="{{ url('/datasuplayer')}}"><i class="fas fa-suitcase-rolling"></i><span>Data suplayer</span></a>
                  <a href="{{ url('/lisensi')}}"><i class="fas fa-id-badge"></i><span>Lisensi</span></a>
                </div>
          </li>
@endrole
@role('Admin')
          <li class="item" id="Management">
            <a href="#Management" class="menu-btn">
              <i class="fas fa-users-cog"></i><span>Management<i class="fas fa-chevron-down drop-down"></i></span>
            </a>
                <div class="sub-menu">
                  <a href="{{ url('/data')}}"><i class="fas fa-folder"></i><span>Data</span></a>

                  <a href="{{ url('/buildng-data')}}"><i class="fas fa-building"></i><span>Building Data</span></a>

                  <a href="{{ url('/lisensi')}}"><i class="fas fa-id-badge"></i><span>Lisensi</span></a>

                  <a href="#" onclick="event.preventDefault();
                  document.getElementById('users').submit();"><i class="fas fa-users"></i><span>Users</span></a>
                  <form id="users" action="/users" method="get" style="display: none;">
                     @csrf
                  </form>

                <a href="#" onclick="event.preventDefault();
                    document.getElementById('rolepreset').submit();"><i class="fas fa-user-tag"></i><span>Role Presets</span></a>
                  <form id="rolepreset" action="/rolepreset" method="get" style="display: none;">
                     @csrf
                  </form>

                <a href="#" onclick="event.preventDefault();
                    document.getElementById('permissionpreset').submit();"><i class="fas fa-eye"></i><span>Permission Presets</span></a>
                  <form id="permissionpreset" action="/permissionpreset" method="get" style="display: none;">
                     @csrf
                  </form>
                </div>
          </li>
@endrole
@role('Admin')
          <li class="item" id="settings">
            <a href="#settings" class="menu-btn">
              <i class="fas fa-cog"></i><span>Settings <i class="fas fa-chevron-down drop-down"></i></span>
            </a>
            <div class="sub-menu">


            </div>
          </li>
@endrole
          <li class="item">
            <a href="#About" class="menu-btn">
              <i class="fas fa-info-circle"></i><span>About</span>
            </a>
          </li>
          <li class="item">
            <a href="#About" class="menu-btn">
              <i class="fas fa-info-circle"></i><span></span>
            </a>
          </li>
        </div>
      </div>
<!--sidebar end-->
      <div class="main-container">
        @yield('main-container')
        @include('sweetalert::alert')
        <div class="header-c">


          <div class="table">
            <table class="table-border">
              <thead>
                <tr>
                  @yield('header-tabel-no')
                  @yield('header-tabel-pompa')
                  @yield('header-tabel-lokasi')
                  @yield('header-tabel-type')
                  @yield('header-tabel-no-item')
                  @yield('header-tabel-tanggal')
                  @yield('header-tabel-teknisi')
                    @yield('header-tabel-shift')
                    @yield('header-tabel-cosp')
                    @yield('header-tabel-lwbp')
                    @yield('header-tabel-wbp')
                    @yield('header-tabel-total')
                    @yield('header-tabel-kvarh')
                    @yield('header-tabel-penalty')
                      @yield('header-tabel-standmeter')
                        @yield('header-tabel-unit')
                        @yield('header-tabel-no-seri')
                        @yield('header-tabel-daya')
                          @yield('header-tabel-faktor-kali')
                        @yield('header-tabel-standawal')
                        @yield('header-tabel-gambarawal')
                        @yield('header-tabel-standakhir')
                        @yield('header-tabel-gambarakhir')
                          @yield('header-tabel-standawal-wbp')
                          @yield('header-tabel-gambarawal-wbp')
                          @yield('header-tabel-standakhir-wbp')
                          @yield('header-tabel-gambarakhir-wbp')
                        @yield('header-tabel-pemakaian')
                        @yield('header-tabel-tanggal-bast')
                        @yield('header-tabel-tanggal-utility')
                        @yield('header-tabel-petugas')
                  @yield('header-tabel-action')

                </tr>
              </thead>
              <tbody>
                  @yield('body-tabel')
              </tbody>

            </table>
          </div>
        </div>

      </div>
  </div>

<!--main container end-->
     <script type="text/javascript">
        $(document).ready(function(){
        $(".sidebar-btn").click(function(){
            $(".wrapper").toggleClass("ini-collapse");
        });
        });

    </script>
    @yield('tambahan_script')


  </body>

</html>
