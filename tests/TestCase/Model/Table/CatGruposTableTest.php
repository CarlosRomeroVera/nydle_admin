<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CatGruposTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CatGruposTable Test Case
 */
class CatGruposTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CatGruposTable
     */
    public $CatGrupos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.cat_grupos',
        'app.cat_menus',
        'app.cat_permisos',
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
        $config = TableRegistry::getTableLocator()->exists('CatGrupos') ? [] : ['className' => CatGruposTable::class];
        $this->CatGrupos = TableRegistry::getTableLocator()->get('CatGrupos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CatGrupos);

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
