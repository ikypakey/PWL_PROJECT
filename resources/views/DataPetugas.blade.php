﻿@extends('layout.main')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Petugas</h1>
    <p class="mb-4">Berikut merupakan data Petugas perpustakaan</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-body">
        <a href="#" class="btn mb-3 btn-primary btn-icon-split btn-sm" data-toggle="modal" data-target="#insertModal">
          <span class="icon text-white-50">
              <i class="fas fa-check"></i>
          </span>
          <span class="text">Tambah Data Anggota</span>
      </a>
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Petugas</th>
                <th>Email</th>
                <th>Username</th>
                <th>Bergabung Pada</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             
              @foreach ($users as $user)
              <tr>
              <td>{{$loop -> iteration}}</td>
              <td>{{$user->foto}}</td>
              <td class="text-capitalize">{{$user->nama}}</td>
              <td>{{$user->email}}</td>
              <td>{{$user->username}}</td>
              <td>{{$user->tanggaljoin}}</td>
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
<!-- End of Main Content -->
@endsection
