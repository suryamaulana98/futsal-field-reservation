@extends('layouts.admin')

@section('title', 'Kelola Daftar Pelanggan | Admin Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Kelola Daftar Pelanggan',
    'active' => 'pelanggan',
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <section class="panel-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <div>
            <h2 class="h5 mb-1">Daftar Pelanggan</h2>
            <p class="text-secondary small mb-0">
              Halaman list pelanggan dipisah dari form tambah/edit.
            </p>
          </div>
          <a href="{{ url('/admin/pelanggan/form') }}" class="btn btn-accent">+ Tambah Pelanggan</a>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="pelangganTableBody"></tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
@endsection
