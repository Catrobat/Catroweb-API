# UpdateUserRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dry_run** | **bool** | Indicates if a request should only be verified or executed | [optional] [default to false]
**email** | **string** | Email of the user | [optional] 
**username** | **string** | Name of the user | minLength: 3 | maxLength: 180 | [optional] 
**password** | **string** | A secure password | minLength: 6 | maxLength: 4096 | [optional] 
**picture** | **string** | The profile picture of the user in data URI scheme. | [optional] 
**about** | **string** | An introduction of the user. | [optional] 
**currently_working_on** | **string** | A short description about the project the user is currently working on. | [optional] 
**current_password** | **string** | The current password of the user. Required for changing the password. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


