<?php

/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */
declare(strict_types=1);


namespace App\Database;

use App\Mapper\TimestampedMapper;

/**
 * @see TimestampedMapper
 */
trait TimestampTrait
{
    /**
     * @var \DateTimeInterface
     */
    public $created_at;

    /**
     * @var \DateTimeInterface
     */
    public $updated_at;
}
