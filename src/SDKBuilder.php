<?php

declare(strict_types=1);

namespace calendly\calendly;

class SDKBuilder
{
    private ?\GuzzleHttp\ClientInterface $client;
    
    private string $serverUrl;
    /** @var array<string, string> */
    private ?array $params;

    public function __construct() {
        $this->client = null;
        
        $this->serverUrl = '';
        $this->params = null;
    }

    public function setClient(\GuzzleHttp\ClientInterface $client): SDKBuilder
    {
        $this->client = $client;
        return $this;
    }
    
    /**
    * Set the server URL and any parameters to interpolate into the URL.
    * @param string $serverUrl
    * @param array<string, string> $params
    * @return SDKBuilder
    */
    public function setServerURL(string $serverUrl, ?array $params = null): SDKBuilder
    {
        $this->serverUrl = $serverUrl;
        if ($params !== null) {
            $this->params = $params;
        }
        return $this;
    }
    
    public function build(): SDK
    {
        return new SDK($this->client, $this->serverUrl, $this->params);
    }
}