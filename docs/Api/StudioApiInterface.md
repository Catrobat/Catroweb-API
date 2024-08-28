# OpenAPI\Server\Api\StudioApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**studioIdPut**](StudioApiInterface.md#studioIdPut) | **PUT** /studio/{id} | Update a Studio
[**studioPost**](StudioApiInterface.md#studioPost) | **POST** /studio | Create a new Studio


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\StudioApi:
        tags:
            - { name: "open_api_server.api", api: "studio" }
    # ...
```

## **studioIdPut**
> OpenAPI\Server\Model\StudioResponse studioIdPut($id, $studio_update_request, $accept_language)

Update a Studio

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StudioApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\StudioApiInterface;

class StudioApi implements StudioApiInterface
{

    // ...

    /**
     * Implementation of StudioApiInterface#studioIdPut
     */
    public function studioIdPut(string $id, StudioUpdateRequest $studio_update_request, string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **studio_update_request** | [**OpenAPI\Server\Model\StudioUpdateRequest**](../Model/StudioUpdateRequest.md)|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

[**OpenAPI\Server\Model\StudioResponse**](../Model/StudioResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **studioPost**
> OpenAPI\Server\Model\StudioResponse studioPost($studio_update_request, $accept_language)

Create a new Studio

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/StudioApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\StudioApiInterface;

class StudioApi implements StudioApiInterface
{

    // ...

    /**
     * Implementation of StudioApiInterface#studioPost
     */
    public function studioPost(StudioUpdateRequest $studio_update_request, string $accept_language, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **studio_update_request** | [**OpenAPI\Server\Model\StudioUpdateRequest**](../Model/StudioUpdateRequest.md)|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

[**OpenAPI\Server\Model\StudioResponse**](../Model/StudioResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

