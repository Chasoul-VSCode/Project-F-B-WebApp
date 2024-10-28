@extends('app.dashboard')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">Daftar Pesanan</h2>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Data Pesanan</h6>
            <button class="btn btn-primary btn-sm">
                <i class="bi bi-plus"></i> Tambah Pesanan
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID Pesanan</th>
                            <th>Tanggal</th>
                            <th>Pelanggan</th>
                            <th>Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ORD-001</td>
                            <td>2023-10-15</td>
                            <td>John Doe</td>
                            <td>Rp 500,000</td>
                            <td><span class="badge bg-success">Selesai</span></td>
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
                            <td>ORD-002</td>
                            <td>2023-10-14</td>
                            <td>Jane Smith</td>
                            <td>Rp 750,000</td>
                            <td><span class="badge bg-warning">Proses</span></td>
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
                            <td>ORD-003</td>
                            <td>2023-10-13</td>
                            <td>Steve Johnson</td>
                            <td>Rp 1,200,000</td>
                            <td><span class="badge bg-danger">Dibatalkan</span></td>
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
