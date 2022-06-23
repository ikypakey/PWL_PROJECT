@extends('layout.main')

@section('content')                      
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Daftar Transaksi Pengembalian Buku</h1>
        <p class="mb-4">Berikut Merupakan Daftar Transaksi Pengembalian Buku Dalam Perpustakaan</p>

      @if(Session::has('berhasil'))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Success,</strong>
              {{ Session::get('berhasil') }}
          </div>
      @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
          <div class="card-body">
              <a href="" class="btn mb-3 btn-primary btn-icon-split btn-sm">Tambah Data Pengembalian</a>
              <a href="" class="btn mb-3 btn-primary btn-icon-split btn-sm">Cetak Data Pengembalian</a>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Id Pengembalian</th>
                    <th>Nama Peminjam</th>
                    <th>Nama Buku</th>
                    <th>Tanggal Peminjaman</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Petugas</th>
                    <th>Status</th>
                    <th>Denda</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($pengembalians as $kembali)
                  <tr>
                    <td>{{$kembali->id}}</td>
                    <td class="text-capitalize">{{$kembali->peminjaman->anggota->nama}}</td>
                    <td>{{$kembali->peminjaman->buku->judul_buku}}</td>
                    <td>{{$kembali->peminjaman->tanggal_pinjam}}</td>
                    <td>{{$kembali->tanggal_kembali}}</td>
                    <td>{{$kembali->peminjaman->user->nama}}</td>
                    <td>@if($kembali->peminjaman->status==1)
                        <span class="badge bg-warning text-dark">Dikembali</span>
                        @else
                        <span class="badge bg-success">Dikembalikan</span>
                        @endif
                    </td>
                    <td>@if($kembali->denda)
                        Rp. {{number_format($kembali->denda)}}
                        @else
                        -
                        @endif</td>
                    <td>
                      <form action="/pengembalian/{{$kembali->id}}" method="POST">@csrf
                        @method('DELETE')
                        <button onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini? ')" class="btn btn-danger"><i class="bi bi-trash"></i></button></form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
</div>
</div>       
@endsection