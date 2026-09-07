<!DOCTYPE html>
<html lang="en">
<head>php
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | ACT Student Portal</title>

    <!-- Bootswatch Lux Theme -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-lux.min.css') }}">

    <style>
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fa;
        }

        .login-container {
            max-width: 1000px;
        }

        .login-brand {
            background: #000;
            color: white;
            min-height: 500px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 50px;
        }

        .login-form {
            background: white;
            min-height: 500px;
            padding: 50px;
        }

        .brand-logo {
            font-size: 55px;
            font-weight: bold;
        }

        .login-title {
            font-weight: bold;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
        }
    </style>
</head>

<body>

<div class="container login-container">
    <div class="row shadow-lg">

        <!-- Left Side -->
        <div class="col-lg-6 login-brand">
            <div class="brand-logo">ACT</div>

            <h1 class="mt-3">Student Portal</h1>

            <p class="lead">
                Welcome to the Associate in Computer Technology
                Student Portal.
            </p>

            <p>
                Sign in to access your account and continue your
                academic journey.
            </p>
        </div>

        <!-- Right Side -->
        <div class="col-lg-6 login-form">

            <h2 class="login-title mb-2">
                Welcome Back!
            </h2>

            <p class="text-muted mb-4">
                Please sign in to your account.
            </p>

            <!-- Login Form -->
            <form>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">
                        Email Address
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        id="email"
                        placeholder="Enter your email"
                        required
                    >
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">
                        Password
                    </label>

                    <input
                        type="password"
                        class="form-control"
                        id="password"
                        placeholder="Enter your password"
                        required
                    >
                </div>

                <!-- Remember Me -->
                <div class="form-check mb-4">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        id="remember"
                    >

                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>

                <!-- Login Button -->
                <button
                    type="submit"
                    class="btn btn-primary btn-login"
                >
                    Sign In
                </button>

            </form>

            <p class="text-center text-muted mt-4">
                ACT Student Portal
            </p>

        </div>

    </div>
</div>

<!-- Bootstrap JavaScript -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

</body>
</html>