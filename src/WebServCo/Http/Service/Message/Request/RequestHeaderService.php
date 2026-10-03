<?php

declare(strict_types=1);

namespace WebServCo\Http\Service\Message\Request;

use Override;
use Psr\Http\Message\RequestInterface;
use UnexpectedValueException;
use WebServCo\Http\Contract\Message\Request\RequestHeaderServiceInterface;

use function array_key_exists;

final class RequestHeaderService implements RequestHeaderServiceInterface
{
    #[Override]
    public function getHeaderValue(string $headerName, RequestInterface $request): string
    {
        $headers = $request->getHeader($headerName);
        if (!array_key_exists(0, $headers)) {
            throw new UnexpectedValueException('Missing required header');
        }

        return $headers[0];
    }
}
