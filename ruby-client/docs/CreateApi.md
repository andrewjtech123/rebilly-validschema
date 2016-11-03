# SwaggerClient::CreateApi

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
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::CreateApi.new

draftorder = SwaggerClient::DraftOrder.new # DraftOrder | The draft order to create.


begin
  #Create a draft order
  result = api_instance.admin_draft_orders_json_post(draftorder)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling CreateApi->admin_draft_orders_json_post: #{e}"
end
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



# **admin_draft_ordersid_send_invoice_json_post**
> DraftOrderInvoice admin_draft_ordersid_send_invoice_json_post(id, opts)

Send an invoice

“Minimal request” does not require any parameters to be sent (no request body at all or just an empty draft_order_invoice hash)

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::CreateApi.new

id = 56 # Integer | 

opts = { 
  draft_order_invoice: SwaggerClient::DraftOrderInvoice.new # DraftOrderInvoice | draft_order_invoice to post.
}

begin
  #Send an invoice
  result = api_instance.admin_draft_ordersid_send_invoice_json_post(id, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling CreateApi->admin_draft_ordersid_send_invoice_json_post: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**|  | 
 **draft_order_invoice** | [**DraftOrderInvoice**](DraftOrderInvoice.md)| draft_order_invoice to post. | [optional] 

### Return type

[**DraftOrderInvoice**](DraftOrderInvoice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



