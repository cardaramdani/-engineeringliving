



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    @yield('tambahan_link')
    <link href="{{URL::to('assets1/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('/assets/css/Sidebar_submenu-dashboard/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.css" integrity="sha256-pODNVtK3uOhL8FUNWWvFQK0QoQoV3YA9wGGng6mbZ0E=" crossorigin="anonymous" />
    <link href="{{URL::to('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('assets1/css/style.css')}}" rel="stylesheet">
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script> --}}
    <title>@yield('title')</title>
     <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
 </head>
    <body>
        <div class="wrapper">
            <!--header menu start-->
                <div class="header">
                    <div class="header-menu">
                    <div class="title">Eng<span>ineering</span></div>
                    <div class="sidebar-btn"><i class="fas fa-bars"></i></div>
                        <ul>
                            <li>@yield('li_tambahan')</li>
                            <li><a href="#"><i class="fas fa-bell"></i></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>
                                </a>
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
                                    document.getElementById('updatepass').submit();"><i class="fas fa-lock"></i><span>Change Password</span>
                                </a>
                                <form id="updatepass" action="{{ route('password.change') }}" method="get" style="display: none;">
                                    @csrf
                                </form>

                                <a href="{{ url('/schedule')}}"><i class="fas fa-calendar-alt"></i><span>Work Schedule</span></a>
                            </div>
                        </li>
                        <li class="item">
                            <a href="{{ url('/homescreen')}}" class="menu-btn">
                                <i class="fas fa-home"></i><span>Dashboard</span>
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
                                    <i class="fas fa-tools"></i><span>Form PM <i class="fas fa-chevron-down drop-down"></i></span>
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
                        @endrole
                            <li class="item" id="LogSheet">
                                <a href="#LogSheet" class="menu-btn">
                                    <i class="fas fa-tasks"></i><span>Log Sheet <i class="fas fa-chevron-down drop-down"></i></span>
                                </a>
                                <div class="sub-menu">
                        @role('Admin|Eng-spv|Eng-teknisi|')
                                    <a href="{{ url('/amr')}}"><i class="fas fa-bolt"></i><span>AMR</span></a>
                                    <a href="{{ url('/boosterpump')}}"><i class="fas fa-atom"></i><span>Booster Pump</span></a>
                                    <a href="{{ url('/firepump')}}"><i class="fas fa-fire-extinguisher"></i><span>Fire Pump</span></a>
                                    <a href="{{ url('/genset')}}"><i class="fas fa-oil-can"></i><span>Genset</span></a>
                        @endrole
                        @role('Admin|Eng-spv|Eng-teknisi|Admin-GA')
                                    <a href="{{ url('/logbook')}}"><i class="fas fa-book"></i><span>LogBooks</span></a>
                        @endrole
                        @role('Admin|Eng-spv|Eng-teknisi|')
                                    <a href="{{ url('/pdam')}}"><i class="fas fa-tint"></i><span>PDAM</span></a>
                                    <a href="{{ url('/powerhouse')}}"><i class="fas fa-charging-station"></i><span>Power House</span></a>
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
                                    <a href="{{ url('/building-data')}}"><i class="fas fa-building"></i><span>Building Data</span></a>
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

                            </a>
                        </li>
                    </div>
                </div>
            <!--sidebar end-->
            {{-- main container start --}}
            <div class="main-container">
                @yield('main-container')
                @include('sweetalert::alert')
                <div class="header-c">
                    <div class="judul-menu">
                        @yield('pagination-title')
                        <ul>
                            <!--start search box -->
                                    @yield('search')
                            <!--end search box -->
                            @yield('info')

                            @yield('add')

                      </ul>
                    </div>
                    {{-- <div class="table">
                        <table class="table-border">
                            <thead>
                                <tr>
                                    @yield('header-tabel-no')
                                    @yield('header-tabel-pompa')
                                    @yield('header-tabel-lokasi')
                                    @yield('header-tabel-equipment')
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
                    </div> --}}
                </div>
            </div>

            {{-- main container end --}}
            <!-- MULAI MODAL KONFIRMASI DELETE-->
    <div class="modal fade " tabindex="-1" role="dialog" id="konfirmasi-modal" data-backdrop="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" style="color: red">Warning!!!</h2>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="color: black">
                    <p><b>Are you sure you want to deleted...?</b></p>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" name="tombol-hapus" id="tombol-hapus">Delete</button>
                </div>
            </div>
        </div>
    </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
{{-- <script type="text/javascript" language="javascript"
src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript"
        src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script> --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
        integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>

        @yield('tambahan_script')
  </body>
</html>
