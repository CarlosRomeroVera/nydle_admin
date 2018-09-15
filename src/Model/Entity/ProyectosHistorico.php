<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProyectosHistorico Entity
 *
 * @property string $id
 * @property string $proyecto_original_id
 * @property string $name
 * @property string $observaciones
 * @property string $cliente_id
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property \Cake\I18n\FrozenTime $fecha_vencimiento
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Proyecto $proyecto
 * @property \App\Model\Entity\Cliente $cliente
 */
class ProyectosHistorico extends Entity
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
        'proyecto_original_id' => true,
        'name' => true,
        'observaciones' => true,
        'cliente_id' => true,
        'fecha_inicio' => true,
        'fecha_vencimiento' => true,
        'created' => true,
        'modified' => true,
        'proyecto' => true,
        'cliente' => true
    ];
}
