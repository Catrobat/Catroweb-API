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
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.mediaLibrary:
        class: Acme\MyBundle\Api\MediaLibraryApi
        tags:
            - { name: "open_api_server.api", api: "mediaLibrary" }
    # ...
```

## **mediaFileIdGet**
> OpenAPI\Server\Model\MediaFileResponse mediaFileIdGet($id)

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
    public function mediaFileIdGet(int $id)
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

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaFilesGet**
> OpenAPI\Server\Model\MediaFileResponse mediaFilesGet($limit, $offset, $flavor)

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
    public function mediaFilesGet(int $limit = '20', int $offset = '0', string $flavor = null)
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
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaFilesSearchGet**
> OpenAPI\Server\Model\MediaFileResponse mediaFilesSearchGet($query, $flavor, $limit, $offset, $package_name)

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
    public function mediaFilesSearchGet(string $query, string $flavor = null, int $limit = '20', int $offset = '0', string $package_name = null)
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
 **flavor** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **package_name** | **string**| In which package you want to search (for more fine tuned results) | [optional]

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mediaPackageNameGet**
> OpenAPI\Server\Model\MediaFileResponse mediaPackageNameGet($name, $limit, $offset)

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
    public function mediaPackageNameGet(string $name, int $limit = '20', int $offset = '0')
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

### Return type

[**OpenAPI\Server\Model\MediaFileResponse**](../Model/MediaFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

