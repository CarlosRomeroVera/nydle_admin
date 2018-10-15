<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectoCpanel Controller
 *
 * @property \App\Model\Table\ProyectoCpanelTable $ProyectoCpanel
 *
 * @method \App\Model\Entity\ProyectoCpanel[] paginate($object = null, array $settings = [])
 */
class ProyectoCpanelController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectoCpanel';
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
                  $proyectoCpanel = $this->ProyectoCpanel->find('all',['contain' => ['Proyectos']]);
            foreach($proyectoCpanel as $proyectopanel)
      {
            $proyectopanel['acciones'] =  "<div class='btn-group'>";
            $proyectopanel['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectopanel->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectopanel['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectopanel->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectopanel['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectopanel->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectopanel->id)]);
            $proyectopanel['acciones'] .="</div>";

      }
        $this->set(compact('proyectoCpanel'));
        $this->set('_serialize', ['proyectoCpanel']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyecto Cpanel id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectoCpanel = $this->ProyectoCpanel->get($id, [
            'contain' => ['Proyectos']
        ]);

        $this->set('proyectoCpanel', $proyectoCpanel);
        $this->set('_serialize', ['proyectoCpanel']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectoCpanel = $this->ProyectoCpanel->newEntity();
        if ($this->request->is('post')) {
            $proyectoCpanel = $this->ProyectoCpanel->patchEntity($proyectoCpanel, $this->request->getData());
            if ($this->ProyectoCpanel->save($proyectoCpanel)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoCpanel->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoCpanel', 'proyectos'));
        $this->set('_serialize', ['proyectoCpanel']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyecto Cpanel id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectoCpanel = $this->ProyectoCpanel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $proyectoCpanel = $this->ProyectoCpanel->patchEntity($proyectoCpanel, $this->request->getData());
            if ($this->ProyectoCpanel->save($proyectoCpanel)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectoCpanel->Proyectos->find('list', ['limit' => 200]);
        $this->set(compact('proyectoCpanel', 'proyectos'));
        $this->set('_serialize', ['proyectoCpanel']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyecto Cpanel id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectoCpanel = $this->ProyectoCpanel->get($id);
        if ($this->ProyectoCpanel->delete($proyectoCpanel)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
