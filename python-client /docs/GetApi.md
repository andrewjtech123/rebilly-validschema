# Shopify.GetApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_orders_count_json_get**](GetApi.md#admin_draft_orders_count_json_get) | **GET** /admin/draft_orders/count.json | 
[**admin_draft_orders_json_get**](GetApi.md#admin_draft_orders_json_get) | **GET** /admin/draft_orders.json | 
[**admin_draft_ordersid_json_get**](GetApi.md#admin_draft_ordersid_json_get) | **GET** /admin/draft_orders/#{id}.json | 


# **admin_draft_orders_count_json_get**
> int admin_draft_orders_count_json_get()



Return count of draft orders

### Example 
```python
import time
import Shopify
from Shopify.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = Shopify.GetApi()

try: 
    api_response = api_instance.admin_draft_orders_count_json_get()
    pprint(api_response)
except ApiException as e:
    print "Exception when calling GetApi->admin_draft_orders_count_json_get: %s\n" % e
```

### Parameters
This endpoint does not need any parameter.

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **admin_draft_orders_json_get**
> DraftOrder admin_draft_orders_json_get(fields=fields, limit=limit, page=page)



Retrieve draft orders

### Example 
```python
import time
import Shopify
from Shopify.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = Shopify.GetApi()
fields = 'fields_example' # str | Comma-separated list of fields to include in the response (optional)
limit = 789 # int | Page size (optional)
page = 789 # int | Page to show (optional)

try: 
    api_response = api_instance.admin_draft_orders_json_get(fields=fields, limit=limit, page=page)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling GetApi->admin_draft_orders_json_get: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **str**| Comma-separated list of fields to include in the response | [optional] 
 **limit** | **int**| Page size | [optional] 
 **page** | **int**| Page to show | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **admin_draft_ordersid_json_get**
> DraftOrder admin_draft_ordersid_json_get(id)



Receive a single draft order

### Example 
```python
import time
import Shopify
from Shopify.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = Shopify.GetApi()
id = 789 # int | draft order id

try: 
    api_response = api_instance.admin_draft_ordersid_json_get(id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling GetApi->admin_draft_ordersid_json_get: %s\n" % e
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

