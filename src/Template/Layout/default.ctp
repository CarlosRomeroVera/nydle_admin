<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'nydle code';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>    
    <?php echo $this->Html->meta('icon', 'fav.png', ['type'=>'image/png'])?>
    <?php echo $this->Html->css
                            (
                                array
                                    (
                                        'auxiliares/bootstrap/bootstrap.css',
                                        'auxiliares/fontawesome/all.css',
                                        'auxiliares/fontawesome/v4-shims.css',
                                        'default/fontastic.css',
                                        'default/style.default.css',
                                        'auxiliares/select2/select2.min.css?1424887856',
                                        'auxiliares/DataTables/jquery.dataTables.css?1423553989',
                                        'auxiliares/DataTables/buttons.dataTables.min.css',
                                        'auxiliares/DataTables/extensions/dataTables.colVis.css?1423553990',
                                        'auxiliares/DataTables/extensions/dataTables.tableTools.css?1423553990',
                                        'auxiliares/boostrap-datetimepicker/bootstrap-datetimepicker.css',
                                    )
                            );?>
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
                                              'auxiliares/fontawesome/fontawesome.js',
                                              'auxiliares/fontawesome/v4-shims.js',
                                              'default/front.js',
                                              'auxiliares/select2/select2.full.min.js',
                                              'auxiliares/select2/i18n/es.js',
                                              'auxiliares/DataTables/jquery.dataTables.min.js',
                                              'auxiliares/DataTables/dataTables.buttons.min.js',
                                              'auxiliares/DataTables/buttons.flash.min.js',
                                              'auxiliares/DataTables/jszip.min.js',
                                              'auxiliares/DataTables/pdfmake.min.js',
                                              'auxiliares/DataTables/vfs_fonts.js',
                                              'auxiliares/DataTables/buttons.html5.min.js',
                                              'auxiliares/DataTables/buttons.print.min.js',
                                              'auxiliares/DataTables/extensions/ColVis/js/dataTables.colVis.min.js',
                                              'auxiliares/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js',
                                              'auxiliares/DataTables/jquery.highlight',
                                              'auxiliares/sweetalert.min.js',
                                              'auxiliares/boostrap-datetimepicker/moment.js',
                                              'auxiliares/boostrap-datetimepicker/bootstrap-datetimepicker.js',
                                              'auxiliares/boostrap-datetimepicker/locales/es.js',
                                          )
                                  );
          ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
  <div class="page">
    <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                <?php echo $this->Html->link('<div class="brand-text d-none d-lg-inline-block"><span>nydle </span><strong> CODE</strong></div><div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>',
                array('controller'=>'clientes','action'=>'index'),array('class'=>'navbar-brand d-none d-sm-inline-block','escape'=>false));?>
                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <?php
                $ocultar = true;
                if (!$ocultar): ?>
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red badge-corner">12</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item">
                      <div class="notification">
                        <div class="notification-content"><i class="fa fa-envelope bg-green"></i>You have 6 new messages </div>
                        <div class="notification-time"><small>4 minutes ago</small></div>
                      </div></a></li>
                      <li><a rel="nofollow" href="#" class="dropdown-item">
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                        <li><a rel="nofollow" href="#" class="dropdown-item">
                          <div class="notification">
                            <div class="notification-content"><i class="fa fa-upload bg-orange"></i>Server Rebooted</div>
                            <div class="notification-time"><small>4 minutes ago</small></div>
                          </div></a></li>
                          <li><a rel="nofollow" href="#" class="dropdown-item">
                            <div class="notification">
                              <div class="notification-content"><i class="fa fa-twitter bg-blue"></i>You have 2 followers</div>
                              <div class="notification-time"><small>10 minutes ago</small></div>
                            </div></a></li>
                            <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>view all notifications                                            </strong></a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange badge-corner">10</span></a>
                          <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                              <div class="msg-profile"><?php echo $this->Html->image('avatar-1.jpg', ['alt' => '...','class'=>'img-fluid rounded-circle']);?></div>
                              <div class="msg-body">
                                <h3 class="h5">Jason Doe</h3><span>Sent You Message</span>
                              </div></a></li>
                              <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                <div class="msg-profile"><?php echo $this->Html->image('avatar-2.jpg', ['alt' => '...','class'=>'img-fluid rounded-circle']);?></div>
                                <div class="msg-body">
                                  <h3 class="h5">Frank Williams</h3><span>Sent You Message</span>
                                </div></a></li>
                                <li><a rel="nofollow" href="#" class="dropdown-item d-flex">
                                  <div class="msg-profile"><?php echo $this->Html->image('avatar-3.jpg', ['alt' => '...','class'=>'img-fluid rounded-circle']);?></div>
                                  <div class="msg-body">
                                    <h3 class="h5">Ashley Wood</h3><span>Sent You Message</span>
                                  </div></a></li>
                                  <li><a rel="nofollow" href="#" class="dropdown-item all-notifications text-center"> <strong>Read all messages   </strong></a></li>
                                </ul>
                              </li>
                              <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><?php echo $this->Html->image('flags/16/GB.png', ['alt' => 'English','class'=>'mr-2']);?><span class="d-none d-sm-inline-block">English</span></a>
                                <ul aria-labelledby="languages" class="dropdown-menu">
                                  <li><a rel="nofollow" href="#" class="dropdown-item"><?php echo $this->Html->image('flags/16/DE.png', ['alt' => 'English','class'=>'mr-2']);?>German</a></li>
                                  <li><a rel="nofollow" href="#" class="dropdown-item"><?php echo $this->Html->image('flags/16/FR.png', ['alt' => 'English','class'=>'mr-2']);?>French</a></li>
                                </ul>
                              </li>
              <?php endif; ?>
              <li class="nav-item dropdown"><a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><span class="d-none d-sm-inline-block fa fa-sign-out fa"></span></a>
                <ul aria-labelledby="languages" class="dropdown-menu">
                  <li>
                    <?php
                    echo $this->Html->link('<i class="fas fa-power-off"></i>Cerrar Sesión',
                                        array('controller'=>'users','action'=>'logout'),
                                        array('class'=>'dropdown-item','escape'=>false)
                                          );
                    ?>
                  </li>
                  <li>
                    <?php
                    echo $this->Html->link('<i class="fab fa-keycdn"></i>Cambiar Contraseña',
                                        array('controller'=>'users','action'=>'cambiar-password'),
                                        array('class'=>'dropdown-item','escape'=>false)
                                          );
                    ?>
                  </li>
                </ul>
              </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <div class="page-content d-flex align-items-stretch">
      <nav class="side-navbar">
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar">
              <i class="fas fa-user-circle fa-3x img-fluid rounded-circle"></i>
            </div>
            <div class="title">
              <h1 class="h4"><?php echo $this->request->getSession()->read('Auth.User.nombre_completo'); ?></h1>
            </div>
          </div>
          <span class="heading"><?php echo $this->request->getSession()->read('Auth.User.username'); ?></span>
          <ul class="list-unstyled">
                    <li class="active">
                      <?php echo $this->Html->link('<i class="icon-home"></i>Clientes',array('controller'=>'clientes','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="icon-grid"></i>Proyectos',array('controller'=>'proyectos','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="fa fa-bar-chart"></i>Histórico de proyectos',array('controller'=>'proyectos-historico','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="icon-mail"></i>Correos',array('controller'=>'proyecto-correos','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="icon-interface-windows"></i>Cuentas cpanel',array('controller'=>'proyecto-cpanel','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="icon-page"></i>Cuentas extra',array('controller'=>'proyectos-cuentas-extra','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="icon-rss-feed"></i>DNS',array('controller'=>'proyecto-dns','action'=>'index'),array('escape'=>false));?>
                    </li>
                    <li>
                      <?php echo $this->Html->link('<i class="icon-user"></i>Usuarios',array('controller'=>'users','action'=>'index'),array('escape'=>false));?>
                    </li>
        </nav>
          <div class="content-inner" >
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
            <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>nydle code &copy; 2018</p>
                </div>
                <div class="col-sm-6 text-right">
                  <!-- <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">bootstrapious</a></p> -->
                </div>
              </div>
            </div>
          </footer>
          </div>

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
                                              'auxiliares/fontawesome/fontawesome.js',
                                              'auxiliares/fontawesome/v4-shims.js',
                                              'default/front.js',
                                              'auxiliares/select2/select2.full.min.js',
                                              'auxiliares/select2/i18n/es.js',
                                              'auxiliares/DataTables/jquery.dataTables.min.js',
                                              'auxiliares/DataTables/dataTables.buttons.min.js',
                                              'auxiliares/DataTables/buttons.flash.min.js',
                                              'auxiliares/DataTables/jszip.min.js',
                                              'auxiliares/DataTables/pdfmake.min.js',
                                              'auxiliares/DataTables/vfs_fonts.js',
                                              'auxiliares/DataTables/buttons.html5.min.js',
                                              'auxiliares/DataTables/buttons.print.min.js',
                                              'auxiliares/DataTables/extensions/ColVis/js/dataTables.colVis.min.js',
                                              'auxiliares/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js',
                                              'auxiliares/DataTables/jquery.highlight',
                                              'auxiliares/boostrap-datetimepicker/moment.js',
                                              'auxiliares/boostrap-datetimepicker/bootstrap-datetimepicker.js',
                                              'auxiliares/boostrap-datetimepicker/locales/es.js',
                                          )
                                  );
          ?>
</body>
</html>
