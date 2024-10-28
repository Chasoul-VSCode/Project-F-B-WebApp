@extends('app.dashboard')

@section('content')
<div class="container-fluid p-4">
    <h4 class="mb-4 text-secondary fw-bold">Menu Burger Bangor</h2>
    
    <div class="row">
        <!-- Menu Cards -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow h-100 border-0 rounded-3 hover-shadow">
                <div class="position-relative">
                    <img src="{{ asset('images/burger-jelata.jpg') }}" class="card-img-top rounded-top" alt="Jelata Burger" style="height: 200px; object-fit: cover;">
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-warning">Best Seller</span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column bg-light">
                    <h5 class="card-title text-primary fw-bold">Jelata Burger</h5>
                    <p class="card-text text-success fw-bold fs-5">Rp 15.000</p>
                    <div class="mb-3">
                        <label for="stok-jelata" class="form-label text-primary">Tambah Stok:</label>
                        <input type="number" class="form-control stok-input border-primary" id="stok-jelata" min="0" value="0" 
                               data-bahan='{"roti": 1, "patty_sapi": 1, "selada": 1, "saus": 1, "timun": 2}'>
                    </div>
                    <div class="mb-3 mt-auto">
                        <h6 class="fw-bold text-primary border-bottom pb-2">Bahan-bahan:</h6>
                        <ul class="list-unstyled mb-0 bahan-list">
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Roti burger: <span class="bahan-count badge bg-info" data-bahan="roti">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Patty daging sapi: <span class="bahan-count badge bg-info" data-bahan="patty_sapi">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Selada: <span class="bahan-count badge bg-info" data-bahan="selada">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Saus spesial: <span class="bahan-count badge bg-info" data-bahan="saus">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Timun: <span class="bahan-count badge bg-info" data-bahan="timun">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow h-100 border-0 rounded-3 hover-shadow">
                <div class="position-relative">
                    <img src="{{ asset('images/creamy-garlic.jpg') }}" class="card-img-top rounded-top" alt="Creamy Garlic" style="height: 200px; object-fit: cover;">
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-info">New</span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column bg-light">
                    <h5 class="card-title text-primary fw-bold">Creamy Garlic</h5>
                    <p class="card-text text-success fw-bold fs-5">Rp 25.000</p>
                    <div class="mb-3">
                        <label for="stok-creamy" class="form-label text-primary">Tambah Stok:</label>
                        <input type="number" class="form-control stok-input border-primary" id="stok-creamy" min="0" value="0"
                               data-bahan='{"roti": 1, "patty_sapi": 1, "saus_garlic": 2, "selada": 1, "bawang_putih": 3}'>
                    </div>
                    <div class="mb-3 mt-auto">
                        <h6 class="fw-bold text-primary border-bottom pb-2">Bahan-bahan:</h6>
                        <ul class="list-unstyled mb-0 bahan-list">
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Roti burger: <span class="bahan-count badge bg-info" data-bahan="roti">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Patty sapi: <span class="bahan-count badge bg-info" data-bahan="patty_sapi">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Saus garlic: <span class="bahan-count badge bg-info" data-bahan="saus_garlic">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Selada: <span class="bahan-count badge bg-info" data-bahan="selada">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Bawang putih: <span class="bahan-count badge bg-info" data-bahan="bawang_putih">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card shadow h-100 border-0 rounded-3 hover-shadow">
                <div class="position-relative">
                    <img src="{{ asset('images/bangor-juragan.jpg') }}" class="card-img-top rounded-top" alt="Bangor Juragan" style="height: 200px; object-fit: cover;">
                    <div class="position-absolute top-0 end-0 m-2">
                        <span class="badge bg-primary">Premium</span>
                    </div>
                </div>
                <div class="card-body d-flex flex-column bg-light">
                    <h5 class="card-title text-primary fw-bold">Bangor Juragan</h5>
                    <p class="card-text text-success fw-bold fs-5">Rp 30.000</p>
                    <div class="mb-3">
                        <label for="stok-juragan" class="form-label text-primary">Tambah Stok:</label>
                        <input type="number" class="form-control stok-input border-primary" id="stok-juragan" min="0" value="0"
                               data-bahan='{"roti_premium": 1, "patty_sapi": 2, "keju": 2, "selada": 1, "saus": 2, "bombay": 1}'>
                    </div>
                    <div class="mb-3 mt-auto">
                        <h6 class="fw-bold text-primary border-bottom pb-2">Bahan-bahan:</h6>
                        <ul class="list-unstyled mb-0 bahan-list">
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Roti premium: <span class="bahan-count badge bg-info" data-bahan="roti_premium">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Double patty sapi: <span class="bahan-count badge bg-info" data-bahan="patty_sapi">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Double keju: <span class="bahan-count badge bg-info" data-bahan="keju">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Selada: <span class="bahan-count badge bg-info" data-bahan="selada">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Saus spesial: <span class="bahan-count badge bg-info" data-bahan="saus">0</span></li>
                            <li class="py-1"><i class="bi bi-check-circle-fill text-success me-2"></i>Bawang bombay: <span class="bahan-count badge bg-info" data-bahan="bombay">0</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Continue with other menu items following same pattern -->
        <!-- Add remaining menu items: Bangor Ningrat, Bangor Sultan, Bangor BBQ Smoke Beef, 
             Bangor Pitik, Bangor Fish, Creamy Garlic Cheese, Bangor Pitik Fire -->

    </div>

    <!-- Total Bahan Section -->
    <div class="card mt-4 border-0 shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0 fw-bold"><i class="bi bi-calculator me-2"></i>Total Kebutuhan Bahan</h5>
        </div>
        <div class="card-body bg-light">
            <div class="row">
                <div class="col-md-4">
                    <h6 class="text-primary fw-bold border-bottom pb-2"><i class="bi bi-bread-slice me-2"></i>Roti:</h6>
                    <ul class="list-unstyled">
                        <li class="py-2 text-dark">Roti Regular: <span id="total-roti" class="badge bg-primary">0</span></li>
                        <li class="py-2 text-dark">Roti Premium: <span id="total-roti-premium" class="badge bg-primary">0</span></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="text-danger fw-bold border-bottom pb-2"><i class="bi bi-egg-fried me-2"></i>Daging:</h6>
                    <ul class="list-unstyled">
                        <li class="py-2 text-dark">Patty Sapi: <span id="total-patty-sapi" class="badge bg-danger">0</span></li>
                        <li class="py-2 text-dark">Patty Ayam: <span id="total-patty-ayam" class="badge bg-danger">0</span></li>
                        <li class="py-2 text-dark">Patty Ikan: <span id="total-patty-ikan" class="badge bg-danger">0</span></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h6 class="text-success fw-bold border-bottom pb-2"><i class="bi bi-box me-2"></i>Lainnya:</h6>
                    <ul class="list-unstyled">
                        <li class="py-2 text-dark">Selada: <span id="total-selada" class="badge bg-success">0</span></li>
                        <li class="py-2 text-dark">Saus: <span id="total-saus" class="badge bg-success">0</span></li>
                        <li class="py-2 text-dark">Keju: <span id="total-keju" class="badge bg-success">0</span></li>
                        <li class="py-2 text-dark">Bawang Bombay: <span id="total-bombay" class="badge bg-success">0</span></li>
                        <li class="py-2 text-dark">Bawang Putih: <span id="total-bawang-putih" class="badge bg-success">0</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-shadow:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
}

