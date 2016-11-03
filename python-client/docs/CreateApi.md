# swagger_client.CreateApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_orders_json_post**](CreateApi.md#admin_draft_orders_json_post) | **POST** /admin/draft_orders.json | Create a draft order
[**admin_draft_ordersid_send_invoice_json_post**](CreateApi.md#admin_draft_ordersid_send_invoice_json_post) | **POST** /admin/draft_orders/#{id}/send_invoice.json | Send an invoice


# **admin_draft_orders_json_post**
> DraftOrder admin_draft_orders_json_post(draftorder)

Create a draft order

Create a draft order   ### About line items   There are two ways to add a line item:    * Supply a `variant_id`, `quantity` and (if applicable) `discount`   * Add a custom line item by supplying `title`, `price`, `taxable` and `quantity` (at a minimum). The array of line items on a draft order must not contain a `variant_id` more than once. The data copied over from a variant upon creation of a line item is never subsequently updated.    

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CreateApi()
draftorder = swagger_client.DraftOrder() # DraftOrder | The draft order to create.

try: 
    # Create a draft order
    api_response = api_instance.admin_draft_orders_json_post(draftorder)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CreateApi->admin_draft_orders_json_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **draftorder** | [**DraftOrder**](DraftOrder.md)| The draft order to create. | 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

# **admin_draft_ordersid_send_invoice_json_post**
> DraftOrderInvoice admin_draft_ordersid_send_invoice_json_post(id, draft_order_invoice=draft_order_invoice)

Send an invoice

“Minimal request” does not require any parameters to be sent (no request body at all or just an empty draft_order_invoice hash)

### Example 
```python
import time
import swagger_client
from swagger_client.rest import ApiException
from pprint import pprint

# create an instance of the API class
api_instance = swagger_client.CreateApi()
id = 56 # int | 
draft_order_invoice = swagger_client.DraftOrderInvoice() # DraftOrderInvoice | draft_order_invoice to post. (optional)

try: 
    # Send an invoice
    api_response = api_instance.admin_draft_ordersid_send_invoice_json_post(id, draft_order_invoice=draft_order_invoice)
    pprint(api_response)
except ApiException as e:
    print "Exception when calling CreateApi->admin_draft_ordersid_send_invoice_json_post: %s\n" % e
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  | 
 **draft_order_invoice** | [**DraftOrderInvoice**](DraftOrderInvoice.md)| draft_order_invoice to post. | [optional] 

### Return type

[**DraftOrderInvoice**](DraftOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to Model list]](../README.md#documentation-for-models) [[Back to README]](../README.md)

