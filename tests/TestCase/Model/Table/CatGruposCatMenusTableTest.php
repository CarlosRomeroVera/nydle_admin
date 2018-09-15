<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatGruposCatMenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatGruposCatMenusTable Test Case
 */
class CatGruposCatMenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatGruposCatMenusTable
     */
    public $CatGruposCatMenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cat_grupos_cat_menus',
        'app.cat_grupos',
        'app.cat_menus'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatGruposCatMenus') ? [] : ['className' => CatGruposCatMenusTable::class];
        $this->CatGruposCatMenus = TableRegistry::getTableLocator()->get('CatGruposCatMenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CatGruposCatMenus);

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
