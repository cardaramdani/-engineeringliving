@extends('layouts.master')

@section('tambahan_link')

@endsection
@section('title')

@endsection

@section('li_tambahan')

@endsection


@section('main-container')
  <h1 align="center">Standart Operational Procedure</h1>

    <form action="/grafikdefect" method="get" class="d-inline">
      <!-- @method('update') -->
      @csrf
    <button type="submit" class="btn btn-outline-success">GRAFIK DEFECT</button>
  </form>

  <form action="/grafiklistrikunit" method="get" class="d-inline">
      <!-- @method('update') -->
      @csrf
    <button type="submit" class="btn btn-outline-success">Pemaikaian listrik unit</button>
  </form>
@endsection


@section('tambahan_script')

@endsection

