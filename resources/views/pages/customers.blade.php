@extends('app.dashboard')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">Daftar Pelanggan</h2>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Pelanggan</h6>
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-plus"></i> Tambah Pelanggan
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Pelanggan</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No. Telepon</th>
                            <th>Total Pembelian</th>
                            <th>Status Member</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>CST-001</td>
                            <td>John Doe</td>
                            <td>john.doe@email.com</td>
                            <td>+62812-3456-7890</td>
                            <td>Rp 2,500,000</td>
                            <td><span class="badge bg-success">Gold</span></td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>CST-002</td>
                            <td>Jane Smith</td>
                            <td>jane.smith@email.com</td>
                            <td>+62812-9876-5432</td>
                            <td>Rp 1,750,000</td>
                            <td><span class="badge bg-primary">Silver</span></td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>CST-003</td>
                            <td>Steve Johnson</td>
                            <td>steve.j@email.com</td>
                            <td>+62811-2233-4455</td>
                            <td>Rp 850,000</td>
                            <td><span class="badge bg-secondary">Regular</span></td>
                            <td>
                                <button class="btn btn-info btn-sm">
                                    <i class="bi bi-eye"></i>
                                </button>
                                <button class="btn btn-warning btn-sm">
                                    <i class="bi bi-pencil"></i>
                                </button>
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
