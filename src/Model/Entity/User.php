<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $nombre
 * @property string $paterno
 * @property string $materno
 * @property string $username
 * @property string $password
 * @property string $grupo_id
 * @property \Cake\I18n\FrozenTime $ultimo_acceso
 * @property string $correo
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
        'nombre' => true,
        'paterno' => true,
        'materno' => true,
        'username' => true,
        'password' => true,
        'grupo_id' => true,
        'ultimo_acceso' => true,
        'correo' => true,
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
    protected $_hidden = [
        'password'
    ];
}
