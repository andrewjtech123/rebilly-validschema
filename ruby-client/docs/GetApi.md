# SwaggerClient::GetApi

All URIs are relative to *https://myshopify.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_orders_count_json_get**](GetApi.md#admin_draft_orders_count_json_get) | **GET** /admin/draft_orders/count.json | 
[**admin_draft_orders_json_get**](GetApi.md#admin_draft_orders_json_get) | **GET** /admin/draft_orders.json | 
[**admin_draft_ordersid_json_get**](GetApi.md#admin_draft_ordersid_json_get) | **GET** /admin/draft_orders/#{id}.json | 


# **admin_draft_orders_count_json_get**
> Integer admin_draft_orders_count_json_get



Return count of draft orders

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::GetApi.new

begin
  result = api_instance.admin_draft_orders_count_json_get
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling GetApi->admin_draft_orders_count_json_get: #{e}"
end
```

### Parameters
This endpoint does not need any parameter.

### Return type

**Integer**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **admin_draft_orders_json_get**
> DraftOrder admin_draft_orders_json_get(opts)



Retrieve draft orders

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::GetApi.new

opts = { 
  fields: "fields_example", # String | Comma-separated list of fields to include in the response
  limit: 789, # Integer | Page size
  page: 789 # Integer | Page to show
}

begin
  result = api_instance.admin_draft_orders_json_get(opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling GetApi->admin_draft_orders_json_get: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **String**| Comma-separated list of fields to include in the response | [optional] 
 **limit** | **Integer**| Page size | [optional] 
 **page** | **Integer**| Page to show | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **admin_draft_ordersid_json_get**
> DraftOrder admin_draft_ordersid_json_get(id)



Receive a single draft order

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::GetApi.new

id = 789 # Integer | draft order id


begin
  result = api_instance.admin_draft_ordersid_json_get(id)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling GetApi->admin_draft_ordersid_json_get: #{e}"
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



