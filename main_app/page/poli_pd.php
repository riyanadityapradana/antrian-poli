<!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column"> 
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam <b>(PAGI)</b><h2 class="lead"><b>dr. H. Gabril Taufiq Basri, Sp. PD., FINASIM</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0036';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drGabriel.png" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0036" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam <b>(SIANG)</b><h2 class="lead"><b>dr. H. Gabril Taufiq Basri, Sp. PD., FINASIM</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0037';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drGabriel.png" alt="user-avatar" class="img-circle img-fluid" style="width: 140px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0037" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam <b>(MALAM)</b><h2 class="lead"><b>dr. H. Gabril Taufiq Basri, Sp. PD., FINASIM</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0038';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drGabriel.png" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0038" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam <b>(PAGI)</b><h2 class="lead"><b>dr. Syafitri Yuliani.Sp.PD, FINASIM</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0039';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drSyaf.png" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0039" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam <b>(SIANG)</b><h2 class="lead"><b>dr. Syafitri Yuliani.Sp.PD, FINASIM</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0040';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drSyaf.png" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0040" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam <b>(MALAM)</b><h2 class="lead"><b>dr. Syafitri Yuliani.Sp.PD, FINASIM</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0041';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drSyaf.png" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0041" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Penyakit Dalam<h2 class="lead"><b>dr. Jimmi Diwindang Putra, Sp.PD</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                        $today = date('Y-m-d'); // Format sesuai database
                                        $kd_poli = 'U0063';
                                        // Ambil nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT reg_periksa.no_reg, pasien.nm_pasien FROM reg_periksa JOIN pasien ON pasien.no_rkm_medis = reg_periksa.no_rkm_medis WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sedang Diperiksa' ORDER BY reg_periksa.jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        $nama_pasien_sedang = $row_sedang['nm_pasien'] ?? '';

                                        // Total seluruh antrian hari ini
                                        $sql_total = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today'";
                                        $result_total = $config->query($sql_total);
                                        $row_total = $result_total->fetch_assoc();
                                        $total_antrian = $row_total['total'] ?? 0;

                                        // Total antrian yang sudah dilayani (stts = 'Sudah')
                                        $sql_sudah = "SELECT COUNT(DISTINCT reg_periksa.no_rawat) as total FROM reg_periksa WHERE reg_periksa.kd_poli = '$kd_poli' AND reg_periksa.tgl_registrasi = '$today' AND reg_periksa.stts = 'Sudah'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;
                                        ?>
                                        <p class="text-muted text-sm"><b>Antrian sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> <?php if($nama_pasien_sedang) echo '('.$nama_pasien_sedang.')'; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Pasien: </b><h4> <?php echo $total_antrian; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/img/dokter/pd_drjimmy.png" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover; object-fit: contain;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="https://satutitiklima.rspelitainsani.com/khanza-lite-master/anjungan/poli/U0063" target="_blank" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Display
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        <!-- /.card-body -->
        </div>
    </section>
<!-- /.content -->
 <script>
    setTimeout(function() {
        location.reload();
    }, 20000); // reload setiap 15 detik
</script>