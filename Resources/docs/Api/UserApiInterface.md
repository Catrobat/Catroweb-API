# OpenAPI\Server\Api\UserApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userDelete**](UserApiInterface.md#userDelete) | **DELETE** /user | Delete user account
[**userGet**](UserApiInterface.md#userGet) | **GET** /user | Get your private user data
[**userIdGet**](UserApiInterface.md#userIdGet) | **GET** /user/{id} | Get public user data
[**userPost**](UserApiInterface.md#userPost) | **POST** /user | Register
[**userPut**](UserApiInterface.md#userPut) | **PUT** /user | Update User
[**userResetPasswordPost**](UserApiInterface.md#userResetPasswordPost) | **POST** /user/reset-password | Request email to reset password
[**usersSearchGet**](UserApiInterface.md#usersSearchGet) | **GET** /users/search | Search for users


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\UserApi:
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
    public function userDelete(, int &$responseCode, array &$responseHeaders): void
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
> OpenAPI\Server\Model\ExtendedUserDataResponse userGet()

Get your private user data

Get your private user data. Additionally to the public user data, this responses contains all your private data like settings.

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
    public function userGet(, int &$responseCode, array &$responseHeaders): ?object
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**OpenAPI\Server\Model\ExtendedUserDataResponse**](../Model/ExtendedUserDataResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userIdGet**
> OpenAPI\Server\Model\BasicUserDataResponse userIdGet($id)

Get public user data

Get all the public data of a user

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
    public function userIdGet(string $id, int &$responseCode, array &$responseHeaders): ?object
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

### Return type

[**OpenAPI\Server\Model\BasicUserDataResponse**](../Model/BasicUserDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userPost**
> OpenAPI\Server\Model\JWTResponse userPost($register_request, $accept_language)

Register

Register a user. For pre-validation use the dry-run option. Using Dry run the request is validated but no object is created on the server.

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
    public function userPost(RegisterRequest $register_request, string $accept_language, int &$responseCode, array &$responseHeaders): ?object
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **register_request** | [**OpenAPI\Server\Model\RegisterRequest**](../Model/RegisterRequest.md)|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userPut**
> array userPut($update_user_request, $accept_language)

Update User

Update your user account. All attributes are optional. For example you can update only the username. Or you can update multiple attributes at once. E.g. username + email.

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
    public function userPut(UpdateUserRequest $update_user_request, string $accept_language, int &$responseCode, array &$responseHeaders): ?object
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_user_request** | [**OpenAPI\Server\Model\UpdateUserRequest**](../Model/UpdateUserRequest.md)|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

**array**

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **userResetPasswordPost**
> array userResetPasswordPost($reset_password_request, $accept_language)

Request email to reset password

If an account with the provided email exists, an email to reset the password will be sent to the user. The email contains a link to reset the password. Note&#58; This link is only valid for a limited amount of time.

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
     * Implementation of UserApiInterface#userResetPasswordPost
     */
    public function userResetPasswordPost(ResetPasswordRequest $reset_password_request, string $accept_language, int &$responseCode, array &$responseHeaders): ?object
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reset_password_request** | [**OpenAPI\Server\Model\ResetPasswordRequest**](../Model/ResetPasswordRequest.md)|  |
 **accept_language** | **string**|  | [optional] [default to &#39;en&#39;]

### Return type

**array**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **usersSearchGet**
> OpenAPI\Server\Model\BasicUserDataResponse usersSearchGet($query, $limit, $offset, $attributes)

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
    public function usersSearchGet(string $query, int $limit, int $offset, string $attributes, int &$responseCode, array &$responseHeaders): ?iterable
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

### Return type

[**OpenAPI\Server\Model\BasicUserDataResponse**](../Model/BasicUserDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

