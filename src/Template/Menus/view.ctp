<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', $menu->id],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', $menu->id], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $menu->id)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('menu') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
                                <dt class="offset-2 col-sm-4"><?= __('Id') ?></dt>
        <dd class="col-sm-4"><?= h($menu->id) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Id Menu Padre') ?></dt>
        <dd class="col-sm-4"><?= h($menu->id_menu_padre) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Name') ?></dt>
        <dd class="col-sm-4"><?= h($menu->name) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Controller') ?></dt>
        <dd class="col-sm-4"><?= h($menu->controller) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Action') ?></dt>
        <dd class="col-sm-4"><?= h($menu->action) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Icon') ?></dt>
        <dd class="col-sm-4"><?= h($menu->icon) ?></dd>
                                                        <dt class="offset-2 col-sm-4"><?= __('Orden') ?></dt>
        <dd class="col-sm-4"><?= $this->Number->format($menu->orden) ?></dd>
                                        <dt class="offset-2 col-sm-4"><?= __('Created') ?></dt>
        <dd class="col-sm-4"><?= h($menu->created) ?__($menu->created->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Modified') ?></dt>
        <dd class="col-sm-4"><?= h($menu->modified) ?__($menu->modified->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                                        <dt class="offset-2 col-sm-4"><?= __('Activo') ?></dt>
        <dd class="col-sm-4"><?= $menu->activo ? __('<span class="label label-success">SI</span>') : __('<span class="label label-danger">NO</span>'); ?></dd>
                      </dl>
          </div>
  </div>
</div>
