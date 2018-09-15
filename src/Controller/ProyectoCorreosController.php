<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectoCorreos Controller
 *
 * @property \App\Model\Table\ProyectoCorreosTable $ProyectoCorreos
 *
 * @method \App\Model\Entity\ProyectoCorreo[] paginate($object = null, array $settings = [])
 */
class ProyectoCorreosController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectoCorreos';
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
                  $proyectoCorreos = $this->ProyectoCorreos->find('all',['contain' => ['Proyectos']]);
            foreach($proyectoCorreos as $proyectoCorreo)
      {
            $proyectoCorreo['acciones'] =  "<div class='btn-group'>";
            $proyectoCorreo['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectoCorreo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoCorreo['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectoCorreo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoCorreo['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectoCorreo->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectoCorreo->id)]);
            $proyectoCorreo['acciones'] .="</div>";

      }
        $this->set(compact('proyectoCorreos'));
        $this->set('_serialize', ['proyectoCorreos']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto Correo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectoCorreo = $this->ProyectoCorreos->get($id, [
            'contain' => ['Proyectos']
        ]);

        $this->set('proyectoCorreo', $proyectoCorreo);
        $this->set('_serialize', ['proyectoCorreo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectoCorreo = $this->ProyectoCorreos->newEntity();
        if ($this->request->is('post')) {
            $proyectoCorreo = $this->ProyectoCorreos->patchEntity($proyectoCorreo, $this->request->getData());
            if ($this->ProyectoCorreos->save($proyectoCorreo)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoCorreos->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoCorreo', 'proyectos'));
        $this->set('_serialize', ['proyectoCorreo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto Correo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectoCorreo = $this->ProyectoCorreos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyectoCorreo = $this->ProyectoCorreos->patchEntity($proyectoCorreo, $this->request->getData());
            if ($this->ProyectoCorreos->save($proyectoCorreo)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoCorreos->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoCorreo', 'proyectos'));
        $this->set('_serialize', ['proyectoCorreo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto Correo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectoCorreo = $this->ProyectoCorreos->get($id);
        if ($this->ProyectoCorreos->delete($proyectoCorreo)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
