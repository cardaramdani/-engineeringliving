@extends('layouts.master')
@section('title')
      Filter-PM AC
@endsection
@section('li_tambahan')

@endsection
@section('main-container')
  <div class="header-c">
        <div class="judul-menu">

          <div class="title">filter PM.<span>AC</span></div>

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

                  <th scope="col" align="center" class="fixed">No</th>
                  <th scope="col" align="center" >Lokasi Unit</th>
                  <th scope="col" align="center">No Item</th>
                  <th scope="col" align="center">Tanggal Preventive</th>
                  <th scope="col" align="center" >teknisi</th>

                  <th scope="col">ACTION</th>

              </tr>
            </thead>

            <tbody>
                @php $no=1; @endphp
              @foreach ($Pmac as  $pmac)
                <tr>

                  <td align="center" class="font-weight-bold">{{$no++}}</td>
                  <td align="center">{{$pmac->lokasi_unit}}</td>
                  <td align="center">{{$pmac->item_no}}</td>
                  <td align="center">{{$pmac->created_at}}</td>
                  <td align="center">{{$pmac->teknisi}}</td>


                  <td align="center" >
                    <ul>
                      <form action="/ac/view/{{$pmac->id}}" method="post" class="d-inline ">
                        @csrf
                      <li>
                        <button type="submit"><i class="fas fa-eye"></i></button>
                      </li>
                      <br>
                      </form>
                      <form action="/ac/edit/{{$pmac->id}}" method="post" class="d-inline ">
                      @csrf
                      <li>
                        <button type="submit"><i class="fas fa-edit"></i></button>
                      </li>
                      <br>
                      </form>

                      <form action="/ac/delete/{{$pmac->id}}" method="post" class="d-inline " onclick=" return confirm ('Yakin Mau Di Delet?');">
                        @method('delete')
                      @csrf
                      <li>
                        <button type="submit"><i class="fas fa-trash-alt"></i></button>
                      </li>
                      </form>
                    </ul>

                    </td>

                </tr>
              @endforeach


            </tbody>
          </table>
        </div>
      </div>
@endsection

