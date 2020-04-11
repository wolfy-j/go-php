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
 * @Cycle\Entity(repository="\App\Repository\UserDeviceSessionRepository")
 */
class UserDeviceSession
{
    /**
     * @Cycle\Column(type = "bigPrimary")
     */
    public $id;
}
