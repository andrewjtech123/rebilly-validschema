# swagger_client.DeleteApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_ordersid_json_delete**](DeleteApi.md#admin_draft_ordersid_json_delete) | **DELETE** /admin/draft_orders/#{id}.json | 


# **admin_draft_ordersid_json_delete**
> DraftOrder admin_draft_ordersid_json_delete(id)



Remove a draft order.

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.DeleteApi()
id = 789 # int | draft order id

try: 
    api_response = api_instance.admin_draft_ordersid_json_delete(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling DeleteApi->admin_draft_ordersid_json_delete: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| draft order id | 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

