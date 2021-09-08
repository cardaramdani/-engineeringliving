@extends('layouts.master')

@section('tambahan_link')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
    MyProfile
@endsection

@section('li_tambahan')

@endsection


@section('main-container')

<div class="card" style="width: calc(100% - 60px); height: 40px; margin-left: 20px;" >
  <h3 class="card-title" align="center">My Profile </h3>
  <form method="POST" action="/user/edit/{{$User->id}}" enctype="multipart/form-data">
      @method('patch')
      @csrf
      <input type="hidden" name="Gambarlama" value="{{$User->gambar}}">

  <div class="card-body">
  <img class="card-img-top" src="{{ url('/dataIMG_user/'.$User->gambar) }}" alt="foto profile" style="width: calc(60% - 60px); ">
    <div class="custom-file" style="width: calc(60% - 60px); ">
            <input type="file" class="custom-file-input" name="gambaruser" >
            <label class="custom-file-label @error('gambaruser') is-invalid @enderror" align="left" for="gambaruser">Upload gambar. . .</label>
            @error('gambaruser')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    <div class="form-row">
              <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{$User->username}}" required>
                @error('username')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$User->email}}" required>
                @error('email')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>

              <div class="form-group col-md-6">
                <label for="nohp">No Telpon</label>
                <input type="number" class="form-control @error('nohp') is-invalid @enderror" id="notelpon" name="nohp" value="{{$User->nohp}}" required>
                @error('nohp')
                  <div class="invalid-feedback">{{$message}}</div>
                  @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="departement">Departement</label>
                <select id="departement" name="departement" class="form-control">
                  <option selected>{{$User->departement}}</option>
                  <option select>TR</option>
                  <option select>FA</option>
                  <option select>Engineering</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="jabatan">Title</label>
                <select id="jabatan" name="jabatan" class="form-control">
                  <option selected>{{$User->jabatan}}</option>
                  <option select>Supervisor</option>
                  <option select>chief</option>
                </select>
              </div>
            </div>


              <h1 align="center">
            <button type="submit" class="btn btn-primary col-8" align="center">Update Profile </button>
            </h1>
  </div>
</form>
</div>

@endsection


@section('tambahan_script')

@endsection
