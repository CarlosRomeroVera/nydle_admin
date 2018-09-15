<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', $proyecto->id],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', $proyecto->id], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $proyecto->id)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('proyecto') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
                                <dt class="offset-2 col-sm-4"><?= __('Id') ?></dt>
        <dd class="col-sm-4"><?= h($proyecto->id) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Name') ?></dt>
        <dd class="col-sm-4"><?= h($proyecto->name) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Cliente') ?></dt>
        <dd class="col-sm-4"><?= $proyecto->has('cliente') ? $this->Html->link($proyecto->cliente->name, ['controller' => 'Clientes', 'action' => 'view', $proyecto->cliente->id]) : '' ?></dd>
                                                                <dt class="offset-2 col-sm-4"><?= __('Fecha Inicio') ?></dt>
        <dd class="col-sm-4"><?= h($proyecto->fecha_inicio) ?__($proyecto->fecha_inicio->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Fecha Vencimiento') ?></dt>
        <dd class="col-sm-4"><?= h($proyecto->fecha_vencimiento) ?__($proyecto->fecha_vencimiento->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Created') ?></dt>
        <dd class="col-sm-4"><?= h($proyecto->created) ?__($proyecto->created->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Modified') ?></dt>
        <dd class="col-sm-4"><?= h($proyecto->modified) ?__($proyecto->modified->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                                        <dt class="offset-2 col-sm-4"><?= __('Activo') ?></dt>
        <dd class="col-sm-4"><?= $proyecto->activo ? __('<span class="label label-success">SI</span>') : __('<span class="label label-danger">NO</span>'); ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Renovado') ?></dt>
        <dd class="col-sm-4"><?= $proyecto->renovado ? __('<span class="label label-success">SI</span>') : __('<span class="label label-danger">NO</span>'); ?></dd>
                      </dl>
                  <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($proyecto->observaciones)); ?>
      </div>
                </div>
  </div>
</div>
