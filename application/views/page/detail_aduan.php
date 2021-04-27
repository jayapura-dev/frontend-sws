<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s">
                        DETAIL ADUAN
                    </h2>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-block">
                        <table class="ui celled table">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td><?php echo $detail['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $detail['email'] ?></td>
                                </tr>
                                <tr>
                                    <td>Kontak</td>
                                    <td>:</td>
                                    <td><?php echo $detail['no_hp'] ?></td>
                                </tr>
                                <tr>
                                    <td>Judul Aduan</td>
                                    <td>:</td>
                                    <td><?php echo $detail['judul_aduan'] ?></td>
                                </tr>
                                <tr>
                                    <td>Distrik, Kampung</td>
                                    <td>:</td>
                                    <td><?php echo $detail['distrik'] ?> / <?php echo $detail['kampung'] ?></td>
                                </tr>
                                <tr>
                                    <td>Terlapor (Orang yang dilaporkan)</td>
                                    <td>:</td>
                                    <td><?php echo $detail['terlapor'] ?></td>
                                </tr>
                                <tr>
                                    <td>Isi Aduan</td>
                                    <td>:</td>
                                    <td><?php echo $detail['permasalahan'] ?></td>
                                </tr>
                                <tr>
                                    <td>File</td>
                                    <td>:</td>
                                    <td> <a href="<?php echo base_url()?>file/attachment/<?php echo $detail['file_path'] ?>" target="_blank" > <i class="clipboard outline icon"></i> </a> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>