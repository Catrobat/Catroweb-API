# OpenAPI\Server\Api\UserApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userDelete**](UserApiInterface.md#userDelete) | **DELETE** /user | Delete user account
[**userGet**](UserApiInterface.md#userGet) | **GET** /user | Get your private user data
[**userIdGet**](UserApiInterface.md#userIdGet) | **GET** /user/{id} | Get the public data of a user
[**userPost**](UserApiInterface.md#userPost) | **POST** /user | Register
[**userPut**](UserApiInterface.md#userPut) | **PUT** /user | Update User
[**usersSearchGet**](UserApiInterface.md#usersSearchGet) | **GET** /users/search | Search for users


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.user:
        class: Acme\MyBundle\Api\UserApi
        tags:
            - { name: "open_api_server.api", api: "user" }
    # ...
```

## **userDelete**
> userDelete()

Delete user account

Delete your user account. But be warned, there is no way to restore the user data!

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#userDelete
     */
    public function userDelete()
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

## **userGet**
> OpenAPI\Server\Model\UserPrivateGet userGet()

Get your private user data

Get your private user data. Additionally to the public user data, this response contains all your private settings.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#userGet
     */
    public function userGet()
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\UserPrivateGet**](../Model/UserPrivateGet.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userIdGet**
> OpenAPI\Server\Model\UserPublicGet userIdGet($id)

Get the public data of a user

Get the public data of a user.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#userIdGet
     */
    public function userIdGet(string $id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| UUID/ID of any given user |

### Return type

[**OpenAPI\Server\Model\UserPublicGet**](../Model/UserPublicGet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userPost**
> array userPost($register, $accept_language)

Register

Register a user. For pre-validation you might wanna use the dry-run option.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#userPost
     */
    public function userPost(Register $register, string $accept_language = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register** | [**OpenAPI\Server\Model\Register**](../Model/Register.md)|  |
 **accept_language** | **string**|  | [optional]

### Return type

**array**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userPut**
> userPut($update_user, $accept_language)

Update User

Update your user account. You can change all members at once, or one by one with different calls.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#userPut
     */
    public function userPut(UpdateUser $update_user, string $accept_language = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_user** | [**OpenAPI\Server\Model\UpdateUser**](../Model/UpdateUser.md)|  |
 **accept_language** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **usersSearchGet**
> OpenAPI\Server\Model\UserPublicGet usersSearchGet($query, $limit, $offset)

Search for users

Search for users associated by keywords.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/UserApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\UserApiInterface;

class UserApi implements UserApiInterface
{

    // ...

    /**
     * Implementation of UserApiInterface#usersSearchGet
     */
    public function usersSearchGet(string $query, int $limit = '20', int $offset = '0')
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

### Return type

[**OpenAPI\Server\Model\UserPublicGet**](../Model/UserPublicGet.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

