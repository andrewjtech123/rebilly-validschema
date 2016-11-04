# Shopify.DefaultApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_ordersid_checkout_json_post**](DefaultApi.md#admin_draft_ordersid_checkout_json_post) | **POST** /admin/draft_orders/#{id}/checkout.json | Create or retrieve existing checkout


# **admin_draft_ordersid_checkout_json_post**
> Checkout admin_draft_ordersid_checkout_json_post(id2, id=id)

Create or retrieve existing checkout

To be used in Checkout API. Requires checkout scope

### Example 
```python
import time
import Shopify
from Shopify.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = Shopify.DefaultApi()
id2 = 56 # int | 
id = 'id_example' # str | id of the draft order (optional)

try: 
    # Create or retrieve existing checkout
    api_response = api_instance.admin_draft_ordersid_checkout_json_post(id2, id=id)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling DefaultApi->admin_draft_ordersid_checkout_json_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **int**|  | 
 **id** | **str**| id of the draft order | [optional] 

### Return type

[**Checkout**](Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

