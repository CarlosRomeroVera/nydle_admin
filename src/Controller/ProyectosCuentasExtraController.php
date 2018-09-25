<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectosCuentasExtra Controller
 *
 * @property \App\Model\Table\ProyectosCuentasExtraTable $ProyectosCuentasExtra
 *
 * @method \App\Model\Entity\ProyectosCuentasExtra[] paginate($object = null, array $settings = [])
 */
class ProyectosCuentasExtraController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectosCuentasExtra';
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
                  $proyectosCuentasExtra = $this->ProyectosCuentasExtra->find('all',['contain' => ['Proyectos']]);
            foreach($proyectosCuentasExtra as $proyectosCuentasExtra)
      {
            $proyectosCuentasExtra['acciones'] =  "<div class='btn-group'>";
            $proyectosCuentasExtra['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectosCuentasExtra->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectosCuentasExtra['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectosCuentasExtra->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectosCuentasExtra['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectosCuentasExtra->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectosCuentasExtra->id)]);
            $proyectosCuentasExtra['acciones'] .="</div>";

      }
        $this->set(compact('proyectosCuentasExtra'));
        $this->set('_serialize', ['proyectosCuentasExtra']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyectos Cuentas Extra id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectosCuentasExtra = $this->ProyectosCuentasExtra->get($id, [
            'contain' => ['Proyectos']
        ]);

        $this->set('proyectosCuentasExtra', $proyectosCuentasExtra);
        $this->set('_serialize', ['proyectosCuentasExtra']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectosCuentasExtra = $this->ProyectosCuentasExtra->newEntity();
        if ($this->request->is('post')) {
            $proyectosCuentasExtra = $this->ProyectosCuentasExtra->patchEntity($proyectosCuentasExtra, $this->request->getData());
            if ($this->ProyectosCuentasExtra->save($proyectosCuentasExtra)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectosCuentasExtra->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectosCuentasExtra', 'proyectos'));
        $this->set('_serialize', ['proyectosCuentasExtra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyectos Cuentas Extra id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectosCuentasExtra = $this->ProyectosCuentasExtra->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyectosCuentasExtra = $this->ProyectosCuentasExtra->patchEntity($proyectosCuentasExtra, $this->request->getData());
            if ($this->ProyectosCuentasExtra->save($proyectosCuentasExtra)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectosCuentasExtra->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectosCuentasExtra', 'proyectos'));
        $this->set('_serialize', ['proyectosCuentasExtra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyectos Cuentas Extra id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectosCuentasExtra = $this->ProyectosCuentasExtra->get($id);
        if ($this->ProyectosCuentasExtra->delete($proyectosCuentasExtra)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
