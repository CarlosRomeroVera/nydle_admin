<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', $proyectosHistorico->id],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', $proyectosHistorico->id], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $proyectosHistorico->id)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('proyectosHistorico') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
                                <dt class="offset-2 col-sm-4"><?= __('Id') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosHistorico->id) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Proyecto') ?></dt>
        <dd class="col-sm-4"><?= $proyectosHistorico->has('proyecto') ? $this->Html->link($proyectosHistorico->proyecto->name, ['controller' => 'Proyectos', 'action' => 'view', $proyectosHistorico->proyecto->id]) : '' ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Name') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosHistorico->name) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Cliente') ?></dt>
        <dd class="col-sm-4"><?= $proyectosHistorico->has('cliente') ? $this->Html->link($proyectosHistorico->cliente->name, ['controller' => 'Clientes', 'action' => 'view', $proyectosHistorico->cliente->id]) : '' ?></dd>
                                                                <dt class="offset-2 col-sm-4"><?= __('Fecha Inicio') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosHistorico->fecha_inicio) ?__($proyectosHistorico->fecha_inicio->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Fecha Vencimiento') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosHistorico->fecha_vencimiento) ?__($proyectosHistorico->fecha_vencimiento->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Created') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosHistorico->created) ?__($proyectosHistorico->created->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Modified') ?></dt>
        <dd class="col-sm-4"><?= h($proyectosHistorico->modified) ?__($proyectosHistorico->modified->format('d-m-Y h:i:s')) : __('<span class="label label-danger">SIN ACCESO</span>');  ?></dd>
                              </dl>
                  <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($proyectosHistorico->observaciones)); ?>
      </div>
                </div>
  </div>
</div>
