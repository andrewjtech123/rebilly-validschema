# SwaggerClient::DeleteApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_ordersid_json_delete**](DeleteApi.md#admin_draft_ordersid_json_delete) | **DELETE** /admin/draft_orders/#{id}.json | 


# **admin_draft_ordersid_json_delete**
> DraftOrder admin_draft_ordersid_json_delete(id)



Remove a draft order.

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DeleteApi.new

id = 789 # Integer | draft order id


begin
  result = api_instance.admin_draft_ordersid_json_delete(id)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DeleteApi->admin_draft_ordersid_json_delete: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **Integer**| draft order id | 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



