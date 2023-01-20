<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * About Entity
 *
 * @property string $name
 * @property string|null $short_desc
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $address
 * @property string|null $email
 * @property string|null $mobile
 * @property string|null $logo
 * @property string|null $long_desc
 * @property int $workers
 * @property int $engineers
 * @property int $projects
 * @property string|null $photo
 */
class About extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'short_desc' => true,
        'facebook' => true,
        'twitter' => true,
        'address' => true,
        'email' => true,
        'mobile' => true,
        'logo' => true,
        'long_desc' => true,
        'workers' => true,
        'engineers' => true,
        'projects' => true,
        'photo' => true,
    ];
}
