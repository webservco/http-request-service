<?php

declare(strict_types=1);

namespace WebServCo\Http\Service\Message\Request\Server;

use Psr\Http\Message\ServerRequestInterface;
use UnexpectedValueException;
use WebServCo\Http\Contract\Message\Request\Server\ServerRequestAttributeServiceInterface;

use function is_string;
use function sprintf;

final class ServerRequestAttributeService implements ServerRequestAttributeServiceInterface
{
    public function getRoutePart(int $index, ServerRequestInterface $request): ?string
    {
        $result = $request->getAttribute(sprintf(self::ROUTE_PART_TEMPLATE, $index), null);

        if ($result === null) {
            return null;
        }

        if (!is_string($result)) {
            // Sanity check, should never happen.
            throw new UnexpectedValueException('Route is not a string.');
        }

        return $result;
    }
}
