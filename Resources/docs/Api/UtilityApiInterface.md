# OpenAPI\Server\Api\UtilityApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**healthGet**](UtilityApiInterface.md#healthGet) | **GET** /health | Health Check


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.utility:
        class: Acme\MyBundle\Api\UtilityApi
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
    public function healthGet()
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

