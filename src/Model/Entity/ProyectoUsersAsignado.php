<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProyectoUsersAsignado Entity
 *
 * @property string $id
 * @property string $proyecto_id
 * @property string $user_id
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Proyecto $proyecto
 * @property \App\Model\Entity\User $user
 */
class ProyectoUsersAsignado extends Entity
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
        'proyecto_id' => true,
        'user_id' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'proyecto' => true,
        'user' => true
    ];
}
