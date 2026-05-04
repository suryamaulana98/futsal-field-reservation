@extends('layouts.admin')

@section('title', 'Laporan Penyewaan & Keuangan | Admin Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Laporan Penyewaan & Keuangan',
    'active' => 'laporan',
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Total Pendapatan</p>
            <h2 id="lapTotalPendapatan">Rp0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Total Transaksi Lunas</p>
            <h2 id="lapTotalTransaksi">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Total Dibatalkan</p>
            <h2 id="lapTotalBatal">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Rata-rata Transaksi</p>
            <h2 id="lapRataRata">Rp0</h2>
          </article>
        </div>
      </div>

      <section class="panel-box mb-4">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <h2 class="h5 mb-0">Laporan Penyewaan</h2>
          <span class="badge text-bg-dark">Data Operasional</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Tim</th>
                <th>Lapangan</th>
                <th>Durasi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody id="laporanSewaBody"></tbody>
          </table>
        </div>
      </section>

      <section class="panel-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <h2 class="h5 mb-0">Laporan Keuangan Bulanan</h2>
          <span class="badge text-bg-secondary">Ringkasan</span>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>Bulan</th>
                <th>Transaksi Lunas</th>
                <th>Reservasi Batal</th>
                <th>Pendapatan</th>
              </tr>
            </thead>
            <tbody id="laporanKeuanganBody"></tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
@endsection
