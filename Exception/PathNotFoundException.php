<?php

declare(strict_types=1);

/*
 * This file is part of the SwaggerResolverBundle package.
 *
 * (c) Viktor Linkin <adrenalinkin@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Linkin\Bundle\SwaggerResolverBundle\Exception;

use RuntimeException;
use function sprintf;

/**
 * @author Viktor Linkin <adrenalinkin@gmail.com>
 */
class PathNotFoundException extends RuntimeException
{
    /**
     * @param string $path
     */
    public function __construct(string $path)
    {
        parent::__construct(sprintf('Swagger path "%s" was not found', $path));
    }
}
