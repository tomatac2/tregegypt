<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeamsFixture
 */
class TeamsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'photo' => 'Lorem ipsum dolor sit amet',
                'career' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-01-20 11:34:14',
                'modified' => '2023-01-20 11:34:14',
            ],
        ];
        parent::init();
    }
}
