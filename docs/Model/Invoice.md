# Invoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**invoice_number** | **string** |  | 
**comment** | **string** |  | [optional] 
**customer** | [**OneOfInvoiceCustomer**](OneOfInvoiceCustomer.md) |  | 
**user** | [**OneOfInvoiceUser**](OneOfInvoiceUser.md) |  | 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**total** | **float** |  | 
**tax** | **float** |  | 
**currency** | **string** |  | 
**due_days** | **int** |  | 
**vat** | **float** |  | 
**status** | **string** |  | 
**payment_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**meta_fields** | [**\Swagger\Client\Model\InvoiceMeta[]**](InvoiceMeta.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

