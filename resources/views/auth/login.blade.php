<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 15px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-header h1 {
            color: #333;
            font-size: 24px;
        }
        @media (max-width: 768px) {
            .login-container {
                margin: 10px;
                padding: 15px;
            }
            .login-header h1 {
                font-size: 20px;
            }
            .form-label {
                font-size: 14px;
            }
            .btn {
                padding: 8px 16px;
            }
            .text-center {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="login-container">
            <div class="login-header">
                <h1>Login</h1>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="kode_pegawai" class="form-label">Kode Pegawai</label>
                    <input type="text" class="form-control @error('kode_pegawai') is-invalid @enderror" 
                           id="kode_pegawai" name="kode_pegawai" value="{{ old('kode_pegawai') }}" required autofocus>
                    @error('kode_pegawai')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <div class="d-grid gap-2">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Login</a>
                </div>

                <div class="text-center mt-3">
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-decoration-none">
                            Forgot Your Password?
                        </a>
                    @endif
                    <p class="mt-2">Don't have an account? <a href="{{ route('register') }}" class="text-decoration-none">Register here</a></p>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
