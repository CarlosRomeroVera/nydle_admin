<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity
 *
 * @property string $id
 * @property string $name
 * @property string $empresa
 * @property string $numero
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Proyecto[] $proyectos
 * @property \App\Model\Entity\ProyectosHistorico[] $proyectos_historico
 */
class Cliente extends Entity
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
        'name' => true,
        'empresa' => true,
        'numero' => true,
        'activo' => true,
        'created' => true,
        'modified' => true,
        'proyectos' => true,
        'proyectos_historico' => true
    ];
}
