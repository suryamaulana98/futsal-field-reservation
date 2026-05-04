@extends('layouts.app')

@section('title', 'Jaya Futsal | Reservasi Lapangan')

@section('content')
  <header class="hero-wrap position-relative overflow-hidden">
    <div class="hero-ornaments">
      <span class="hero-ornament ball"></span>
      <span class="hero-ornament arc"></span>
      <span class="hero-ornament goal"></span>
    </div>
    @include('partials.user.landing-navbar')

    <div class="container py-5 hero-content">
      <div class="row align-items-center g-4">
        <div class="col-lg-7">
          <p class="kicker mb-2">Sistem Reservasi Online</p>
          <div class="pitch-steps mb-3">
            <span class="pitch-step">Pilih Jadwal</span>
            <span class="pitch-step">Cek Slot</span>
            <span class="pitch-step">Bayar</span>
            <span class="pitch-step">Main</span>
          </div>
          <h1 class="display-2 hero-title mb-3">
            Main Futsal Jadi Lebih Gampang di Jaya Futsal
          </h1>
          <p class="lead text-dark-70 mb-4">
            Cek slot lapangan real-time, booking dalam hitungan menit, bayar
            langsung, dan pantau riwayat pertandinganmu dari satu dashboard.
          </p>
          <div class="d-flex flex-wrap gap-2">
            <a class="btn btn-accent btn-lg rounded-pill px-4" href="{{ url('/reservasi') }}">
              Mulai Reservasi
            </a>
            <a class="btn btn-outline-dark btn-lg rounded-pill px-4" href="#harga">
              Lihat Harga
            </a>
          </div>
          <div class="row g-3 mt-4 stat-row">
            <div class="col-6 col-md-4">
              <div class="stat-card">
                <h3>4</h3>
                <p>Lapangan Indoor</p>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="stat-card">
                <h3>24/7</h3>
                <p>Dukungan Reservasi</p>
              </div>
            </div>
            <div class="col-6 col-md-4">
              <div class="stat-card">
                <h3>1.2k+</h3>
                <p>Booking Sukses/Bulan</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="hero-visual">
            <img
              class="hero-pitch"
              src="{{ asset('assets/img/futsal-pitch.svg') }}"
              alt="Ilustrasi lapangan futsal"
            />
          </div>
          <div class="hero-panel p-4 p-md-5">
            <h2 class="h4 mb-3">Kenapa Pilih Jaya Futsal?</h2>
            <ul class="list-unstyled mb-0 d-grid gap-3">
              <li class="feature-chip">Tersedia jadwal per jam yang selalu update</li>
              <li class="feature-chip">Pembayaran fleksibel: transfer, e-wallet, QRIS</li>
              <li class="feature-chip">Bisa batalkan reservasi sesuai kebijakan</li>
              <li class="feature-chip">Program membership untuk diskon rutin</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section id="fitur" class="py-5">
      <div class="container py-4">
        <div class="text-center mb-4">
          <p class="section-kicker mb-2">Use Case User</p>
          <h2 class="section-title">Alur Utama Pengguna</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-xl-4">
            <article class="info-card h-100">
              <h3>Register & Login</h3>
              <p>
                Pengguna membuat akun baru atau masuk ke sistem sebelum melakukan
                reservasi lapangan.
              </p>
            </article>
          </div>
          <div class="col-md-6 col-xl-4">
            <article class="info-card h-100">
              <h3>Reservasi Lapangan</h3>
              <p>
                Pilih tanggal, jam, dan lapangan yang tersedia berdasarkan jadwal
                dan harga terkini.
              </p>
            </article>
          </div>
          <div class="col-md-6 col-xl-4">
            <article class="info-card h-100">
              <h3>Membayar Pesanan</h3>
              <p>
                Konfirmasi pesanan dan lanjutkan pembayaran dengan metode yang
                disediakan sistem.
              </p>
            </article>
          </div>
          <div class="col-md-6 col-xl-4">
            <article class="info-card h-100">
              <h3>Membatalkan Pesanan</h3>
              <p>
                Reservasi yang sudah dibuat dapat dibatalkan dari dashboard dengan
                status otomatis diperbarui.
              </p>
            </article>
          </div>
          <div class="col-md-6 col-xl-4">
            <article class="info-card h-100">
              <h3>Riwayat Booking</h3>
              <p>
                Semua transaksi terdahulu tersimpan agar pengguna mudah memantau
                aktivitas pemesanan.
              </p>
            </article>
          </div>
          <div class="col-md-6 col-xl-4">
            <article class="info-card h-100">
              <h3>Daftar Membership</h3>
              <p>
                Pengguna dapat mendaftar paket membership untuk mendapat harga
                lebih hemat.
              </p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section id="harga" class="py-5 band-section">
      <div class="container py-4">
        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-4">
          <div>
            <p class="section-kicker mb-2">Melihat Jadwal & Harga</p>
            <h2 class="section-title mb-0">Harga Sewa Lapangan</h2>
          </div>
          <a href="{{ url('/reservasi') }}#step-1" class="btn btn-dark rounded-pill px-4">
            Pilih Jadwal
          </a>
        </div>
        <div class="table-responsive">
          <table class="table table-pricing align-middle">
            <thead>
              <tr>
                <th>Waktu</th>
                <th>Senin - Jumat</th>
                <th>Sabtu - Minggu</th>
                <th>Status Umum</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>08:00 - 12:00</td>
                <td>Rp120.000/jam</td>
                <td>Rp150.000/jam</td>
                <td><span class="badge text-bg-success">Banyak Tersedia</span></td>
              </tr>
              <tr>
                <td>12:00 - 18:00</td>
                <td>Rp150.000/jam</td>
                <td>Rp180.000/jam</td>
                <td><span class="badge text-bg-warning">Terbatas</span></td>
              </tr>
              <tr>
                <td>18:00 - 23:00</td>
                <td>Rp200.000/jam</td>
                <td>Rp240.000/jam</td>
                <td><span class="badge text-bg-danger">Cepat Habis</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="membership" class="py-5">
      <div class="container py-4">
        <div class="row g-4 align-items-center">
          <div class="col-lg-7">
            <p class="section-kicker mb-2">Daftar Membership</p>
            <h2 class="section-title">Paket Member Jaya Futsal</h2>
            <p class="text-dark-70">
              Member dapat prioritas pemesanan jam prime time, diskon hingga 15%,
              dan akses promo bulanan.
            </p>
          </div>
          <div class="col-lg-5">
            <div class="membership-card">
              <h3 class="h5">Member Pro Team</h3>
              <p class="display-6 fw-bold mb-2">
                Rp299.000 <span class="fs-6 fw-normal">/bulan</span>
              </p>
              <ul class="list-unstyled d-grid gap-2 mb-3">
                <li>Diskon booking 15%</li>
                <li>Prioritas slot malam</li>
                <li>1 jam gratis tiap 10 jam main</li>
              </ul>
              <a href="{{ url('/reservasi') }}#membership-form" class="btn btn-accent w-100 rounded-pill">
                Daftar Sekarang
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  @include('partials.user.footer')
@endsection
