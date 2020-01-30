# OpenAPI\Server\Api\SecurityApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkTokenPost**](SecurityApiInterface.md#checkTokenPost) | **POST** /checkToken | Checking token
[**loginPost**](SecurityApiInterface.md#loginPost) | **POST** /login | Login a user
[**logoutPost**](SecurityApiInterface.md#logoutPost) | **POST** /logout | Log out a user
[**registerUserPost**](SecurityApiInterface.md#registerUserPost) | **POST** /registerUser | Registering a user
[**registerValidationPost**](SecurityApiInterface.md#registerValidationPost) | **POST** /registerValidation | Validation of user input in the registration process


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.security:
        class: Acme\MyBundle\Api\SecurityApi
        tags:
            - { name: "open_api_server.api", api: "security" }
    # ...
```

## **checkTokenPost**
> checkTokenPost($token, $usernameObject)

Checking token

Endpoint giving information if a given token is valid or not

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
{

    // ...

    /**
     * Implementation of SecurityApiInterface#checkTokenPost
     */
    public function checkTokenPost($token, UsernameObject $usernameObject)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **usernameObject** | [**OpenAPI\Server\Model\UsernameObject**](../Model/UsernameObject.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **loginPost**
> OpenAPI\Server\Model\LoginResponseOK loginPost($login)

Login a user

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
{

    // ...

    /**
     * Implementation of SecurityApiInterface#loginPost
     */
    public function loginPost(Login $login)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login** | [**OpenAPI\Server\Model\Login**](../Model/Login.md)|  |

### Return type

[**OpenAPI\Server\Model\LoginResponseOK**](../Model/LoginResponseOK.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **logoutPost**
> logoutPost($token, $logout)

Log out a user

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
{

    // ...

    /**
     * Implementation of SecurityApiInterface#logoutPost
     */
    public function logoutPost($token, Logout $logout)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **logout** | [**OpenAPI\Server\Model\Logout**](../Model/Logout.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **registerUserPost**
> registerUserPost($register)

Registering a user

Registering a user. For validation purposes look at the /registerValidation API

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
{

    // ...

    /**
     * Implementation of SecurityApiInterface#registerUserPost
     */
    public function registerUserPost(Register $register)
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

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **registerValidationPost**
> registerValidationPost($register)

Validation of user input in the registration process

Registering a user. 0 - 4 possible values can be given.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/SecurityApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\SecurityApiInterface;

class SecurityApi implements SecurityApiInterface
{

    // ...

    /**
     * Implementation of SecurityApiInterface#registerValidationPost
     */
    public function registerValidationPost(Register $register)
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

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

