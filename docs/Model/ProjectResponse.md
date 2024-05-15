# ProjectResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The unique identifier of the project | [optional] 
**name** | **string** | The name of the project. minLength: 1 | maxLength: 255 | [optional] 
**author** | **string** | The name of the projects&#39; author | [optional] 
**description** | **string** | A description of the project. | [optional] 
**credits** | **string** | Credits and notes for the project. E.g., credits for using ideas, scripts or artwork from other people. | [optional] 
**version** | **string** | The catrobat version that was used to create this project. | [optional] 
**views** | **int** | The projects&#39; count of views | [optional] 
**download** | **int** | The projects&#39; count of downloads. Deprecated. Use downloads | [optional] 
**downloads** | **int** | The projects&#39; count of downloads | [optional] 
**reactions** | **int** | The projects&#39; count of reactions | [optional] 
**comments** | **int** | The projects&#39; count of comments | [optional] 
**private** | **bool** | Whether a project is publicly visible (false) or only via direct link (true). | [optional] 
**flavor** | **string** |  | [optional] 
**tags** | **string** | Tags allow projects to be categorized by their creators | [optional] 
**uploaded** | **int** | The time of the upload. | [optional] 
**uploaded_string** | **string** | A localised text interpretation of the uploaded timestamp | [optional] 
**screenshot_large** | **string** |  | [optional] 
**screenshot_small** | **string** |  | [optional] 
**project_url** | **string** | The url to the project on our official share community platform | [optional] 
**download_url** | **string** | The url to GET the catrobat file of this project | [optional] 
**filesize** | **float** | The filesize of the catrobat file in megabytes | [optional] 
**not_for_kids** | **int** | Indicates whether a project is suitable for kids or not (0 &#x3D; safe for kids, 1 &#x3D; not safe for kids, 2 &#x3D; not safe for kids set by moderator) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


