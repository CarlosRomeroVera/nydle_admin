<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProyectoCorreosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProyectoCorreosTable Test Case
 */
class ProyectoCorreosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProyectoCorreosTable
     */
    public $ProyectoCorreos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proyecto_correos',
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
        $config = TableRegistry::getTableLocator()->exists('ProyectoCorreos') ? [] : ['className' => ProyectoCorreosTable::class];
        $this->ProyectoCorreos = TableRegistry::getTableLocator()->get('ProyectoCorreos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProyectoCorreos);

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
