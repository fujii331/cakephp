<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 */
class Answer extends Entity
{
    /**
     * @var array
     */
    protected $_accessible = [
        'question_id' => true,
        'user_id' => true,
        'body' => true,
        'created' => true,
        'modified' => true,
    ];
}
