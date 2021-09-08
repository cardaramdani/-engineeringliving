@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="{{asset('/assets/bootstrap/css/bootstrap.min.css.')}}">
@endsection
@section('title')
      PM Rooftank
@endsection
@section('li_tambahan')
<form action="{{url('rooftank')}}" method="post" class="form-inline col-6">
    @csrf
    <input type="text" name="cari" placeholder="Search" >
    <input value="{{$start}}" type="date"name="startdate" id="startdate"class="form-control mr-sm-1 @error('startdate') is-invalid @enderror col-4.5" value="{{old('startdate')}}">
    @error('startdate')<div class="invalid-feedback">{{$message}}</div>@enderror

    <input value="{{$end}}" type="date"name="todate" id="todate"class="form-control mr-sm-1 @error('todate') is-invalid @enderror col-4.5" value="{{old('todate')}}">
    @error('todate')<div class="invalid-feedback">{{$message}}</div>@enderror

    <button type="submit" class="fas fa-filter"></button>
</form>
@endsection
@section('main-container')
<!-- pagination dan titel -->
  @section('pagination-title')
    <div class="title">PM.<span>Roof Tank</span></div>
  @endsection
<!--end pagination dan titel -->

@section('info')
    <li>
        <button type="button" class="btn-info" data-toggle="modal" data-target=".info" title="Tahapan Catat Bulanan" data-placement="left"><i class="fas fa-info"></i></button>
    </li>
@endsection

@section('add')
    <li>
        <form id="ac-add-form" action="{{url('rooftank/add')}}" method="get" style="display: none;">
            @csrf
        </form>

          <button type="button" class="btn-info" onclick="event.preventDefault();
          document.getElementById('ac-add-form').submit();"><i class="fas fa-plus-square"></i></button>
    </li>
@endsection
<!-- header tabel -->
  @section('header-tabel-no')
    <th scope="col" align="center" class="fixed">No</th>
  @endsection

  @section('header-tabel-lokasi')
  @endsection

  @section('header-tabel-type')
  @endsection
  @section('header-tabel-no-item')
  @endsection

  @section('header-tabel-tanggal')
    <th scope="col" align="center">Tanggal Preventive</th>
  @endsection

  @section('header-tabel-teknisi')
    <th scope="col" align="center" >Teknisi</th>
  @endsection

  @section('header-tabel-action')
    <th scope="col">Actions</th>
  @endsection
<!-- end header tabel -->

  @section('body-tabel')
    @foreach ($Rooftank as $result => $rooftank)
      <tr>
        <td align="center" class="font-weight-bold">{{$result + $Rooftank->firstitem()}}</td>
        <td align="center">{{$rooftank->created_at}}</td>
        <td align="center">{{$rooftank->teknisi}}</td>
        <td align="center" >
        <ul class="ul-action">
            <form action="/rooftank/view/{{$rooftank->id}}" method="post" class="action-table " >
              @csrf

                <button type="submit"><i class="fas fa-eye"></i></button>

            </form>

@role('Admin|Eng-spv|')
        <form action="/rooftank/edit/{{$rooftank->id}}" method="post" class="action-table" >
          @csrf

            <button type="submit"><i class="fas fa-edit"></i></button>

        </form>
  @role('Admin|')
        <form action="/rooftank/delete/{{$rooftank->id}}" method="post" class="action-table"  onclick=" return confirm ('Yakin Mau Di Delet?');">
          @method('delete')
          @csrf

            <button type="submit"><i class="fas fa-trash-alt"></i></button>
        </form>
  @endrole
@endrole
            </ul>
            </td>
        </tr>
      @endforeach
      <tr align="align-middle" class="th-footer">
        <td colspan="6" >
            <div class="footer-menu">
                <h6 >Showing {{$Rooftank->firstItem()}} - {{$Rooftank->lastItem()}} from {{$Rooftank->total()}}</h6>
                {{$Rooftank->onEachSide(1)->links()}}
            </div>
        </td>
      </tr>
  @endsection

@endsection
