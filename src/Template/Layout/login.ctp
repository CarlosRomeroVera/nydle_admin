<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nydle code</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">

    <?php
    echo $this->Html->css
                            (
                                array
                                    (
                                        'auxiliares/bootstrap/bootstrap.min.css',
                                        'auxiliares/fontawesome/font-awesome.min.css',
                                        'default/custom.css',
                                        'default/fontastic.css',
                                        'default/style.default.css'
                                    )
                            );
    ?>
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Favicon-->
    <!-- <link rel="shortcut icon" href="img/favicon.ico"> -->
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>INICIAR SESIÓN</h1>
                  </div>
                  <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?= $this->Flash->render() ?>
                  <?= $this->fetch('content') ?>

                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p style="background-color:#FF7F00;">Derechos reservados <a href="https://nydlecode.com" class="external">nydle code</a>
        </p>
      </div>
    </div>

    <?php
        echo $this->Html->script
                                (
                                    array
                                        (
                                            'auxiliares/jquery-3.3.1.min.js',
                                            'auxiliares/popper/umd/popper.min.js',
                                            'auxiliares/bootstrap/bootstrap.min.js',
                                            'auxiliares/jquery.cookie/jquery.cookie.js',
                                            'auxiliares/jquery-validation/jquery.validate.min.js',
                                            'default/front.js',
                                        )
                                );
    ?>

  </body>
</html>
