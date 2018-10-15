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
        date_default_timezone_set("America/Bogota");
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
      return $this->__permitted($this->name,$this->request->getParam('action'));
    }

    public function __permitted($controller,$action){
          $this->loadModel('CatPermisos');
          //Convertimos a minisculas tanto el nombre del controlador como la accion llamada
          $controllerName = $controller;
          $actionName = $action;
          $default = ['Inicio:*','Users:logout','Users:login','Users:cambiarPassword'];
          $permisosAuxiliares = $this->CatPermisos
                              ->find('all',[
                                            'conditions'=>['CatPermisos.id IN (SELECT id_cat_permiso FROM r_permisos_grupos WHERE id_cat_grupo = '."'".$this->request->getSession()->read('Auth.User.grupo_id')."'".' and activo = 1)'],
                                                'fields'=>[
                                                          'CatPermisos.nombre',
                                                          'CatPermisos.controlador',
                                                          'CatPermisos.accion'
                                                          ]
                                          ]);
        $permisos=[];
        foreach ($permisosAuxiliares as $key => $permAux){
          $permiso_tmp = $permAux->controlador.":".$permAux->accion;
          array_push($permisos,$permiso_tmp);
        }
          $permisos = array_merge($default,$permisos);          
          foreach ($permisos as $key => $permisoAEvaluar){
            if ($permisoAEvaluar == '*:*' or $this->request->getSession()->read('Auth.User.grupo') == 'NYDLE') {
              return true;
            }
            if ($permisoAEvaluar == $controllerName.':*') {
              return true;
            }
            if ($permisoAEvaluar == $controllerName.':'.$actionName) {
              return true;
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
