<?php

namespace Bkd27\SurveyMonkey;

use Bkd27\SurveyMonkey\BaseTest;


class Issue4Test extends BaseTest
{

	public function testIssue4Query()
	{
		$surveys = $this->client->getSurveys([ 'per_page' => 1]);

		$data = $surveys->getData();

		$this->arrayHasKey('per_page', $data);
		$this->assertEquals($data['per_page'], 1);
	}
}