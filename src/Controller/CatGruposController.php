<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * CatGrupos Controller
 *
 * @property \App\Model\Table\CatGruposTable $CatGrupos
 *
 * @method \App\Model\Entity\CatGrupo[] paginate($object = null, array $settings = [])
 */
class CatGruposController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'CatGrupos';
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
                  $catGrupos = $this->CatGrupos->find('all',['contain' => []]);
            foreach($catGrupos as $catGrupo)
      {
            $catGrupo['acciones'] =  "<div class='btn-group'>";
            $catGrupo['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$catGrupo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $catGrupo['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$catGrupo->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $catGrupo['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$catGrupo->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $catGrupo->id)]);
            $catGrupo['acciones'] .="</div>";

      }
        $this->set(compact('catGrupos'));
        $this->set('_serialize', ['catGrupos']);
    }

    /**
     * View method
     *
     * @param string|null $id Cat Grupo id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catGrupo = $this->CatGrupos->get($id, [
            'contain' => []
        ]);

        $this->set('catGrupo', $catGrupo);
        $this->set('_serialize', ['catGrupo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catGrupo = $this->CatGrupos->newEntity();
        if ($this->request->is('post')) {
            $catGrupo = $this->CatGrupos->patchEntity($catGrupo, $this->request->getData());
            if ($this->CatGrupos->save($catGrupo)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('catGrupo'));
        $this->set('_serialize', ['catGrupo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Cat Grupo id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catGrupo = $this->CatGrupos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catGrupo = $this->CatGrupos->patchEntity($catGrupo, $this->request->getData());
            if ($this->CatGrupos->save($catGrupo)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $this->set(compact('catGrupo'));
        $this->set('_serialize', ['catGrupo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Cat Grupo id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catGrupo = $this->CatGrupos->get($id);
        if ($this->CatGrupos->delete($catGrupo)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
