<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Proyecto Entity
 *
 * @property string $id
 * @property string $name
 * @property string $cliente_id
 * @property string $observaciones
 * @property \Cake\I18n\FrozenTime $fecha_inicio
 * @property \Cake\I18n\FrozenTime $fecha_vencimiento
 * @property bool $activo
 * @property bool $renovado
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Cliente $cliente
 * @property \App\Model\Entity\ProyectoCorreo[] $proyecto_correos
 * @property \App\Model\Entity\ProyectoCpanel[] $proyecto_cpanel
 * @property \App\Model\Entity\ProyectoCuentasExtra[] $proyecto_cuentas_extra
 * @property \App\Model\Entity\ProyectoDn[] $proyecto_dns
 * @property \App\Model\Entity\ProyectoUsersAsignado[] $proyecto_users_asignados
 */
class Proyecto extends Entity
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
        'cliente_id' => true,
        'observaciones' => true,
        'fecha_inicio' => true,
        'fecha_vencimiento' => true,
        'activo' => true,
        'renovado' => true,
        'created' => true,
        'modified' => true,
        'cliente' => true,
        'proyecto_correos' => true,
        'proyecto_cpanel' => true,
        'proyecto_cuentas_extra' => true,
        'proyecto_dns' => true,
        'proyecto_users_asignados' => true
    ];
}
