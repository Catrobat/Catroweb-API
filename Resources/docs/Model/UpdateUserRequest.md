# UpdateUserRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | Indicates wether a request should only be verified or executed. | [optional] [default to false]
**email** | **string** | Email of the user. | [optional] 
**username** | **string** | Name of the user | minLength: 3 | maxLength: 180 | [optional] 
**password** | **string** | A secure password | minLength: 6 | maxLength: 4096 | [optional] 
**country** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


