# OpenAPI\Server\Api\ProjectsApiInterface

All URIs are relative to *https://share.catrob.at/app/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**projectProjectIdGet**](ProjectsApiInterface.md#projectProjectIdGet) | **GET** /project/{project_id} | Get the information of a project
[**projectsFeaturedGet**](ProjectsApiInterface.md#projectsFeaturedGet) | **GET** /projects/featured | Get the currently featured projects
[**projectsMostDownloadedGet**](ProjectsApiInterface.md#projectsMostDownloadedGet) | **GET** /projects/mostDownloaded | Get the most downloaded projects
[**projectsMostViewedGet**](ProjectsApiInterface.md#projectsMostViewedGet) | **GET** /projects/mostViewed | Get the most viewed projects
[**projectsPublicUserUserIdGet**](ProjectsApiInterface.md#projectsPublicUserUserIdGet) | **GET** /projects/public/user/{user_id} | Get the public projects of a user, if user is logged in, then there will also be private programs
[**projectsRandomProgramsGet**](ProjectsApiInterface.md#projectsRandomProgramsGet) | **GET** /projects/randomPrograms | Get random projects
[**projectsRecentGet**](ProjectsApiInterface.md#projectsRecentGet) | **GET** /projects/recent | Get the most recent programs
[**projectsSearchGet**](ProjectsApiInterface.md#projectsSearchGet) | **GET** /projects/search | Search for programs associated with a keywords
[**projectsUploadPost**](ProjectsApiInterface.md#projectsUploadPost) | **POST** /projects/upload | Upload a catrobat program
[**projectsUserUserIdGet**](ProjectsApiInterface.md#projectsUserUserIdGet) | **GET** /projects/user/{user_id} | Get the projects of a user, if user is logged in, then there will also be private programs


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
> OpenAPI\Server\Model\Project projectProjectIdGet($projectId)

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
    public function projectProjectIdGet($projectId)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **projectId** | **string**| UUID/ID of any given project |

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsFeaturedGet**
> OpenAPI\Server\Model\FeaturedProject projectsFeaturedGet($platform, $maxVersion, $limit)

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
    public function projectsFeaturedGet($platform = null, $maxVersion = null, $limit = null)
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
 **maxVersion** | **string**|  | [optional]
 **limit** | **int**|  | [optional]

### Return type

[**OpenAPI\Server\Model\FeaturedProject**](../Model/FeaturedProject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsMostDownloadedGet**
> OpenAPI\Server\Model\Project projectsMostDownloadedGet($maxVersion, $limit, $offset)

Get the most downloaded projects

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
     * Implementation of ProjectsApiInterface#projectsMostDownloadedGet
     */
    public function projectsMostDownloadedGet($maxVersion = null, $limit = '20', $offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxVersion** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsMostViewedGet**
> OpenAPI\Server\Model\Project projectsMostViewedGet($maxVersion, $limit, $offset)

Get the most viewed projects

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
     * Implementation of ProjectsApiInterface#projectsMostViewedGet
     */
    public function projectsMostViewedGet($maxVersion = null, $limit = '20', $offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxVersion** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsPublicUserUserIdGet**
> OpenAPI\Server\Model\Project projectsPublicUserUserIdGet($userId, $maxVersion, $limit, $offset)

Get the public projects of a user, if user is logged in, then there will also be private programs

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
     * Implementation of ProjectsApiInterface#projectsPublicUserUserIdGet
     */
    public function projectsPublicUserUserIdGet($userId, $maxVersion = null, $limit = '20', $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| UUID/ID of any given user |
 **maxVersion** | **string**| Only shows project with a smaller version number than max version | [optional]
 **limit** | **int**| How many projects should be shown at maximum | [optional] [default to 20]
 **offset** | **int**| How many projects should be shown at maximum | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsRandomProgramsGet**
> OpenAPI\Server\Model\Project projectsRandomProgramsGet($maxVersion, $limit, $offset)

Get random projects

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
     * Implementation of ProjectsApiInterface#projectsRandomProgramsGet
     */
    public function projectsRandomProgramsGet($maxVersion = null, $limit = '20', $offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxVersion** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsRecentGet**
> OpenAPI\Server\Model\Project projectsRecentGet($maxVersion, $limit, $offset)

Get the most recent programs

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
     * Implementation of ProjectsApiInterface#projectsRecentGet
     */
    public function projectsRecentGet($maxVersion = null, $limit = '20', $offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **maxVersion** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsSearchGet**
> OpenAPI\Server\Model\Project projectsSearchGet($query, $maxVersion, $limit, $offset)

Search for programs associated with a keywords

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
    public function projectsSearchGet($query = null, $maxVersion = null, $limit = '20', $offset = '0')
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query** | **string**|  | [optional]
 **maxVersion** | **string**|  | [optional]
 **limit** | **int**|  | [optional] [default to 20]
 **offset** | **int**|  | [optional] [default to 0]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUploadPost**
> projectsUploadPost($token, $token, $checksum, $file, $flavor)

Upload a catrobat program

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
     * Implementation of ProjectsApiInterface#projectsUploadPost
     */
    public function projectsUploadPost($token, $token = null, $checksum = null, UploadedFile $file = null, $flavor = '''pocketcode''')
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
 **token** | **string**| Upload token of the user | [optional]
 **checksum** | **string**| Checksum of the *.catrobat file | [optional]
 **file** | **UploadedFile****UploadedFile**| *.catrobat file | [optional]
 **flavor** | **string**| The flavor the uploaded program is associated with. | [optional] [default to &#39;&#39;pocketcode&#39;&#39;]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **projectsUserUserIdGet**
> OpenAPI\Server\Model\Project projectsUserUserIdGet($userId, $token, $maxVersion, $limit, $offset)

Get the projects of a user, if user is logged in, then there will also be private programs

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
    public function projectsUserUserIdGet($userId, $token, $maxVersion = null, $limit = '20', $offset = null)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userId** | **string**| UUID/ID of any given user |
 **token** | **string**|  |
 **maxVersion** | **string**| Only shows project with a smaller version number than max version | [optional]
 **limit** | **int**| How many projects should be shown at maximum | [optional] [default to 20]
 **offset** | **int**| How many projects should be shown at maximum | [optional]

### Return type

[**OpenAPI\Server\Model\Project**](../Model/Project.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

