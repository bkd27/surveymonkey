<?php

namespace Bkd27\SurveyMonkey;

use Bkd27\SurveyMonkey\Client;
use Bkd27\SurveyMonkey\BaseTest;

class ClientTest extends BaseTest
{
	public function testInternalVariables()
	{
		$client = new Client('FOO', 'BAR');

		$this->assertEquals($client->getApiKey(), 'FOO');

		$this->assertEquals($client->getAccessToken(), 'BAR');	

		$client->setApiKey('BAR');

		$client->setAccessToken('FOO');

		$this->assertEquals($client->getApiKey(), 'BAR');

		$this->assertEquals($client->getAccessToken(), 'FOO');
	}

	
}