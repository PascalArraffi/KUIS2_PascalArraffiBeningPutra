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

        /* =====================================
            ALERT
        ===================================== */

        .royal-alert{
            border: 1px solid rgba(16,185,129,0.20);
            background: rgba(16,185,129,0.10);
            color: #d1fae5;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .royal-alert .btn-close{
            filter: invert(1);
        }

        /* =====================================
            HEADER
        ===================================== */

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

        /* =====================================
            BUTTON
        ===================================== */

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

        /* =====================================
            CARD
        ===================================== */

        .royal-card{
            border-radius: 32px;
            overflow: hidden;
            border: 1px solid rgba(250,204,21,0.12);
            background: rgba(255,255,255,0.06);
            backdrop-filter: blur(16px);
            box-shadow: 0 25px 45px rgba(0,0,0,0.28);
        }

        /* FIX HEADER (INI YANG DIPERBAIKI) */
        .royal-header{
            padding: 28px 35px;

            background: linear-gradient(135deg, #14532d, #064e3b);

            border-bottom: 2px solid rgba(250,204,21,0.25);

            box-shadow: inset 0 -1px 0 rgba(255,255,255,0.05);
        }

        .royal-header h4{
            color: #facc15;
            font-weight: 800;
            margin: 0;
            letter-spacing: 1px;
            text-shadow: 0 2px 10px rgba(0,0,0,0.35);
        }

        /* =====================================
            TABLE
        ===================================== */

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
            letter-spacing: 1px;
        }

        .table tbody td{
            padding: 22px 20px;
            border-color: rgba(255,255,255,0.06);
            vertical-align: middle;
        }

        .table tbody tr{
            transition: 0.3s ease;
        }

        .table tbody tr:hover{
            background: rgba(250,204,21,0.04);
            transform: scale(1.005);
        }

        /* =====================================
            BADGE
        ===================================== */

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
            box-shadow: 0 10px 20px rgba(250,204,21,0.20);
        }

        .prodi-name{
            color: white;
            font-weight: 700;
        }

        .kaprodi-name{
            color: rgba(255,255,255,0.70);
        }

        .alias-badge{
            display: inline-block;
            padding: 8px 14px;
            border-radius: 999px;
            background: rgba(250,204,21,0.12);
            border: 1px solid rgba(250,204,21,0.18);
            color: #facc15;
            font-size: 12px;
            font-weight: 700;
        }

        /* =====================================
            ACTION BUTTON
        ===================================== */

        .btn-action{
            border: none;
            border-radius: 14px;
            padding: 10px 15px;
            font-size: 13px;
            font-weight: 700;
            transition: 0.25s ease;
        }

        .btn-action:hover{
            transform: translateY(-2px);
        }

        .btn-detail{ background:#0ea5e9; color:white; }
        .btn-edit{ background:#facc15; color:#052e2b; }
        .btn-delete{ background:#ef4444; color:white; }

        /* =====================================
            EMPTY STATE
        ===================================== */

        .empty-state{
            padding: 80px 20px;
            text-align: center;
        }

        .empty-state h4{
            color: #facc15;
            font-weight: 700;
        }

        .empty-state p{
            color: rgba(255,255,255,0.60);
        }

        /* =====================================
            FOOTER
        ===================================== */

        .royal-footer{
            padding: 20px;
            text-align: center;
            border-top: 1px solid rgba(250,204,21,0.08);
            color: rgba(255,255,255,0.60);
            background: rgba(0,0,0,0.12);
        }

        /* RESPONSIVE */
        @media(max-width:768px){
            .page-title{ font-size:2rem; }
        }

    </style>

    <div class="container py-5">

        <!-- ALERT -->
        @if (session('success'))
            <div class="alert royal-alert alert-dismissible fade show mb-4">
                ✨ {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- HEADER -->
        <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 page-header">

            <div>
                <h1 class="page-title">
                    👑 Royal Program Studi
                </h1>
                <div class="page-subtitle">
                    Sistem Informasi Program Studi Bernuansa Batik Nusantara
                </div>
            </div>

            <a href="{{ route('prodi.create') }}" class="btn btn-royal btn-gold">
                ➕ Tambah Prodi
            </a>

        </div>

        <!-- CARD -->
        <div class="royal-card">

            <!-- HEADER FIXED -->
            <div class="royal-header">
                <h4>🏛️ Data Program Studi Universitas</h4>
            </div>

            <div class="table-responsive">

                <table class="table align-middle">

                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Prodi</th>
                            <th>Kaprodi</th>
                            <th>Alias</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($prodis as $item)

                        <tr>

                            <td>
                                <div class="number-badge">
                                    {{ $loop->iteration }}
                                </div>
                            </td>

                            <td class="prodi-name">
                                {{ $item->nama_prodi }}
                            </td>

                            <td class="kaprodi-name">
                                👑 {{ $item->nama_kaprodi }}
                            </td>

                            <td>
                                <span class="alias-badge">
                                    {{ $item->alias_prodi }}
                                </span>
                            </td>

                            <td>
                                <div class="d-flex gap-2 justify-content-center">

                                    <a href="{{ route('prodi.show',$item->id) }}" class="btn btn-action btn-detail">👁</a>

                                    <a href="{{ route('prodi.edit',$item->id) }}" class="btn btn-action btn-edit">✏</a>

                                    <form method="POST" action="{{ route('prodi.destroy',$item->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-action btn-delete">🗑</button>
                                    </form>

                                </div>
                            </td>

                        </tr>

                        @empty

                        <tr>
                            <td colspan="5" class="text-center py-5 empty-state">
                                <h4>Belum Ada Data</h4>
                                <p>Program studi masih kosong</p>
                            </td>
                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="royal-footer">
                🎓 Royal Academic System — Program Studi Edition
            </div>

        </div>

    </div>

</x-layout>
