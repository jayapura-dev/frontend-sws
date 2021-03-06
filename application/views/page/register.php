<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" href="<?php echo base_url()?>assets\images\logo\KabJayapura.png" type="image/png" sizes="32x32">

  <!-- Site Properties -->
  <title>Login | Akun</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css" />

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
        <img src="<?php echo base_url()?>assets/images/logo/KabJayapura.png" class="image">
        <div class="content">
            Daftar Akun | e - Aduan
        </div>
        </h2>
        <form class="ui large form" method="post" action="<?php echo base_url()?>Register/Register_process">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="username" placeholder="Username">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="sandi" placeholder="Password">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="envelope outline icon"></i>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="phone volume icon"></i>
                        <input type="text" name="no_telfon" placeholder="No Telfon">
                    </div>
                </div>
                <button type="submit" class="ui fluid large teal button">Daftar</button>
            </div>
            <div class="ui error message"></div>
        </form>
        <div className="ui message">
            Sudah Punya Akun? <a href="<?php echo base_url()?>auth"> Masuk</a> | <a href="<?php echo base_url()?>">Kembali Beranda</a>
        </div>
        
    </div>
</div>

</body>
</html>
