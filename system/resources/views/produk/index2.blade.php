@extends('template.base')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 mt-5">
      <div class="card">
        <div class="card-header">
          <h3 class="mb-0">Data produk
            <a href="{{ url('produk/create') }}" class="btn btn-dark float-right">
              <i class="fa fa-plus"></i>
              Tambah data
            </a>
          </h3>
        </div>
                <!-- Light table -->
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <th>No</th>
                <th>Aksi</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
            </thead>
            <tbody class="list">
            	@foreach ($list_produk as $produk)
             <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                	<div class=" btn-group">

                    <a href="{{ url('produk', $produk->id) }}" class="btn btn-dark">
                      <i class="fa fa-info"></i>
                    </a>
                    <a href="{{ url('produk', $produk->id) }}/edit" class="btn btn-warning">
                      <i class="fa fa-edit"></i>
                    </a>
                     @include('template.utils.delete', ['url' =>url('produk', $produk->id)])
                  </td>

                  </div>
                <td>{{ $produk->nama }}</td>
                <td>{{ $produk->harga }}</td>
                <td>{{ $produk->stok }}</td>
              </tr>
             @endforeach
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>      


@endsection