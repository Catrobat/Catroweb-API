# OpenAPI\Server\Api\AuthenticationApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticationDelete**](AuthenticationApiInterface.md#authenticationDelete) | **DELETE** /authentication | Expires refresh token
[**authenticationGet**](AuthenticationApiInterface.md#authenticationGet) | **GET** /authentication | Check token
[**authenticationOauthPost**](AuthenticationApiInterface.md#authenticationOauthPost) | **POST** /authentication/oauth | OAuth Login
[**authenticationPost**](AuthenticationApiInterface.md#authenticationPost) | **POST** /authentication | Login
[**authenticationRefreshPost**](AuthenticationApiInterface.md#authenticationRefreshPost) | **POST** /authentication/refresh | Refresh token
[**authenticationUpgradePost**](AuthenticationApiInterface.md#authenticationUpgradePost) | **POST** /authentication/upgrade | Upgrade a deprecated token to JWT


## Service Declaration
```yaml
# config/services.yml
services:
    # ...
    Acme\MyBundle\Api\AuthenticationApi:
        tags:
            - { name: "open_api_server.api", api: "authentication" }
    # ...
```

## **authenticationDelete**
> authenticationDelete($x_refresh)

Expires refresh token

Sets refresh token to expired

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationDelete
     */
    public function authenticationDelete(string $x_refresh, int &$responseCode, array &$responseHeaders): void
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_refresh** | **string**| Refresh Token |

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationGet**
> authenticationGet()

Check token

Checks if a token is valid or expired

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationGet
     */
    public function authenticationGet(, int &$responseCode, array &$responseHeaders): void
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

## **authenticationOauthPost**
> OpenAPI\Server\Model\JWTResponse authenticationOauthPost($o_auth_login_request)

OAuth Login

Returns an JWT token which provides authorization

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationOauthPost
     */
    public function authenticationOauthPost(OAuthLoginRequest $o_auth_login_request, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **o_auth_login_request** | [**OpenAPI\Server\Model\OAuthLoginRequest**](../Model/OAuthLoginRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationPost**
> OpenAPI\Server\Model\JWTResponse authenticationPost($login_request)

Login

Returns an JWT token which provides authorization for a limited time

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationPost
     */
    public function authenticationPost(LoginRequest $login_request, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **login_request** | [**OpenAPI\Server\Model\LoginRequest**](../Model/LoginRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationRefreshPost**
> OpenAPI\Server\Model\JWTResponse authenticationRefreshPost($refresh_request)

Refresh token

Returns a new JWT token with help of the refresh token

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationRefreshPost
     */
    public function authenticationRefreshPost(RefreshRequest $refresh_request, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **refresh_request** | [**OpenAPI\Server\Model\RefreshRequest**](../Model/RefreshRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **authenticationUpgradePost**
> OpenAPI\Server\Model\JWTResponse authenticationUpgradePost($upgrade_token_request)

Upgrade a deprecated token to JWT

Returns a new JWT token with help of a deprecated upload_token. This allows users to stay signed in apps during the transition to the new API.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AuthenticationApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\AuthenticationApiInterface;

class AuthenticationApi implements AuthenticationApiInterface
{

    // ...

    /**
     * Implementation of AuthenticationApiInterface#authenticationUpgradePost
     */
    public function authenticationUpgradePost(UpgradeTokenRequest $upgrade_token_request, int &$responseCode, array &$responseHeaders): array|object|null
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **upgrade_token_request** | [**OpenAPI\Server\Model\UpgradeTokenRequest**](../Model/UpgradeTokenRequest.md)|  |

### Return type

[**OpenAPI\Server\Model\JWTResponse**](../Model/JWTResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

