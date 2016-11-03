# SwaggerClient::UpdateApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_ordersid_complete_json_put**](UpdateApi.md#admin_draft_ordersid_complete_json_put) | **PUT** /admin/draft_orders/#{id}/complete.json | 
[**admin_draft_ordersid_json_put**](UpdateApi.md#admin_draft_ordersid_json_put) | **PUT** /admin/draft_orders/#{id}.json | Modify draft order


# **admin_draft_ordersid_complete_json_put**
> DraftOrder admin_draft_ordersid_complete_json_put(id, opts)



Mark a draft order as paid or pending payment

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::UpdateApi.new

id = 56 # Integer | 

opts = { 
  payment_gateway_id: 789, # Integer | Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway.
  payment_pending: true # BOOLEAN | true/false
}

begin
  result = api_instance.admin_draft_ordersid_complete_json_put(id, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling UpdateApi->admin_draft_ordersid_complete_json_put: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**|  | 
 **payment_gateway_id** | **Integer**| Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway. | [optional] 
 **payment_pending** | **BOOLEAN**| true/false | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **admin_draft_ordersid_json_put**
> DraftOrder admin_draft_ordersid_json_put(id, opts)

Modify draft order

You can modify an existing draft order. ### Example   Only showing the parameters needed to select a particular shipping rate as returned from     `GET /admin/draft_orders/#{id}/shipping_rates`       draft_order: {       shipping_line: {         handle: ,         phone:       }     } 

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::UpdateApi.new

id = 56 # Integer | draft order id

opts = { 
  draft_order: SwaggerClient::DraftOrder.new # DraftOrder | the draft order to modify.
}

begin
  #Modify draft order
  result = api_instance.admin_draft_ordersid_json_put(id, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling UpdateApi->admin_draft_ordersid_json_put: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| draft order id | 
 **draft_order** | [**DraftOrder**](DraftOrder.md)| the draft order to modify. | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



