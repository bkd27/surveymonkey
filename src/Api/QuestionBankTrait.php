<?php
namespace Bkd27\SurveyMonkey\Api;

/**
 * Question Bank API Functions
 *
 * @see https://developer.surveymonkey.com/api/v3/#question-bank
 */
trait QuestionBankTrait
{
    /**
     * getQuestionBankQuestions - Returns a list of question bank questinos available to the user
     *
     * @param array $filters - Available filters: page, per_page, locale, search, custom
     *
     * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#question_bank-questions
     */
    public function getQuestionBankQuestions(array $filters = [])
    {
        return $this->sendRequest(
            $this->createRequest('GET', 'question_bank/questions', [ 'query' => $filters ])
        );
    }
}