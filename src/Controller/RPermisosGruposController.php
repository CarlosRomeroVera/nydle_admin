<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * RPermisosGrupos Controller
 *
 * @property \App\Model\Table\RPermisosGruposTable $RPermisosGrupos
 *
 * @method \App\Model\Entity\RPermisosGrupo[] paginate($object = null, array $settings = [])
 */
class RPermisosGruposController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'RPermisosGrupos';
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
                  $rPermisosGrupos = $this->RPermisosGrupos->find('all',['contain' => []]);
            foreach($rPermisosGrupos as $rPermisosGrupo)
      {
            $rPermisosGrupo['acciones'] =  "<div class='btn-group'>";
            $rPermisosGrupo['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$rPermisosGrupo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $rPermisosGrupo['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$rPermisosGrupo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $rPermisosGrupo['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$rPermisosGrupo->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $rPermisosGrupo->id)]);
            $rPermisosGrupo['acciones'] .="</div>";

      }
        $this->set(compact('rPermisosGrupos'));
        $this->set('_serialize', ['rPermisosGrupos']);
    }

    /**
     * View method
     *
     * @param string|null $id R Permisos Grupo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rPermisosGrupo = $this->RPermisosGrupos->get($id, [
            'contain' => []
        ]);

        $this->set('rPermisosGrupo', $rPermisosGrupo);
        $this->set('_serialize', ['rPermisosGrupo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rPermisosGrupo = $this->RPermisosGrupos->newEntity();
        if ($this->request->is('post')) {
            $rPermisosGrupo = $this->RPermisosGrupos->patchEntity($rPermisosGrupo, $this->request->getData());
            if ($this->RPermisosGrupos->save($rPermisosGrupo)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('rPermisosGrupo'));
        $this->set('_serialize', ['rPermisosGrupo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id R Permisos Grupo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rPermisosGrupo = $this->RPermisosGrupos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rPermisosGrupo = $this->RPermisosGrupos->patchEntity($rPermisosGrupo, $this->request->getData());
            if ($this->RPermisosGrupos->save($rPermisosGrupo)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('rPermisosGrupo'));
        $this->set('_serialize', ['rPermisosGrupo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id R Permisos Grupo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rPermisosGrupo = $this->RPermisosGrupos->get($id);
        if ($this->RPermisosGrupos->delete($rPermisosGrupo)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
