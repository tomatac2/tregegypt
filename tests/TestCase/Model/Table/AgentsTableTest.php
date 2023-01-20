<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgentsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgentsTable Test Case
 */
class AgentsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgentsTable
     */
    protected $Agents;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Agents',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Agents') ? [] : ['className' => AgentsTable::class];
        $this->Agents = $this->getTableLocator()->get('Agents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Agents);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AgentsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
