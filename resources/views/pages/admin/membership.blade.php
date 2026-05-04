@extends('layouts.admin')

@section('title', 'Kelola Data Membership | Admin Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Kelola Data Membership',
    'active' => 'membership',
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <section class="panel-box">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <div>
            <h2 class="h5 mb-1">Data Membership</h2>
            <p class="text-secondary small mb-0">
              Halaman list membership terpisah dari form input/edit.
            </p>
          </div>
          <a href="{{ url('/admin/membership/form') }}" class="btn btn-accent">
            + Tambah Membership
          </a>
        </div>
        <div class="table-responsive">
          <table class="table align-middle">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama Tim</th>
                <th>Paket</th>
                <th>Masa Aktif</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody id="membershipTableBody"></tbody>
          </table>
        </div>
      </section>
    </div>
  </main>
@endsection
