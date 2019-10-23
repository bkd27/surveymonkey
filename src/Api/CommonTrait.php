<?php

namespace Bkd27\SurveyMonkey\Api;

/**
 * Common API Functions
 */
trait CommonTrait
{
	/**
	 * isResourceAvailable
	 *
	 * @param string $uri - URI to endpoint to query
	 * @return \Bkd27\SurveyMonkey\Response
	 */
	public function isResourceAvailable($uri)
	{
		return $this->sendRequest(
			$this->createRequest('HEAD', $uri)
		);
	}

	/**
	 * isResourceAvailable
	 *
	 * @param string $uri - URI to endpoint to query
	 * @return \Bkd27\SurveyMonkey\Response
	 */
	public function getResourceOptions($uri)
	{
		return $this->sendRequest(
			$this->createRequest('OPTIONS', $uri)
		);
	}
}