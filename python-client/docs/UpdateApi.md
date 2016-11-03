# swagger_client.UpdateApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_ordersid_complete_json_put**](UpdateApi.md#admin_draft_ordersid_complete_json_put) | **PUT** /admin/draft_orders/#{id}/complete.json | 
[**admin_draft_ordersid_json_put**](UpdateApi.md#admin_draft_ordersid_json_put) | **PUT** /admin/draft_orders/#{id}.json | Modify draft order


# **admin_draft_ordersid_complete_json_put**
> DraftOrder admin_draft_ordersid_complete_json_put(id, payment_gateway_id=payment_gateway_id, payment_pending=payment_pending)



Mark a draft order as paid or pending payment

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.UpdateApi()
id = 56 # int | 
payment_gateway_id = 789 # int | Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway. (optional)
payment_pending = true # bool | true/false (optional)

try: 
    api_response = api_instance.admin_draft_ordersid_complete_json_put(id, payment_gateway_id=payment_gateway_id, payment_pending=payment_pending)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UpdateApi->admin_draft_ordersid_complete_json_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **payment_gateway_id** | **int**| Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway. | [optional] 
 **payment_pending** | **bool**| true/false | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **admin_draft_ordersid_json_put**
> DraftOrder admin_draft_ordersid_json_put(id, draft_order=draft_order)

Modify draft order

You can modify an existing draft order. ### Example   Only showing the parameters needed to select a particular shipping rate as returned from     `GET /admin/draft_orders/#{id}/shipping_rates`       draft_order: {       shipping_line: {         handle: ,         phone:       }     } 

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.UpdateApi()
id = 56 # int | draft order id
draft_order = swagger_client.DraftOrder() # DraftOrder | the draft order to modify. (optional)

try: 
    # Modify draft order
    api_response = api_instance.admin_draft_ordersid_json_put(id, draft_order=draft_order)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling UpdateApi->admin_draft_ordersid_json_put: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| draft order id | 
 **draft_order** | [**DraftOrder**](DraftOrder.md)| the draft order to modify. | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

