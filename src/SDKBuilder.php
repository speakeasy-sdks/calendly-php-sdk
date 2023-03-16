<?php

declare(strict_types=1);

namespace calendly\calendly;

class SDKBuilder
{
    private ?\GuzzleHttp\ClientInterface $client;
    private ?Models\Shared\Security $security;
    private string $serverUrl;
    /** @var array<string, string> */
    private ?array $params;

    public function __construct() {
        $this->client = null;
        $this->security = null;
        $this->serverUrl = '';
        $this->params = null;
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param \GuzzleHttp\ClientInterface $client
     * @return SDKBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): SDKBuilder
    {
        $this->client = $client;
        return $this;
    }
    
    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param Models\Shared\Security $security
     * @return SDKBuilder
     */
    public function setSecurity(Models\Shared\Security $security): SDKBuilder
    {
        $this->security = $security;
        return $this;
    }
    
    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param string $serverUrl
     * @param array<string, string> $params
     * @return SDKBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): SDKBuilder
    {
        $this->serverUrl = $serverUrl;
        if ($params !== null) {
            $this->params = $params;
        }
        return $this;
    }
    
    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return SDK
     */
    public function build(): SDK
    {
        return new SDK($this->client, $this->security, $this->serverUrl, $this->params);
    }
}