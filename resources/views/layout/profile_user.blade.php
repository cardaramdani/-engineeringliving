



<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Profile user</title>
</head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active font-weight-bold border border-primary rounded">
        <a class="nav-link text-primary" href="{{ url('/homescreen')}}">Home</a>
        <span class="sr-only">(current)</span>
      </li>
      
    </ul>
</div>
</nav>
    <h1 align="center" class="my-5">Update Users</h1>
    
<form method="POST" action="/user/update/{{$User->id}}" enctype="multipart/form-data">
        @method('patch')
      @csrf
  <div class="card mb-3" style="max-width: 1290px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ url('/dataIMG_user/'.$User->gambar) }}" style="width:430px; height:430px;" class="card-img" alt="...">

      <div class="custom-file">
            <input type="file" class="custom-file-input" name="gambaruser" >
            <label class="custom-file-label @error('gambaruser') is-invalid @enderror" align="left" for="gambaruser">Upload gambar. . .</label>
            @error('gambaruser')
        <div class="invalid-feedback">{{$message}}</div>
        @enderror
    </div>

    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Profile</h5>
      <input type="hidden" name="Gambarlama" value="{{$User->gambar}}">
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="username">Username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{$User->username}}" required>
                @error('username')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$User->email}}" required>
              @error('email')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
              <label for="nohp">No Telpon</label>
              <input type="number" class="form-control @error('nohp') is-invalid @enderror" id="notelpon" name="nohp" value="{{$User->nohp}}" required>
              @error('nohp')
                <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="departement">Departement</label>
                <select id="departement" name="departement" class="form-control">
                  <option selected >{{$User->departement}}</option>
                  <option select>Engineering</option>
                  <option select>Finance</option>
                  <option select>TR</option>
                  <option select>GA</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label for="jabatan">Title</label>
                <select id="jabatan" name="jabatan" class="form-control">
                  <option selected >{{$User->jabatan}}</option>
                  <option select>Teknisi</option>
                  <option select>Supervisor</option>
                  <option select>Chief</option>
                </select>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="role">Role</label>
                <select id="role" name="role" class="form-control" >
                  <option selected >{{$Role_name}}</option>
                  @foreach($Role as $role)
                  <option value="{{$role->name}}">{{$role->name}}</option>
                  @endforeach
                  
                </select>
              </div>

             <!--  <div class="form-group col-md-6">
                <label for="permission">Permission</label>
                <select id="permission" name="permission[]" class="form-control" multiple>
                  <option selected >Pilih permission</option>
                  @foreach($Permission as $permission)
                  <option value="{{$permission->id}}">{{$permission->name}}</option>
                  @endforeach
                </select>
              </div>
            </div> -->

              <div class="input-group col-md-6">
                    <label for="permission">Permission</label>
                    @foreach($Permission as $permission)
              <div class="input-group row-md-6">
                    <label for="permission">{{$permission->name}}</label>
                    <input type="checkbox" id="checkboxid" aria-label="Checkbox for following input" name="permission[]" value="{{$permission->name}}">
              </div>
                    @endforeach
                  
              </div>
            <button type="hidden" class="btn btn-primary col-2" >Update Profile</button>
      </form>
      
      </div>
    </div>
  </div>
</div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </tbody>
  
</html>