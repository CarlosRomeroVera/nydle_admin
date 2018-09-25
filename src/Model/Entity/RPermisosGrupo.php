<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RPermisosGrupo Entity
 *
 * @property string $id
 * @property string $id_cat_grupo
 * @property string $id_cat_permiso
 * @property bool $activo
 */
class RPermisosGrupo extends Entity
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
        'id_cat_grupo' => true,
        'id_cat_permiso' => true,
        'activo' => true
    ];
}
