<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', $proyectosCuentasExtra->id],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', $proyectosCuentasExtra->id], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $proyectosCuentasExtra->id)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('proyectosCuentasExtra') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
                                <dt class="offset-2 col-sm-4"><?= __('Id') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosCuentasExtra->id) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Proyecto') ?></dt>
        <dd class="col-sm-4"><?= $proyectosCuentasExtra->has('proyecto') ? $this->Html->link($proyectosCuentasExtra->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectosCuentasExtra->proyecto->id]) : '' ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Name') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosCuentasExtra->name) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Usuario') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosCuentasExtra->usuario) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Contrasenia') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosCuentasExtra->contrasenia) ?></dd>
                                                                <dt class="offset-2 col-sm-4"><?= __('Created') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosCuentasExtra->created) ?__($proyectosCuentasExtra->created->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Modified') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosCuentasExtra->modified) ?__($proyectosCuentasExtra->modified->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                                        <dt class="offset-2 col-sm-4"><?= __('Activo') ?></dt>
        <dd class="col-sm-4"><?= $proyectosCuentasExtra->activo ? __('<span class="label label-success">SI</span>') : __('<span class="label label-danger">NO</span>'); ?></dd>
                      </dl>
          </div>
  </div>
</div>
