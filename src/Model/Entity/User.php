<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\TableRegistry;

/**
 * User Entity
 *
 * @property string $id
 * @property string $nombres
 * @property string $apellidos
 * @property string $username
 * @property string $password
 * @property string $grupo_id
 * @property \Cake\I18n\FrozenTime $ultimo_acceso
 * @property string $email
 * @property string $telefono
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProyectoUsersAsignado[] $proyecto_users_asignados
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'nombres' => true,
        'apellidos' => true,
        'username' => true,
        'password' => true,
        'grupo_id' => true,
        'ultimo_acceso' => true,
        'email' => true,
        'telefono' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'proyecto_users_asignados' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_virtual = ['nombre_completo','grupo'];
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($value)
   {
       if (strlen($value)) {
           $hasher = new DefaultPasswordHasher();
           return $hasher->hash($value);
       }
   }

   protected function _getNombreCompleto()
   {
     if (isset($this->_properties['nombres'])) {
       $nombre_completo =$this->_properties['nombres']." ".$this->_properties['apellidos'];
       return $nombre_completo;
     }
   }
   protected function _getGrupo()
   {
     if (isset($this->_properties['grupo_id'])){
       $grupo = TableRegistry::get('CatGrupos')->find()->where(['id'=>$this->_properties['grupo_id']])->first();
       $grupo_nombre = NULL;
       if ($grupo) {
         $grupo_nombre = $grupo->nombre;
       }
       return $grupo_nombre;
     }
   }
}
