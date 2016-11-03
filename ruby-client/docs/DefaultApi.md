# SwaggerClient::DefaultApi

All URIs are relative to *https://simple.api/openapi101*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admin_draft_orders_count_json_get**](DefaultApi.md#admin_draft_orders_count_json_get) | **GET** /admin/draft_orders/count.json | Return count
[**admin_draft_orders_json_get**](DefaultApi.md#admin_draft_orders_json_get) | **GET** /admin/draft_orders.json | Gets draft orders test test test
[**admin_draft_orders_json_post**](DefaultApi.md#admin_draft_orders_json_post) | **POST** /admin/draft_orders.json | Creates a draft order
[**admin_draft_ordersid_checkout_json_post**](DefaultApi.md#admin_draft_ordersid_checkout_json_post) | **POST** /admin/draft_orders/#{id}/checkout.json | Create or retrieve existing checkout for this draft order, to be used in Checkout API. Requires checkout scope
[**admin_draft_ordersid_complete_json_put**](DefaultApi.md#admin_draft_ordersid_complete_json_put) | **PUT** /admin/draft_orders/#{id}/complete.json | Remove a Draft Order from the database
[**admin_draft_ordersid_json_delete**](DefaultApi.md#admin_draft_ordersid_json_delete) | **DELETE** /admin/draft_orders/#{id}.json | removes a draft order from the database.
[**admin_draft_ordersid_json_get**](DefaultApi.md#admin_draft_ordersid_json_get) | **GET** /admin/draft_orders/#{id}.json | Receive a single Draft Order
[**admin_draft_ordersid_json_put**](DefaultApi.md#admin_draft_ordersid_json_put) | **PUT** /admin/draft_orders/#{id}.json | Modify an existing draft order
[**admin_draft_ordersid_send_invoice_json_post**](DefaultApi.md#admin_draft_ordersid_send_invoice_json_post) | **POST** /admin/draft_orders/#{id}/send_invoice.json | Send Invoice - “Minimal request” does not require any parameters to be sent (no request body at all or just an empty draft_order_invoice hash)
[**admin_draft_ordersid_shipping_rates_json_get**](DefaultApi.md#admin_draft_ordersid_shipping_rates_json_get) | **GET** /admin/draft_orders/#{id}/shipping_rates.json&#39; | gets shipping rates for a specific draft order


# **admin_draft_orders_count_json_get**
> Integer admin_draft_orders_count_json_get

Return count

Returns count of draft orders

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

begin
  #Return count
  result = api_instance.admin_draft_orders_count_json_get
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_orders_count_json_get: #{e}"
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

Gets draft orders test test test

Retrieve a list of all Draft Orders please !!!! and thank you

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

opts = { 
  fields: "fields_example", # String | Comma-separated list of fields to include in the response
  limit: 789, # Integer | Page size
  page: 789 # Integer | Page to show
}

begin
  #Gets draft orders test test test
  result = api_instance.admin_draft_orders_json_get(opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_orders_json_get: #{e}"
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



# **admin_draft_orders_json_post**
> DraftOrder admin_draft_orders_json_post(draftorder)

Creates a draft order

send a draft order in body of the request

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

draftorder = SwaggerClient::DraftOrder.new # DraftOrder | The draft order to create.


begin
  #Creates a draft order
  result = api_instance.admin_draft_orders_json_post(draftorder)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_orders_json_post: #{e}"
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



# **admin_draft_ordersid_checkout_json_post**
> Checkout admin_draft_ordersid_checkout_json_post(id2, opts)

Create or retrieve existing checkout for this draft order, to be used in Checkout API. Requires checkout scope

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
  #Create or retrieve existing checkout for this draft order, to be used in Checkout API. Requires checkout scope
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



# **admin_draft_ordersid_complete_json_put**
> DraftOrder admin_draft_ordersid_complete_json_put(id2, opts)

Remove a Draft Order from the database

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id2 = 56 # Integer | 

opts = { 
  id: "id_example" # String | id of the draft order
  payment_gateway_id: 789, # Integer | Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway.
  payment_pending: true # BOOLEAN | true/false
}

begin
  #Remove a Draft Order from the database
  result = api_instance.admin_draft_ordersid_complete_json_put(id2, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_complete_json_put: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **Integer**|  | 
 **id** | **String**| id of the draft order | [optional] 
 **payment_gateway_id** | **Integer**| Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway. | [optional] 
 **payment_pending** | **BOOLEAN**| true/false | [optional] 

### Return type

[**DraftOrder**](DraftOrder.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



# **admin_draft_ordersid_json_delete**
> DraftOrder admin_draft_ordersid_json_delete(id)

removes a draft order from the database.

retruns {}

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id = 789 # Integer | draft order id


begin
  #removes a draft order from the database.
  result = api_instance.admin_draft_ordersid_json_delete(id)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_json_delete: #{e}"
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



# **admin_draft_ordersid_json_get**
> DraftOrder admin_draft_ordersid_json_get(id)

Receive a single Draft Order

Receive a single Draft Order

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id = 789 # Integer | draft order id


begin
  #Receive a single Draft Order
  result = api_instance.admin_draft_ordersid_json_get(id)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_json_get: #{e}"
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



# **admin_draft_ordersid_json_put**
> DraftOrder admin_draft_ordersid_json_put(id, opts)

Modify an existing draft order

Modify an existing draft order. ### Example   Only showing the parameters needed to select a particular shipping rate as returned from     `GET /admin/draft_orders/#{id}/shipping_rates`       draft_order: {       shipping_line: {         handle: ,         phone:       }     }     

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id = 56 # Integer | draft order id

opts = { 
  draft_order: SwaggerClient::DraftOrder.new # DraftOrder | the draft order to modify.
}

begin
  #Modify an existing draft order
  result = api_instance.admin_draft_ordersid_json_put(id, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_json_put: #{e}"
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



# **admin_draft_ordersid_send_invoice_json_post**
> DraftOrderInvoice admin_draft_ordersid_send_invoice_json_post(id, opts)

Send Invoice - “Minimal request” does not require any parameters to be sent (no request body at all or just an empty draft_order_invoice hash)

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id = 56 # Integer | 

opts = { 
  draft_order_invoice: SwaggerClient::DraftOrderInvoice.new # DraftOrderInvoice | draft_order_invoice to post.
}

begin
  #Send Invoice - “Minimal request” does not require any parameters to be sent (no request body at all or just an empty draft_order_invoice hash)
  result = api_instance.admin_draft_ordersid_send_invoice_json_post(id, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_send_invoice_json_post: #{e}"
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



# **admin_draft_ordersid_shipping_rates_json_get**
> ShippingRate admin_draft_ordersid_shipping_rates_json_get(id2, opts)

gets shipping rates for a specific draft order

Get a list of available shipping rates for the specified draft order. Implementers will need to poll this endpoint until rates become available. Calling this endpoint without first specifying a shipping address on the draft order will return an error response. Possible responses outlined below.    #### Rates have been requested and are available   ```    # Response HTTP/1.1 200 OK {   \"shipping_rates\": [     {       \"handle\": \"shopify-Standard%20Shipping-10.00\",       “phone_required”: false,       \"price\": \"10.00\",       \"title\": \"Standard Shipping\",       “draft_order”:        {          “subtotal_price”: “10.00”,          “total_price”: “21.50”,          “total_tax”: “1.50”       }     },     {       \"handle\": \"ups-11-19.45\",       “phone_required”: false,       \"price\": \"19.45\",       \"title\": \"UPS Standard\",       “draft_order”:        {          “subtotal_price”: “10.00”,          “total_price”: “30.95”,          “total_tax”: “1.50”       }     },     {       \"handle\": \"ups-02-19.69\",       “phone_required”: true,       \"price\": \"19.69\",       \"title\": \"UPS Expedited\",       “draft_order”:        {          “subtotal_price”: “10.00”,          “total_price”: “31.19”,          “total_tax”: “1.50”       }     }   ] }        ```   #### Rates have been requested but none are available for the current shipping address      # Response     HTTP/1.1 200 OK     {       \"shipping_rates\": []     } 

### Example
```ruby
# load the gem
require 'swagger_client'

api_instance = SwaggerClient::DefaultApi.new

id2 = 56 # Integer | draft order id

opts = { 
  id: "id_example" # String | id of the draft order
}

begin
  #gets shipping rates for a specific draft order
  result = api_instance.admin_draft_ordersid_shipping_rates_json_get(id2, opts)
  p result
rescue SwaggerClient::ApiError => e
  puts "Exception when calling DefaultApi->admin_draft_ordersid_shipping_rates_json_get: #{e}"
end
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id2** | **Integer**| draft order id | 
 **id** | **String**| id of the draft order | [optional] 

### Return type

[**ShippingRate**](ShippingRate.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined



