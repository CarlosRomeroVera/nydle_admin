<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', $proyectoUsersAsignado->id],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', $proyectoUsersAsignado->id], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $proyectoUsersAsignado->id)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('proyectoUsersAsignado') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
                                <dt class="offset-2 col-sm-4"><?= __('Id') ?></dt>
        <dd class="col-sm-4"><?= h($proyectoUsersAsignado->id) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Proyecto') ?></dt>
        <dd class="col-sm-4"><?= $proyectoUsersAsignado->has('proyecto') ? $this->Html->link($proyectoUsersAsignado->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectoUsersAsignado->proyecto->id]) : '' ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('User') ?></dt>
        <dd class="col-sm-4"><?= $proyectoUsersAsignado->has('user') ? $this->Html->link($proyectoUsersAsignado->user->name, ['controller' => 'Users', 'action' => 'view', $proyectoUsersAsignado->user->id]) : '' ?></dd>
                                                                <dt class="offset-2 col-sm-4"><?= __('Created') ?></dt>
        <dd class="col-sm-4"><?= h($proyectoUsersAsignado->created) ?__($proyectoUsersAsignado->created->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Modified') ?></dt>
        <dd class="col-sm-4"><?= h($proyectoUsersAsignado->modified) ?__($proyectoUsersAsignado->modified->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                                        <dt class="offset-2 col-sm-4"><?= __('Activo') ?></dt>
        <dd class="col-sm-4"><?= $proyectoUsersAsignado->activo ? __('<span class="label label-success">SI</span>') : __('<span class="label label-danger">NO</span>'); ?></dd>
                      </dl>
          </div>
  </div>
</div>
