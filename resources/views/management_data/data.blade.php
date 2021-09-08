@extends('layouts.index_logsheet')

@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
    Data
@endsection

@section('li_tambahan')

@endsection


@section('main-container')
<h2>Tipe Data</h2>
<table class="table">
  <tbody>
    <tr align="right">
      <td scope="col" align="center" class="align-left"><i class="fas fa-building" style="color: #b4d6fb; font-size: 29px;"></i></td>
      <td scope="col" align="left" style="color: #b4d6fb; font-size: 29px;">Tower</td>
      <td scope="col" align="right" style="color: #b4d6fb; font-size: 29px;"><i href="#" onclick="event.preventDefault();
                    document.getElementById('tower').submit();"
        class="fas fa-angle-double-right" ></i>
        <form id="tower" action="/towers" method="get" style="display: none;">
           @csrf
        </form>
      </td>
    </tr>

    <tr align="right">
        <td scope="col" align="center" class="align-left"><i class="fas fa-level-up-alt" style="color: #b4d6fb; font-size: 29px;"></i></td>
        <td scope="col" align="left" style="color: #b4d6fb; font-size: 29px;">Floor</td>
        <td scope="col" align="right" style="color: #b4d6fb; font-size: 29px;"><i href="#" onclick="event.preventDefault();
                      document.getElementById('floor').submit();"
        class="fas fa-angle-double-right"></i>
          <form id="floor" action="/floor" method="get" style="display: none;">

          </form>
        </td>
    </tr>

    <tr align="right">
      <td scope="col" align="center" class="align-left"><i class="fas fa-warehouse" style="color: #b4d6fb; font-size: 29px;"></i></td>
      <td scope="col" align="left" style="color: #b4d6fb; font-size: 29px;">Rooms</td>
      <td scope="col" align="right" style="color: #b4d6fb; font-size: 29px;"><i href="#" onclick="event.preventDefault();
        document.getElementById('rooms').submit();"
      class="fas fa-angle-double-right"></i>
        <form id="rooms" action="/rooms" method="get" style="display: none;">
           @csrf
        </form>
    </td>
    </tr>

    <tr align="right">
      <td scope="col" align="center" class="align-left"><i class="fas fa-stroopwafel" style="color: #b4d6fb; font-size: 29px;"></i></td>
      <td scope="col" align="left" style="color: #b4d6fb; font-size: 29px;">Utilitas</td>
      <td scope="col" align="right" style="color: #b4d6fb; font-size: 29px;"><i href="#" onclick="event.preventDefault();
                    document.getElementById('Utilitas').submit();"
      class="fas fa-angle-double-right"></i>
        <form id="Utilitas" action="/utilitas" method="get" style="display: none;">
           @csrf
        </form>
    </td>
    </tr>

    <tr align="right">
        <td scope="col" align="center" class="align-left"><i class="fas fa-toolbox" style="color: #b4d6fb; font-size: 29px;"></i></td>
        <td scope="col" align="left" style="color: #b4d6fb; font-size: 29px;">Equipment</td>
        <td scope="col" align="right" style="color: #b4d6fb; font-size: 29px;"><i href="#" onclick="event.preventDefault();
                      document.getElementById('equipment').submit();"
        class="fas fa-angle-double-right"></i>
          <form id="equipment" action="/equipment" method="get" style="display: none;">

          </form>
        </td>
    </tr>


  </tbody>
</table>
@endsection


@section('tambahan_script')

@endsection
