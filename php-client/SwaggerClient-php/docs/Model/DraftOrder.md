# DraftOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The &#x60;id&#x60; of the draft order. | 
**order_id** | **string** | The &#x60;id&#x60; of the order associated to the draft order, once created. | [optional] 
**name** | **string** | Name of the draft order | 
**customer** | [**\Swagger\Client\Model\Customer**](Customer.md) |  | [optional] 
**shipping_address** | **string** | The mailing address to where the draft order will be shipped. | [optional] 
**billing_address** | **string** | The mailing address associated with the payment method. | [optional] 
**note** | **string** | The text of an optional note that a shop owner can attach to the draft order. | [optional] 
**email** | **string** | The email address used for sending notifications. | [optional] 
**currency** | **string** | The three letter code for the currency to be used for the payment. | 
**invoice_sent_at** | [**\DateTime**](\DateTime.md) | Date when the invoice was emailed to the customer. | [optional] 
**invoice_url** | **string** | The url to send to the customer for completing the checkout.  When using &#x60;send_invoice&#x60;, this url is emailed to the customer. | [optional] 
**line_items** | [**\Swagger\Client\Model\LineItem[]**](LineItem.md) |  | 
**metafields** | [**\Swagger\Client\Model\Metafield[]**](Metafield.md) |  | [optional] 
**shipping_line** | **object** |  | [optional] 
**tags** | **string** | Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. Each individual tag is limited to 40 characters in length. | [optional] 
**tax_exempt** | **bool** | Sets whether taxes are exempt for this draft order. If this value is &#x60;false&#x60;, Shopify will honor the &#x60;tax_exempt&#x60; value for each &#x60;line_item&#x60;. | 
**tax_lines** | [**\Swagger\Client\Model\TaxLine[]**](TaxLine.md) | An array of &#x60;tax_line&#x60; objects, each of which details the taxes applicable to the checkout. | [optional] 
**discount** | **object** |  | [optional] 
**taxes_included** | **bool** | States whether or not taxes are included in the order subtotal. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. | 
**total_tax** | **string** | Total tax amount | 
**subtotal_price** | **string** | Subtotal after discounts, before shipping and taxes have been applied. | 
**total_price** | **string** | Includes discounts, shipping and taxes. | 
**completed_at** | [**\DateTime**](\DateTime.md) | Date at which an order was created and the draft order moved to “completed” status. | [optional] 
**created_at** | [**\DateTime**](\DateTime.md) | By default, this auto-generated property is the date and time when the order was created in Shopify, in ISO 8601 format. If you are importing orders to the Shopify platform from another system, the writable &#x60;processed_at&#x60; property will override the &#x60;created_at date&#x60; | 
**updated_at** | [**\DateTime**](\DateTime.md) | The date and time when the draft order was last updated. | 
**status** | **string** | String describing the state of the draft order - &#x60;open&#x60;, &#x60;invoice sent&#x60;, &#x60;completed&#x60;. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


