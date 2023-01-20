<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ContactU Entity
 *
 * @property int $id
 * @property string|null $full_name
 * @property string|null $email
 * @property string|null $subject
 * @property string|null $message
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property string|null $mobile
 * @property string|null $notes
 * @property string $status
 */
class ContactU extends Entity
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
        'full_name' => true,
        'email' => true,
        'subject' => true,
        'message' => true,
        'created' => true,
        'modified' => true,
        'mobile' => true,
        'notes' => true,
        'status' => true,
    ];
}
