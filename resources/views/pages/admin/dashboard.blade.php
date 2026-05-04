@extends('layouts.admin')

@section('title', 'Admin Dashboard | Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Dashboard Admin Jaya Futsal',
    'active' => 'dashboard',
    'showWebsiteLink' => true,
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <div class="row g-3 mb-4">
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Total Jadwal</p>
            <h2 id="statTotalJadwal">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Validasi Pembayaran</p>
            <h2 id="statMenungguBayar">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Validasi Pembatalan</p>
            <h2 id="statMenungguBatal">0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Pendapatan Lunas</p>
            <h2 id="statPendapatan">Rp0</h2>
          </article>
        </div>
        <div class="col-6 col-lg-3">
          <article class="admin-stat-card">
            <p>Membership Aktif</p>
            <h2 id="statMembershipAktif">0</h2>
          </article>
        </div>
      </div>

      <section class="panel-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <h3 class="h5 mb-0">Aktivitas Reservasi Terbaru</h3>
          <a class="btn btn-sm btn-outline-dark" href="{{ url('/admin/reservasi') }}">
            Buka Kelola Reservasi
          </a>
        </div>
        <ul class="admin-activity-list mb-0" id="recentActivityList"></ul>
      </section>
    </div>
  </main>
@endsection
