<?php

declare(strict_types=1);

namespace WebServCo\Http\Contract\Message\Request\Server;

use Psr\Http\Message\ServerRequestInterface;

/**
 * Methods for working with SERVER "Accept" header.
 */
interface ServerHeadersAcceptServiceInterface
{
    public function getAcceptHeaderValue(ServerRequestInterface $request): string;

    /**
     * @return array<string,string>
     */
    public function parseAcceptList(string $acceptHeaderValue): array;
}
