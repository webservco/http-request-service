<?php

declare(strict_types=1);

namespace WebServCo\Http\Contract\Message\Request\Server;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Server request attribute service.
 *
 * Use case: extract typed stuff from request attributes.
 */
interface ServerRequestAttributeServiceInterface
{
    public const ROUTE_PART_TEMPLATE = 'routePart.%d';

    public function getRoutePart(int $index, ServerRequestInterface $request): ?string;
}
