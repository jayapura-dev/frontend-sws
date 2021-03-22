<script src="<?php echo base_url()?>assets/frontend/js/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/exporting.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/export-data.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/jquery-1.11.3.min.js"></script>

<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">e - Aduan Pemerintah Kabupaten Jayapura</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Masyarakat dapat Melakukan Pengaduan atas Dugaan adanya Gratifikasi, Korupsi, Manipulasi dan sejenisnya yang berpotensi merugikan Daerah/Negara dan
                        Turut Serta dalam Mewujudkan Pelayanan Masyarakat yang lebih baik.
                    </p>
                    <?php if($this->session->userdata('nama')): ?>
                        <button class="btn btn-primary btn-action" data-wow-delay="0.2s"><a href="<?php echo base_url()?>">FORM ADUAN</a> </button>
                    <?php else: ?>
                        <button class="btn btn-primary btn-action" data-wow-delay="0.2s"><a href="<?php echo base_url()?>">DAFTAR</a> </button>
                    <?php endif ?>
                </div>
                <div class="col-md-12">
                    <div class="hero-image">
                        <img class="img-fluid" src="<?php echo base_url()?>assets\frontend\images\app_hero_1.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="services-section text-center" id="services">
    <div class="container">
        <div class="row  justify-content-md-center">
            <div class="col-md-8">
                <div class="services-content">
                    <h1 class="wow fadeInUp" data-wow-delay="0s">Bagaimana Proses Yang akan dilakukan ?</h1>
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        Ada Beberapa Step Yang perlu Anda ketahui ketika Anda Mengirimkan Pengaduan Kepada kami.
                    </p>
                </div>
            </div>
            <div class="col-md-12 text-center">
                <div class="services">
                    <div class="row">
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="services-icon">
                                <img src="<?php echo base_url()?>assets\frontend\logos\icon1.png" height="60" width="60" alt="Service" />
                            </div>
                            <div class="services-description">
                                <h1>Tulis Aduan</h1>
                                <p>
                                    Anda Mengririmkan Aduan Kepada Kami, dan Admin Kami akan Melakukan Pemeriksaan Terhadap Data Aduan Anda dan dilanjutkan Ke Bag. Pemeriksaan.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="services-icon">
                                <img class="icon-2" src="<?php echo base_url()?>assets\frontend\logos\icon2.png" height="60" width="60" alt="Service" />
                            </div>
                            <div class="services-description">
                                <h1>Proses Delegasi</h1>
                                <p>
                                    Jika Data dan Dokumen Lapiran Anda Valid Pemeriksa akan Melakukan Proses Delegasi Kepada Pihak - Pihak yang berwenang Agar ditindak Lanjuti.
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="services-icon">
                                <img class="icon-3" src="<?php echo base_url()?>assets\frontend\logos\icon3.png" height="60" width="60" alt="Service" />
                            </div>
                            <div class="services-description">
                                <h1>Konfirmasi & Pemeriksaan</h1>
                                <p>
                                    Kami akan Mengkonfirmasi Aduan anda Kembali & Selanjutnya akan Melakukan Proses Audit Terhadap Instansi yang telah anda Laporkan. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>