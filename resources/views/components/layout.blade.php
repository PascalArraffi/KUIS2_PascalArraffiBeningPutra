<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Royal Academic System</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">

    {{-- Google Font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">

    <style>

        /* =====================================
            ROYAL BATIK GLOBAL THEME
        ===================================== */

        body{
            font-family: 'Poppins', sans-serif;
            color: white;

            background:
                radial-gradient(circle at top left, rgba(250,204,21,0.08), transparent 30%),
                radial-gradient(circle at bottom right, rgba(16,185,129,0.12), transparent 30%),
                linear-gradient(135deg, #052e2b, #064e3b, #022c22);

            background-attachment: fixed;
            min-height: 100vh;
            overflow-x: hidden;
        }

        body::before{
            content: '';
            position: fixed;
            inset: 0;

            background-image:
                radial-gradient(circle at 20px 20px, rgba(250,204,21,0.05) 2px, transparent 2px),
                linear-gradient(45deg, rgba(250,204,21,0.03) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(250,204,21,0.03) 25%, transparent 25%);

            background-size: 60px 60px, 40px 40px, 40px 40px;
            pointer-events: none;
            z-index: 0;
        }

        main{
            position: relative;
            z-index: 2;
            min-height: 100vh;
        }

        /* =====================================
            NAVBAR ROYAL
        ===================================== */

        .navbar{
            background:
                linear-gradient(90deg, #064e3b, #065f46, #052e2b);

            border-bottom: 1px solid rgba(250,204,21,0.15);

            box-shadow: 0 10px 25px rgba(0,0,0,0.25);
            padding: 14px 0;
        }

        .navbar-brand{
            font-weight: 800;
            font-size: 22px;
            color: #facc15 !important;
            text-shadow: 0 0 10px rgba(250,204,21,0.2);
        }

        .nav-link{
            color: rgba(255,255,255,0.75) !important;
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link:hover{
            color: #facc15 !important;
            transform: translateY(-1px);
        }

        /* =====================================
            BUTTON ROYAL
        ===================================== */

        .btn-royal{
            border: none;
            border-radius: 14px;
            font-weight: 700;
            transition: 0.3s ease;
        }

        .btn-gold{
            background: linear-gradient(135deg, #facc15, #eab308);
            color: #052e2b;
            box-shadow: 0 10px 20px rgba(250,204,21,0.25);
        }

        .btn-gold:hover{
            transform: translateY(-2px);
            color: #052e2b;
        }

        /* override bootstrap warning button */
        .btn-warning{
            background: linear-gradient(135deg, #facc15, #eab308) !important;
            border: none !important;
            color: #052e2b !important;
        }

        /* =====================================
            CARD GLOBAL
        ===================================== */

        .card{
            border: 1px solid rgba(250,204,21,0.12);
            border-radius: 18px;
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(12px);
            color: white;
        }

        /* =====================================
            FOOTER ROYAL
        ===================================== */

        footer{
            background:
                linear-gradient(90deg, #052e2b, #064e3b);
            color: rgba(255,255,255,0.6);
            padding: 20px 0;
            margin-top: 50px;
            border-top: 1px solid rgba(250,204,21,0.12);
        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark">

        <div class="container">

            <a class="navbar-brand" href="/">
                👑 Royal SI Fakultas
            </a>

            <button class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            🏠 Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/fakultas">
                            🏛 Fakultas
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.index') }}">
                            📚 Prodi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('prodi.create') }}">
                            ➕ Tambah Prodi
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/fakultas/create"
                           class="btn btn-royal btn-gold px-4">
                            ➕ Tambah Fakultas
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

    {{-- CONTENT --}}
    <main>
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    <footer>
        <div class="container text-center">
            👑 Royal Academic System — Batik Emerald Gold Theme
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>