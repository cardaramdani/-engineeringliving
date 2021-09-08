@extends('layouts.index_logsheet')
@section('title')
     Users
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
    <div class="header-c">

          <div class="judul-menu">

            <div class="title">User<span>_List</span></div>


            <ul>

              <!--search box start-->
              <form class="search-box" action="/Users/cari" method="post">
                @csrf
                <input type="text" name="#" value="" placeholder="Search">
                <button class="search-btn" type="submit">
                 <i class="fas fa-search"></i>
                </button>
              </form>
              <!--search box end-->


              <li><a href="#"><i class="fas fa-info"></i></a></li>
              <form id="Users-add-form" action="{{route('register')}}" method="get" style="display: none;">
                    @csrf
                </form>
              <li>


                <a href=""onclick="event.preventDefault();
                  document.getElementById('Users-add-form').submit();">
                  <i class="fas fa-plus-square"></i>
                </a>

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
                  <th scope="col" align="center" class="align-middle">No </th>
                  <th scope="col" align="center" class="align-middle">Nama</th>
                  <th scope="col" align="center" class="align-middle">Depeartement</th>
                  <th scope="col" align="center" class="align-middle">Role</th>
                  <th scope="col" align="center" class="align-middle">Email</th>
                  <th scope="col" align="center" class="align-middle">Contact</th>
                  <th scope="col" align="center" class="align-middle">Title</th>
                  <th scope="col" align="center" class="align-middle">Picture</th>
                  <th scope="col" align="center" class="align-middle">Action</th>

              </tr>
            </thead>

            <tbody>
              @foreach ($Users as $user)
                <tr>
                  <td align="center" class="font-weight-bold align-middle fixed">{{$loop->iteration}}</td>
                  <td align="center" class="align-middle">{{$user->username}}</td>
                  <td align="center" class="align-middle">{{$user->departement}}</td>
                  <td align="center" class="align-middle">{{print_r($user->getRoleNames()[0], 1)}}</td>
                  <td align="center" class="align-middle">{{$user->email}}</td>
                  <td align="center" class="align-middle">{{$user->nohp}}</td>
                  <td align="center" class="align-middle">{{$user->jabatan}}</td>
                  <td align="center" class="align-middle">
                      <a href="{{ url('/dataIMG_user/'.$user->gambar) }}" title="click to ZOOM" class="MagicZoom" rel="zoom-id:zoom;opacity-reverse:true;">
                        <img src="{{ url('/dataIMG_user/'.$user->gambar) }}" style="width:50px; height:50px;"/>
                      </a>
                  </td>

@role('Admin')
                  <td align="center" >
                    <ul class="align-middle">

                      <form action="/user/update/{{$user->id}}" method="post" class="d-inline ">
                      @csrf
                      <li><button type="submit"><i class="fas fa-edit"></i></button></li>
                      </form>

                      <form action="/users/delete/{{$user->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
                        @method('delete')
                      @csrf
                      <li><button type="submit"><i class="fas fa-trash-alt"></i></button></li>
                      </form>
                    </ul>

                    </td>
@endrole

                </tr>
              @endforeach


            </tbody>
          </table>
        </div>
        </div>


@endsection

