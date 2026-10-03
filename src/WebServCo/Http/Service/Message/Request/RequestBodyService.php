<?php

declare(strict_types=1);

namespace WebServCo\Http\Service\Message\Request;

use Fig\Http\Message\RequestMethodInterface;
use Override;
use Psr\Http\Message\RequestInterface;
use WebServCo\Http\Contract\Message\Request\RequestBodyServiceInterface;

use function in_array;

final class RequestBodyService implements RequestBodyServiceInterface
{
    #[Override]
    public function canHaveRequestBody(RequestInterface $request): bool
    {
        return in_array(
            $request->getMethod(),
            [
                RequestMethodInterface::METHOD_PATCH,
                RequestMethodInterface::METHOD_POST,
                RequestMethodInterface::METHOD_PUT,
            ],
            true,
        );
    }
}
