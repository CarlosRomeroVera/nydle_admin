<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RPermisosGruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RPermisosGruposTable Test Case
 */
class RPermisosGruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RPermisosGruposTable
     */
    public $RPermisosGrupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.r_permisos_grupos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RPermisosGrupos') ? [] : ['className' => RPermisosGruposTable::class];
        $this->RPermisosGrupos = TableRegistry::getTableLocator()->get('RPermisosGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RPermisosGrupos);

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
