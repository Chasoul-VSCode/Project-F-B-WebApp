<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard F&B</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                transform: translateX(-100%);
                padding-top: 60px;
            }

            .sidebar.collapsed {
                width: 100%;
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0 !important;
                padding-top: 60px;
            }

            .navbar-brand {
                font-size: 1rem;
            }

            .user-info span {
                display: none;
            }

            .sidebar.collapsed ~ .main-content {
                margin-left: 0;
            }

            .sidebar-overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0,0,0,0.5);
                z-index: 99;
            }

            .sidebar-overlay.show {
                display: block;
            }
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 100;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
            background-color: #343a40;
            width: 250px;
            transition: all 0.3s;
        }
        
        .sidebar.collapsed {
            width: 60px;
        }

        .sidebar.collapsed .nav-link span {
            display: none;
        }

        .sidebar.collapsed ~ .main-content {
            margin-left: 60px;
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: .5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .navbar {
            height: 48px;
            background-color: #343a40 !important;
        }

        .sidebar .nav-link {
            color: #fff;
            padding: 10px 20px;
            white-space: nowrap;
        }

        .sidebar .nav-link:hover {
            background-color: #495057;
        }

        .sidebar .nav-link i {
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s;
        }

        .navbar-brand {
            padding-left: 20px;
            color: #fff !important;
        }

        .user-info {
            color: #fff;
            padding-right: 20px;
        }

        #sidebarToggle {
            background: none;
            border: none;
            color: white;
            padding: 0 15px;
            z-index: 101;
        }

        #sidebarToggle:focus {
            outline: none;
        }
    </style>
</head>
<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <div class="d-flex align-items-center">
                <button id="sidebarToggle">
                    <i class="bi bi-list"></i>
                </button>
                <a class="navbar-brand" href="#">F&B Management System</a>
            </div>
            <div class="user-info d-flex align-items-center">
                <i class="bi bi-person-circle me-2"></i>
                <span>Welcome, Admin</span>
            </div>
        </div>
    </nav>

    <!-- Sidebar Overlay -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>

    <!-- Sidebar -->
    <nav class="sidebar" id="sidebar">
        <div class="sidebar-sticky">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('analis') }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('products') }}">
                        <i class="bi bi-box"></i>
                        <span>Products</span>
                    </a>
                </li>
              
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reports') }}">
                        <i class="bi bi-file-text"></i>
                        <span>Reports</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('setting') }}">
                        <i class="bi bi-gear"></i>
                        <span>Settings</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <a class="nav-link" href="{{ route('logout') }}">
                        <i class="bi bi-box-arrow-right"></i>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('collapsed');
            document.getElementById('sidebarOverlay').classList.toggle('show');
        });

        document.getElementById('sidebarOverlay').addEventListener('click', function() {
            document.getElementById('sidebar').classList.remove('collapsed');
            this.classList.remove('show');
        });

        // Close sidebar when clicking nav links on mobile
        if (window.innerWidth <= 768) {
            document.querySelectorAll('.nav-link').forEach(link => {
                link.addEventListener('click', () => {
                    document.getElementById('sidebar').classList.remove('collapsed');
                    document.getElementById('sidebarOverlay').classList.remove('show');
                });
            });
        }
    </script>
</body>
</html>
