@extends('layouts.admin')

@section('title', 'Kelola Jadwal Lapangan | Admin Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Kelola Jadwal Lapangan',
    'active' => 'jadwal',
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <section class="panel-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <div>
            <h2 class="h5 mb-1">Data Jadwal Lapangan</h2>
            <p class="text-secondary small mb-0">
              Halaman ini fokus untuk melihat data dan aksi edit/hapus.
            </p>
          </div>
          <a href="{{ url('/admin/jadwal/form') }}" class="btn btn-accent">+ Tambah Jadwal</a>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Lapangan</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="jadwalTableBody"></tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
@endsection
