<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Invoice Entity
 *
 * @property int $id
 * @property string $number
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int $amount
 * @property string $company
 * @property string $address
 * @property string $email
 */
class Invoice extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'number' => true,
        'created' => true,
        'amount' => true,
        'company' => true,
        'address' => true,
        'email' => true
    ];
}
