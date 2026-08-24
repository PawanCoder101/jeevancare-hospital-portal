<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vedanta Hospital Admin • Secure Login</title>

    <link rel="icon" type="image/png" href="{{ asset('assets/images/logo17.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            font-family: 'Inter', sans-serif;
        }

        /* Full Screen Background Doctor Image */
        .login-bg-container {
            position: relative;
            width: 100vw;
            height: 100vh;
            background: url("{{ asset('assets/images/contactbanner1.jpg') }}") no-repeat center center;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Soft light overlay so the white card pops out cleanly */
        .login-bg-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(2, 44, 34, 0.35);
        }

        /* Clean White Glassmorphism Card matching the reference layout */
        .holo-login-card {
            position: relative;
            z-index: 10;
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1.5px solid rgba(255, 255, 255, 0.9);
            border-radius: 24px;
            padding: 2.5rem;
            width: 100%;
            max-width: 460px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25), 0 0 25px rgba(6, 95, 70, 0.15);
            color: #0f172a;
        }

        /* User Avatar Circle on Top */
        .holo-avatar {
            width: 70px;
            height: 70px;
            background: rgba(6, 95, 70, 0.1);
            border: 2px solid #065f46;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #065f46;
            font-size: 2rem;
            margin: -55px auto 1rem auto;
            box-shadow: 0 0 15px rgba(6, 95, 70, 0.2);
        }

        /* Clean White Inputs */
        .holo-input {
            background: #f8fafc !important;
            border: 1.5px solid #cbd5e1 !important;
            color: #0f172a !important;
            border-radius: 10px !important;
            padding: 0.75rem 0.75rem 0.75rem 2.75rem !important;
            font-size: 0.95rem !important;
        }

        .holo-input:focus {
            background: #ffffff !important;
            border-color: #065f46 !important;
            box-shadow: 0 0 0 4px rgba(6, 95, 70, 0.12) !important;
        }

        .input-icon-wrapper {
            position: relative;
            margin-bottom: 1.25rem;
        }

        .input-icon-wrapper .field-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
            font-size: 1.1rem;
            z-index: 5;
        }

        /* Primary Login Button */
        .btn-holo-primary {
            background: #065f46 !important;
            border: none !important;
            color: #ffffff !important;
            font-weight: 600;
            border-radius: 10px !important;
            padding: 0.8rem 1.5rem !important;
            transition: all 0.2s;
        }

        .btn-holo-primary:hover {
            background: #047857 !important;
            box-shadow: 0 8px 20px rgba(6, 95, 70, 0.3);
        }

        .form-check-input {
            border-color: #cbd5e1;
        }
    </style>
</head>
<body>

<div class="login-bg-container">
    <div class="holo-login-card">
        
        <!-- User Top Icon -->
        <div class="holo-avatar">
            <i class="bi bi-person-fill"></i>
        </div>

        <h3 class="text-center fw-bold mb-4 text-dark" style="letter-spacing: -0.5px; font-family: 'Plus Jakarta Sans', sans-serif;">User Login</h3>

        @if(session('error'))
            <div class="alert alert-danger bg-danger text-white border-0 py-2 small rounded-3 mb-3">
                <i class="bi bi-exclamation-triangle-fill me-1"></i> {{ session('error') }}
            </div>
        @endif

        <form id="adminLoginForm" action="{{ route('admin.login.submit') }}" method="POST">
            @csrf

            <!-- Username / Email Field -->
            <div class="input-icon-wrapper">
                <i class="bi bi-person-fill field-icon"></i>
                <input type="email" 
                       name="email" 
                       class="form-control holo-input" 
                       placeholder="Username or Email" 
                       required>
            </div>

            <!-- Password Field -->
            <div class="input-icon-wrapper">
                <i class="bi bi-lock-fill field-icon"></i>
                <input type="password" 
                       id="login_pass"
                       name="password" 
                       class="form-control holo-input" 
                       placeholder="***********" 
                       required>
                <i class="bi bi-eye-slash password-toggle-icon" id="togglePassword" style="position: absolute; right: 14px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #64748b;"></i>
            </div>

            <!-- Remember me & Forgot password links -->
            <div class="d-flex justify-content-between align-items-center mb-4 small">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label text-secondary" for="rememberMe" style="font-size: 0.8rem;">
                        Keep me logged in for 7 days
                    </label>
                </div>
                <a href="#" class="text-success text-decoration-none fw-semibold" style="font-size: 0.8rem;">Forgot password?</a>
            </div>

            <!-- Full Width Action Button (Cancel Removed) -->
            <button type="submit" id="loginBtn" class="btn btn-holo-primary w-100">
                <span id="btnText">Log in</span>
                <div id="btnSpinner" class="spinner-border spinner-border-sm text-white d-none" role="status"></div>
            </button>
        </form>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInput = document.getElementById('login_pass');
        const togglePasswordIcon = document.getElementById('togglePassword');

        if (togglePasswordIcon && passwordInput) {
            togglePasswordIcon.addEventListener('click', function() {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
                this.classList.toggle('bi-eye');
                this.classList.toggle('bi-eye-slash');
            });
        }

        const form = document.getElementById('adminLoginForm');
        const loginBtn = document.getElementById('loginBtn');
        const btnText = document.getElementById('btnText');
        const btnSpinner = document.getElementById('btnSpinner');

        if(form) {
            form.addEventListener('submit', function() {
                loginBtn.disabled = true;
                btnText.textContent = "Logging in...";
                btnSpinner.classList.remove('d-none');
            });
        }
    });
</script>
</body>
</html>