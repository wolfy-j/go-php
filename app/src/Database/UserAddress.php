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
 * @Cycle\Entity(repository="\App\Repository\UserAddressRepository")
 */
class UserAddress
{
    /**
     * @Cycle\Column(type = "bigPrimary")
     */
    public $id;
}
