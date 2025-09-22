<!-- View Poli Gigi Konservasi - Desain mirip screenshot user -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Poliklinik RS Pelita Insani</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #1976d2 60%, #42a5f5 100%);
            color: #fff;
        }
        .main-box {
            min-height: 100vh;
            padding: 0;
        }
        .card-custom {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 24px 24px rgba(25, 118, 210, 0.12);
            padding: 36px 28px;
            margin-top: 10px;
            position: relative;
        }
        .yellow-box {
            background: linear-gradient(90deg, #fbaf26 80%, #dfd996ff 100%);
            color: #24d3d3ff;
            border-radius: 14px;
            padding: 18px 0 10px 0;
            font-size: 2.7rem;
            font-weight: bold;
            margin: 0 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            transition: transform 0.2s;
        }
        .yellow-box:hover {
            transform: scale(1.04);
            box-shadow: 0 6px 18px rgba(25, 118, 210, 0.13);
        }
        .yellow-box .fa {
            font-size: 2.2rem;
            margin-bottom: 8px;
        }
        .antrian-box {
            font-size: 4.2rem;
            font-weight: bold;
            color: #1976d2;
            background: #d9dde08c;
            border-radius: 14px;
            box-shadow: 0 2px 8px rgba(25, 118, 210, 0.09);
            margin: 18px auto 0 auto;
            width: 70%;
            padding: 18px 0;
            letter-spacing: 0.1em;
            animation: pop 1s;
        }
        @keyframes pop {
            0% { transform: scale(0.7); opacity: 0.5; }
            80% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
        .jadwal {
            font-size: 1.2rem;
            color: #333;
            background: #fff;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(25, 118, 210, 0.07);
        }
        .running-text {
            color: #d32f2f;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 10px;
            animation: running 8s linear infinite;
        }
        @keyframes running {
            0% { letter-spacing: 0.1em; }
            50% { letter-spacing: 0.3em; }
            100% { letter-spacing: 0.1em; }
        }
        .doctor-img {
            width: 100%;
            max-width: 520px;
            height: 370px;
            object-fit: cover;
            border-radius: 18px;
            margin-bottom: 10px;
            box-shadow: 0 2px 12px rgba(25, 118, 210, 0.13);
            display: block;
            object-fit: contain;
            transition: transform 0.4s cubic-bezier(.17,.67,.83,.67), box-shadow 0.4s;
        }
        @media (min-width: 1200px) {
            .doctor-img {
                max-width: 720px;
                height: 360px;
                object-fit: contain;
                transition: transform 0.4s cubic-bezier(.17,.67,.83,.67), box-shadow 0.4s;
            }
        }
        @media (max-width: 900px) {
            .doctor-img { width: 100%; max-width: 520px; height: 250px; }
            .antrian-box { font-size: 2.2rem; width: 90%; }
        }
        @media (max-width: 600px) {
            .doctor-img { width: 100%; max-width: 580px; height: 190px; object-fit: contain;}
            .antrian-box { font-size: 1.3rem; width: 100%; object-fit: contain;}
            .card-custom { padding: 18px 6px; object-fit: contain;}
        }
    </style>
</head>
<body>
    <div class="container-fluid main-box">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <div>
                    <img src="../assets/img/display/gigi_U0052.png" alt="Poli Gigi" class="doctor-img">
                    <div class="jadwal text-center">
                        <p style="margin-top:10px;"><b>drg. RAHARSHANTI INGGAR HAYUNING HAPSARI, Sp.KG</b></p>
                        <h4><b>POLIKLINIK GIGI & MULUT SPESIALIS KONSERVASI GIGI</b></h4>
                        <p><b> Jadwal Praktek :</b><br>
                        Senin, Rabu, Sabtu (Pasien BPJS)<br>
                        Selasa, Kamis, Jum'at (Pasien Umum)<br>
                        Pukul 08:00 WITA s/d 13:00 WITA<br>
                        <span style="color:#d32f2f;font-size:1rem;">*Melayani pasien Umum, BPJS, Asuransi dan Pihak ke-3</span></p>
                        <p><b>Pendaftaran Online WA PI-CARE</b><br>
                        <span style="color:#1976d2;font-size:1.2rem;">0811-5800-059</span></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-custom text-center">
                    <h2 style="color:#1976d2;font-weight:bold;">Poli Gigi & Mulut Spesialis Konservasi Gigi</h2>
                    <h4 style="color:#1976d2;">drg. RAHARSHANTI INGGAR HAYUNING HAPSARI, Sp.KG</h4>
                    <div class="row mb-4 mt-4">
                        <div class="col-6">
                            <div class="yellow-box">
                                <i class="fa fa-users"></i>
                                <div style="font-size:1.2rem;color:#3bb3c2;font-weight:normal;">Total Antrian Pasien</div>
                                <div id="totalAntrian">40</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="yellow-box">
                                <i class="fa fa-check-circle"></i>
                                <div style="font-size:1.2rem;color:#3bb3c2;font-weight:normal;">Total Sudah Dilayani</div>
                                <div id="totalDilayani">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="antrian-box" id="antrianSekarang">
                        <i class="fa fa-bell"></i> 010
                        <div style="font-size:1.1rem;color:#1976d2;font-weight:normal;">Sedang Dipanggil</div>
                    </div>
                    <div class="antrian-box" id="antrianSelanjutnya">
                        <i class="fa fa-arrow-right"></i> 011
                        <div style="font-size:1.1rem;color:#1976d2;font-weight:normal;">Selanjutnya</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center running-text">
                <i class="fa fa-bullhorn"></i> Informasi: Mohon pasien menunggu panggilan antrian poliklinik dengan tertib dan membawa dokumen yang diperlukan.
            </div>
        </div>
    </div>
</body>
</html>
