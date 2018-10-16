<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>nydle code</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <?php echo $this->Html->meta('icon', 'fav.png', ['type'=>'image/png'])?>
    <?php
    echo $this->Html->css
                            (
                                array
                                    (
                                        'auxiliares/bootstrap/bootstrap.min.css',
                                        'auxiliares/fontawesome/font-awesome.min.css',
                                        'default/login.css'
                                    )
                            );
    ?>
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
  </head>
  <body>
    <?= $this->Flash->render() ?>
    <?php echo $this->Flash->render('flash');?>
    <?= $this->fetch('content') ?>

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
                                            'default/login.js',
                                        )
                                );
    ?>

  </body>
</html>
