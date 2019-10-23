<?php

namespace Bkd27\SurveyMonkey\Api;

/**
 * Webhook API Functions
 *
 * @see https://developer.surveymonkey.com/api/v3/#webhooks
 */
trait WebooksTrait
{
	/**
	 * getWebhooks
	 *
	 * @param array $filters - Available filters: page, per_page
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#webhooks
	 */
	public function getWebhooks(array $filters = [])
	{
		return $this->sendRequest(
			$this->createRequest('GET', 'webhooks', [ 
				'query' => $filters 
			])
		);
	}

	/**
	 * createWebhook
	 *
	 * @param array $data - See API docs for available fields
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#webhooks
	 */
	public function createWebhook(array $data = [])
	{
		return $this->sendRequest(
			$this->createRequest('POST', 'webhooks', [], $data)
		);
	}

	/**
	 * getWebhook
	 *
	 * @param int $webhookId
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#webhooks-id
	 */
	public function getWebhook($webhookId)
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('webhooks/%d', $webhookId))
		);
	}

	/**
	 * updateWebhook
	 *
	 * @param int $webhookId
	 * @param array $data - See API docs for available fields
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#webhooks-id
	 */
	public function updateWebhook($webhookId, array $data = [])
	{
		return $this->sendRequest(
			$this->createRequest('PATCH', sprintf('webhooks/%d', $webhookId), [], $data)
		);
	}

	/**
	 * replaceWebhook
	 *
	 * @param int $webhookId
	 * @param array $data - See API docs for available fields
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#webhooks-id
	 */
	public function replaceWebhook($webhookId, array $data = [])
	{
		return $this->sendRequest(
			$this->createRequest('PUT', sprintf('webhooks/%d', $webhookId), [], $data)
		);
	}

	/**
	 * deleteWebhook
	 *
	 * @param int $webhookId
	 *
	 * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#webhooks-id
	 */
	public function deleteWebhook($webhookId)
	{
		return $this->sendRequest(
			$this->createRequest('DELETE', sprintf('webhooks/%d', $webhookId))
		);
	}
}
