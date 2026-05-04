@extends('layouts.admin')

@section('title', 'Kelola Reservasi | Admin Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Kelola Reservasi',
    'active' => 'reservasi',
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Menunggu Validasi Bayar</p>
            <h2 id="rvMenungguBayar">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Menunggu Validasi Batal</p>
            <h2 id="rvMenungguBatal">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Reservasi Disetujui</p>
            <h2 id="rvDisetujui">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Reservasi Selesai</p>
            <h2 id="rvSelesai">0</h2>
          </article>
        </div>
      </div>

      <section class="panel-box mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <h2 class="h5 mb-0">Validasi Pembayaran & Pembatalan</h2>
          <span class="badge text-bg-dark">Kelola Reservasi</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>Nama Tim</th>
                <th>Tanggal</th>
                <th>Lapangan</th>
                <th>Jam</th>
                <th>Durasi</th>
                <th>Total</th>
                <th>Pembayaran</th>
                <th>Pembatalan</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="reservasiTableBody"></tbody>
          </table>
        </div>
      </section>

      <section class="panel-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <h2 class="h5 mb-0">Melihat Riwayat Penyewaan</h2>
          <span class="badge text-bg-secondary">Histori</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>Tanggal</th>
                <th>Nama Tim</th>
                <th>Lapangan</th>
                <th>Total</th>
                <th>Status Akhir</th>
              </tr>
            </thead>
            <tbody id="riwayatSewaBody"></tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
@endsection
