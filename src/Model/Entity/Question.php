<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Question Entity
 */
class Question extends Entity
{
    /**
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'body' => true,
        'created' => true,
        'modified' => true,
    ];
}
