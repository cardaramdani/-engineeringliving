@extends('layouts.master')

@section('tambahan_link')
<meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{URL::to('assets1/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('title')
    Home
@endsection

@section('li_tambahan')

@endsection


@section('main-container')
<div class="header-text">
    <h1>Hii, {{ Auth::user()->username }}</h1>
    <h3>Below are your report today.</h3>
        </div>
        <div class="date-range">
          <form action="/dashboard/filter" method="post">
                @csrf
                <div class="form-group">
                    <select class="custom-select" name="shift" required>
                    <option value=""></option>
                    <option value="7 day">7 Day</option>
                    <option value="1 bulan">1 Bulan</option>
                    <option value="custom">Custom</option>
                    </select>
                    <input type="date" name="startdate" >
                    <input type="date" name="todate" >
                    <button type="submit" class="btn-primary"><i class="fas fa-filter"></i></button>
                </div>
            </form>
        </div>

        <form id="awaiting-schedule" action="/awaiting-schedule" method="get" style="display: none;">
            @csrf
        </form>

        <form id="no-started-yet" action="/no-started-yet" method="get" style="display: none;">
            @csrf
        </form>
        <div class="card">
            <div class="justify-content-between">
              <button type="submit" onclick="event.preventDefault();document.getElementById('awaiting-schedule').submit();">
                <img src="/assets/icons/icon-dashboard-awaiting-schedule@2x.png" style="width:50px; height:50px;"/>
                <h1>count inquiries</h1>
                <h3>Awaiting Schedule</h3>
              </button>

              <button type="submit" onclick="event.preventDefault();document.getElementById('no-started-yet').submit();">
                <img src="/assets/icons/icon-inquiry-not-start-work@2x.png" style="width:50px; height:50px;"/>
                <h1>count inquiries</h1>
                <h3>Not Started Yet</h3>
              </button>
            </div>
        </div>
        <div class="card">
          <h3>Inquiry assigned to you today</h3>
          <table class="table table-striped table-dark">
            <thead>
              <tr align="center" class="bg-primary">
                  <th scope="col" align="center" class="fixed">No WO</th>
                  <th scope="col" align="center">Kategori</th>
                  <th scope="col" align="center" >Masalah</th>
                  <th scope="col" align="center" >Unit/Area</th>
                  <th scope="col" align="center" >Jadwal</th>
                  <th scope="col">Actions</th>

              </tr>
            </thead>
              <tbody>
                <tr>
                    <td align="center">1</td>
                    <td align="center">2</td>
                    <td align="center">3</td>
                    <td align="center">4</td>
                    <td align="center">5</td>
                    <td align="center" >
                      <ul class="align-middle">
                        <form action="/amr/edit/->id}}" method="post" class="d-inline ">
                        @csrf
                        <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                        </form>
                      </ul>
                    </td>

                </tr>

                <tr>
                    <td align="center">1</td>
                    <td align="center">2</td>
                    <td align="center">3</td>
                    <td align="center">4</td>
                    <td align="center">5</td>
                    <td align="center" >
                      <ul class="align-middle">
                        <form action="/amr/edit/->id}}" method="post" class="d-inline ">
                        @csrf
                        <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                        </form>
                      </ul>
                    </td>

                </tr>
            </tbody>
          </table>
          <a href="test" align="right">
            See all inquiries assigned to you todays</a>

        </div>

@endsection

@section('tambahan_script')
<!-- LIBARARY JS -->
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script type="text/javascript" language="javascript"
    src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"
    integrity="sha256-sPB0F50YUDK0otDnsfNHawYmA5M0pjjUf4TvRJkGFrI=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.js"
    integrity="sha256-siqh9650JHbYFKyZeTEAhq+3jvkFCG8Iz+MHdr9eKrw=" crossorigin="anonymous"></script>

<!-- MULAI DATEPICKER JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.js"></script>

<!-- AKHIR LIBARARY JS -->
<script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $(".sidebar-btn").click(function(){
        $(".wrapper").toggleClass("ini-collapse");
    });
    });

</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
