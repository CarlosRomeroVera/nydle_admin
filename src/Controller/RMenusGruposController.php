<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * RMenusGrupos Controller
 *
 * @property \App\Model\Table\RMenusGruposTable $RMenusGrupos
 *
 * @method \App\Model\Entity\RMenusGrupo[] paginate($object = null, array $settings = [])
 */
class RMenusGruposController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'RMenusGrupos';
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
                  $rMenusGrupos = $this->RMenusGrupos->find('all',['contain' => []]);
            foreach($rMenusGrupos as $rMenusGrupo)
      {
            $rMenusGrupo['acciones'] =  "<div class='btn-group'>";
            $rMenusGrupo['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$rMenusGrupo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $rMenusGrupo['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$rMenusGrupo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $rMenusGrupo['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$rMenusGrupo->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $rMenusGrupo->id)]);
            $rMenusGrupo['acciones'] .="</div>";

      }
        $this->set(compact('rMenusGrupos'));
        $this->set('_serialize', ['rMenusGrupos']);
    }

    /**
     * View method
     *
     * @param string|null $id R Menus Grupo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $rMenusGrupo = $this->RMenusGrupos->get($id, [
            'contain' => []
        ]);

        $this->set('rMenusGrupo', $rMenusGrupo);
        $this->set('_serialize', ['rMenusGrupo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $rMenusGrupo = $this->RMenusGrupos->newEntity();
        if ($this->request->is('post')) {
            $rMenusGrupo = $this->RMenusGrupos->patchEntity($rMenusGrupo, $this->request->getData());
            if ($this->RMenusGrupos->save($rMenusGrupo)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('rMenusGrupo'));
        $this->set('_serialize', ['rMenusGrupo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id R Menus Grupo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $rMenusGrupo = $this->RMenusGrupos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $rMenusGrupo = $this->RMenusGrupos->patchEntity($rMenusGrupo, $this->request->getData());
            if ($this->RMenusGrupos->save($rMenusGrupo)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('rMenusGrupo'));
        $this->set('_serialize', ['rMenusGrupo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id R Menus Grupo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $rMenusGrupo = $this->RMenusGrupos->get($id);
        if ($this->RMenusGrupos->delete($rMenusGrupo)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
