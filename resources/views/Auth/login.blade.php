<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Admin | Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #1c2f4b;
            --primary-dark: #142237;
            --primary-light: #1c2f4b88;
            --gray-100: #f3f4f6;
            --gray-200: #e5e7eb;
            --gray-400: #9ca3af;
            --gray-600: #4b5563;
            --gray-800: #1f2937;
            --error: #ef4444;
            --success: #10b981;
            --border-radius: 8px;
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-md: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: var(--gray-100);
            color: var(--gray-800);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            line-height: 1.5;
        }

        .login-container {
            width: 100%;
            max-width: 440px;
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--shadow-md);
            overflow: hidden;
        }

        .login-header {
            background-color: #1C2F4B;
            color: white;
            padding: 24px;
            text-align: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .login-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .login-header p {
            font-size: 0.875rem;
            opacity: 0.9;
        }

        .login-form {
            padding: 32px;
        }

        .brand-logo {
            display: flex;
            justify-content: center;
            margin-bottom: 24px;
        }

        .brand-logo img {
            height: 40px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.875rem;
            font-weight: 500;
            color: var(--gray-600);
        }

        .input-wrapper {
            position: relative;
        }

        .form-group input {
            width: 100%;
            padding: 10px 12px 10px 40px;
            border: 1px solid var(--gray-200);
            border-radius: var(--border-radius);
            font-size: 0.9375rem;
            transition: all 0.2s ease;
            background-color: var(--gray-100);
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--primary-light);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
            background-color: white;
        }

        .input-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
            font-size: 0.9375rem;
        }

        .password-toggle {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray-400);
            cursor: pointer;
            font-size: 0.9375rem;
        }

        .password-toggle:hover {
            color: var(--gray-600);
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
            font-size: 0.875rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input {
            width: 16px;
            height: 16px;
            border: 1px solid var(--gray-200);
            border-radius: 4px;
            accent-color: var(--primary);
        }

        .forgot-password a {
            color: var(--gray-600);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .forgot-password a:hover {
            color: var(--primary);
            text-decoration: underline;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: var(--primary);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-size: 0.9375rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-bottom: 24px;
        }

        .login-button:hover {
            background-color: var(--primary-dark);
        }

        .login-button:active {
            transform: translateY(1px);
        }

        .alert {
            padding: 12px 16px;
            border-radius: var(--border-radius);
            margin-bottom: 20px;
            font-size: 0.875rem;
            display: none;
        }

        .alert-error {
            background-color: rgba(239, 68, 68, 0.1);
            border-left: 3px solid var(--error);
            color: var(--error);
        }

        .alert-success {
            background-color: rgba(16, 185, 129, 0.1);
            border-left: 3px solid var(--success);
            color: var(--success);
        }

        .close-alert {
            float: right;
            cursor: pointer;
            font-weight: bold;
            margin-left: 8px;
        }

        .footer-text {
            text-align: center;
            font-size: 0.8125rem;
            color: var(--gray-400);
            margin-top: 16px;
            padding-top: 16px;
            border-top: 1px solid var(--gray-200);
        }

        @media (max-width: 480px) {
            .login-container {
                max-width: 100%;
            }

            .login-form {
                padding: 24px;
            }

            .options {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .forgot-password {
                width: 100%;
                text-align: right;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            @if(str_contains(request()->root(), '/public'))
                <img src="{{ url('public/frontend/images/aayatilegal-logo.webp') }}" style="width: 120px;" alt="Aayati Legal Logo">
            @else
                <img src="{{ url('frontend/images/aayatilegal-logo.webp') }}" style="width: 120px;" alt="Aayati Legal Logo">
            @endif
            <p>Access your content management system</p>
        </div>

        <div class="login-form">
            {{-- <div class="brand-logo">
                <!-- Replace with your actual logo -->
                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="40" height="40" rx="8" fill="#4F46E5"/>
                    <path d="M20 12L12 18V26L20 32L28 26V18L20 12Z" fill="white"/>
                    <path d="M20 22L16 19V25L20 28L24 25V19L20 22Z" fill="#4F46E5"/>
                </svg>
            </div> --}}

            <div id="error-alert" class="alert alert-error">
                <span class="close-alert" onclick="closeAlert('error-alert')">&times;</span>
                Invalid credentials. Please try again.
            </div>

            <div id="success-alert" class="alert alert-success">
                <span class="close-alert" onclick="closeAlert('success-alert')">&times;</span>
                Login successful. Redirecting to dashboard...
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="loginForm" method="POST" action="{{ url('backoffice/login') }}">
                @csrf
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" name="email" placeholder="admin@example.com" required>
                        <i class="fas fa-envelope input-icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" name="password" placeholder="••••••••" required>
                        <i class="fas fa-lock input-icon"></i>
                        <span class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye"></i>
                        </span>
                    </div>
                </div>

                <div class="options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <div class="forgot-password">
                        <a href="#">Forgot password?</a>
                    </div>
                </div>

                <button type="submit" class="login-button">
                    <i class="fas fa-sign-in-alt"></i> Log In
                </button>
            </form>

            <div class="footer-text">
                &copy; 2025. All rights reserved | Designed & Developed by <a href="{{url('/')}}" target="_blank" style="color: #4F46E5; text-decoration: none;">Aayati Legal</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const eyeIcon = document.querySelector('.password-toggle i');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                eyeIcon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                eyeIcon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        function closeAlert(alertId) {
            document.getElementById(alertId).style.display = 'none';
        }

        function showAlert(alertId) {
            // Hide all alerts first
            document.querySelectorAll('.alert').forEach(alert => {
                alert.style.display = 'none';
            });
            
            // Show the requested alert
            document.getElementById(alertId).style.display = 'block';
            
            // Auto-hide after 5 seconds
            setTimeout(() => {
                document.getElementById(alertId).style.display = 'none';
            }, 5000);
        }

        function handleLogin(event) {
            event.preventDefault();
            
            // Get form values
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            // Simulate validation - change this to test different scenarios
            const simulateSuccess = false; // Change to true to test success
            
            if (simulateSuccess) {
                showAlert('success-alert');
                // In a real app, you would redirect to the admin dashboard
                // setTimeout(() => { window.location.href = '/admin/dashboard'; }, 1500);
            } else {
                showAlert('error-alert');
            }
        }

        // Focus on email field when page loads
        document.addEventListener('DOMContentLoaded', () => {
            document.getElementById('email').focus();
        });
    </script>
</body>
</html>