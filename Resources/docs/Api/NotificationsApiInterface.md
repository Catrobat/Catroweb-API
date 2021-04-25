# OpenAPI\Server\Api\NotificationsApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationIdReadPut**](NotificationsApiInterface.md#notificationIdReadPut) | **PUT** /notification/{id}/read | Mark specified notification as read - StatusCode: 501 - Not yet implemented
[**notificationsCountGet**](NotificationsApiInterface.md#notificationsCountGet) | **GET** /notifications/count | Count the number of unseen notifications -- StatusCode: 501 - Not yet implemented
[**notificationsGet**](NotificationsApiInterface.md#notificationsGet) | **GET** /notifications | Get user notifications -- StatusCode: 501 - Not yet implemented
[**notificationsReadPut**](NotificationsApiInterface.md#notificationsReadPut) | **PUT** /notifications/read | Mark all notifications as read -- StatusCode: 501 - Not yet implemented


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.notifications:
        class: Acme\MyBundle\Api\NotificationsApi
        tags:
            - { name: "open_api_server.api", api: "notifications" }
    # ...
```

## **notificationIdReadPut**
> notificationIdReadPut($id, $accept_language)

Mark specified notification as read - StatusCode: 501 - Not yet implemented

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NotificationsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\NotificationsApiInterface;

class NotificationsApi implements NotificationsApiInterface
{

    // ...

    /**
     * Implementation of NotificationsApiInterface#notificationIdReadPut
     */
    public function notificationIdReadPut(int $id, string $accept_language = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | [default to 0]
 **accept_language** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **notificationsCountGet**
> OpenAPI\Server\Model\NotificationsCountResponse notificationsCountGet()

Count the number of unseen notifications -- StatusCode: 501 - Not yet implemented

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NotificationsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\NotificationsApiInterface;

class NotificationsApi implements NotificationsApiInterface
{

    // ...

    /**
     * Implementation of NotificationsApiInterface#notificationsCountGet
     */
    public function notificationsCountGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\NotificationsCountResponse**](../Model/NotificationsCountResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **notificationsGet**
> OpenAPI\Server\Model\NotificationResponse notificationsGet($accept_language, $limit, $offset, $type)

Get user notifications -- StatusCode: 501 - Not yet implemented

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NotificationsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\NotificationsApiInterface;

class NotificationsApi implements NotificationsApiInterface
{

    // ...

    /**
     * Implementation of NotificationsApiInterface#notificationsGet
     */
    public function notificationsGet(string $accept_language = null, int $limit = '20', int $offset = '0', NotificationsType $type = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **type** | [**OpenAPI\Server\Model\NotificationsType**](../Model/.md)|  | [optional]

### Return type

[**OpenAPI\Server\Model\NotificationResponse**](../Model/NotificationResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **notificationsReadPut**
> notificationsReadPut()

Mark all notifications as read -- StatusCode: 501 - Not yet implemented

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NotificationsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\NotificationsApiInterface;

class NotificationsApi implements NotificationsApiInterface
{

    // ...

    /**
     * Implementation of NotificationsApiInterface#notificationsReadPut
     */
    public function notificationsReadPut()
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

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

