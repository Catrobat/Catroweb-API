# OpenAPI\Server\Api\MediaLibraryApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaFileSearchGet**](MediaLibraryApiInterface.md#mediaFileSearchGet) | **GET** /media/file/search | Search for mediafiles associated with keywords
[**mediaPackagePackageNameGet**](MediaLibraryApiInterface.md#mediaPackagePackageNameGet) | **GET** /media/package/{package_name} | Get media-library asstes of a named package


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.mediaLibrary:
        class: Acme\MyBundle\Api\MediaLibraryApi
        tags:
            - { name: "open_api_server.api", api: "mediaLibrary" }
    # ...
```

## **mediaFileSearchGet**
> OpenAPI\Server\Model\MediaFiles mediaFileSearchGet($query_string, $flavor, $limit, $offset, $package_name)

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
     * Implementation of MediaLibraryApiInterface#mediaFileSearchGet
     */
    public function mediaFileSearchGet(string $query_string, string $flavor = null, int $limit = '20', int $offset = '0', string $package_name = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_string** | **string**|  |
 **flavor** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **package_name** | **string**| In which package you want to search (for more fine tuned results) | [optional]

### Return type

[**OpenAPI\Server\Model\MediaFiles**](../Model/MediaFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaPackagePackageNameGet**
> OpenAPI\Server\Model\MediaFiles mediaPackagePackageNameGet($package_name, $limit, $offset)

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
     * Implementation of MediaLibraryApiInterface#mediaPackagePackageNameGet
     */
    public function mediaPackagePackageNameGet(string $package_name, int $limit = '20', int $offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_name** | **string**| Name of the package |
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\MediaFiles**](../Model/MediaFiles.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

