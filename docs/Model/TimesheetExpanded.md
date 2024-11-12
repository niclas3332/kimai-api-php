# TimesheetExpanded

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**tags** | **string[]** |  | [optional] 
**id** | **int** |  | [optional] 
**begin** | [**\DateTime**](\DateTime.md) | Attention: Accessor MUST be used, otherwise date will be serialized in UTC. | 
**end** | [**\DateTime**](\DateTime.md) | Attention: Accessor MUST be used, otherwise date will be serialized in UTC. | [optional] 
**duration** | **int** |  | [optional] 
**user** | [**\Swagger\Client\Model\User**](User.md) |  | 
**activity** | [**\Swagger\Client\Model\ActivityExpanded**](ActivityExpanded.md) |  | 
**project** | [**\Swagger\Client\Model\ProjectExpanded**](ProjectExpanded.md) |  | 
**description** | **string** |  | [optional] 
**rate** | **float** |  | 
**internal_rate** | **float** |  | [optional] 
**fixed_rate** | **float** |  | [optional] 
**hourly_rate** | **float** |  | [optional] 
**exported** | **bool** |  | 
**billable** | **bool** |  | 
**meta_fields** | [**\Swagger\Client\Model\TimesheetMeta[]**](TimesheetMeta.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

