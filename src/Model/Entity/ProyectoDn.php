<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProyectoDn Entity
 *
 * @property string $id
 * @property string $proyecto_id
 * @property string $name
 * @property string $ip_servidor
 * @property string $nameserver
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Proyecto $proyecto
 */
class ProyectoDn extends Entity
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
        'name' => true,
        'ip_servidor' => true,
        'nameserver' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'proyecto' => true
    ];
}
