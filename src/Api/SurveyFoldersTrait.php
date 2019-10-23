<?php

namespace Bkd27\SurveyMonkey\Api;

/**
 * Survey Folders API Functions
 *
 * @see https://developer.surveymonkey.com/api/v3/#survey-folders
 */
trait SurveyFoldersTrait
{
    /**
     * getSurveyFolders - Returns available folders
     *
     * @param array $filters - Available filters: page, per_page
     *
     * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#survey_folders
     */
    public function getSurveyFolders(array $filters = [])
    {
        return $this->sendRequest(
            $this->createRequest('GET', 'survey_folders', [ 'query' => $filters ])
        );
    }

    /**
     * getSurveyFolders - Returns available folders
     *
     * @param array $filters - Available filters: page, per_page
     *
     * @return \Bkd27\SurveyMonkey\Response
     *
     * @see https://developer.surveymonkey.com/api/v3/#survey_folders
     */
    public function createSurveyFolder(array $data = [])
    {
        return $this->sendRequest(
            $this->createRequest('POST', 'survey_folders', [], $data)
        );
    }
}