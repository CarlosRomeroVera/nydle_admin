<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * Proyectos Controller
 *
 * @property \App\Model\Table\ProyectosTable $Proyectos
 *
 * @method \App\Model\Entity\Proyecto[] paginate($object = null, array $settings = [])
 */
class ProyectosController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'Proyectos';
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
                  $proyectos = $this->Proyectos->find('all',['contain' => ['Clientes']]);
            foreach($proyectos as $proyecto)
      {
            $proyecto['acciones'] =  "<div class='btn-group'>";
            $proyecto['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyecto->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyecto['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyecto->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyecto['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyecto->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyecto->id)]);
            $proyecto['acciones'] .="</div>";

      }
        $this->set(compact('proyectos'));
        $this->set('_serialize', ['proyectos']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => ['Clientes', 'ProyectoCorreos', 'ProyectoCpanel', 'ProyectoCuentasExtra', 'ProyectoDns', 'ProyectoUsersAsignados']
        ]);

        $this->set('proyecto', $proyecto);
        $this->set('_serialize', ['proyecto']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyecto = $this->Proyectos->newEntity();
        if ($this->request->is('post')) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->getData());
            if ($this->Proyectos->save($proyecto)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $clientes = $this->Proyectos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('proyecto', 'clientes'));
        $this->set('_serialize', ['proyecto']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyecto = $this->Proyectos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyecto = $this->Proyectos->patchEntity($proyecto, $this->request->getData());
            if ($this->Proyectos->save($proyecto)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $clientes = $this->Proyectos->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('proyecto', 'clientes'));
        $this->set('_serialize', ['proyecto']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyecto = $this->Proyectos->get($id);
        if ($this->Proyectos->delete($proyecto)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
