<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProyectoCorreo Entity
 *
 * @property string $id
 * @property string $proyecto_id
 * @property string $usuario
 * @property string $contrasenia
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Proyecto $proyecto
 */
class ProyectoCorreo extends Entity
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
        'usuario' => true,
        'contrasenia' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'proyecto' => true
    ];
}
