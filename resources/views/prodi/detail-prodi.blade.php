<x-layout>

    <style>

        /* =====================================
            ROYAL BATIK THEME - DETAIL PRODI
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

        /* TABLE */
        .royal-table{
            width: 100%;
            color: white;
        }

        .royal-table th{
            color: rgba(255,255,255,0.70);
            font-weight: 600;
            padding: 18px;
        }

        .royal-table td{
            padding: 18px;
            color: rgba(255,255,255,0.90);
            font-weight: 600;
        }

        .royal-table tr{
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .badge-royal{
            background: linear-gradient(135deg, #facc15, #eab308);
            color: #052e2b;
            font-weight: 800;
            padding: 8px 14px;
            border-radius: 12px;
        }

        /* BUTTON */
        .btn-royal{
            border: none;
            border-radius: 14px;
            padding: 10px 18px;
            font-weight: 700;
            transition: 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-back{
            background: rgba(255,255,255,0.08);
            color: white;
        }

        .btn-back:hover{
            background: rgba(255,255,255,0.15);
            transform: translateY(-2px);
        }

        .btn-edit{
            background: linear-gradient(135deg, #facc15, #eab308);
            color: #052e2b;
        }

        .btn-edit:hover{
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

            <div class="col-md-7">

                <div class="royal-card">

                    <!-- HEADER -->
                    <div class="royal-header">

                        <h2>
                            📘 Detail Program Studi
                        </h2>

                        <p>
                            Informasi lengkap data program studi kerajaan
                        </p>

                    </div>

                    <!-- BODY -->
                    <div class="p-4">

                        <table class="royal-table">

                            <tbody>

                                <tr>
                                    <th width="35%">
                                        Nama Prodi
                                    </th>

                                    <td width="10%">:</td>

                                    <td>
                                        {{ $prodi->nama_prodi }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Nama Kaprodi
                                    </th>

                                    <td>:</td>

                                    <td>
                                        {{ $prodi->nama_kaprodi }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>
                                        Alias / Kode
                                    </th>

                                    <td>:</td>

                                    <td>
                                        <span class="badge-royal">
                                            {{ $prodi->alias_prodi }}
                                        </span>
                                    </td>
                                </tr>

                            </tbody>

                        </table>

                        <!-- BUTTON -->
                        <div class="mt-4 d-flex gap-2">

                            <a href="{{ route('prodi.index') }}"
                               class="btn-royal btn-back">
                                ← Kembali
                            </a>

                            <a href="{{ route('prodi.edit', $prodi->id) }}"
                               class="btn-royal btn-edit">
                                ✏ Edit
                            </a>

                        </div>

                    </div>

                    <!-- FOOTER -->
                    <div class="royal-footer">

                        🎓 Royal Academic System — Detail Program Studi

                    </div>

                </div>

            </div>

        </div>

    </div>

</x-layout>
