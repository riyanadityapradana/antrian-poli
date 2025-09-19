<!-- Main content -->
    <section class="content">
        <div class="card card-solid">
            <div class="card-body pb-0">
                <div class="row">
                    <!-- Card -->
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                        <div class="card bg-light d-flex flex-fill">
                            <div class="card-header text-muted border-bottom-0">
                            Antrian Poli Anak Umum<h2 class="lead"><b>dr. Riyan aditya pradana, S.Kom</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                        <?php
                                            
                                        $today = date('Y/m/d'); // Sesuaikan dengan format di database
                                        // Total antrian yang sudah dilayani hari ini di poli anak umum
                                        $sql_sudah = "SELECT COUNT(DISTINCT no_rawat) as total FROM reg_periksa WHERE kd_poli = 'U0002' AND tgl_registrasi = '$today' AND stts != 'Belum'";
                                        $result_sudah = $config->query($sql_sudah);
                                        $row_sudah = $result_sudah->fetch_assoc();
                                        $total_sudah_dilayani = $row_sudah['total'] ?? 0;

                                        // Nomor antrian yang sedang dilayani (stts = 'Sedang Diperiksa')
                                        $sql_sedang = "SELECT no_reg FROM reg_periksa WHERE kd_poli = 'U0002' AND tgl_registrasi = '$today' AND stts = 'Sedang Diperiksa' ORDER BY jam_reg LIMIT 1";
                                        $result_sedang = $config->query($sql_sedang);
                                        $row_sedang = $result_sedang->fetch_assoc();
                                        $sedang_dilayani = $row_sedang['no_reg'] ?? '-';
                                        ?>
                                        <p class="text-muted text-sm"><b>Sedang dilayani: </b><h4> <?php echo $sedang_dilayani; ?> </h4></p>
                                        <p class="text-muted text-sm"><b>Total Antrian Sudah Dilayani: </b><h4> <?php echo $total_sudah_dilayani; ?> </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
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
                            Antrian Poli Anak BPJS<h2 class="lead"><b>dr. Riyan aditya pradana, S.Kom</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                    <p class="text-muted text-sm"><b>Sedang dilayani: </b><h4> 001 </h4></p>
                                    <p class="text-muted text-sm"><b>Total Antrian: </b><h4> 031 </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
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
                            Antrian Poli Anak <h2 class="lead"><b>dr. Riyan aditya pradana, S.Kom</b></h2>
                            </div>
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="col-7">
                                    <p class="text-muted text-sm"><b>Sedang dilayani: </b><h4> 001 </h4></p>
                                    <p class="text-muted text-sm"><b>Total Antrian: </b><h4> 031 </h4></p>
                                    </div>
                                    <div class="col-5 text-center">
                                    <img src="../assets/dist/img/user1-128x128.jpg" alt="user-avatar" class="img-circle img-fluid" style="width: 130px; height: 120px; object-fit: cover;">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="text-right">
                                    <a href="#" class="btn btn-sm bg-teal">
                                    <i class="fas fa-comments"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-primary">
                                    <i class="fas fa-user"></i> View Profile
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