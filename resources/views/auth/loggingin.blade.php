<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SMKN 1 Jakarta</title>
    <link rel="stylesheet" href="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.css">
    <link rel="stylesheet" href="https://preview.keenthemes.com/metronic8/demo1/assets/css/style.bundle.css">
    <link rel="shortcut icon" href="https://preview.keenthemes.com/metronic8/demo1/assets/media/logos/favicon.ico"/>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" rel="stylesheet">
</head>
<body class="bg-body">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-column-fluid flex-center flex-lg-row" style="background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/auth/bg4.jpg'); background-repeat: no-repeat; background-size: cover;">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10">
                <!--begin::Signin-->
                <div class="login-form login-signin">
                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ $value }}
                        </div>
                    @endsession
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-white mb-3">Sign In</h1>
                            <p class="text-white opacity-80">Enter your username and password</p>
                        </div>
                        <!-- Input fields -->
                        <div class="fv-row mb-10">
                            <input type="text" placeholder="Email" name="email" class="form-control form-control-solid h-auto py-7 px-6 bg-white border-0 rounded-lg fs-3 text-primary" />
                        </div>
                        <div class="fv-row mb-10">
                            <input type="password" placeholder="Password" name="password" class="form-control form-control-solid h-auto py-7 px-6 bg-white border-0 rounded-lg fs-3 text-primary" />
                        </div>
                        <!-- Actions -->
                        <div class="text-center">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary fw-bolder me-3 my-2 px-8 py-4">Sign In</button>
                        </div>
                    </form>
                </div>
                <!--end::Signin-->
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://preview.keenthemes.com/metronic8/demo1/assets/plugins/global/plugins.bundle.js"></script>
    <script src="https://preview.keenthemes.com/metronic8/demo1/assets/js/scripts.bundle.js"></script>
</body>
</html>
