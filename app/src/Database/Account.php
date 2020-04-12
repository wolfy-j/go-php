<?php
/**
 * {project-name}
 * 
 * @author {author-name}
 */
declare(strict_types=1);

namespace App\Database;

use Cycle\Annotated\Annotation as Cycle;

/**
 * @Cycle\Entity(repository="\App\Repository\AccountRepository", mapper="TimestampedMapper")
 */
class Account
{
    /**
     * @Cycle\Column(type = "primary")
     */
    public $id;

    /**
     * @Cycle\Column(type = "string")
     */
    public $name;

    /**
     * @Cycle\Column(type = "timestamp", default="CURRENT_TIMESTAMP")
     */
    public $created_at;

    /**
     * @Cycle\Column(type = "timestamp", default="CURRENT_TIMESTAMP")
     */
    public $updated_at;
}
