<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProyectoUsersAsignadosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProyectoUsersAsignadosTable Test Case
 */
class ProyectoUsersAsignadosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ProyectoUsersAsignadosTable
     */
    public $ProyectoUsersAsignados;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.proyecto_users_asignados',
        'app.proyectos',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProyectoUsersAsignados') ? [] : ['className' => ProyectoUsersAsignadosTable::class];
        $this->ProyectoUsersAsignados = TableRegistry::getTableLocator()->get('ProyectoUsersAsignados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ProyectoUsersAsignados);

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
