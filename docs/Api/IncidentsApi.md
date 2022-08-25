# MuxPhp\IncidentsApi

All URIs are relative to https://api.mux.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getIncident()**](IncidentsApi.md#getIncident) | **GET** /data/v1/incidents/{INCIDENT_ID} | Get an Incident |
| [**listIncidents()**](IncidentsApi.md#listIncidents) | **GET** /data/v1/incidents | List Incidents |
| [**listRelatedIncidents()**](IncidentsApi.md#listRelatedIncidents) | **GET** /data/v1/incidents/{INCIDENT_ID}/related | List Related Incidents |


## `getIncident()`

```php
getIncident($incident_id): \MuxPhp\Models\IncidentResponse
```

Get an Incident

Returns the details of an incident.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = abcd1234; // string | ID of the Incident

try {
    $result = $apiInstance->getIncident($incident_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->getIncident: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incident_id** | **string**| ID of the Incident | |

### Return type

[**\MuxPhp\Models\IncidentResponse**](../Model/IncidentResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listIncidents()`

```php
listIncidents($limit, $page, $order_by, $order_direction, $status, $severity): \MuxPhp\Models\ListIncidentsResponse
```

List Incidents

Returns a list of incidents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`
$order_by = 'order_by_example'; // string | Value to order the results by
$order_direction = 'order_direction_example'; // string | Sort order.
$status = 'status_example'; // string | Status to filter incidents by
$severity = 'severity_example'; // string | Severity to filter incidents by

try {
    $result = $apiInstance->listIncidents($limit, $page, $order_by, $order_direction, $status, $severity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->listIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |
| **order_by** | **string**| Value to order the results by | [optional] |
| **order_direction** | **string**| Sort order. | [optional] |
| **status** | **string**| Status to filter incidents by | [optional] |
| **severity** | **string**| Severity to filter incidents by | [optional] |

### Return type

[**\MuxPhp\Models\ListIncidentsResponse**](../Model/ListIncidentsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRelatedIncidents()`

```php
listRelatedIncidents($incident_id, $limit, $page, $order_by, $order_direction): \MuxPhp\Models\ListRelatedIncidentsResponse
```

List Related Incidents

Returns all the incidents that seem related to a specific incident.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: accessToken
$config = MuxPhp\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new MuxPhp\Api\IncidentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$incident_id = abcd1234; // string | ID of the Incident
$limit = 25; // int | Number of items to include in the response
$page = 1; // int | Offset by this many pages, of the size of `limit`
$order_by = 'order_by_example'; // string | Value to order the results by
$order_direction = 'order_direction_example'; // string | Sort order.

try {
    $result = $apiInstance->listRelatedIncidents($incident_id, $limit, $page, $order_by, $order_direction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncidentsApi->listRelatedIncidents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **incident_id** | **string**| ID of the Incident | |
| **limit** | **int**| Number of items to include in the response | [optional] [default to 25] |
| **page** | **int**| Offset by this many pages, of the size of &#x60;limit&#x60; | [optional] [default to 1] |
| **order_by** | **string**| Value to order the results by | [optional] |
| **order_direction** | **string**| Sort order. | [optional] |

### Return type

[**\MuxPhp\Models\ListRelatedIncidentsResponse**](../Model/ListRelatedIncidentsResponse.md)

### Authorization

[accessToken](../../README.md#accessToken)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
