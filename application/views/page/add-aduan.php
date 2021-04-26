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
            <div class="col-sm-12 col-md-12 col-lg-12 mt-12">
                <div class="ui container">
                    <div class="ui padded segment">
                        <h1>
                            Perhatian !! <br/>Mohon Isilah Form Pengaduan dengan Data yang benar, dan tidak Ambigu, Jika Belum Mengerti dengan Isian Form Silahkan Pergi ke <a href="<?php echo base_url()?>Aduan/petunjuk">Tata Cara Pengisian Form Aduan.</a>
                            <br />
                        </h1>
                    </div>
                    <br />
                    <form class="ui form">
                        <div class="card">
                            <div class="card-header">
                                <h2>FORM PENGADUAN</h2>
                            </div>
                            <div class="card-block">
                                <div class="form-group">
                                    <label class="text-center"><strong><h2>DATA DIRI</h2></strong></label>
                                </div>
                                <hr />
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="nama_pengadu" placeholder="Nama Lengkap Anda" required="true" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <input type="email" class="form-control" name="email" placeholder="Email Anda" required="true" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" required="true" name="no_telfon" placeholder="No Kontak Anda" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-center"><h4>PENGADUAN & LOKASI TEMPAT KEJADIAN</h4></label>
                                </div>
                                <hr />

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="title" required="true" placeholder="Judul Aduan Anda" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <select name="id_distrik" class="chosen-select form-control">
                                                <option value="">-- Pilih --</option>
                                                <?php
                                                foreach($distrik as $p => $val)
                                                {?>
                                                <option value="<?php echo $val->id_distrik;?>"><?php echo $val->distrik; ?></option>
                                                <?php
                                                }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" name="kampung" required="true" placeholder="Kampung" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <textarea name="deskripsi" id="" cols="30" placeholder="isi aduan" rows="10"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="text-center"><h4>Attach File (Tambahkan File Referensi Agar Memperkuat Pengaduan Anda!)</h4></label>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <input type="file" class="form-control" name="file" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="labeltext">Anda Mengadu Sebagai Anonim ? (Kami Tidak Akan Menampilkan Nama anda Pada Laporan Kami) </label><br />
                                    <div class="col-xs-6">
                                            <div class="form-check-inline">
                                            <label class="customradio"><span class="radiotextsty">Ya</span>
                                                <input type="radio" defaultChecked="True" value="tampil" name="anonim" /><span class="checkmark"></span>
                                            </label>
                                            <div class="space-div"></div>
                                            <label class="customradio"><span class="radiotextsty">Tidak</span>
                                                <input type="radio" name="anonim" value="tidak" /><span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-warning">
                                    <h2>Mohon Periksa Kembali Aduan Anda Dengan Benar! Karena Setelah Anda Mengirim, Aduan Tidak Dapat di Edit (Ubah)</h2>
                                </div>
                                <button type="submit" class="ui green button"><i class="fa fa-send"></i> KIRIM PENGADUAN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

