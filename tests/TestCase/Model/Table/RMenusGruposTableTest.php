<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RMenusGruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RMenusGruposTable Test Case
 */
class RMenusGruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RMenusGruposTable
     */
    public $RMenusGrupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.r_menus_grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RMenusGrupos') ? [] : ['className' => RMenusGruposTable::class];
        $this->RMenusGrupos = TableRegistry::getTableLocator()->get('RMenusGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RMenusGrupos);

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
}
