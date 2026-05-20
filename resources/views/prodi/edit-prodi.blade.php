<x-layout>

    <style>

        /* =====================================
            ROYAL BATIK THEME - EDIT PRODI
        ===================================== */

        body{
            background:
                radial-gradient(circle at top left, rgba(250,204,21,0.08), transparent 25%),
                radial-gradient(circle at bottom right, rgba(16,185,129,0.12), transparent 25%),
                linear-gradient(135deg, #052e2b, #064e3b, #022c22);

            background-attachment: fixed;

            color: white;

            position: relative;
            overflow-x: hidden;
        }

        body::before{
            content:'';
            position: fixed;
            inset: 0;

            background-image:
                radial-gradient(circle at 20px 20px, rgba(250,204,21,0.05) 2px, transparent 2px),
                linear-gradient(45deg, rgba(250,204,21,0.03) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(250,204,21,0.03) 25%, transparent 25%);

            background-size: 60px 60px, 40px 40px, 40px 40px;

            pointer-events: none;
        }

        /* CARD */
        .royal-card{
            border-radius: 34px;
            overflow: hidden;

            border: 1px solid rgba(250,204,21,0.12);

            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(16px);

            box-shadow: 0 25px 45px rgba(0,0,0,0.30);
        }

        /* HEADER */
        .royal-header{
            padding: 30px;
            text-align: center;

            background: linear-gradient(135deg, #14532d, #064e3b);

            border-bottom: 2px solid rgba(250,204,21,0.20);
        }

        .royal-header h2{
            color: #facc15;
            font-weight: 800;
            margin-bottom: 6px;
        }

        .royal-header p{
            color: rgba(255,255,255,0.65);
            margin: 0;
        }

        /* FORM */
        .form-label{
            color: #facc15;
            font-weight: 700;
        }

        .form-control,
        .form-select{
            height: 55px;
            border-radius: 14px;
            border: 1px solid rgba(250,204,21,0.15);
            background: rgba(255,255,255,0.05);
            color: white;
            box-shadow: none !important;
        }

        .form-control::placeholder{
            color: rgba(255,255,255,0.5);
        }

        .form-select option{
            color: black;
        }

        .form-control:focus,
        .form-select:focus{
            border-color: rgba(250,204,21,0.5);
            box-shadow: 0 0 0 4px rgba(250,204,21,0.10) !important;
        }

        /* ALERT */
        .royal-alert{
            background: rgba(239,68,68,0.10);
            border: 1px solid rgba(239,68,68,0.25);
            color: #fecaca;
            border-radius: 16px;
        }

        /* BUTTON */
        .btn-royal{
            border: none;
            border-radius: 14px;
            padding: 10px 18px;
            font-weight: 700;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .btn-back{
            background: rgba(255,255,255,0.08);
            color: white;
        }

        .btn-back:hover{
            background: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }

        .btn-gold{
            background: linear-gradient(135deg, #facc15, #eab308);
            color: #052e2b;
        }

        .btn-gold:hover{
            transform: translateY(-2px);
        }

        /* FOOTER */
        .royal-footer{
            padding: 18px;
            text-align: center;
            color: rgba(255,255,255,0.60);
            background: rgba(0,0,0,0.12);
            border-top: 1px solid rgba(250,204,21,0.08);
        }

    </style>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-6">

                <div class="royal-card">

                    <!-- HEADER -->
                    <div class="royal-header">

                        <h2>
                            ✏ Edit Program Studi
                        </h2>

                        <p>
                            Perbarui data program studi kerajaan
                        </p>

                    </div>

                    <!-- BODY -->
                    <div class="p-4">

                        <!-- ERROR -->
                        @if ($errors->any())
                            <div class="alert royal-alert mb-3">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <!-- FORM -->
                        <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">

                            @csrf
                            @method('PUT')

                            <!-- NAMA PRODI -->
                            <div class="mb-4">

                                <label class="form-label">
                                    Nama Prodi
                                </label>

                                <input type="text"
                                    name="nama_prodi"
                                    class="form-control"
                                    value="{{ old('nama_prodi', $prodi->nama_prodi) }}"
                                    placeholder="Masukkan nama prodi">

                            </div>

                            <!-- KAPRODI -->
                            <div class="mb-4">

                                <label class="form-label">
                                    Nama Kaprodi
                                </label>

                                <input type="text"
                                    name="nama_kaprodi"
                                    class="form-control"
                                    value="{{ old('nama_kaprodi', $prodi->nama_kaprodi) }}"
                                    placeholder="Masukkan nama kaprodi">

                            </div>

                            <!-- ALIAS -->
                            <div class="mb-4">

                                <label class="form-label">
                                    Alias Prodi
                                </label>

                                @php
                                    $current = old('alias_prodi', $prodi->alias_prodi);
                                @endphp

                                <select name="alias_prodi" class="form-select">

                                    <option value="SI" {{ $current == 'SI' ? 'selected' : '' }}>
                                        Sistem Informasi
                                    </option>

                                    <option value="TI" {{ $current == 'TI' ? 'selected' : '' }}>
                                        Teknik Informatika
                                    </option>

                                    <option value="SK" {{ $current == 'SK' ? 'selected' : '' }}>
                                        Sistem Komputer
                                    </option>

                                </select>

                            </div>

                            <!-- BUTTON -->
                            <div class="d-flex gap-2">

                                <a href="{{ route('prodi.index') }}"
                                    class="btn-royal btn-back">

                                    ← Kembali

                                </a>

                                <button type="submit"
                                    class="btn-royal btn-gold">

                                    💾 Update Data

                                </button>

                            </div>

                        </form>

                    </div>

                    <!-- FOOTER -->
                    <div class="royal-footer">

                        🎓 Royal Academic System — Edit Program Studi

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>