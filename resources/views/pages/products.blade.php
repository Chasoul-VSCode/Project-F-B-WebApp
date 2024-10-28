@extends('app.dashboard')

@section('content')
<div class="container-fluid p-4">
    <h2 class="mb-4">Daftar Produk</h2>

    <div class="row">
        <!-- Add Product Button -->
        <div class="col-12 mb-4">
            <button class="btn btn-primary">
                <i class="bi bi-plus"></i> Tambah Produk
            </button>
        </div>

        <!-- Product Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Classic Burger</h5>
                    <p class="card-text">Burger dengan daging sapi, selada, tomat, dan saus spesial.</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h6 mb-0">Rp 35,000</span>
                        <span class="badge bg-success">Tersedia</span>
                    </div>
                    <div class="btn-group w-100">
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Cheese Burger</h5>
                    <p class="card-text">Burger dengan double keju, daging sapi, dan sayuran segar.</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h6 mb-0">Rp 40,000</span>
                        <span class="badge bg-success">Tersedia</span>
                    </div>
                    <div class="btn-group w-100">
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">BBQ Burger</h5>
                    <p class="card-text">Burger dengan saus BBQ, daging sapi, bawang goreng.</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h6 mb-0">Rp 45,000</span>
                        <span class="badge bg-success">Tersedia</span>
                    </div>
                    <div class="btn-group w-100">
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">French Fries</h5>
                    <p class="card-text">Kentang goreng renyah dengan bumbu spesial.</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h6 mb-0">Rp 20,000</span>
                        <span class="badge bg-success">Tersedia</span>
                    </div>
                    <div class="btn-group w-100">
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Cola</h5>
                    <p class="card-text">Minuman bersoda dingin yang menyegarkan.</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h6 mb-0">Rp 10,000</span>
                        <span class="badge bg-success">Tersedia</span>
                    </div>
                    <div class="btn-group w-100">
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Milkshake</h5>
                    <p class="card-text">Milkshake vanilla/coklat/strawberry.</p>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="h6 mb-0">Rp 15,000</span>
                        <span class="badge bg-success">Tersedia</span>
                    </div>
                    <div class="btn-group w-100">
                        <button class="btn btn-info btn-sm">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm">
                            <i class="bi bi-pencil"></i>
                        </button>
                        <button class="btn btn-danger btn-sm">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
