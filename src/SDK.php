<?php

declare(strict_types=1);

namespace calendly\calendly;

/**
 * SDK Documentation: Calendly’s API is [REST](http://en.wikipedia.org/wiki/Representational_State_Transfer)-based and has predictable resource-oriented URLs. It uses **JSON** for request and response bodies and standard HTTP methods, authentication, and response codes.<br>
 * 
 * ##### Authenticate with personal access tokens or OAuth 2.0
 * 
 * To access Calendly data through the API, you can authenticate with **personal access tokens** or **OAuth 2.0**. To learn more about these authentication methods and when and how to use them, see [Getting Started with the Calendly API](https://developer.calendly.com/getting-started).
 */
class SDK
{
	public const SERVERS = [
		'https://api.calendly.com',
	];
  	
  	public ActivityLog $activityLog;
  	public Availability $availability;
  	public DataCompliance $dataCompliance;
  	public EventTypes $eventTypes;
  	public Organizations $organizations;
  	public RoutingForms $routingForms;
  	public ScheduledEvents $scheduledEvents;
  	public SchedulingLinks $schedulingLinks;
  	public Shares $shares;
  	public Users $users;
  	public Webhooks $webhooks;	

	// SDK private variables namespaced with _ to avoid conflicts with API models
	private ?\GuzzleHttp\ClientInterface $_defaultClient;
	private ?\GuzzleHttp\ClientInterface $_securityClient;
	
	private string $_serverUrl;
	private string $_language = "php";
	private string $_sdkVersion = "0.1.0";
	private string $_genVersion = "1.9.1";

	public static function builder(): SDKBuilder
	{
		return new SDKBuilder();
	}

	/**
	 * @param \GuzzleHttp\ClientInterface|null $client
	 * @param string $serverUrl
	 * @param array<string, string>|null $params
	 */
	public function __construct(?\GuzzleHttp\ClientInterface $client, string $serverUrl, ?array $params)
	{
		$this->_defaultClient = $client;
		
		if ($this->_defaultClient === null) {
			$this->_defaultClient = new \GuzzleHttp\Client([
            	'timeout' => 60,
			]);
		}

		$this->_securityClient = null;
		if ($this->_securityClient === null) {
			$this->_securityClient = $this->_defaultClient;
		}

		if (!empty($serverUrl)) {
			$this->_serverUrl = Utils\Utils::templateUrl($serverUrl, $params);
		}
		
		if (empty($this->_serverUrl)) {
			$this->_serverUrl = $this::SERVERS[0];
		}
		
		$this->activityLog = new ActivityLog(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->availability = new Availability(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->dataCompliance = new DataCompliance(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->eventTypes = new EventTypes(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->organizations = new Organizations(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->routingForms = new RoutingForms(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->scheduledEvents = new ScheduledEvents(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->schedulingLinks = new SchedulingLinks(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->shares = new Shares(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->users = new Users(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
		
		$this->webhooks = new Webhooks(
			$this->_defaultClient,
			$this->_securityClient,
			$this->_serverUrl,
			$this->_language,
			$this->_sdkVersion,
			$this->_genVersion
		);
	}
}