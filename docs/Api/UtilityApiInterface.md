# OpenAPI\Server\Api\UtilityApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**healthGet**](UtilityApiInterface.md#healthGet) | **GET** /health | Health Check
[**surveyLangCodeGet**](UtilityApiInterface.md#surveyLangCodeGet) | **GET** /survey/{lang_code} | Get survey link for given language code.


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\UtilityApi:
        tags:
            - { name: "open_api_server.api", api: "utility" }
    # ...
```

## **healthGet**
> healthGet()

Health Check

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UtilityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UtilityApiInterface;

class UtilityApi implements UtilityApiInterface
{

    // ...

    /**
     * Implementation of UtilityApiInterface#healthGet
     */
    public function healthGet(int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **surveyLangCodeGet**
> OpenAPI\Server\Model\SurveyResponse surveyLangCodeGet($lang_code, $flavor, $platform)

Get survey link for given language code.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UtilityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UtilityApiInterface;

class UtilityApi implements UtilityApiInterface
{

    // ...

    /**
     * Implementation of UtilityApiInterface#surveyLangCodeGet
     */
    public function surveyLangCodeGet(string $lang_code, string $flavor, string $platform, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lang_code** | **string**| 2 letter Language-Code is based on ISO693-1 (e.g. German &#x3D; de, English &#x3D; en, Russian &#x3D; ru) |
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]
 **platform** | **string**| Indication for which platform the response should be optimized (ios, android) | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\SurveyResponse**](../Model/SurveyResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

