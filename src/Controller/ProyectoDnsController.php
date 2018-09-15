<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectoDns Controller
 *
 * @property \App\Model\Table\ProyectoDnsTable $ProyectoDns
 *
 * @method \App\Model\Entity\ProyectoDn[] paginate($object = null, array $settings = [])
 */
class ProyectoDnsController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectoDns';
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
                  $proyectoDns = $this->ProyectoDns->find('all',['contain' => ['Proyectos']]);
            foreach($proyectoDns as $proyectoDn)
      {
            $proyectoDn['acciones'] =  "<div class='btn-group'>";
            $proyectoDn['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectoDn->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoDn['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectoDn->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoDn['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectoDn->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectoDn->id)]);
            $proyectoDn['acciones'] .="</div>";

      }
        $this->set(compact('proyectoDns'));
        $this->set('_serialize', ['proyectoDns']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto Dn id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectoDn = $this->ProyectoDns->get($id, [
            'contain' => ['Proyectos']
        ]);

        $this->set('proyectoDn', $proyectoDn);
        $this->set('_serialize', ['proyectoDn']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectoDn = $this->ProyectoDns->newEntity();
        if ($this->request->is('post')) {
            $proyectoDn = $this->ProyectoDns->patchEntity($proyectoDn, $this->request->getData());
            if ($this->ProyectoDns->save($proyectoDn)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoDns->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoDn', 'proyectos'));
        $this->set('_serialize', ['proyectoDn']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto Dn id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectoDn = $this->ProyectoDns->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyectoDn = $this->ProyectoDns->patchEntity($proyectoDn, $this->request->getData());
            if ($this->ProyectoDns->save($proyectoDn)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoDns->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoDn', 'proyectos'));
        $this->set('_serialize', ['proyectoDn']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto Dn id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectoDn = $this->ProyectoDns->get($id);
        if ($this->ProyectoDns->delete($proyectoDn)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
