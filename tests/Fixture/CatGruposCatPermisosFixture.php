<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CatGruposCatPermisosFixture
 *
 */
class CatGruposCatPermisosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cat_grupo_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'cat_permiso_id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'activo' => ['type' => 'tinyinteger', 'length' => 4, 'unsigned' => false, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => 'CURRENT_TIMESTAMP', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'cat_grupo_id' => ['type' => 'index', 'columns' => ['cat_grupo_id'], 'length' => []],
            'cat_permiso_id' => ['type' => 'index', 'columns' => ['cat_permiso_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'cat_grupos_cat_permisos_ibfk_1' => ['type' => 'foreign', 'columns' => ['cat_grupo_id'], 'references' => ['cat_grupos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'cat_grupos_cat_permisos_ibfk_2' => ['type' => 'foreign', 'columns' => ['cat_permiso_id'], 'references' => ['cat_permisos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'id' => '631b96d1-5ccf-45bc-a0dc-e0039d34d40c',
                'cat_grupo_id' => '911fa979-184f-45ae-9183-d295f407b8f7',
                'cat_permiso_id' => 'f84c4fae-32bb-4717-837f-92f72ce9b2f7',
                'activo' => 1,
                'created' => '2018-09-09 17:29:10',
                'modified' => '2018-09-09 17:29:10'
            ],
        ];
        parent::init();
    }
}
