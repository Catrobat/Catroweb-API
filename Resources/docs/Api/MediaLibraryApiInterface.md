# OpenAPI\Server\Api\MediaLibraryApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
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

## **mediaPackagePackageNameGet**
> OpenAPI\Server\Model\Package mediaPackagePackageNameGet($package_name)

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
    public function mediaPackagePackageNameGet(string $package_name)
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

### Return type

[**OpenAPI\Server\Model\Package**](../Model/Package.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

