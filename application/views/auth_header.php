<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-link page-scroll">
            <a class="ui teal button" href="#main"><i class="icon home"></i>Beranda</a>
        </li>
        <li class="nav-link page-scroll">
            <a class="ui teal button" href="#">Cek Aduan</a>
        </li>  
        <!--<li class="nav-link page-scroll">
            <div class="ui dropdown item">
                <a type="button" className="ui green button dropdown-toggle" data-toggle="dropdown">
                    <strong><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama') ?></strong>
                </a>
            </div>
        </li>!-->
        <li class="nav-link page-scroll">
            <a class="ui teal button" href="<?php echo base_url()?>auth/logout"><i class="icon logout"></i>Logout</a>
        </li>  
    </ul>
</div>