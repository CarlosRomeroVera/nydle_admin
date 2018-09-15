<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProyectoUsersAsignadosFixture
 *
 */
class ProyectoUsersAsignadosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'proyecto_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'user_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'proyecto_id' => ['type' => 'index', 'columns' => ['proyecto_id'], 'length' => []],
            'user_id' => ['type' => 'index', 'columns' => ['user_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'proyecto_users_asignados_ibfk_1' => ['type' => 'foreign', 'columns' => ['proyecto_id'], 'references' => ['proyectos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'proyecto_users_asignados_ibfk_2' => ['type' => 'foreign', 'columns' => ['user_id'], 'references' => ['users', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => '00bbb5cc-25d9-4ce5-bb72-604c3632e4f5',
                'proyecto_id' => 'Lorem ipsum dolor sit amet',
                'user_id' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2018-09-15 20:46:49',
                'modified' => '2018-09-15 20:46:49'
            ],
        ];
        parent::init();
    }
}
