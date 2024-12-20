<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="icon" href="<?= base_url('assets/img/logo-umby-tab.png') ?>" type="image/x-icon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f4f4f4;
        }

        .login-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 1200px;
            width: 100%;
            height: 80vh;
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .logo-container {
            flex: 1;
            background-image: url('<?= base_url('assets/img/logo-umby-cover.png'); ?>');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
            border-top-left-radius: 15px;
            border-bottom-left-radius: 15px;
        }

        .login-container {
            flex: 1;
            padding: 40px;
            background-color: #ffffff;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 0px 0px rgba(0, 0, 0, 0.05);
        }

        .login-container h2 {
            margin-bottom: 20px;
            color: #257180;
            font-size: 28px;
            font-weight: bold;
            text-align: center;
        }

        .form-label {
            font-weight: 500;
            color: #6c757d;
        }

        /* Style untuk input form */
        .form-control {
            border-radius: 10px;
            padding: 15px;
            font-size: 15px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            transition: all 0.3s ease;
            background-color: #f9f9f9;
        }

        /* Efek saat form input di-focus */
        .form-control:focus {
            border-color: #257180;
            box-shadow: 0 0 8px rgba(37, 113, 128, 0.6);
            background-color: #ffffff;
            outline: none;
        }

        /* Menghilangkan outline dan box-shadow pada tombol */
        .btn:focus,
        .btn:active,
        .btn:focus-visible {
            outline: none !important;
            box-shadow: none !important;
            background-color: #257180 !important;
            /* Menjaga warna tombol saat diklik */
        }

        /* Menghapus border dan background pada tombol */
        .btn-primary:focus,
        .btn-primary:active {
            border: none !important;
            background-color: #257180 !important;
            /* Tetap konsisten dengan warna tombol */
        }

        /* Menjaga tombol tidak mendapatkan border biru pada fokus */
        .btn:focus-visible {
            box-shadow: none;
        }


        .form-control::placeholder {
            color: #a0a0a0;
        }

        /* Tombol login */
        .btn-primary {
            background-color: #257180;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 10px;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #257180;
        }

        .footer-text {
            margin-top: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 15px;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .login-wrapper {
                flex-direction: column;
            }

            .logo-container {
                height: 250px;
                border-radius: 10px;
            }

            .login-container {
                width: 100%;
                border-radius: 10px;
                padding: 30px;
            }

            .login-container h2 {
                font-size: 24px;
            }
        }
    </style>
</head>

<body>
    <div class="login-wrapper">
        <div class="logo-container"></div>
        <div class="login-container">
            <h2>Mercu Rank</h2>

            <!-- Menampilkan pesan error -->
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
            <?php endif; ?>

            <!-- Menampilkan pesan saat sesi habis -->
            <?php if (session()->getFlashdata('timeout')): ?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata('timeout') ?>
                </div>
            <?php endif; ?>

            <form action="<?= base_url('/loginProcess') ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
            </form>
            <p class="footer-text">Universitas Mercu Buana Yogyakarta</p>
        </div>
    </div>
</body>

</html>