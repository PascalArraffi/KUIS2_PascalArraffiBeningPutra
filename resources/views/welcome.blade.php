<x-layout>

    <style>

        /* =====================================
            BATIK ROYAL THEME
        ===================================== */

        body{
            background:
                radial-gradient(circle at top left, rgba(250,204,21,0.08), transparent 25%),
                radial-gradient(circle at bottom right, rgba(16,185,129,0.12), transparent 25%),
                linear-gradient(135deg, #052e2b, #064e3b, #022c22);

            background-attachment: fixed;

            font-family: 'Poppins', sans-serif;

            overflow-x: hidden;
            position: relative;
            color: white;
        }

        /* BATIK PATTERN */
        body::before{
            content: '';

            position: fixed;
            inset: 0;

            background-image:
                radial-gradient(circle at 20px 20px, rgba(250,204,21,0.06) 2px, transparent 2px),
                linear-gradient(45deg, rgba(250,204,21,0.03) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(250,204,21,0.03) 25%, transparent 25%);

            background-size:
                60px 60px,
                40px 40px,
                40px 40px;

            pointer-events: none;
        }

        /* =====================================
            HERO SECTION
        ===================================== */

        .hero-section{
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
        }

        .hero-badge{
            display: inline-block;

            padding: 10px 22px;

            border-radius: 999px;

            background: rgba(250,204,21,0.10);

            border:
                1px solid rgba(250,204,21,0.20);

            color: #facc15;

            font-weight: 700;
            margin-bottom: 24px;
        }

        .hero-title{
            font-size: 4rem;
            font-weight: 900;
            line-height: 1.2;
            margin-bottom: 24px;

            color: #facc15;

            text-shadow:
                0 0 20px rgba(250,204,21,0.15);
        }

        .hero-title span{
            color: white;
        }

        .hero-desc{
            color: rgba(255,255,255,0.75);
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        /* =====================================
            BUTTON
        ===================================== */

        .btn-royal{
            border: none;

            padding: 15px 28px;

            border-radius: 18px;

            font-weight: 700;

            transition: 0.3s ease;
        }

        .btn-gold{
            background:
                linear-gradient(135deg, #facc15, #eab308);

            color: #052e2b;

            box-shadow:
                0 12px 25px rgba(250,204,21,0.25);
        }

        .btn-gold:hover{
            transform: translateY(-3px);
            color: #052e2b;
        }

        .btn-outline-royal{
            background: rgba(255,255,255,0.06);

            border:
                1px solid rgba(250,204,21,0.15);

            color: white;
        }

        .btn-outline-royal:hover{
            background: rgba(250,204,21,0.10);
            color: #facc15;
            transform: translateY(-3px);
        }

        /* =====================================
            HERO IMAGE
        ===================================== */

        .hero-image{
            position: relative;
        }

        .hero-image img{
            max-height: 460px;

            filter:
                drop-shadow(0 25px 40px rgba(0,0,0,0.35));

            animation: floating 4s ease-in-out infinite;
        }

        @keyframes floating{
            0%{
                transform: translateY(0px);
            }

            50%{
                transform: translateY(-15px);
            }

            100%{
                transform: translateY(0px);
            }
        }

        /* =====================================
            SECTION TITLE
        ===================================== */

        .section-title{
            color: #facc15;
            font-weight: 800;
            font-size: 2.5rem;
        }

        .section-subtitle{
            color: rgba(255,255,255,0.65);
        }

        /* =====================================
            CARD
        ===================================== */

        .royal-card{
            border-radius: 28px;

            border:
                1px solid rgba(250,204,21,0.12);

            background:
                rgba(255,255,255,0.06);

            backdrop-filter: blur(14px);

            overflow: hidden;

            transition: 0.3s ease;

            height: 100%;

            box-shadow:
                0 20px 40px rgba(0,0,0,0.25);
        }

        .royal-card:hover{
            transform: translateY(-6px);

            border-color:
                rgba(250,204,21,0.25);
        }

        .royal-card-body{
            padding: 40px 30px;
            text-align: center;
        }

        .royal-icon{
            width: 90px;
            height: 90px;

            border-radius: 24px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: auto;
            margin-bottom: 25px;

            background:
                linear-gradient(135deg, #facc15, #ca8a04);

            color: #052e2b;

            font-size: 40px;

            box-shadow:
                0 15px 30px rgba(250,204,21,0.20);
        }

        .royal-card h4{
            color: #facc15;
            font-weight: 700;
            margin-bottom: 16px;
        }

        .royal-card p{
            color: rgba(255,255,255,0.70);
            line-height: 1.8;
        }

        /* =====================================
            STATISTIC
        ===================================== */

        .stats-card{
            padding: 35px 20px;

            border-radius: 26px;

            text-align: center;

            background:
                rgba(255,255,255,0.06);

            border:
                1px solid rgba(250,204,21,0.12);

            backdrop-filter: blur(14px);

            box-shadow:
                0 15px 30px rgba(0,0,0,0.25);
        }

        .stats-number{
            font-size: 3rem;
            font-weight: 900;
            color: #facc15;
        }

        .stats-text{
            color: rgba(255,255,255,0.7);
        }

        /* =====================================
            CTA
        ===================================== */

        .cta-section{
            padding: 100px 0;
        }

        .cta-box{
            border-radius: 36px;

            padding: 70px 40px;

            text-align: center;

            background:
                linear-gradient(
                    135deg,
                    rgba(250,204,21,0.10),
                    rgba(16,185,129,0.08)
                );

            border:
                1px solid rgba(250,204,21,0.15);

            backdrop-filter: blur(16px);

            box-shadow:
                0 20px 50px rgba(0,0,0,0.30);
        }

        .cta-box h2{
            color: #facc15;
            font-size: 3rem;
            font-weight: 900;
        }

        .cta-box p{
            color: rgba(255,255,255,0.75);
            font-size: 18px;
        }

        /* =====================================
            FOOTER
        ===================================== */

        footer{
            padding: 30px 0;

            border-top:
                1px solid rgba(250,204,21,0.08);

            background:
                rgba(0,0,0,0.15);

            backdrop-filter: blur(10px);
        }

        .footer-title{
            color: #facc15;
            font-weight: 700;
        }

        .footer-text{
            color: rgba(255,255,255,0.55);
        }

        /* =====================================
            RESPONSIVE
        ===================================== */

        @media(max-width: 768px){

            .hero-title{
                font-size: 2.8rem;
            }

            .section-title{
                font-size: 2rem;
            }

            .cta-box h2{
                font-size: 2rem;
            }

            .hero-image{
                margin-top: 50px;
            }

        }

    </style>

    <!-- HERO -->
    <section class="hero-section">

        <div class="container">

            <div class="row align-items-center">

                <!-- TEXT -->
                <div class="col-lg-6">

                    <div class="hero-badge">
                        👑 Sistem Informasi Akademik Kerajaan
                    </div>

                    <h1 class="hero-title">
                        Kelola Fakultas
                        <span>
                            Dengan Elegan
                        </span>
                    </h1>

                    <p class="hero-desc">

                        Platform akademik modern dengan nuansa budaya nusantara
                        dan sentuhan kerajaan elegan untuk mengelola data fakultas,
                        dekan, dan administrasi universitas secara profesional.

                    </p>

                    <div class="d-flex flex-wrap gap-3">

                        <a href="/fakultas"
                            class="btn btn-royal btn-gold">

                            📚 Lihat Fakultas

                        </a>

                        <a href="/fakultas/create"
                            class="btn btn-royal btn-outline-royal">

                            ➕ Tambah Fakultas

                        </a>

                    </div>

                </div>

                <!-- IMAGE -->
                <div class="col-lg-6 text-center hero-image">

                    <img
                        src="https://cdn-icons-png.flaticon.com/512/3135/3135755.png"
                        class="img-fluid"
                        alt="University">

                </div>

            </div>

        </div>

    </section>

    <!-- FEATURES -->
    <section class="py-5">

        <div class="container">

            <div class="text-center mb-5">

                <h2 class="section-title">
                    ✨ Keunggulan Sistem
                </h2>

                <p class="section-subtitle">
                    Menggabungkan teknologi modern dan nuansa budaya elegan
                </p>

            </div>

            <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-md-4">

                    <div class="royal-card">

                        <div class="royal-card-body">

                            <div class="royal-icon">
                                ⚡
                            </div>

                            <h4>
                                Cepat & Modern
                            </h4>

                            <p>
                                Sistem berjalan cepat dengan tampilan premium
                                dan pengalaman pengguna yang nyaman.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- CARD 2 -->
                <div class="col-md-4">

                    <div class="royal-card">

                        <div class="royal-card-body">

                            <div class="royal-icon">
                                🔒
                            </div>

                            <h4>
                                Aman
                            </h4>

                            <p>
                                Data akademik tersimpan aman menggunakan
                                framework Laravel modern dan terpercaya.
                            </p>

                        </div>

                    </div>

                </div>

                <!-- CARD 3 -->
                <div class="col-md-4">

                    <div class="royal-card">

                        <div class="royal-card-body">

                            <div class="royal-icon">
                                📊
                            </div>

                            <h4>
                                Mudah Digunakan
                            </h4>

                            <p>
                                Interface elegan dan intuitif untuk semua
                                pengguna akademik universitas.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- STATISTICS -->
    <section class="py-5">

        <div class="container">

            <div class="row g-4 text-center">

                <div class="col-md-3">

                    <div class="stats-card">

                        <div class="stats-number">
                            20+
                        </div>

                        <div class="stats-text">
                            Fakultas
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="stats-card">

                        <div class="stats-number">
                            100+
                        </div>

                        <div class="stats-text">
                            Staff Akademik
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="stats-card">

                        <div class="stats-number">
                            5000+
                        </div>

                        <div class="stats-text">
                            Mahasiswa
                        </div>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="stats-card">

                        <div class="stats-number">
                            24/7
                        </div>

                        <div class="stats-text">
                            Akses Sistem
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->
    <section class="cta-section">

        <div class="container">

            <div class="cta-box">

                <h2 class="mb-4">
                    🚀 Mulai Kelola Fakultas Sekarang
                </h2>

                <p class="mb-5">

                    Tingkatkan kualitas administrasi akademik dengan
                    tampilan modern bernuansa budaya nusantara.

                </p>

                <a href="/fakultas/create"
                    class="btn btn-royal btn-gold">

                    👑 Mulai Sekarang

                </a>

            </div>

        </div>

    </section>

    <!-- FOOTER -->
    <footer>

        <div class="container">

            <div class="row align-items-center">

                <div class="col-md-6">

                    <div class="footer-title">
                        🎓 Royal Academic System
                    </div>

                    <div class="footer-text">
                        Laravel Batik Kingdom Edition
                    </div>

                </div>

                <div class="col-md-6 text-md-end mt-3 mt-md-0">

                    <div class="footer-text">
                        © {{ date('Y') }} All Rights Reserved
                    </div>

                </div>

            </div>

        </div>

    </footer>

</x-layout>