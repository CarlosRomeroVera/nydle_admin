<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProyectoDnsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProyectoDnsTable Test Case
 */
class ProyectoDnsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProyectoDnsTable
     */
    public $ProyectoDns;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proyecto_dns',
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
        $config = TableRegistry::getTableLocator()->exists('ProyectoDns') ? [] : ['className' => ProyectoDnsTable::class];
        $this->ProyectoDns = TableRegistry::getTableLocator()->get('ProyectoDns', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProyectoDns);

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
