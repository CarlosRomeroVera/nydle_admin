<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="card">
        <div class="card-header">
          <strong>Acciones</strong>
        </div>
        <div class="card-body">
          <ul class="nav flex-column">
            <li><?php echo $this->Html->link(__('<i class="fas fa-eye"></i>&nbsp;Editar'), ['action' => 'edit', $rMenusGrupo->id],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Form->postLink(__('<i class="fas fa-times-circle"></i>&nbsp;Eliminar'), ['action' => 'delete', $rMenusGrupo->id], ['escape'=>false,'class'=>'nav-link','confirm' => __('Realmente desea eliminar el registro con Id # {0}?', $rMenusGrupo->id)]) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-list-ul"></i>&nbsp;Listado'), ['action' => 'index'],['escape'=>false,'class'=>'nav-link']) ?> </li>
            <li><?php echo $this->Html->link(__('<i class="fas fa-plus-circle"></i>&nbsp;Nuevo'), ['action' => 'add'],['escape'=>false,'class'=>'nav-link']) ?> </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <header class="page-header">
        <div class="container-fluid">
          <h2 class="no-margin-bottom"><?php echo h('rMenusGrupo') ?></h2>
        </div>
      </header>

      <dl class="row mt-3">
                                <dt class="offset-2 col-sm-4"><?= __('Id') ?></dt>
        <dd class="col-sm-4"><?= h($rMenusGrupo->id) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Id Menu') ?></dt>
        <dd class="col-sm-4"><?= h($rMenusGrupo->id_menu) ?></dd>
                                <dt class="offset-2 col-sm-4"><?= __('Id Grupo') ?></dt>
        <dd class="col-sm-4"><?= h($rMenusGrupo->id_grupo) ?></dd>
                                                                <dt class="offset-2 col-sm-4"><?= __('Created') ?></dt>
        <dd class="col-sm-4"><?= h($rMenusGrupo->created) ?__($rMenusGrupo->created->format('d-m-Y h:i:s')) : __('<span class="badge badge-danger">SIN ACCESO</span>');  ?></dd>
                <dt class="offset-2 col-sm-4"><?= __('Modified') ?></dt>
        <dd class="col-sm-4"><?= h($rMenusGrupo->modified) ?__($rMenusGrupo->modified->format('d-m-Y h:i:s')) : __('<span class="badge badge-danger">SIN ACCESO</span>');  ?></dd>
                                        <dt class="offset-2 col-sm-4"><?= __('Activo') ?></dt>
        <dd class="col-sm-4"><?= $rMenusGrupo->activo ? __('<span class="badge badge-success">SI</span>') : __('<span class="badge badge-danger">NO</span>'); ?></dd>
                      </dl>
          </div>
  </div>
</div>
