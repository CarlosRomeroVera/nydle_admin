<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RMenusGruposFixture
 *
 */
class RMenusGruposFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'id_menu' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_grupo' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_grupo' => ['type' => 'index', 'columns' => ['id_grupo'], 'length' => []],
            'id_menu' => ['type' => 'index', 'columns' => ['id_menu'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'r_menus_grupos_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_grupo'], 'references' => ['cat_grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'r_menus_grupos_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_menu'], 'references' => ['menus', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => 'ea46c436-180b-4b38-bb61-ef7a7b9b7c31',
                'id_menu' => 'Lorem ipsum dolor sit amet',
                'id_grupo' => 'Lorem ipsum dolor sit amet',
                'activo' => 1,
                'created' => '2018-09-25 23:30:32',
                'modified' => '2018-09-25 23:30:32'
            ],
        ];
        parent::init();
    }
}
