<div class="hero-section app-hero">
    <div class="container">
        <div class="hero-content app-hero-content text-center">
            <div class="row justify-content-md-center">
                <div class="col-md-10">
                    <p class="wow fadeInUp" data-wow-delay="0.2s">
                        FORM PENGADUAN
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-features" id="features">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-md-12">
                <a href="<?php echo base_url()?>Aduan/create" class="ui button teal"><i class="fa fa-plus-circle"></i>FORM ADUAN</a>
                <hr />
                <div class="card table-card">
                    <div class="card-block">
                        <table class="ui celled table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Terlapor</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach($aduan as $i){?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $i->terlapor ?></td>
                                    <td><?php echo $i->date_created ?></td>
                                    <td></td>
                                </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div>