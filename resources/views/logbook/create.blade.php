@extends('layouts.master')
@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
     Add Logsheet berita
@endsection
@section('li_tambahan')


@endsection
@section('main-container')
      <h1 class="my-2 " align="center">FORM LogBooks</h1>
    <!-- <a href="/amr/add" class="btn btn-outline-success my-3"  >Add Data AMR</a> -->
  <table class="table table-bordered table-striped m ">

  <thead class="fixed-header thead-dark" align="center">

<tr>

    <th scope="col" align="center" class="align-middle">Shift</th>
    <th scope="col" align="center" class="align-middle">Deskripsi</th>
</tr>
  </thead>

  <tbody>
      <form method="post" action="/logbook/add" >
      @csrf
      <input type="hidden" name="teknisi" value="{{Auth::user()->username}}">
<tr>
  <td align="center" class="align-middle">
  	<div class="form-group">
      <select class="custom-select" name="shift" required>
      <option value="">Open this select menu</option>
      <option value="Pagi">Pagi</option>
      <option value="Siang">Siang</option>
      <option value="Malam">Malam</option>
      </select>
      <div class="invalid-feedback">input data sesuai aktual</div>
      </div>
  </td>

  <td align="center" class="align-middle"><textarea  cols="90" rows="10" name="deskripsi"></textarea></td>
</tr>
<button class="btn-lg btn-primary col-md-12 fixed-bottom font-weight-bold"  type="submit" style="margin-left: inherit;">Submit form</button>
</form>
    </tbody>
@endsection
