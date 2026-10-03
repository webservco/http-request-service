<?php

declare(strict_types=1);

namespace WebServCo\Http\Container\Message\Request;

use Override;
use WebServCo\Http\Contract\Message\Request\Container\RequestServiceContainerInterface;
use WebServCo\Http\Contract\Message\Request\Method\RequestMethodServiceInterface;
use WebServCo\Http\Contract\Message\Request\RequestBodyServiceInterface;
use WebServCo\Http\Contract\Message\Request\RequestHeaderServiceInterface;
use WebServCo\Http\Contract\Message\Request\Server\ServerHeadersAcceptServiceInterface;
use WebServCo\Http\Contract\Message\Request\Server\ServerRequestAttributeServiceInterface;
use WebServCo\Http\Factory\Message\Request\RequestBodyServiceFactory;
use WebServCo\Http\Factory\Message\Request\RequestHeaderServiceFactory;
use WebServCo\Http\Service\Message\Request\Method\RequestMethodService;
use WebServCo\Http\Service\Message\Request\Server\ServerHeadersAcceptService;
use WebServCo\Http\Service\Message\Request\Server\ServerRequestAttributeService;

final class RequestServiceContainer implements RequestServiceContainerInterface
{
    private ?ServerHeadersAcceptServiceInterface $serverHeadersAcceptService = null;

    private ?ServerRequestAttributeServiceInterface $serverRequestAttributeService = null;

    private ?RequestBodyServiceInterface $requestBodyService = null;

    private ?RequestHeaderServiceInterface $requestHeaderService = null;

    private ?RequestMethodServiceInterface $requestMethodService = null;

    #[Override]
    public function getServerHeadersAcceptService(): ServerHeadersAcceptServiceInterface
    {
        if ($this->serverHeadersAcceptService === null) {
            $this->serverHeadersAcceptService = new ServerHeadersAcceptService();
        }

        return $this->serverHeadersAcceptService;
    }

    #[Override]
    public function getServerRequestAttributeService(): ServerRequestAttributeServiceInterface
    {
        if ($this->serverRequestAttributeService === null) {
            $this->serverRequestAttributeService = new ServerRequestAttributeService();
        }

        return $this->serverRequestAttributeService;
    }

    #[Override]
    public function getRequestBodyService(): RequestBodyServiceInterface
    {
        if ($this->requestBodyService === null) {
            $requestBodyServiceFactory = new RequestBodyServiceFactory();
            $this->requestBodyService = $requestBodyServiceFactory->createRequestBodyService();
        }

        return $this->requestBodyService;
    }

    #[Override]
    public function getRequestHeaderService(): RequestHeaderServiceInterface
    {
        if ($this->requestHeaderService === null) {
            $requestHeaderServiceFactory = new RequestHeaderServiceFactory();
            $this->requestHeaderService = $requestHeaderServiceFactory->createRequestHeaderService();
        }

        return $this->requestHeaderService;
    }

    #[Override]
    public function getRequestMethodService(): RequestMethodServiceInterface
    {
        if ($this->requestMethodService === null) {
            $this->requestMethodService = new RequestMethodService();
        }

        return $this->requestMethodService;
    }
}
