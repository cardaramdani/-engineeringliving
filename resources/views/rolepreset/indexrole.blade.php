@extends('layouts.index_logsheet')
@section('tambahan_link')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('title')
      Role Preset
@endsection
@section('li_tambahan')
      
              
      
@endsection
@section('main-container')
      <div class="header-c">
          <div class="judul-menu">
            {{$Role->links()}}
            <div class="title">Role<span>Permission</span></div>
            <ul>
              
              <li><a href="#"><i class="fas fa-info"></i></a></li>
              
              <li>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
                <i class="fas fa-plus-square"></i>
              </button>
              
              </li>
            </ul>

          </div>
          @if (session('status'))
          <div class="alert-success">
            <span> {{ session('status') }}</span>
          </div>
          @endif


          <div class="table">
          <table class="table-border">
            <thead>
              <tr>
  
                  <th scope="col" align="center" class="fixed">NO</th>
                  <th scope="col" align="center">Name</th>
                  <th scope="col">ACTION</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($Role as $result => $role)
                <tr>
                  <td align="center" class="font-weight-bold">{{$result + $Role->firstitem()}}</td>
                  <td align="center">{{$role->name}}</td>
                       
                  <td align="center" >
                    <ul class="align-middle">
                      <form action="/rolepreset/edit/{{$role->id}}" method="get" class="d-inline ">
                      @csrf
                      <li>
                        <!-- <button type="submit"><i class="fas fa-edit"></i></button> -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop1-{{$role->id}}" ><i class="fas fa-edit"></i>
                        </button>
                      </li>
                      </form>

                      <form action="/rolepreset/delete/{{$role->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
                        @method('delete')
                      @csrf
                      <li><button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button></li>
                      </form>
                    </ul>
                      
                    </td>
                
            
                </tr>
              @endforeach

              
 
              <!-- Modal add role-->
              <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">Add Role</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="/rolepreset/add">
                        @csrf
                        <div class="form-group">
                         <input type="text" class="form-control" placeholder="Role" name="role"required autocomplete="off">
                          
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>
                        
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>

              @foreach ($Role as $result => $role)

              <!-- Modal edit role-->
              <div class="modal fade" id="staticBackdrop1-{{$role->id}}" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="staticBackdropLabel">edit Role</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form method="post" action="/rolepreset/edit/{{$role->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                         <input type="text" class="form-control"  name="role"required autocomplete="off" value="{{$role->name}}">
                          </select>
                          <div class="invalid-feedback">input data sesuai aktual</div>
                        </div>
                      
                    </div>
                    <div class="modal-footer">
                      
                      <button type="submit" class="btn btn-primary">Update</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
              
            </tbody>
      </table>

      </div>
      </div>


    
@endsection

@section('tambahan_script')
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection
