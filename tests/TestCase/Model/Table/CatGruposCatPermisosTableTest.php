<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatGruposCatPermisosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatGruposCatPermisosTable Test Case
 */
class CatGruposCatPermisosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatGruposCatPermisosTable
     */
    public $CatGruposCatPermisos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cat_grupos_cat_permisos',
        'app.cat_grupos',
        'app.cat_permisos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatGruposCatPermisos') ? [] : ['className' => CatGruposCatPermisosTable::class];
        $this->CatGruposCatPermisos = TableRegistry::getTableLocator()->get('CatGruposCatPermisos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CatGruposCatPermisos);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