.card {
    transition: all 0.3s ease;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const stokInputs = document.querySelectorAll('.stok-input');
    
    stokInputs.forEach(input => {
        input.addEventListener('change', function() {
            updateBahanCounts(this);
            updateTotalBahan();
        });
    });

    function updateBahanCounts(input) {
        const card = input.closest('.card');
        const bahanData = JSON.parse(input.dataset.bahan);
        const stokValue = parseInt(input.value) || 0;
        
        Object.entries(bahanData).forEach(([bahan, jumlah]) => {
            const bahanSpan = card.querySelector(`[data-bahan="${bahan}"]`);
            if (bahanSpan) {
                bahanSpan.textContent = stokValue * jumlah;
            }
        });
    }

    function updateTotalBahan() {
        const totals = {
            roti: 0,
            roti_premium: 0,
            patty_sapi: 0,
            patty_ayam: 0,
            patty_ikan: 0,
            selada: 0,
            saus: 0,
            saus_garlic: 0,
            keju: 0,
            bombay: 0,
            bawang_putih: 0
        };

        stokInputs.forEach(input => {
            const bahanData = JSON.parse(input.dataset.bahan);
            const stokValue = parseInt(input.value) || 0;
            
            Object.entries(bahanData).forEach(([bahan, jumlah]) => {
                if (totals.hasOwnProperty(bahan)) {
                    totals[bahan] += stokValue * jumlah;
                }
            });
        });

        // Update total displays
        Object.entries(totals).forEach(([bahan, total]) => {
            const totalElement = document.getElementById(`total-${bahan.replace('_', '-')}`);
            if (totalElement) {
                totalElement.textContent = total;
            }
        });
    }
});
</script>

@endsection
