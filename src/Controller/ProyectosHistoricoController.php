<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * ProyectosHistorico Controller
 *
 * @property \App\Model\Table\ProyectosHistoricoTable $ProyectosHistorico
 *
 * @method \App\Model\Entity\ProyectosHistorico[] paginate($object = null, array $settings = [])
 */
class ProyectosHistoricoController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'ProyectosHistorico';
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
                  $proyectosHistorico = $this->ProyectosHistorico->find('all',['contain' => ['Proyectos', 'Clientes']]);
            foreach($proyectosHistorico as $proyectoHistorico)
      {
            $proyectoHistorico['acciones'] =  "<div class='btn-group'>";
            $proyectoHistorico['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$proyectoHistorico->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoHistorico['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$proyectoHistorico->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $proyectoHistorico['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$proyectoHistorico->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $proyectoHistorico->id)]);
            $proyectoHistorico['acciones'] .="</div>";

      }
        $this->set(compact('proyectosHistorico'));
        $this->set('_serialize', ['proyectosHistorico']);
    }

    /**
     * View method
     *
     * @param string|null $id Proyectos Historico id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $proyectosHistorico = $this->ProyectosHistorico->get($id, [
            'contain' => ['Proyectos', 'Clientes']
        ]);

        $this->set('proyectosHistorico', $proyectosHistorico);
        $this->set('_serialize', ['proyectosHistorico']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $proyectosHistorico = $this->ProyectosHistorico->newEntity();
        if ($this->request->is('post')) {
          $data = $this->request->getData();
          $data['fecha_inicio'] = date('Y-m-d h:i:s',strtotime($data['fecha_inicio']));
          if ($data['fecha_vencimiento']) {
            $data['fecha_vencimiento'] = date('Y-m-d h:i:s',strtotime($data['fecha_vencimiento']));
          }else{
            $data['fecha_vencimiento'] = NULL;
          }
          $proyectosHistorico = $this->ProyectosHistorico->patchEntity($proyectosHistorico, $data);
            if ($this->ProyectosHistorico->save($proyectosHistorico)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectosHistorico->Proyectos->find('list', ['limit' => 200]);
        $clientes = $this->ProyectosHistorico->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('proyectosHistorico', 'proyectos', 'clientes'));
        $this->set('_serialize', ['proyectosHistorico']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Proyectos Historico id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $proyectosHistorico = $this->ProyectosHistorico->get($id, [
            'contain' => []
        ]);
        $proyectosHistorico->fecha_inicio = date('Y-m-d',strtotime($proyectosHistorico->fecha_inicio));
        $proyectosHistorico->fecha_vencimiento = date('Y-m-d',strtotime($proyectosHistorico->fecha_vencimiento));
        if ($this->request->is(['patch', 'post', 'put'])) {
          $data = $this->request->getData();
          $data['fecha_inicio'] = date('Y-m-d h:i:s',strtotime($data['fecha_inicio']));
          if ($data['fecha_vencimiento']) {
            $data['fecha_vencimiento'] = date('Y-m-d h:i:s',strtotime($data['fecha_vencimiento']));
          }else{
            $data['fecha_vencimiento'] = NULL;
          }
          $proyectosHistorico = $this->ProyectosHistorico->patchEntity($proyectosHistorico, $data);
            if ($this->ProyectosHistorico->save($proyectosHistorico)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $proyectos = $this->ProyectosHistorico->Proyectos->find('list', ['limit' => 200]);
        $clientes = $this->ProyectosHistorico->Clientes->find('list', ['limit' => 200]);
        $this->set(compact('proyectosHistorico', 'proyectos', 'clientes'));
        $this->set('_serialize', ['proyectosHistorico']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Proyectos Historico id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $proyectosHistorico = $this->ProyectosHistorico->get($id);
        if ($this->ProyectosHistorico->delete($proyectosHistorico)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
