<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatGruposCatMenusFixture
 *
 */
class CatGruposCatMenusFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'cat_grupos_cat_menus';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cat_grupo_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cat_menu_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'cat_grupo_id' => ['type' => 'index', 'columns' => ['cat_grupo_id'], 'length' => []],
            'cat_menu_id' => ['type' => 'index', 'columns' => ['cat_menu_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cat_grupos_cat_menus_ibfk_1' => ['type' => 'foreign', 'columns' => ['cat_grupo_id'], 'references' => ['cat_grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'cat_grupos_cat_menus_ibfk_2' => ['type' => 'foreign', 'columns' => ['cat_menu_id'], 'references' => ['cat_menus', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => '66355290-a1e6-4e8b-b238-9c86c7bd265c',
                'cat_grupo_id' => '32f61cd5-1476-41e3-98f4-d6934e225448',
                'cat_menu_id' => '24113bcb-8933-45c0-8555-5f469a10f339',
                'activo' => 1,
                'created' => '2018-09-09 17:29:02',
                'modified' => '2018-09-09 17:29:02'
            ],
        ];
        parent::init();
    }
}
