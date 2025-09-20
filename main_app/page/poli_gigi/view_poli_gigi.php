<!-- View Poli Gigi Konservasi - Desain mirip screenshot user -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antrian Poliklinik RS Pelita Insani</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <style>
        body {
            background: #1976d2;
            color: #fff;
        }
        .main-box {
            background: #1976d2;
            min-height: 100vh;
            padding: 0;
        }
        .card-custom {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            padding: 30px 20px;
            margin-top: 30px;
        }
        .yellow-box {
            background: #ffd600;
            color: #c62828;
            border-radius: 10px;
            padding: 20px 0;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0 10px;
        }
        .antrian-box {
            font-size: 4rem;
            font-weight: bold;
            color: #fff;
            margin-top: 30px;
        }
        .jadwal {
            font-size: 1.2rem;
            color: #333;
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }
        .footer {
            background: #fff;
            color: #1976d2;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            font-size: 1rem;
        }
        .running-text {
            color: #d32f2f;
            font-weight: bold;
            font-size: 1.2rem;
            margin-top: 10px;
        }
        .doctor-img {
            width: 300px;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container-fluid main-box">
        <div class="row">
            <div class="col-md-5 d-flex align-items-center justify-content-center">
                <div>
                    <img src="../assets/img/display/1.png" alt="Poli Gigi" class="doctor-img">
                    <div class="jadwal">
                        <h4><b>POLIKLINIK GIGI & MULUT SPESIALIS KONSERVASI GIGI BPJS</b></h4>
                        <p><b>Jadwal Praktek:</b><br>
                        Senin, Rabu & Sabtu<br>
                        Pukul 14:00 WITA s/d 18:00 WITA<br>
                        <span style="color:#d32f2f;font-size:1rem;">*Melayani pasien Umum, BPJS, Asuransi dan Pihak ke-3</span></p>
                        <p><b>Pendaftaran Online WA PI-CARE</b><br>
                        <span style="color:#1976d2;font-size:1.2rem;">0811-5800-059</span></p>
                        <p style="margin-top:10px;"><b>drg. Raharshanti Inggar Hayuning Hapsari, Sp.KG</b></p>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card card-custom text-center">
                    <h2 style="color:#fff;font-weight:bold;">Poli Gigi Konservasi drg. Inggar</h2>
                    <h4 style="color:#fff;">drg. Inggar Sp. Kg</h4>
                    <div class="row mb-4 mt-4">
                        <div class="col-6">
                            <div class="yellow-box">
                                <div style="font-size:1.2rem;color:#c62828;font-weight:normal;">Total Antrian Pasien</div>
                                <div id="totalAntrian">40</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="yellow-box">
                                <div style="font-size:1.2rem;color:#c62828;font-weight:normal;">Total Sudah Dilayani</div>
                                <div id="totalDilayani">0</div>
                            </div>
                        </div>
                    </div>
                    <div class="antrian-box" id="antrianSekarang">010</div>
                    <div class="antrian-box" id="antrianSelanjutnya">011</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center running-text">
                Running text display antrian poliklinik.....
            </div>
        </div>
    </div>
    <div class="footer text-center">
        <span>Sabtu, 20 September 2025 &nbsp; <i class="fa fa-user"></i> Login sebagai Tamu</span>
        <span class="float-right">Made with <span style="color:#d32f2f;">♥</span> by drg. F. Basoro. Powered by mLITE.</span>
    </div>
</body>
</html>
