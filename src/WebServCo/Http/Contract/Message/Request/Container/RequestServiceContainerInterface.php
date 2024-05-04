<?php

declare(strict_types=1);

namespace WebServCo\Http\Contract\Message\Request\Container;

use WebServCo\Http\Contract\Message\Request\Method\RequestMethodServiceInterface;
use WebServCo\Http\Contract\Message\Request\RequestBodyServiceInterface;
use WebServCo\Http\Contract\Message\Request\RequestHeaderServiceInterface;
use WebServCo\Http\Contract\Message\Request\Server\ServerRequestAttributeServiceInterface;

interface RequestServiceContainerInterface
{
    public function getServerRequestAttributeService(): ServerRequestAttributeServiceInterface;

    public function getRequestBodyService(): RequestBodyServiceInterface;

    public function getRequestHeaderService(): RequestHeaderServiceInterface;

    public function getRequestMethodService(): RequestMethodServiceInterface;
}
