<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProyectoCpanelTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProyectoCpanelTable Test Case
 */
class ProyectoCpanelTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProyectoCpanelTable
     */
    public $ProyectoCpanel;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proyecto_cpanel',
        'app.proyectos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProyectoCpanel') ? [] : ['className' => ProyectoCpanelTable::class];
        $this->ProyectoCpanel = TableRegistry::getTableLocator()->get('ProyectoCpanel', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProyectoCpanel);

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
