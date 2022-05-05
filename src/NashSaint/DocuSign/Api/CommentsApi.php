<?php
/**
 * CommentsApi
 * PHP version 5
 *
 * @category Class
 * @package  DocuSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * DocuSign REST API
 *
 * The DocuSign REST API provides you with a powerful, convenient, and simple Web services API for interacting with DocuSign.
 *
 * OpenAPI spec version: v2
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NashSaint\DocuSign\Api\CommentsApi;

class GetCommentsTranscriptOptions
{
    /**
      * $encoding
      * @var string
      */
    protected $encoding;

    /**
     * Gets encoding
     * @return string
     */
    public function getEncoding()
    {
        return $this->encoding;
    }

    /**
     * Sets encoding
     * @param string $encoding
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->encoding = $encoding;
        return $this;
    }
}


namespace NashSaint\DocuSign\Api;

use \DocuSign\Client\ApiClient;
use \DocuSign\Client\ApiException;
use \DocuSign\Configuration;
use \DocuSign\ObjectSerializer;

/**
 * CommentsApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CommentsApi
{
    /**
     * API Client
     *
     * @var \DocuSign\Client\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \DocuSign\Client\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\DocuSign\Client\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \DocuSign\Client\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \DocuSign\Client\ApiClient $apiClient set the API client
     *
     * @return CommentsApi
     */
    public function setApiClient(\DocuSign\Client\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getCommentsTranscript
     *
     * Gets comment transcript for envelope and user
     *
    * @param string $account_id The external account number (int) or account ID Guid.
    * @param string $envelope_id The envelopeId Guid of the envelope being accessed.
     * @param  $options Options for modifying the behavior of the function. (optional)
     * @throws \DocuSign\Client\ApiException on non-2xx response
     * @return \SplFileObject
     */
    public function getCommentsTranscript($account_id, $envelope_id, CommentsApi\GetCommentsTranscriptOptions $options = null)
    {
        list($response) = $this->getCommentsTranscriptWithHttpInfo($account_id, $envelope_id, $options);
        return $response;
    }

    /**
     * Operation getCommentsTranscriptWithHttpInfo
     *
     * Gets comment transcript for envelope and user
     *
    * @param string $account_id The external account number (int) or account ID Guid.
    * @param string $envelope_id The envelopeId Guid of the envelope being accessed.
     * @param  $options Options for modifying the behavior of the function. (optional)
     * @throws \DocuSign\Client\ApiException on non-2xx response
     * @return array of \SplFileObject, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCommentsTranscriptWithHttpInfo($account_id, $envelope_id, CommentsApi\GetCommentsTranscriptOptions $options = null)
    {
        // verify the required parameter 'account_id' is set
        if ($account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_id when calling getCommentsTranscript');
        }
        // verify the required parameter 'envelope_id' is set
        if ($envelope_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $envelope_id when calling getCommentsTranscript');
        }
        // parse inputs
        $resourcePath = "/v2/accounts/{accountId}/envelopes/{envelopeId}/comments/transcript";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/pdf']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        if ($options != null)
        {
        // query params
        // query params
        if ($options->getEncoding() !== null) {
            $queryParams['encoding'] = $this->apiClient->getSerializer()->toQueryValue($options->getEncoding());
        }
        }

        // path params
        if ($account_id !== null) {
            $resourcePath = str_replace(
                "{" . "accountId" . "}",
                $this->apiClient->getSerializer()->toPathValue($account_id),
                $resourcePath
            );
        }
        // path params
        if ($envelope_id !== null) {
            $resourcePath = str_replace(
                "{" . "envelopeId" . "}",
                $this->apiClient->getSerializer()->toPathValue($envelope_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\SplFileObject',
                '/v2/accounts/{accountId}/envelopes/{envelopeId}/comments/transcript'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\SplFileObject', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\SplFileObject', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
