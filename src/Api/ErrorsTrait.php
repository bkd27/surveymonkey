<?php
namespace Bkd27\SurveyMonkey\Api;

/**
 * Webhook API Functions
 *
 * @see https://developer.surveymonkey.com/api/v3/#errors
 */
trait ErrorsTrait
{
	/**
	 * getErrors
	 *
	 * @param array $filters - Available filters: page, per_page
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#errors
	 */
	public function getErrors(array $filters = [])
	{
		return $this->sendRequest(
			$this->createRequest('GET', 'errors', [ 
				'query' => $filters 
			])
		);
	}

	/**
	 * getError
	 *
	 * @param int $errorId
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#errors
	 */
	public function getError($errorId)
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('errors/%d', $errorId))
		);
	}

}
