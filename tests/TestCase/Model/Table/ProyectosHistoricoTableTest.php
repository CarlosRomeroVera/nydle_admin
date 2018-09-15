<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProyectosHistoricoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProyectosHistoricoTable Test Case
 */
class ProyectosHistoricoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProyectosHistoricoTable
     */
    public $ProyectosHistorico;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proyectos_historico',
        'app.proyectos',
        'app.clientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProyectosHistorico') ? [] : ['className' => ProyectosHistoricoTable::class];
        $this->ProyectosHistorico = TableRegistry::getTableLocator()->get('ProyectosHistorico', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProyectosHistorico);

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
