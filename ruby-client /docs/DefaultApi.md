# SwaggerClient::DefaultApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_ordersid_checkout_json_post**](DefaultApi.md#admin_draft_ordersid_checkout_json_post) | **POST** /admin/draft_orders/#{id}/checkout.json | Create or retrieve existing checkout


# **admin_draft_ordersid_checkout_json_post**
> Checkout admin_draft_ordersid_checkout_json_post(id2, opts)

Create or retrieve existing checkout

To be used in Checkout API. Requires checkout scope

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id2 = 56 # Integer | 

opts = { 
  id: "id_example" # String | id of the draft order
}

begin
  #Create or retrieve existing checkout
  result = api_instance.admin_draft_ordersid_checkout_json_post(id2, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_checkout_json_post: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **Integer**|  | 
 **id** | **String**| id of the draft order | [optional] 

### Return type

[**Checkout**](Checkout.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



