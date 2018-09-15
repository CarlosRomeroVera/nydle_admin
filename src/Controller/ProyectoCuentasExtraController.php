<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectoCuentasExtra Controller
 *
 * @property \App\Model\Table\ProyectoCuentasExtraTable $ProyectoCuentasExtra
 *
 * @method \App\Model\Entity\ProyectoCuentasExtra[] paginate($object = null, array $settings = [])
 */
class ProyectoCuentasExtraController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectoCuentasExtra';
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
                  $proyectoCuentasExtra = $this->ProyectoCuentasExtra->find('all',['contain' => ['Proyectos']]);
            foreach($proyectoCuentasExtra as $proyectoCuentasExtra)
      {
            $proyectoCuentasExtra['acciones'] =  "<div class='btn-group'>";
            $proyectoCuentasExtra['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectoCuentasExtra->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoCuentasExtra['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectoCuentasExtra->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoCuentasExtra['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectoCuentasExtra->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectoCuentasExtra->id)]);
            $proyectoCuentasExtra['acciones'] .="</div>";

      }
        $this->set(compact('proyectoCuentasExtra'));
        $this->set('_serialize', ['proyectoCuentasExtra']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto Cuentas Extra id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectoCuentasExtra = $this->ProyectoCuentasExtra->get($id, [
            'contain' => ['Proyectos']
        ]);

        $this->set('proyectoCuentasExtra', $proyectoCuentasExtra);
        $this->set('_serialize', ['proyectoCuentasExtra']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectoCuentasExtra = $this->ProyectoCuentasExtra->newEntity();
        if ($this->request->is('post')) {
            $proyectoCuentasExtra = $this->ProyectoCuentasExtra->patchEntity($proyectoCuentasExtra, $this->request->getData());
            if ($this->ProyectoCuentasExtra->save($proyectoCuentasExtra)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoCuentasExtra->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoCuentasExtra', 'proyectos'));
        $this->set('_serialize', ['proyectoCuentasExtra']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto Cuentas Extra id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectoCuentasExtra = $this->ProyectoCuentasExtra->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyectoCuentasExtra = $this->ProyectoCuentasExtra->patchEntity($proyectoCuentasExtra, $this->request->getData());
            if ($this->ProyectoCuentasExtra->save($proyectoCuentasExtra)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoCuentasExtra->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoCuentasExtra', 'proyectos'));
        $this->set('_serialize', ['proyectoCuentasExtra']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto Cuentas Extra id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectoCuentasExtra = $this->ProyectoCuentasExtra->get($id);
        if ($this->ProyectoCuentasExtra->delete($proyectoCuentasExtra)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
