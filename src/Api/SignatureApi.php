<?php
declare(strict_types=1);

/**
 * SignatureApi.
 *
 * PHP version 7.4
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
 * OpenAPI spec version: v2.1
 * Contact: devcenter@docusign.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace NashSaint\DocuSign\Api\SignatureApi;



namespace NashSaint\DocuSign\Api;

use NashSaint\DocuSign\Client\ApiClient;
use NashSaint\DocuSign\Client\ApiException;
use NashSaint\DocuSign\Configuration;
use NashSaint\DocuSign\ObjectSerializer;

/**
 * SignatureApi Class Doc Comment
 *
 * @category Class
 * @package  DocuSign
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureApi
{
    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     * @return void
     */
    public function __construct(ApiClient $apiClient = null)
    {
        $this->apiClient = $apiClient ?? new ApiClient();
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return self
     */
    public function setApiClient(ApiClient $apiClient): self
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
    * Update $resourcePath with $
    *
    * @param string $resourcePath
    * @param string $baseName
    * @param string $paramName
    *
    * @return string
    */
    public function updateResourcePath(string $resourcePath, string $baseName, string $paramName): string
    {
        return str_replace(
            "{" . $baseName . "}",
            $this->apiClient->getSerializer()->toPathValue($paramName),
            $resourcePath
        );
    }


    /**
     * Operation completeSignHash
     *
     * Complete Sign Hash
     *
     * @param \DocuSign\Model\CompleteSignRequest $complete_sign_request  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Model\CompleteSignHashResponse
     */
    public function completeSignHash($complete_sign_request = null): \DocuSign\Model\CompleteSignHashResponse
    {
        list($response) = $this->completeSignHashWithHttpInfo($complete_sign_request);
        return $response;
    }

    /**
     * Operation completeSignHashWithHttpInfo
     *
     * Complete Sign Hash
     *
     * @param \DocuSign\Model\CompleteSignRequest $complete_sign_request  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Model\CompleteSignHashResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function completeSignHashWithHttpInfo($complete_sign_request = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/signature/completesignhash";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($complete_sign_request)) {
            $_tempBody = $complete_sign_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Model\CompleteSignHashResponse',
                '/v2.1/signature/completesignhash'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Model\CompleteSignHashResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Model\CompleteSignHashResponse', $e->getResponseHeaders());
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

    /**
     * Operation getUserInfo
     *
     * Get User Info To Sign Document
     *
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Model\UserInfoResponse
     */
    public function getUserInfo(): \DocuSign\Model\UserInfoResponse
    {
        list($response) = $this->getUserInfoWithHttpInfo();
        return $response;
    }

    /**
     * Operation getUserInfoWithHttpInfo
     *
     * Get User Info To Sign Document
     *
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Model\UserInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserInfoWithHttpInfo(): array
    {
        // parse inputs
        $resourcePath = "/v2.1/signature/userInfo";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Model\UserInfoResponse',
                '/v2.1/signature/userInfo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Model\UserInfoResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Model\UserInfoResponse', $e->getResponseHeaders());
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

    /**
     * Operation healthCheck
     *
     * Report status from the TSP to DocuSign
     *
     * @param \DocuSign\Model\TspHealthCheckRequest $tsp_health_check_request  (optional)
     * @throws ApiException on non-2xx response
     * @return mixed
     */
    public function healthCheck($tsp_health_check_request = null): mixed
    {
        list($response) = $this->healthCheckWithHttpInfo($tsp_health_check_request);
        return $response;
    }

    /**
     * Operation healthCheckWithHttpInfo
     *
     * Report status from the TSP to DocuSign
     *
     * @param \DocuSign\Model\TspHealthCheckRequest $tsp_health_check_request  (optional)
     * @throws ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function healthCheckWithHttpInfo($tsp_health_check_request = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/signature/healthcheck";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($tsp_health_check_request)) {
            $_tempBody = $tsp_health_check_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/v2.1/signature/healthcheck'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 400:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Model\ErrorDetails', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation signHashSessionInfo
     *
     * Get Signature Session Info To Sign Document Hash
     *
     * @param \DocuSign\Model\SignSessionInfoRequest $sign_session_info_request  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Model\SignHashSessionInfoResponse
     */
    public function signHashSessionInfo($sign_session_info_request = null): \DocuSign\Model\SignHashSessionInfoResponse
    {
        list($response) = $this->signHashSessionInfoWithHttpInfo($sign_session_info_request);
        return $response;
    }

    /**
     * Operation signHashSessionInfoWithHttpInfo
     *
     * Get Signature Session Info To Sign Document Hash
     *
     * @param \DocuSign\Model\SignSessionInfoRequest $sign_session_info_request  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Model\SignHashSessionInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function signHashSessionInfoWithHttpInfo($sign_session_info_request = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/signature/signhashsessioninfo";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($sign_session_info_request)) {
            $_tempBody = $sign_session_info_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Model\SignHashSessionInfoResponse',
                '/v2.1/signature/signhashsessioninfo'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Model\SignHashSessionInfoResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Model\SignHashSessionInfoResponse', $e->getResponseHeaders());
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

    /**
     * Operation updateTransaction
     *
     * Report an error from the tsp to docusign
     *
     * @param \DocuSign\Model\UpdateTransactionRequest $update_transaction_request  (optional)
     * @throws ApiException on non-2xx response
     * @return \DocuSign\Model\UpdateTransactionResponse
     */
    public function updateTransaction($update_transaction_request = null): \DocuSign\Model\UpdateTransactionResponse
    {
        list($response) = $this->updateTransactionWithHttpInfo($update_transaction_request);
        return $response;
    }

    /**
     * Operation updateTransactionWithHttpInfo
     *
     * Report an error from the tsp to docusign
     *
     * @param \DocuSign\Model\UpdateTransactionRequest $update_transaction_request  (optional)
     * @throws ApiException on non-2xx response
     * @return array of \DocuSign\Model\UpdateTransactionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateTransactionWithHttpInfo($update_transaction_request = null): array
    {
        // parse inputs
        $resourcePath = "/v2.1/signature/updatetransaction";
        $httpBody = $_tempBody ?? ''; // $_tempBody is the method argument, if present
        $queryParams = $headerParams = $formParams = [];
        $headerParams['Accept'] ??= $this->apiClient->selectHeaderAccept(['application/json']);
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);



        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);
        // body params
        $_tempBody = null;
        if (isset($update_transaction_request)) {
            $_tempBody = $update_transaction_request;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires OAuth (access token)
        if (strlen($this->apiClient->getConfig()->getAccessToken()) !== 0) {
            $headerParams['Authorization'] = 'Bearer ' . $this->apiClient->getConfig()->getAccessToken();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\DocuSign\Model\UpdateTransactionResponse',
                '/v2.1/signature/updatetransaction'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\DocuSign\Model\UpdateTransactionResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\DocuSign\Model\UpdateTransactionResponse', $e->getResponseHeaders());
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
