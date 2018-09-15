<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectoUsersAsignados Controller
 *
 * @property \App\Model\Table\ProyectoUsersAsignadosTable $ProyectoUsersAsignados
 *
 * @method \App\Model\Entity\ProyectoUsersAsignado[] paginate($object = null, array $settings = [])
 */
class ProyectoUsersAsignadosController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectoUsersAsignados';
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
                  $proyectoUsersAsignados = $this->ProyectoUsersAsignados->find('all',['contain' => ['Proyectos', 'Users']]);
            foreach($proyectoUsersAsignados as $proyectoUsersAsignado)
      {
            $proyectoUsersAsignado['acciones'] =  "<div class='btn-group'>";
            $proyectoUsersAsignado['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectoUsersAsignado->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoUsersAsignado['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectoUsersAsignado->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoUsersAsignado['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectoUsersAsignado->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectoUsersAsignado->id)]);
            $proyectoUsersAsignado['acciones'] .="</div>";

      }
        $this->set(compact('proyectoUsersAsignados'));
        $this->set('_serialize', ['proyectoUsersAsignados']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto Users Asignado id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectoUsersAsignado = $this->ProyectoUsersAsignados->get($id, [
            'contain' => ['Proyectos', 'Users']
        ]);

        $this->set('proyectoUsersAsignado', $proyectoUsersAsignado);
        $this->set('_serialize', ['proyectoUsersAsignado']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectoUsersAsignado = $this->ProyectoUsersAsignados->newEntity();
        if ($this->request->is('post')) {
            $proyectoUsersAsignado = $this->ProyectoUsersAsignados->patchEntity($proyectoUsersAsignado, $this->request->getData());
            if ($this->ProyectoUsersAsignados->save($proyectoUsersAsignado)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoUsersAsignados->Proyectos->find('list', ['limit' => 200]);
        $users = $this->ProyectoUsersAsignados->Users->find('list', ['limit' => 200]);
        $this->set(compact('proyectoUsersAsignado', 'proyectos', 'users'));
        $this->set('_serialize', ['proyectoUsersAsignado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto Users Asignado id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectoUsersAsignado = $this->ProyectoUsersAsignados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyectoUsersAsignado = $this->ProyectoUsersAsignados->patchEntity($proyectoUsersAsignado, $this->request->getData());
            if ($this->ProyectoUsersAsignados->save($proyectoUsersAsignado)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoUsersAsignados->Proyectos->find('list', ['limit' => 200]);
        $users = $this->ProyectoUsersAsignados->Users->find('list', ['limit' => 200]);
        $this->set(compact('proyectoUsersAsignado', 'proyectos', 'users'));
        $this->set('_serialize', ['proyectoUsersAsignado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto Users Asignado id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectoUsersAsignado = $this->ProyectoUsersAsignados->get($id);
        if ($this->ProyectoUsersAsignados->delete($proyectoUsersAsignado)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
