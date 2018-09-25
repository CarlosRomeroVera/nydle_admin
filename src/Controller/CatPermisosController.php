<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * CatPermisos Controller
 *
 * @property \App\Model\Table\CatPermisosTable $CatPermisos
 *
 * @method \App\Model\Entity\CatPermiso[] paginate($object = null, array $settings = [])
 */
class CatPermisosController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'CatPermisos';
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
                  $catPermisos = $this->CatPermisos->find('all',['contain' => []]);
            foreach($catPermisos as $catPermiso)
      {
            $catPermiso['acciones'] =  "<div class='btn-group'>";
            $catPermiso['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$catPermiso->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $catPermiso['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$catPermiso->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $catPermiso['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$catPermiso->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $catPermiso->id)]);
            $catPermiso['acciones'] .="</div>";

      }
        $this->set(compact('catPermisos'));
        $this->set('_serialize', ['catPermisos']);
    }

    /**
     * View method
     *
     * @param string|null $id Cat Permiso id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catPermiso = $this->CatPermisos->get($id, [
            'contain' => []
        ]);

        $this->set('catPermiso', $catPermiso);
        $this->set('_serialize', ['catPermiso']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catPermiso = $this->CatPermisos->newEntity();
        if ($this->request->is('post')) {
            $catPermiso = $this->CatPermisos->patchEntity($catPermiso, $this->request->getData());
            if ($this->CatPermisos->save($catPermiso)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('catPermiso'));
        $this->set('_serialize', ['catPermiso']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cat Permiso id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catPermiso = $this->CatPermisos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catPermiso = $this->CatPermisos->patchEntity($catPermiso, $this->request->getData());
            if ($this->CatPermisos->save($catPermiso)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('catPermiso'));
        $this->set('_serialize', ['catPermiso']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cat Permiso id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catPermiso = $this->CatPermisos->get($id);
        if ($this->CatPermisos->delete($catPermiso)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
