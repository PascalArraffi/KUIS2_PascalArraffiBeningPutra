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
        }

        /* HEADER */
        .page-header{
            margin-bottom: 35px;
        }

        .page-title{
            color: #facc15;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 10px;
            text-shadow: 0 0 20px rgba(250,204,21,0.15);
        }

        .page-subtitle{
            color: rgba(255,255,255,0.65);
            font-size: 15px;
        }

        /* BUTTON */
        .btn-royal{
            border: none;
            padding: 14px 24px;
            border-radius: 18px;
            font-weight: 700;
            transition: 0.3s ease;
        }

        .btn-gold{
            background: linear-gradient(135deg, #facc15, #eab308);
            color: #052e2b;
            box-shadow: 0 12px 24px rgba(250,204,21,0.22);
        }

        .btn-gold:hover{
            transform: translateY(-3px);
        }

        /* CARD */
        .royal-card{
            border-radius: 32px;
            overflow: hidden;
            border: 1px solid rgba(250,204,21,0.12);
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(16px);
            box-shadow: 0 25px 45px rgba(0,0,0,0.28);
        }

        /* =====================================
            🔥 FIX HEADER (BIAR TIDAK NGE-BLEND)
        ===================================== */

        .royal-header{
            padding: 30px 40px;

            /* dibuat lebih solid & kontras */
            background:
                linear-gradient(135deg, rgba(250,204,21,0.18), rgba(16,185,129,0.18));

            border-bottom: 2px solid rgba(250,204,21,0.35);

            position: relative;
        }

        .royal-header h4{
            margin: 0;

            font-size: 1.25rem;
            font-weight: 800;

            /* GRADIENT GOLD TEXT */
            background: linear-gradient(90deg, #fde047, #facc15, #ca8a04);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;

            text-shadow: 0 2px 10px rgba(0,0,0,0.35);
            letter-spacing: 0.5px;
        }

        .royal-header small{
            display: block;
            margin-top: 6px;
            color: rgba(255,255,255,0.7);
            font-size: 13px;
        }

        /* TABLE */
        .table{
            margin: 0;
            color: white;
        }

        .table thead{
            background: rgba(250,204,21,0.06);
        }

        .table thead th{
            border: none;
            color: #facc15;
            padding: 20px;
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .table tbody td{
            padding: 22px 20px;
            border-color: rgba(255,255,255,0.06);
        }

        .table tbody tr:hover{
            background: rgba(250,204,21,0.04);
        }

        /* NUMBER BADGE */
        .number-badge{
            width: 46px;
            height: 46px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #facc15, #ca8a04);
            color: #052e2b;
            font-weight: 800;
        }

        .faculty-name{
            font-weight: 700;
        }

        .dekan-name{
            color: rgba(255,255,255,0.7);
        }

        /* ACTION */
        .btn-action{
            border: none;
            border-radius: 14px;
            padding: 10px 15px;
            font-size: 13px;
            font-weight: 700;
        }

        .btn-detail{ background:#0ea5e9; color:white; }
        .btn-edit{ background:#facc15; color:#052e2b; }
        .btn-delete{ background:#ef4444; color:white; }

        /* EMPTY */
        .empty-state{
            padding: 80px 20px;
            text-align: center;
        }

        .empty-state h4{
            color: #facc15;
        }

        /* FOOTER */
        .royal-footer{
            padding: 20px;
            text-align: center;
            border-top: 1px solid rgba(250,204,21,0.08);
            color: rgba(255,255,255,0.6);
        }

    </style>

    <div class="container py-5">

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 page-header">

            <div>
                <h1 class="page-title">
                    👑 Royal Faculty List
                </h1>

                <div class="page-subtitle">
                    Sistem Informasi Fakultas Bernuansa Batik Nusantara
                </div>
            </div>

            <a href="/fakultas" class="btn btn-royal btn-gold">
                ➕ Tambah Fakultas
            </a>

        </div>

        <!-- CARD -->
        <div class="royal-card">

            <!-- HEADER (SUDAH DIPERBAIKI) -->
            <div class="royal-header">

                <h4>
                    🏛️ Data Fakultas Universitas
                </h4>

                <small>
                    Daftar fakultas yang terdaftar dalam sistem akademik kerajaan
                </small>

            </div>

            <!-- TABLE -->
            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Fakultas</th>
                            <th>Nama Dekan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($fakultas as $item)

                        <tr>

                            <td>
                                <div class="number-badge">
                                    {{ $loop->iteration }}
                                </div>
                            </td>

                            <td class="faculty-name">
                                {{ $item->nama_fakultas }}
                            </td>

                            <td class="dekan-name">
                                👑 {{ $item->nama_dekan }}
                            </td>

                            <td>
                                <a class="btn btn-detail btn-action">Detail</a>
                                <a class="btn btn-edit btn-action">Edit</a>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="4" class="empty-state">
                                <h4>Belum Ada Data Fakultas</h4>
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="royal-footer">
                🎓 Royal Academic System
            </div>

        </div>

    </div>

</x-layout>
