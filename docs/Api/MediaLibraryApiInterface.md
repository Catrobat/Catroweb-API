# OpenAPI\Server\Api\MediaLibraryApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaFileIdGet**](MediaLibraryApiInterface.md#mediaFileIdGet) | **GET** /media/file/{id} | Get the information of a specific media file
[**mediaFilesGet**](MediaLibraryApiInterface.md#mediaFilesGet) | **GET** /media/files | Get *all* content of the media library.
[**mediaFilesSearchGet**](MediaLibraryApiInterface.md#mediaFilesSearchGet) | **GET** /media/files/search | Search for mediafiles associated with keywords
[**mediaPackageNameGet**](MediaLibraryApiInterface.md#mediaPackageNameGet) | **GET** /media/package/{name} | Get media-library asstes of a named package


## Service Declaration
```yaml
# config/services.yaml
services:
    # ...
    Acme\MyBundle\Api\MediaLibraryApi:
        tags:
            - { name: "open_api_server.api", api: "mediaLibrary" }
    # ...
```

## **mediaFileIdGet**
> OpenAPI\Server\Model\MediaFileResponse mediaFileIdGet($id, $attributes)

Get the information of a specific media file

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MediaLibraryApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MediaLibraryApiInterface;

class MediaLibraryApi implements MediaLibraryApiInterface
{

    // ...

    /**
     * Implementation of MediaLibraryApiInterface#mediaFileIdGet
     */
    public function mediaFileIdGet(int $id, string $attributes, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of any given media file |
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaFilesGet**
> OpenAPI\Server\Model\MediaFileResponse mediaFilesGet($limit, $offset, $attributes, $flavor)

Get *all* content of the media library.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MediaLibraryApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MediaLibraryApiInterface;

class MediaLibraryApi implements MediaLibraryApiInterface
{

    // ...

    /**
     * Implementation of MediaLibraryApiInterface#mediaFilesGet
     */
    public function mediaFilesGet(int $limit, int $offset, string $attributes, string $flavor, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaFilesSearchGet**
> OpenAPI\Server\Model\MediaFileResponse mediaFilesSearchGet($query, $limit, $offset, $attributes, $flavor, $package_name)

Search for mediafiles associated with keywords

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MediaLibraryApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MediaLibraryApiInterface;

class MediaLibraryApi implements MediaLibraryApiInterface
{

    // ...

    /**
     * Implementation of MediaLibraryApiInterface#mediaFilesSearchGet
     */
    public function mediaFilesSearchGet(string $query, int $limit, int $offset, string $attributes, string $flavor, string $package_name, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  |
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]
 **flavor** | **string**|  | [optional] [default to &#39;&#39;]
 **package_name** | **string**| In which package you want to search (for more fine tuned results) | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaPackageNameGet**
> OpenAPI\Server\Model\MediaFileResponse mediaPackageNameGet($name, $limit, $offset, $attributes)

Get media-library asstes of a named package

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MediaLibraryApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\MediaLibraryApiInterface;

class MediaLibraryApi implements MediaLibraryApiInterface
{

    // ...

    /**
     * Implementation of MediaLibraryApiInterface#mediaPackageNameGet
     */
    public function mediaPackageNameGet(string $name, int $limit, int $offset, string $attributes, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the package |
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **attributes** | **string**|  | [optional] [default to &#39;&#39;]

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

