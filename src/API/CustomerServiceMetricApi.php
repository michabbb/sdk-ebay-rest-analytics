<?php
/**
 * CustomerServiceMetricApi
 * PHP version 5
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\analytics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Seller Service Metrics API
 *
 * The <i>Analytics API</i> provides data and information about a seller and their eBay business.  <br><br>The resources and methods in this API let sellers review information on their listing performance, metrics on their customer service performance, and details on their eBay seller performance rating.  <br><br>The three resources in the Analytics API provide the following data and information: <ul><li><b>Customer Service Metric</b> &ndash; Returns data on a seller's customer service performance as compared to other seller's in the same peer group.</li> <li><b>Traffic Report</b> &ndash; Returns data that shows how buyers are engaging with a seller's listings.</li> <li><b>Seller Standards Profile</b> &ndash; Returns data pertaining to a seller's performance rating.</li></ul> Sellers can use the data and information returned by the various Analytics API methods to determine where they can make improvements to increase sales and how they might improve their seller status as viewed by eBay buyers.  <br><br>For details on using this API, see <a href=\"/api-docs/sell/static/performance/analyzing-performance.html\" title=\"Selling Integration Guide\">Analyzing seller performance</a>.
 *
 * OpenAPI spec version: 1.2.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\analytics\API;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use macropage\SDKs\ebay\rest\analytics\ApiException;
use macropage\SDKs\ebay\rest\analytics\Configuration;
use macropage\SDKs\ebay\rest\analytics\HeaderSelector;
use macropage\SDKs\ebay\rest\analytics\ObjectSerializer;

/**
 * CustomerServiceMetricApi Class Doc Comment
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\analytics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerServiceMetricApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getCustomerServiceMetric
     *
     * @param  string $customerServiceMetricType Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED (required)
     * @param  string $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html (required)
     * @param  string $evaluationType Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &amp;ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &amp;ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period. (required)
     *
     * @throws \macropage\SDKs\ebay\rest\analytics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse
     */
    public function getCustomerServiceMetric($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType)
    {
        list($response) = $this->getCustomerServiceMetricWithHttpInfo($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType);
        return $response;
    }

    /**
     * Operation getCustomerServiceMetricWithHttpInfo
     *
     * @param  string $customerServiceMetricType Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED (required)
     * @param  string $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html (required)
     * @param  string $evaluationType Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &amp;ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &amp;ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period. (required)
     *
     * @throws \macropage\SDKs\ebay\rest\analytics\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCustomerServiceMetricWithHttpInfo($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType)
    {
        $request = $this->getCustomerServiceMetricRequest($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 200:
                    if ('\macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getCustomerServiceMetricAsync
     *
     * 
     *
     * @param  string $customerServiceMetricType Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED (required)
     * @param  string $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html (required)
     * @param  string $evaluationType Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &amp;ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &amp;ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerServiceMetricAsync($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType)
    {
        return $this->getCustomerServiceMetricAsyncWithHttpInfo($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCustomerServiceMetricAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $customerServiceMetricType Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED (required)
     * @param  string $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html (required)
     * @param  string $evaluationType Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &amp;ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &amp;ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCustomerServiceMetricAsyncWithHttpInfo($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType)
    {
        $returnType = '\macropage\SDKs\ebay\rest\analytics\Model\GetCustomerServiceMetricResponse';
        $request = $this->getCustomerServiceMetricRequest($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'getCustomerServiceMetric'
     *
     * @param  string $customerServiceMetricType Use this path parameter to specify the type of customer service metrics and benchmark data you want returned for the seller. Supported types are: ITEM_NOT_AS_DESCRIBED ITEM_NOT_RECEIVED (required)
     * @param  string $evaluationMarketplaceId Use this query parameter to specify the Marketplace ID to evaluate for the customer service metrics and benchmark data. For the list of supported marketplaces, see Analytics API requirements and restrictions. For implementation help, refer to eBay API documentation at https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html (required)
     * @param  string $evaluationType Use this path parameter to specify the type of the seller evaluation you want returned, either: CURRENT &amp;ndash; A monthly evaluation that occurs on the 20th of every month. PROJECTED &amp;ndash; A daily evaluation that provides a projection of how the seller is currently performing with regards to the upcoming evaluation period. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCustomerServiceMetricRequest($customerServiceMetricType, $evaluationMarketplaceId, $evaluationType)
    {
        // verify the required parameter 'customerServiceMetricType' is set
        if ($customerServiceMetricType === null || (is_array($customerServiceMetricType) && count($customerServiceMetricType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $customerServiceMetricType when calling getCustomerServiceMetric'
            );
        }
        // verify the required parameter 'evaluationMarketplaceId' is set
        if ($evaluationMarketplaceId === null || (is_array($evaluationMarketplaceId) && count($evaluationMarketplaceId) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $evaluationMarketplaceId when calling getCustomerServiceMetric'
            );
        }
        // verify the required parameter 'evaluationType' is set
        if ($evaluationType === null || (is_array($evaluationType) && count($evaluationType) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $evaluationType when calling getCustomerServiceMetric'
            );
        }

        $resourcePath = '/customer_service_metric/{customer_service_metric_type}/{evaluation_type}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($evaluationMarketplaceId !== null) {
            $queryParams['evaluation_marketplace_id'] = ObjectSerializer::toQueryValue($evaluationMarketplaceId);
        }

        // path params
        if ($customerServiceMetricType !== null) {
            $resourcePath = str_replace(
                '{' . 'customer_service_metric_type' . '}',
                ObjectSerializer::toPathValue($customerServiceMetricType),
                $resourcePath
            );
        }
        // path params
        if ($evaluationType !== null) {
            $resourcePath = str_replace(
                '{' . 'evaluation_type' . '}',
                ObjectSerializer::toPathValue($evaluationType),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($_tempBody));
            } else {
                $httpBody = $_tempBody;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}