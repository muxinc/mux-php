<?php

/**
* Mux PHP - Copyright 2019 Mux Inc.
* NOTE: This file is auto generated. Do not edit this file manually.
*/

namespace MuxPhp\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use MuxPhp\ApiException;
use MuxPhp\Configuration;
use MuxPhp\HeaderSelector;
use MuxPhp\ObjectSerializer;

/**
 * VideoViewsApi Class Doc Comment
 *
 * @category Class
 * @package  MuxPhp
 */
class VideoViewsApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $host_index (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $host_index = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $host_index;
    }

    /**
     * Set the host index
     *
     * @param  int Host index (required)
     */
    public function setHostIndex($host_index)
    {
        $this->hostIndex = $host_index;
    }

    /**
     * Get the host index
     *
     * @return Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getVideoView
     *
     * Get a Video View
     *
     * @param  string $video_view_id ID of the Video View (required)
     *
     * @throws \MuxPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MuxPhp\Models\VideoViewResponse
     */
    public function getVideoView($video_view_id)
    {
        list($response) = $this->getVideoViewWithHttpInfo($video_view_id);
        return $response;
    }

    /**
     * Operation getVideoViewWithHttpInfo
     *
     * Get a Video View
     *
     * @param  string $video_view_id ID of the Video View (required)
     *
     * @throws \MuxPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MuxPhp\Models\VideoViewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getVideoViewWithHttpInfo($video_view_id)
    {
        $request = $this->getVideoViewRequest($video_view_id);

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
                    if ('\MuxPhp\Models\VideoViewResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MuxPhp\Models\VideoViewResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MuxPhp\Models\VideoViewResponse';
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
                        '\MuxPhp\Models\VideoViewResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getVideoViewAsync
     *
     * Get a Video View
     *
     * @param  string $video_view_id ID of the Video View (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVideoViewAsync($video_view_id)
    {
        return $this->getVideoViewAsyncWithHttpInfo($video_view_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getVideoViewAsyncWithHttpInfo
     *
     * Get a Video View
     *
     * @param  string $video_view_id ID of the Video View (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getVideoViewAsyncWithHttpInfo($video_view_id)
    {
        $returnType = '\MuxPhp\Models\VideoViewResponse';
        $request = $this->getVideoViewRequest($video_view_id);

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
     * Create request for operation 'getVideoView'
     *
     * @param  string $video_view_id ID of the Video View (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getVideoViewRequest($video_view_id)
    {

        // verify the required parameter 'video_view_id' is set
        if ($video_view_id === null || (is_array($video_view_id) && count($video_view_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $video_view_id when calling getVideoView'
            );
        }

        $resourcePath = '/data/v1/video-views/{VIDEO_VIEW_ID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($video_view_id !== null) {
            $resourcePath = str_replace(
                '{' . 'VIDEO_VIEW_ID' . '}',
                ObjectSerializer::toPathValue($video_view_id),
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $queryParamsDirect = join("&",$queryParams);
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($queryParamsDirect ? "?{$queryParamsDirect}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation listVideoViews
     *
     * List Video Views
     *
     * @param  mixed[] $optionalParams An associative array of optional parameters which can be passed to this function:
     *     - limit int - Number of items to include in the response (optional, default to 25)
     *     - page int - Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     *     - viewer_id string - Viewer ID to filter results by. This value may be provided by the integration, or may be created by Mux. (optional)
     *     - error_id int - Filter video views by the provided error ID (as returned in the error_type_id field in the list video views endpoint). If you provide any as the error ID, this will filter the results to those with any error. (optional)
     *     - order_direction string - Sort order. (optional)
     *     - filters string[] - Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
     *     - timeframe string[] - Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
     *
     * @throws \MuxPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \MuxPhp\Models\ListVideoViewsResponse
     */
    public function listVideoViews($optionalParams = [])
    {
        list($response) = $this->listVideoViewsWithHttpInfo($optionalParams);
        return $response;
    }

    /**
     * Operation listVideoViewsWithHttpInfo
     *
     * List Video Views
     *
     * @param  mixed[] $optionalParams An associative array of optional parameters which can be passed to this function:
     *     - limit int - Number of items to include in the response (optional, default to 25)
     *     - page int - Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     *     - viewer_id string - Viewer ID to filter results by. This value may be provided by the integration, or may be created by Mux. (optional)
     *     - error_id int - Filter video views by the provided error ID (as returned in the error_type_id field in the list video views endpoint). If you provide any as the error ID, this will filter the results to those with any error. (optional)
     *     - order_direction string - Sort order. (optional)
     *     - filters string[] - Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
     *     - timeframe string[] - Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
     *
     * @throws \MuxPhp\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \MuxPhp\Models\ListVideoViewsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listVideoViewsWithHttpInfo($optionalParams = [])
    {
        $request = $this->listVideoViewsRequest($optionalParams);

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
                    if ('\MuxPhp\Models\ListVideoViewsResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\MuxPhp\Models\ListVideoViewsResponse', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\MuxPhp\Models\ListVideoViewsResponse';
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
                        '\MuxPhp\Models\ListVideoViewsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation listVideoViewsAsync
     *
     * List Video Views
     *
     * @param  mixed[] $optionalParams An associative array of optional parameters which can be passed to this function:
     *     - limit int - Number of items to include in the response (optional, default to 25)
     *     - page int - Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     *     - viewer_id string - Viewer ID to filter results by. This value may be provided by the integration, or may be created by Mux. (optional)
     *     - error_id int - Filter video views by the provided error ID (as returned in the error_type_id field in the list video views endpoint). If you provide any as the error ID, this will filter the results to those with any error. (optional)
     *     - order_direction string - Sort order. (optional)
     *     - filters string[] - Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
     *     - timeframe string[] - Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listVideoViewsAsync($optionalParams = [])
    {
        return $this->listVideoViewsAsyncWithHttpInfo($optionalParams)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listVideoViewsAsyncWithHttpInfo
     *
     * List Video Views
     *
     * @param  mixed[] $optionalParams An associative array of optional parameters which can be passed to this function:
     *     - limit int - Number of items to include in the response (optional, default to 25)
     *     - page int - Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     *     - viewer_id string - Viewer ID to filter results by. This value may be provided by the integration, or may be created by Mux. (optional)
     *     - error_id int - Filter video views by the provided error ID (as returned in the error_type_id field in the list video views endpoint). If you provide any as the error ID, this will filter the results to those with any error. (optional)
     *     - order_direction string - Sort order. (optional)
     *     - filters string[] - Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
     *     - timeframe string[] - Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listVideoViewsAsyncWithHttpInfo($optionalParams = [])
    {
        $returnType = '\MuxPhp\Models\ListVideoViewsResponse';
        $request = $this->listVideoViewsRequest($optionalParams);

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
     * Create request for operation 'listVideoViews'
     *
     * @param  mixed[] $optionalParams An associative array of optional parameters which can be passed to this function:
     *     - limit int - Number of items to include in the response (optional, default to 25)
     *     - page int - Offset by this many pages, of the size of &#x60;limit&#x60; (optional, default to 1)
     *     - viewer_id string - Viewer ID to filter results by. This value may be provided by the integration, or may be created by Mux. (optional)
     *     - error_id int - Filter video views by the provided error ID (as returned in the error_type_id field in the list video views endpoint). If you provide any as the error ID, this will filter the results to those with any error. (optional)
     *     - order_direction string - Sort order. (optional)
     *     - filters string[] - Filter key:value pairs. Must be provided as an array query string parameter (e.g. filters[]&#x3D;operating_system:windows&amp;filters[]&#x3D;country:US).  Possible filter names are the same as returned by the List Filters endpoint. (optional)
     *     - timeframe string[] - Timeframe window to limit results by. Must be provided as an array query string parameter (e.g. timeframe[]&#x3D;). Accepted formats are...   * array of epoch timestamps e.g. timeframe[]&#x3D;1498867200&amp;timeframe[]&#x3D;1498953600    * duration string e.g. timeframe[]&#x3D;24:hours or timeframe[]&#x3D;7:days. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listVideoViewsRequest($optionalParams)
    {
        // Pull the set optional params from the associative array $optionalParams, setting them to their defaults if they're not set.
        $limit = array_key_exists('limit', $optionalParams) ? $optionalParams['limit'] : 25;
        $page = array_key_exists('page', $optionalParams) ? $optionalParams['page'] : 1;
        $viewer_id = array_key_exists('viewer_id', $optionalParams) ? $optionalParams['viewer_id'] : null;
        $error_id = array_key_exists('error_id', $optionalParams) ? $optionalParams['error_id'] : null;
        $order_direction = array_key_exists('order_direction', $optionalParams) ? $optionalParams['order_direction'] : null;
        $filters = array_key_exists('filters', $optionalParams) ? $optionalParams['filters'] : null;
        $timeframe = array_key_exists('timeframe', $optionalParams) ? $optionalParams['timeframe'] : null;


        $resourcePath = '/data/v1/video-views';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // Query Param: limit
        if ($limit !== null) {
            array_push($queryParams, "limit=" . ObjectSerializer::toQueryValue($limit));
        }
        // Query Param: page
        if ($page !== null) {
            array_push($queryParams, "page=" . ObjectSerializer::toQueryValue($page));
        }
        // Query Param: viewer_id
        if ($viewer_id !== null) {
            array_push($queryParams, "viewer_id=" . ObjectSerializer::toQueryValue($viewer_id));
        }
        // Query Param: error_id
        if ($error_id !== null) {
            array_push($queryParams, "error_id=" . ObjectSerializer::toQueryValue($error_id));
        }
        // Query Param: order_direction
        if ($order_direction !== null) {
            array_push($queryParams, "order_direction=" . ObjectSerializer::toQueryValue($order_direction));
        }
        // Query Param: filters[]
        if ($filters !== null) {
            if (is_array($filters)) {
                foreach ($filters as $p) {
                    array_push($queryParams, "filters[]=$p");
                }
            }
            else {
                throw new \InvalidArgumentException('Did not receive an array when expecting one for query parameter filters[]');
            }
        }
        // Query Param: timeframe[]
        if ($timeframe !== null) {
            if (is_array($timeframe)) {
                foreach ($timeframe as $p) {
                    array_push($queryParams, "timeframe[]=$p");
                }
            }
            else {
                throw new \InvalidArgumentException('Did not receive an array when expecting one for query parameter timeframe[]');
            }
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

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $queryParamsDirect = join("&",$queryParams);
        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($queryParamsDirect ? "?{$queryParamsDirect}" : ''),
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
