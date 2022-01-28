# OpenAPI\Server\Api\ProjectsApiInterface

All URIs are relative to *https://share.catrob.at/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectIdDelete**](ProjectsApiInterface.md#projectIdDelete) | **DELETE** /project/{id} | Delete a project -- StatusCode: 501 - Not yet implemented
[**projectIdGet**](ProjectsApiInterface.md#projectIdGet) | **GET** /project/{id} | Get the information of a project
[**projectIdRecommendationsGet**](ProjectsApiInterface.md#projectIdRecommendationsGet) | **GET** /project/{id}/recommendations | Get recommended projects related to the specific project
[**projectIdReportPost**](ProjectsApiInterface.md#projectIdReportPost) | **POST** /project/{id}/report | Report a project -- StatusCode: 501 - Not yet implemented
[**projectsCategoriesGet**](ProjectsApiInterface.md#projectsCategoriesGet) | **GET** /projects/categories | Get default number of projects per category (Most downloaded etc.)
[**projectsFeaturedGet**](ProjectsApiInterface.md#projectsFeaturedGet) | **GET** /projects/featured | Get the currently featured projects
[**projectsGet**](ProjectsApiInterface.md#projectsGet) | **GET** /projects | Get projects
[**projectsPost**](ProjectsApiInterface.md#projectsPost) | **POST** /projects | Upload a catrobat project
[**projectsSearchGet**](ProjectsApiInterface.md#projectsSearchGet) | **GET** /projects/search | Search for projects associated with a keywords
[**projectsUserGet**](ProjectsApiInterface.md#projectsUserGet) | **GET** /projects/user/ | Get the projects of the logged in user
[**projectsUserIdGet**](ProjectsApiInterface.md#projectsUserIdGet) | **GET** /projects/user/{id} | Get the public projects of a given user


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

## **projectIdDelete**
> projectIdDelete($id)

Delete a project -- StatusCode: 501 - Not yet implemented

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
     * Implementation of ProjectsApiInterface#projectIdDelete
     */
    public function projectIdDelete(string $id)
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

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdGet**
> OpenAPI\Server\Model\ProjectResponse projectIdGet($id)

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
     * Implementation of ProjectsApiInterface#projectIdGet
     */
    public function projectIdGet(string $id)
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

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdRecommendationsGet**
> OpenAPI\Server\Model\ProjectResponse projectIdRecommendationsGet($id, $category, $accept_language, $max_version, $limit, $offset, $flavor)

Get recommended projects related to the specific project

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
     * Implementation of ProjectsApiInterface#projectIdRecommendationsGet
     */
    public function projectIdRecommendationsGet(string $id, string $category, string $accept_language = null, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
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
 **category** | **string**| * &#x60;similar&#x60; - Get similar projects to the specific project  * &#x60;also_downloaded&#x60; - Get projects that users who downloaded the specific project also downloaded  * &#x60;more_from_user&#x60; - Get more projects from the owner of the specific project |
 **accept_language** | **string**|  | [optional]
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectIdReportPost**
> projectIdReportPost($id, $project_report_request)

Report a project -- StatusCode: 501 - Not yet implemented

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
     * Implementation of ProjectsApiInterface#projectIdReportPost
     */
    public function projectIdReportPost(string $id, ProjectReportRequest $project_report_request)
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
 **project_report_request** | [**OpenAPI\Server\Model\ProjectReportRequest**](../Model/ProjectReportRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsCategoriesGet**
> OpenAPI\Server\Model\ProjectsCategory projectsCategoriesGet($max_version, $flavor, $accept_language)

Get default number of projects per category (Most downloaded etc.)

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
     * Implementation of ProjectsApiInterface#projectsCategoriesGet
     */
    public function projectsCategoriesGet(string $max_version = null, string $flavor = null, string $accept_language = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **flavor** | **string**|  | [optional]
 **accept_language** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectsCategory**](../Model/ProjectsCategory.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsFeaturedGet**
> OpenAPI\Server\Model\FeaturedProjectResponse projectsFeaturedGet($platform, $max_version, $limit, $offset, $flavor)

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
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\FeaturedProjectResponse**](../Model/FeaturedProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsGet**
> OpenAPI\Server\Model\ProjectResponse projectsGet($category, $accept_language, $max_version, $limit, $offset, $flavor)

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
    public function projectsGet(string $category, string $accept_language = null, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **category** | **string**|  |
 **accept_language** | **string**|  | [optional]
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

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
 **file** | **UploadedFile****UploadedFile**| The *.catrobat project file |
 **accept_language** | **string**|  | [optional]
 **flavor** | **string**| The flavor of this project | [optional]
 **private** | **bool**| Indicates whether a program should be private | [optional]

### Return type

**array**

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsSearchGet**
> OpenAPI\Server\Model\ProjectResponse projectsSearchGet($query, $max_version, $limit, $offset, $flavor)

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
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserGet**
> OpenAPI\Server\Model\ProjectResponse projectsUserGet($max_version, $limit, $offset, $flavor)

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
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

[PandaAuth](../../README.md#PandaAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserIdGet**
> OpenAPI\Server\Model\ProjectResponse projectsUserIdGet($id, $max_version, $limit, $offset, $flavor)

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
     * Implementation of ProjectsApiInterface#projectsUserIdGet
     */
    public function projectsUserIdGet(string $id, string $max_version = null, int $limit = '20', int $offset = '0', string $flavor = null)
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
 **max_version** | **string**| Only shows project with a smaller version number than max version.  &#x60;Warning!&#x60; Current implementation is kinda broken. To ensure correct results use the following format &#39;[0-9].[0-9]{3}&#39; | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]
 **flavor** | **string**|  | [optional]

### Return type

[**OpenAPI\Server\Model\ProjectResponse**](../Model/ProjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

