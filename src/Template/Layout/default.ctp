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
    <?= $this->Html->meta('icon') ?>
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
                                              'auxiliares/DataTables/jquery.highlight'
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
              <!-- Navbar Header-->
              <div class="navbar-header">
                <a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>nydle </span><strong> CODE</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div></a>
                <a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications-->
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
                <!-- Messages                        -->
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
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><?php echo $this->Html->image('flags/16/GB.png', ['alt' => 'English','class'=>'mr-2']);?><span class="d-none d-sm-inline-block">English</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"><?php echo $this->Html->image('flags/16/DE.png', ['alt' => 'English','class'=>'mr-2']);?>German</a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"><?php echo $this->Html->image('flags/16/FR.png', ['alt' => 'English','class'=>'mr-2']);?>French</a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item text-danger"><a href="login.html" class="nav-link logout"> <span class="d-none d-sm-inline">Cerrar Sesión </span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
    <div class="page-content d-flex align-items-stretch">
      <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><?php echo $this->Html->image('avatar-1.jpg', ['alt' => '...','class'=>'img-fluid rounded-circle']);?></div>
            <div class="title">
              <h1 class="h4">Mark Stephen</h1>
              <p>Web Designer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li class="active"><a href="index.html"> <i class="icon-home"></i>Clientes </a></li>
                    <li><a href="/Proyectos"> <i class="icon-grid"></i>Proyectos </a></li>
                    <li><a href="/ProyectosHistorico"> <i class="fa fa-bar-chart"></i>Histórico de proyectos </a></li>
                    <li><a href="/ProyectoCorreos"> <i class="icon-padnote"></i>Correos </a></li>
                    <li><a href="/ProyectoCpanel"> <i class="icon-interface-windows"></i>Cuentas cpanel </a></li>
                    <li><a href="/ProyectoCuentasExtra"> <i class="icon-interface-windows"></i>Cuentas extra </a></li>
                    <li><a href="/ProyectoDns"> <i class="icon-interface-windows"></i>DNS </a></li>
                    <li><a href="/Users"> <i class="icon-interface-windows"></i>Usuarios </a></li>
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
                  <p>Design by <a href="https://bootstrapious.com/admin-templates" class="external">Carlos</a></p>
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
                                              'auxiliares/DataTables/jquery.highlight'
                                          )
                                  );
          ?>
</body>
</html>
