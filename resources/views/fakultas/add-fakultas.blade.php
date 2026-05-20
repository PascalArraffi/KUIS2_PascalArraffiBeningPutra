<x-layout>

    <style>

        /* =====================================
            ROYAL BATIK THEME
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
                radial-gradient(circle at 20px 20px, rgba(250,204,21,0.05) 2px, transparent 2px),
                linear-gradient(45deg, rgba(250,204,21,0.03) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(250,204,21,0.03) 25%, transparent 25%);

            background-size:
                60px 60px,
                40px 40px,
                40px 40px;

            pointer-events: none;
        }

        /* =====================================
            FORM WRAPPER
        ===================================== */

        .form-wrapper{
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* =====================================
            CARD
        ===================================== */

        .royal-card{
            border-radius: 36px;

            overflow: hidden;

            border:
                1px solid rgba(250,204,21,0.12);

            background:
                rgba(255,255,255,0.06);

            backdrop-filter: blur(16px);

            box-shadow:
                0 25px 45px rgba(0,0,0,0.30);
        }

        /* =====================================
            HEADER
        ===================================== */

        .royal-header{
            padding: 45px 35px;

            text-align: center;

            background:
                linear-gradient(
                    135deg,
                    rgba(250,204,21,0.10),
                    rgba(16,185,129,0.10)
                );

            border-bottom:
                1px solid rgba(250,204,21,0.12);
        }

        .royal-icon{
            width: 100px;
            height: 100px;

            border-radius: 28px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin: auto;
            margin-bottom: 25px;

            background:
                linear-gradient(135deg, #facc15, #ca8a04);

            color: #052e2b;

            font-size: 45px;

            box-shadow:
                0 15px 30px rgba(250,204,21,0.20);
        }

        .royal-title{
            color: #facc15;

            font-size: 2rem;
            font-weight: 800;

            margin-bottom: 10px;
        }

        .royal-subtitle{
            color: rgba(255,255,255,0.70);
        }

        /* =====================================
            BODY
        ===================================== */

        .royal-body{
            padding: 40px;
        }

        /* =====================================
            ALERT
        ===================================== */

        .alert-danger{
            border: 1px solid rgba(239,68,68,0.20);

            background:
                rgba(239,68,68,0.10);

            color: #fecaca;

            border-radius: 20px;

            backdrop-filter: blur(10px);
        }

        .alert-danger ul{
            margin: 0;
            padding-left: 18px;
        }

        /* =====================================
            FORM
        ===================================== */

        .form-label{
            color: #facc15;

            font-weight: 700;

            margin-bottom: 12px;
        }

        .input-group{
            border-radius: 18px;

            overflow: hidden;

            border:
                1px solid rgba(250,204,21,0.10);

            background:
                rgba(255,255,255,0.05);

            transition: 0.3s ease;
        }

        .input-group:focus-within{
            border-color:
                rgba(250,204,21,0.30);

            box-shadow:
                0 0 0 4px rgba(250,204,21,0.08);
        }

        .input-group-text{
            background:
                rgba(250,204,21,0.10);

            border: none;

            color: #facc15;

            font-size: 20px;

            padding: 0 18px;
        }

        .form-control{
            height: 60px;

            border: none;

            background: transparent;

            color: white;

            font-size: 15px;

            box-shadow: none !important;
        }

        .form-control::placeholder{
            color: rgba(255,255,255,0.45);
        }

        /* =====================================
            BUTTON
        ===================================== */

        .btn-save{
            height: 60px;

            border: none;

            border-radius: 18px;

            font-size: 16px;
            font-weight: 700;

            background:
                linear-gradient(135deg, #facc15, #eab308);

            color: #052e2b;

            transition: 0.3s ease;

            box-shadow:
                0 15px 30px rgba(250,204,21,0.20);
        }

        .btn-save:hover{
            transform: translateY(-3px);

            color: #052e2b;

            box-shadow:
                0 18px 35px rgba(250,204,21,0.28);
        }

        /* =====================================
            FOOTER
        ===================================== */

        .royal-footer{
            padding: 22px;

            text-align: center;

            color: rgba(255,255,255,0.60);

            border-top:
                1px solid rgba(250,204,21,0.08);

            background:
                rgba(0,0,0,0.12);
        }

        /* =====================================
            RESPONSIVE
        ===================================== */

        @media(max-width: 768px){

            .royal-body{
                padding: 28px;
            }

            .royal-title{
                font-size: 1.6rem;
            }

        }

    </style>

    <div class="container">

        <div class="form-wrapper">

            <div class="col-lg-6">

                <div class="royal-card">

                    <!-- HEADER -->
                    <div class="royal-header">

                        <div class="royal-icon">
                            🏛️
                        </div>

                        <h2 class="royal-title">
                            Form Data Fakultas
                        </h2>

                        <div class="royal-subtitle">
                            Silakan isi data fakultas kerajaan dengan lengkap
                        </div>

                    </div>

                    <!-- BODY -->
                    <div class="royal-body">

                        <!-- ERROR -->
                        @if ($errors->any())

                            <div class="alert alert-danger mb-4">

                                <ul>

                                    @foreach ($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <!-- FORM -->
                        <form action="/fakultas" method="POST">

                            @csrf

                            <!-- NAMA FAKULTAS -->
                            <div class="mb-4">

                                <label class="form-label">
                                    Nama Fakultas
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        🎓
                                    </span>

                                    <input
                                        type="text"
                                        name="nama_fakultas"
                                        class="form-control"
                                        placeholder="Contoh: Fakultas Teknik">

                                </div>

                            </div>

                            <!-- NAMA DEKAN -->
                            <div class="mb-4">

                                <label class="form-label">
                                    Nama Dekan
                                </label>

                                <div class="input-group">

                                    <span class="input-group-text">
                                        👑
                                    </span>

                                    <input
                                        type="text"
                                        name="nama_dekan"
                                        class="form-control"
                                        placeholder="Contoh: Dr. Budi Santoso">

                                </div>

                            </div>

                            <!-- BUTTON -->
                            <div class="d-grid mt-4">

                                <button
                                    type="submit"
                                    class="btn btn-save">

                                    💾 Simpan Data Fakultas

                                </button>

                            </div>

                        </form>

                    </div>

                    <!-- FOOTER -->
                    <div class="royal-footer">

                        🎓 Royal Academic System — Fakultas Edition

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>