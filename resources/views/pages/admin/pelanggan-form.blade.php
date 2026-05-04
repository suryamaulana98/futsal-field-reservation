@extends('layouts.admin')

@section('title', 'Form Pelanggan | Admin Jaya Futsal')

@section('content')
  @include('partials.admin.header', [
    'title' => 'Form Pelanggan',
    'active' => 'pelanggan',
  ])

  <main class="py-4 py-lg-5">
    <div class="container">
      <section class="panel-box admin-form-card mx-auto" style="max-width: 760px">
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-3">
          <div>
            <h2 class="h5 mb-1">Input Pelanggan</h2>
            <p class="text-secondary small mb-0" id="pelangganFormMode">
              Mode: Tambah Pelanggan
            </p>
          </div>
          <a href="{{ url('/admin/pelanggan') }}" class="btn btn-outline-dark btn-sm">
            Kembali ke List
          </a>
        </div>

        <form id="pelangganFormAdmin" class="row g-3">
          <input type="hidden" id="pelangganId" />
          <div class="col-md-6">
            <label class="form-label" for="pelangganNama">Nama Pelanggan</label>
            <input class="form-control" id="pelangganNama" type="text" required />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="pelangganTelepon">Telepon</label>
            <input class="form-control" id="pelangganTelepon" type="text" required />
          </div>
          <div class="col-12">
            <label class="form-label" for="pelangganEmail">Email</label>
            <input class="form-control" id="pelangganEmail" type="email" required />
          </div>
          <div class="col-12">
            <label class="form-label" for="pelangganStatusMember">Status Membership</label>
            <select class="form-select" id="pelangganStatusMember">
              <option>Member</option>
              <option>Non Member</option>
            </select>
          </div>
          <div class="col-12 d-flex gap-2 flex-wrap">
            <button class="btn btn-accent" type="submit">Simpan Pelanggan</button>
            <button class="btn btn-outline-dark" id="pelangganCancel" type="button">Batal</button>
          </div>
        </form>
      </section>
    </div>
  </main>
@endsection
