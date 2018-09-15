<%
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.1.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

%>

      public function initialize()
           {
               parent::initialize();
               $title_for_layout = '<%= $name %>';
               $this->set(compact('title_for_layout'));
           }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */

    public function index()
    {
      //Cargamos los Helper para armar los links de acciones
      $View = new \App\View\AppView();
      App::classname('Html', 'View/Helper', 'Helper');
      $Html = $View->loadHelper('Html');
      $Form = $View->loadHelper('Form');
      <% $belongsTo = $this->Bake->aliasExtractor($modelObj, 'BelongsTo'); %>
      <% if ($belongsTo): %>
      $<%= $pluralName %> = $this-><%= $currentModelName %>->find('all',['contain' => [<%= $this->Bake->stringifyList($belongsTo, ['indent' => false]) %>]]);
      <% else: %>
      $<%= $pluralName %> = $this-><%= $currentModelName %>->find('all',['contain' => []]);
      <% endif; %>
      foreach($<%= $pluralName %> as $<%= $singularName %>)
      {
            $<%= $singularName %>['acciones'] =  "<div class='btn-group'>";
            $<%= $singularName %>['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$<%= $singularName %>->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $<%= $singularName %>['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$<%= $singularName %>->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $<%= $singularName %>['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$<%= $singularName %>->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $<%= $singularName %>->id)]);
            $<%= $singularName %>['acciones'] .="</div>";

      }
        $this->set(compact('<%= $pluralName %>'));
        $this->set('_serialize', ['<%= $pluralName %>']);
    }
