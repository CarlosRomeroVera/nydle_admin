<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RPermisosGruposFixture
 *
 */
class RPermisosGruposFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'uuid', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'id_cat_grupo' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'id_cat_permiso' => ['type' => 'string', 'length' => 36, 'null' => false, 'default' => null, 'collate' => 'utf8_spanish_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'activo' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id_cat_grupo' => ['type' => 'index', 'columns' => ['id_cat_grupo'], 'length' => []],
            'id_cat_permiso' => ['type' => 'index', 'columns' => ['id_cat_permiso'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'r_permisos_grupos_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_cat_grupo'], 'references' => ['cat_grupos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'r_permisos_grupos_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_cat_permiso'], 'references' => ['cat_permisos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
                'id' => '4ef3e246-21fa-4c5b-8725-a0f96b320444',
                'id_cat_grupo' => 'Lorem ipsum dolor sit amet',
                'id_cat_permiso' => 'Lorem ipsum dolor sit amet',
                'activo' => 1
            ],
        ];
        parent::init();
    }
}
