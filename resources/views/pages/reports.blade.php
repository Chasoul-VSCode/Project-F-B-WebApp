@extends('app.dashboard')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">Laporan</h2>

    <div class="row">
        <!-- Sales Report Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Laporan Penjualan</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Periode</th>
                                    <th>Total Penjualan</th>
                                    <th>Jumlah Order</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Juli 2023</td>
                                    <td>Rp 15,250,000</td>
                                    <td>145</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">
                                            <i class="bi bi-download"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Juni 2023</td>
                                    <td>Rp 14,800,000</td>
                                    <td>132</td>
                                    <td>
                                        <button class="btn btn-info btn-sm">
                                            <i class="bi bi-download"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Report Card -->
        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Laporan Produk</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nama Produk</th>
                                    <th>Terjual</th>
                                    <th>Pendapatan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Classic Burger</td>
                                    <td>250</td>
                                    <td>Rp 8,750,000</td>
                                    <td><span class="badge bg-success">Terlaris</span></td>
                                </tr>
                                <tr>
                                    <td>Cheese Burger</td>
                                    <td>180</td>
                                    <td>Rp 7,200,000</td>
                                    <td><span class="badge bg-primary">Normal</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Customer Report Card -->
        <div class="col-md-12 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Laporan Pelanggan</h5>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID Pelanggan</th>
                                    <th>Nama</th>
                                    <th>Total Pembelian</th>
                                    <th>Jumlah Order</th>
                                    <th>Level</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CST-001</td>
                                    <td>John Doe</td>
                                    <td>Rp 2,500,000</td>
                                    <td>25</td>
                                    <td><span class="badge bg-warning">Gold</span></td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                </tr>
                                <tr>
                                    <td>CST-002</td>
                                    <td>Jane Smith</td>
                                    <td>Rp 1,750,000</td>
                                    <td>15</td>
                                    <td><span class="badge bg-primary">Silver</span></td>
                                    <td><span class="badge bg-success">Aktif</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
