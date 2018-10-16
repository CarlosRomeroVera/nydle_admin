<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\App;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[] paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{


      public function initialize()
           {
               parent::initialize();
               $title_for_layout = 'Users';
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
                  $users = $this->Users->find('all',['contain' => []]);
            foreach($users as $user)
      {
            $user['acciones'] =  "<div class='btn-group'>";
            $user['acciones'] .= $Html->link("<i class='far fa-eye'></i>",array('action'=>'view',$user->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $user['acciones'] .= $Html->link("<i class='fas fa-edit'></i>",array('action'=>'edit',$user->id),array('escape'=>false,'class'=>"btn btn-outline-dark"));
            $user['acciones'] .= $Form->postLink("<i class='fas fa-trash'></i>", ['action' => 'delete',$user->id], ['escape'=>false,'class'=>"btn btn-outline-danger",'confirm' => __('Realmente desea eliminar el registro con el Id # {0}?', $user->id)]);
            $user['acciones'] .="</div>";

      }
        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function login(){
      $this->viewBuilder()->setLayout('login');
      if ($this->request->is('post')) {
          $user = $this->Auth->identify();
          if ($user) {
            if ($user['activo']){
              $usuario = $this->Users->get($user['id']);//se recupera la entidad del usuario
              $usuario->ultimo_acceso = date('Y-m-d H:i:s');
              $this->Users->save($usuario);
              $this->Auth->setUser($usuario);
              return $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error(__('Opss!Tu Usuario ha sido desactivado.'));
            }
          }else{
            $this->Flash->error(__('Nombre de usuario o contraseña incorrectos'));
          }
      }
    }

    public function logout()
        {
          $session = $this->request->getSession();
          $session->destroy();
          return $this->redirect($this->Auth->logout());
        }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['ProyectoUsersAsignados']
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function cambiarPassword($id = null)
          {
              $id =   $this->getRequest()->getSession()->read('Auth.User.id');
              $user = $this->Users->get($id, [
                  'contain' => []
              ]);
              if ($this->request->is(['patch', 'post', 'put'])) {
                  $user = $this->Users->patchEntity($user, $this->request->getData());
                  if ($this->Users->save($user)){
                    $this->Flash->success(__('La contraseña ha sido cambiada con éxito.'));
                    return $this->redirect($this->Auth->redirectUrl());
                  }
                  $this->Flash->error(__('Ha ocurrido un error, por favor, intenta de nuevo.'));
              }
              $this->set(compact('user'));
              $this->set('_serialize', ['user']);
          }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El registro fue guardado satisfactoriamente.'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser guardado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $catGrupos = $this->Users->CatGrupos->find('list', ['limit' => 200]);
        $this->set(compact('user','catGrupos'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El registro se actualizo satisfactoriamente'),['params'=>['class'=>'alert alert-success']]);
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El registro no pudo ser actualizado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
            }
        }
        $catGrupos = $this->Users->CatGrupos->find('list', ['limit' => 200]);
        $this->set(compact('user','catGrupos'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El registro fue eliminado.'),['params'=>['class'=>'alert alert-success']]);
        } else {
            $this->Flash->error(__('El registro no pudo ser eliminado. Por favor, intentelo nuevamente.'),['params'=>['class'=>'alert alert-danger']]);
        }
        return $this->redirect(['action' => 'index']);
    }
}
