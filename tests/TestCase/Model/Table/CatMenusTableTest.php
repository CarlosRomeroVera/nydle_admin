<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatMenusTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatMenusTable Test Case
 */
class CatMenusTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatMenusTable
     */
    public $CatMenus;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cat_menus',
        'app.padres',
        'app.cat_grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CatMenus') ? [] : ['className' => CatMenusTable::class];
        $this->CatMenus = TableRegistry::getTableLocator()->get('CatMenus', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CatMenus);

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
