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
        'proyeto_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'usuario_cpanel' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'contrasenia_cpanel' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'proyeto_id' => ['type' => 'index', 'columns' => ['proyeto_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'proyecto_cpanel_ibfk_1' => ['type' => 'foreign', 'columns' => ['proyeto_id'], 'references' => ['proyectos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_spanish_ci'
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
                'id' => '9a1891e6-e485-415a-b503-ed2575b7dbce',
                'proyeto_id' => 'Lorem ipsum dolor sit amet',
                'usuario_cpanel' => 'Lorem ipsum dolor sit amet',
                'contrasenia_cpanel' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2018-09-25 23:29:26',
                'modified' => '2018-09-25 23:29:26'
            ],
        ];
        parent::init();
    }
}
