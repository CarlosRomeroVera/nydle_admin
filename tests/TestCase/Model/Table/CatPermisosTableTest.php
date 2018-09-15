<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatPermisosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatPermisosTable Test Case
 */
class CatPermisosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatPermisosTable
     */
    public $CatPermisos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cat_permisos',
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
        $config = TableRegistry::getTableLocator()->exists('CatPermisos') ? [] : ['className' => CatPermisosTable::class];
        $this->CatPermisos = TableRegistry::getTableLocator()->get('CatPermisos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CatPermisos);

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
