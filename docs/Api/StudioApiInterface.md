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
> OpenAPI\Server\Model\StudioResponse studioIdPut($id, $accept_language, $name, $description, $is_public, $enable_comments, $image_file)

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
    public function studioIdPut(string $id, string $accept_language, ?string $name, ?string $description, ?bool $is_public, ?bool $enable_comments, ?UploadedFile $image_file, int &$responseCode, array &$responseHeaders): array|object|null
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
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]
 **name** | **string**| The name of the studio (character: min 3, max 180) | [optional]
 **description** | **string**| A small description about the Studio (character: min 1, max 3000) | [optional]
 **is_public** | **bool**| This flag sets the studios&#39; visibility to public or private | [optional]
 **enable_comments** | **bool**| This flag enables or disabled the possibility to add comments to the studio | [optional]
 **image_file** | **UploadedFile****UploadedFile**| Cover image; Size limit 1MB; Supported extensions are jpeg, png, webp; | [optional]

### Return type

[**OpenAPI\Server\Model\StudioResponse**](../Model/StudioResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **studioPost**
> OpenAPI\Server\Model\StudioResponse studioPost($accept_language, $name, $description, $is_public, $enable_comments, $image_file)

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
    public function studioPost(string $accept_language, ?string $name, ?string $description, bool $is_public, bool $enable_comments, ?UploadedFile $image_file, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]
 **name** | **string**| The name of the studio (character: min 3, max 180) | [optional]
 **description** | **string**| A small description about the Studio (character: min 1, max 3000) | [optional]
 **is_public** | **bool**| This flag sets the studios&#39; visibility to public or private | [optional] [default to true]
 **enable_comments** | **bool**| This flag enables or disabled the possibility to add comments to the studio | [optional] [default to true]
 **image_file** | **UploadedFile****UploadedFile**| Cover image; Size limit 1MB; Supported extensions are jpeg, png, webp; | [optional]

### Return type

[**OpenAPI\Server\Model\StudioResponse**](../Model/StudioResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

