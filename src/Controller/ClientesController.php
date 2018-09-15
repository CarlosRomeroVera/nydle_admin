<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * Clientes Controller
 *
 * @property \App\Model\Table\ClientesTable $Clientes
 *
 * @method \App\Model\Entity\Cliente[] paginate($object = null, array $settings = [])
 */
class ClientesController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'Clientes';
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
                  $clientes = $this->Clientes->find('all',['contain' => []]);
            foreach($clientes as $cliente)
      {
            $cliente['acciones'] =  "<div class='btn-group'>";
            $cliente['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$cliente->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $cliente['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$cliente->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $cliente['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$cliente->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $cliente->id)]);
            $cliente['acciones'] .="</div>";

      }
        $this->set(compact('clientes'));
        $this->set('_serialize', ['clientes']);
    }

    /**
     * View method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => ['Proyectos', 'ProyectosHistorico']
        ]);

        $this->set('cliente', $cliente);
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cliente = $this->Clientes->newEntity();
        if ($this->request->is('post')) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cliente = $this->Clientes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cliente = $this->Clientes->patchEntity($cliente, $this->request->getData());
            if ($this->Clientes->save($cliente)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('cliente'));
        $this->set('_serialize', ['cliente']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cliente id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cliente = $this->Clientes->get($id);
        if ($this->Clientes->delete($cliente)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
