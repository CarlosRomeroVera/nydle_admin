<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity
 *
 * @property string $id
 * @property string $id_menu_padre
 * @property string $name
 * @property string $controller
 * @property string $action
 * @property string $icon
 * @property int $orden
 * @property bool $activo
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Menu extends Entity
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
        'id_menu_padre' => true,
        'name' => true,
        'controller' => true,
        'action' => true,
        'icon' => true,
        'orden' => true,
        'activo' => true,
        'created' => true,
        'modified' => true
    ];
}
