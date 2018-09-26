<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');
        $this->loadComponent('Auth', [
          'authorize'=> 'Controller',
          'loginAction' => [
              'controller' => 'Users',
              'action' => 'login'
          ],
          'authError' =>'Nombre de usuario o Contraseña incorrecta',
            'authorize' => ['Controller'],
            'loginRedirect' => [
                'controller' => 'Clientes',
                'action' => 'index'
            ],
            'logoutRedirect' => [
                'controller' => 'Users',
                'action' => 'login',
                'home'
            ],
            'unauthorizedRedirect' => $this->referer()
        ]);
        /*
         * Enable the following component for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
    }

    public function isAuthorized(){
      // return $this->__permitted($this->name,$this->request->getParam('action'));
      return true;
    }

    public function __permitted($controller,$action){
          $session = $this->getRequest()->getSession();
          $this->loadModel('VPermisosGrupos');//permisos por grupo
          //Convertimos a minisculas tanto el nombre del controlador como la accion llamada
          $controllerName = strtolower($controller);
          $actionName = strtolower($action);
          //Asignamos los permisos por default para todo los usuarios
          $PermisosDefault = ['Inicio:*','users:logout','users:login','users:cambiarpassword'];
          if (!$this->getRequest()->getSession()->check('permisosApp')) {
            $permisosAux = $this->VPermisosGrupos
                                ->find('all')
                                ->select(['VPermisosGrupos.id','VPermisosGrupos.permiso'])
                                ->where(['co_grupo_id'=>$this->getRequest()->getSession()->read('Auth.User.CoGrupo.id')]);
            $permiso=[];
            foreach ($permisosAux as $key => $permisos) {
              array_push($permiso,$permisos['permiso']);
            }
            $this->getRequest()->getSession()->write('permisosApp',$permiso);
            $Permisos = array_merge($PermisosDefault,$permiso);
          }else{
            $Permisos = array_merge($PermisosDefault,$this->getRequest()->getSession()->read('permisosApp'));
          }
          foreach ($Permisos as $key => $permitido){
            if ($permitido == '*:*' or $this->getRequest()->getSession()->read('Auth.User.CoGrupo.name') == 'SM2') {
              return true;//todas las acciones permitidas
            }
            if ($permitido == $controllerName.':*') {
              return true;//todas las acciones permitidas sobre el controlador
            }
            if ($permitido == $controllerName.':'.$actionName) {
              return true;//permiso especifico
            }
          }
          return false;
        }
        public function beforeFilter(Event $event)
            {
              if (!$this->Auth->user()){
                $this->Auth->setconfig('authError', false);
              }
              $this->Auth->allow(['login']);
            }
}
