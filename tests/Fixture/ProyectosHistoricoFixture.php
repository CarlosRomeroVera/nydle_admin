<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProyectosHistoricoFixture
 *
 */
class ProyectosHistoricoFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'proyectos_historico';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'proyecto_original_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'name' => ['type' => 'string', 'length' => 200, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'observaciones' => ['type' => 'text', 'length' => 4294967295.0, 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null],
        'cliente_id' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha_inicio' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'fecha_vencimiento' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'cliente_id' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'proyecto_original_id' => ['type' => 'index', 'columns' => ['proyecto_original_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'proyectos_historico_ibfk_1' => ['type' => 'foreign', 'columns' => ['proyecto_original_id'], 'references' => ['proyectos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => '14e86e82-7ef5-493e-9161-f367ab336b2a',
                'proyecto_original_id' => 'Lorem ipsum dolor sit amet',
                'name' => 'Lorem ipsum dolor sit amet',
                'observaciones' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'cliente_id' => 'Lorem ipsum dolor sit amet',
                'fecha_inicio' => '2018-09-15 20:45:35',
                'fecha_vencimiento' => '2018-09-15 20:45:35',
                'created' => '2018-09-15 20:45:35',
                'modified' => '2018-09-15 20:45:35'
            ],
        ];
        parent::init();
    }
}
