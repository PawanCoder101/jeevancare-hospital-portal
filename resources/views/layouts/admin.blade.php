<!DOCTYPE html>
<html lang="en" class="h-100" data-bs-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedanta Hospital Admin • @yield('title', 'Dashboard')</title>

    <!-- Favicon Include -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo17.png') }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #0066cc;
            --primary-light: #eef6ff;
            --sidebar-bg: #ffffff;
            --sidebar-hover: #f1f5f9;
            --text-main: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --bg-body: #f8fafc;
        }

        body {
            background: var(--bg-body);
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            color: var(--text-main);
            overflow-x: hidden;
        }

        /* Professional Header */
        .admin-header {
            height: 70px;
            background: var(--sidebar-bg);
            border-bottom: 1px solid var(--border-color);
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.02);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1040;
        }

        /* Professional Sidebar */
        .sidebar {
            width: 260px;
            background: var(--sidebar-bg);
            position: fixed;
            top: 70px;
            bottom: 0;
            left: 0;
            padding: 1.25rem 0.85rem;
            overflow-y: auto;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            border-right: 1px solid var(--border-color);
            z-index: 1030;
        }

        .sidebar a {
            color: var(--text-muted);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 0.75rem 1.15rem;
            font-weight: 500;
            font-size: 0.95rem;
            border-radius: 8px;
            margin-bottom: 6px;
            transition: all 0.2s ease;
            gap: 12px;
        }

        .sidebar a:hover {
            background: var(--sidebar-hover);
            color: var(--primary);
            transform: translateX(3px);
        }

        .sidebar a.active {
            background: var(--primary-light);
            color: var(--primary);
            font-weight: 600;
            box-shadow: inset 3px 0 0 var(--primary);
        }

        .sidebar a i {
            font-size: 1.2rem;
            transition: transform 0.2s ease;
        }

        .sidebar a:hover i {
            transform: scale(1.1);
        }

        /* Main Content Area */
        .content {
            margin-left: 260px;
            margin-top: 70px;
            padding: 2.25rem 2.5rem;
            min-height: calc(100vh - 70px);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Mobile Hamburger Toggle */
        .menu-toggle-btn {
            background: var(--sidebar-hover);
            border: none;
            font-size: 1.4rem;
            color: var(--text-main);
            cursor: pointer;
            padding: 6px 12px;
            border-radius: 8px;
            display: none;
        }

        /* ================= RESPONSIVE DESIGN ================= */
        @media (max-width: 992px) {
            .menu-toggle-btn {
                display: block;
            }

            .sidebar {
                left: -260px;
            }

            .content {
                margin-left: 0;
                padding: 1.5rem 1rem;
            }

            body.sidebar-open {
                overflow: hidden;
            }

            body.sidebar-open .sidebar {
                left: 0;
                box-shadow: 15px 0 30px rgba(0, 0, 0, 0.08);
            }

            body.sidebar-open::before {
                content: "";
                position: fixed;
                top: 0;
                left: 0;
                width: 100vw;
                height: 100vh;
                background: rgba(15, 23, 42, 0.4);
                backdrop-filter: blur(2px);
                z-index: 1025;
            }
        }

        /* Slim Scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 4px;
        }
        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }
        .sidebar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 10px;
        }
    </style>
</head>
<body>

<header class="admin-header d-flex align-items-center justify-content-between px-4">
    <div class="d-flex align-items-center gap-3">
        <button class="menu-toggle-btn" id="mobileSidebarToggle" type="button" aria-label="Toggle Navigation">
            <i class="bi bi-list"></i>
        </button>

        <!-- Brand Logo Image Only -->
        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
            <img src="{{ asset('assets/images/logo17.png') }}" alt="Vedanta Hospital Logo" style="height: 80px; width: auto;" class="img-fluid">
        </a>
    </div>

    <div class="d-flex align-items-center gap-4">
        <div class="d-flex align-items-center gap-3">
            <div class="bg-primary-subtle text-primary rounded-circle fw-bold d-flex align-items-center justify-content-center border border-primary-subtle shadow-sm" 
                 style="width:38px;height:38px;font-size:0.95rem;">
                {{ substr(session('admin_name') ?? 'A', 0, 1) }}
            </div>
            <div class="d-none d-md-block">
                <div class="fw-semibold text-dark lh-sm" style="font-size: 0.9rem;">{{ session('admin_name') ?? 'Administrator' }}</div>
            </div>
        </div>

        <form method="POST" action="{{ route('admin.logout') }}" class="m-0">
            @csrf
            <button type="submit" class="btn btn-outline-danger rounded-pill btn-sm px-3 py-1.5 fw-medium d-flex align-items-center gap-1.5">
                <i class="bi bi-box-arrow-right"></i> <span class="d-none d-sm-inline">Logout</span>
            </button>
        </form>
    </div>
</header>

<aside class="sidebar pt-3">
    <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
        <i class="bi bi-speedometer2"></i>
        <span>Dashboard</span>
    </a>

    <a href="{{ route('admin.departments.index') }}" class="{{ request()->routeIs('admin.departments.*') ? 'active' : '' }}">
        <i class="bi bi-building"></i>
        <span>Departments</span>
    </a>

    <a href="{{ route('admin.doctors.index') }}" class="{{ request()->routeIs('admin.doctors.*') ? 'active' : '' }}">
        <i class="bi bi-person-badge-fill"></i>
        <span>Doctors</span>
    </a>

    <a href="{{ route('admin.appointments.index') }}" class="{{ request()->routeIs('admin.appointments.*') ? 'active' : '' }}">
        <i class="bi bi-calendar-check-fill"></i>
        <span>Appointments</span>
    </a>

    <a href="{{ route('admin.contacts.index') }}" class="{{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}">
        <i class="bi bi-envelope-paper-fill"></i>
        <span>Contact Messages</span>
    </a>

    <a href="{{ route('admin.home.hero') }}" class="{{ request()->routeIs('admin.home.hero') ? 'active' : '' }}">
        <i class="bi bi-image-fill"></i>
        <span>Home Banner</span>
    </a>
</aside>

<main class="content">
    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const toggleBtn = document.getElementById('mobileSidebarToggle');
        
        if (toggleBtn) {
            toggleBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                document.body.classList.toggle('sidebar-open');
            });
        }

        document.addEventListener('click', function(e) {
            if (document.body.classList.contains('sidebar-open')) {
                const sidebar = document.querySelector('.sidebar');
                if (!sidebar.contains(e.target) && e.target !== toggleBtn) {
                    document.body.classList.remove('sidebar-open');
                }
            }
        });
    });
</script>
</body>
</html>