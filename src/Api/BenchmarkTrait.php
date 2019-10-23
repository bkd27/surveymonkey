<?php
namespace Bkd27\SurveyMonkey\Api;

/**
 * Benchmark API Functions
 *
 * @see https://developer.surveymonkey.com/api/v3/#benchmarks
 */
trait BenchmarkTrait
{
	/**
	 * getBenchmarkBundles
	 *
	 * @param $filters - Available filters: page, per_page, country
	 *
	 * @return \Bkd27\SurveyMonkey\Response
	 */
	public function getBenchmarkBundles(array $filters = [])
	{
		return $this->sendRequest(
			$this->createRequest('GET', 'benchmark_bundles', [ 
				'query' => $filters 
			])
		);
	}

	/**
	 * getBenchmarkBundle
	 *
	 * @param $benchmarkBundleId
	 *
	 * @return \Bkd27\SurveyMonkey\Response
	 */
	public function getBenchmarkBundle($benchmarkBundleId)
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('benchmark_bundles/%d', $benchmarkBundleId))
		);
	}

	/**
	 * analyzeSurveyQuestions
	 *
	 * @param $benchmarkBundleId
	 * @param $questionIds
	 * @param $filters - Available filters: percentile_start, percentile_end
	 *
	 * @return \Bkd27\SurveyMonkey\Response
	 */
	public function analyzeSurveyQuestions($benchmarkBundleId, array $questionIds, array $filters = [])
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('benchmark_bundles/%d/analyze', $benchmarkBundleId). [
				'query' => array_merge($filters, [
					'question_ids' => implode(',', $questionIds)
				])
			])
		);
	}

	/**
	 * getQuestionBenchmarkResult
	 *
	 * @param $surveyId
	 * @param $pageId
	 * @param $questionId
	 * @param array $filters - Available filters: percentile_start, percentile_end
	 *
	 * @return \Bkd27\SurveyMonkey\Response
	 */
	public function getQuestionBenchmarkResult($surveyId, $pageId, $questionId, array $filters = [])
	{
		return $this->sendRequest(
			$this->createRequest('GET', sprintf('surveys/%d/pages/%d/questions/%d/benchmark', $surveyId, $pageId, $questionId), [ 
				'query' => $filters 
			])
		);
	}

}