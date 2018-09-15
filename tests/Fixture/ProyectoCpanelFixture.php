<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProyectoCpanelFixture
 *
 */
class ProyectoCpanelFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proyecto_cpanel';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'proyecto_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usuario_cpanel' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contrasenia_cpanel' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'proyecto_id' => ['type' => 'index', 'columns' => ['proyecto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'proyecto_cpanel_ibfk_1' => ['type' => 'foreign', 'columns' => ['proyecto_id'], 'references' => ['proyectos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => '939b4c69-0cef-42c6-a4d6-9d05bb3ea5db',
                'proyecto_id' => 'Lorem ipsum dolor sit amet',
                'usuario_cpanel' => 'Lorem ipsum dolor sit amet',
                'contrasenia_cpanel' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2018-09-15 20:46:05',
                'modified' => '2018-09-15 20:46:05'
            ],
        ];
        parent::init();
    }
}
