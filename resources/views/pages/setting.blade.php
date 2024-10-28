@extends('app.dashboard')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">Pengaturan</h2>

    <div class="row">
        <!-- Profile Settings Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title mb-4">Profil Pengguna</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" value="Admin">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="admin@example.com">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Telepon</label>
                            <input type="tel" class="form-control" value="+62812-3456-7890">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Security Settings Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title mb-4">Keamanan</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Password Lama</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password Baru</label>
                            <input type="password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Password</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- System Settings Card -->
        <div class="col-md-12 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title mb-4">Pengaturan Sistem</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Zona Waktu</label>
                            <select class="form-select">
                                <option selected>Asia/Jakarta (GMT+7)</option>
                                <option>Asia/Makassar (GMT+8)</option>
                                <option>Asia/Jayapura (GMT+9)</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Bahasa</label>
                            <select class="form-select">
                                <option selected>Indonesia</option>
                                <option>English</option>
                            </select>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="notifications" checked>
                            <label class="form-check-label" for="notifications">Aktifkan Notifikasi</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="emailAlerts" checked>
                            <label class="form-check-label" for="emailAlerts">Terima Email Alert</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan Pengaturan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
