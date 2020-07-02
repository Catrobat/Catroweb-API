# OpenAPI\Server\Api\ProjectsApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectProjectIdGet**](ProjectsApiInterface.md#projectProjectIdGet) | **GET** /project/{project_id} | Get the information of a project
[**projectsFeaturedGet**](ProjectsApiInterface.md#projectsFeaturedGet) | **GET** /projects/featured | Get the currently featured projects
[**projectsGet**](ProjectsApiInterface.md#projectsGet) | **GET** /projects | Get projects
[**projectsPost**](ProjectsApiInterface.md#projectsPost) | **POST** /projects | Upload a catrobat project
[**projectsSearchGet**](ProjectsApiInterface.md#projectsSearchGet) | **GET** /projects/search | Search for projects associated with a keywords
[**projectsUserGet**](ProjectsApiInterface.md#projectsUserGet) | **GET** /projects/user/ | Get the projects of the logged in user
[**projectsUserUserIdGet**](ProjectsApiInterface.md#projectsUserUserIdGet) | **GET** /projects/user/{user_id} | Get the public projects of a given user


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.projects:
        class: Acme\MyBundle\Api\ProjectsApi
        tags:
            - { name: "open_api_server.api", api: "projects" }
    # ...
```

## **projectProjectIdGet**
> OpenAPI\Server\Model\Project projectProjectIdGet($project_id)

Get the information of a project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectProjectIdGet
     */
    public function projectProjectIdGet(string $project_id)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_id** | **string**| UUID/ID of any given project |

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsFeaturedGet**
> OpenAPI\Server\Model\FeaturedProject projectsFeaturedGet($platform, $max_version, $limit, $offset, $flavor)

Get the currently featured projects

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsFeaturedGet
     */
    public function projectsFeaturedGet(string $platform = null, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **platform** | **string**|  | [optional]
 **max_version** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\FeaturedProject**](../Model/FeaturedProject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsGet**
> OpenAPI\Server\Model\Project projectsGet($project_type, $accept_language, $max_version, $limit, $offset, $flavor)

Get projects

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsGet
     */
    public function projectsGet(string $project_type, string $accept_language = null, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **project_type** | **string**|  |
 **accept_language** | **string**|  | [optional]
 **max_version** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsPost**
> array projectsPost($checksum, $file, $accept_language, $flavor, $private)

Upload a catrobat project

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsPost
     */
    public function projectsPost(string $checksum, UploadedFile $file, string $accept_language = null, string $flavor = null, bool $private = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **checksum** | **string**| Checksum of the *.catrobat file |
 **file** | **UploadedFile****UploadedFile**| *.catrobat file |
 **accept_language** | **string**|  | [optional]
 **flavor** | **string**| Available flavors | [optional]
 **private** | **bool**| Indicates whether a program should be private from the start. | [optional]

### Return type

**array**

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsSearchGet**
> OpenAPI\Server\Model\Project projectsSearchGet($query, $max_version, $limit, $offset, $flavor)

Search for projects associated with a keywords

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsSearchGet
     */
    public function projectsSearchGet(string $query, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
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
 **max_version** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserGet**
> OpenAPI\Server\Model\Project projectsUserGet($max_version, $limit, $offset, $flavor)

Get the projects of the logged in user

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsUserGet
     */
    public function projectsUserGet(string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_version** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserUserIdGet**
> OpenAPI\Server\Model\Project projectsUserUserIdGet($user_id, $max_version, $limit, $offset, $flavor)

Get the public projects of a given user

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ProjectsApiInterface.php

namespace Acme\MyBundle\Api;

use OpenAPI\Server\Api\ProjectsApiInterface;

class ProjectsApi implements ProjectsApiInterface
{

    // ...

    /**
     * Implementation of ProjectsApiInterface#projectsUserUserIdGet
     */
    public function projectsUserUserIdGet(string $user_id, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**| UUID/ID of any given user |
 **max_version** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

