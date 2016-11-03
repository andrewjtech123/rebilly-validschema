# SwaggerClient::DraftOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | The &#x60;id&#x60; of the draft order. | 
**order_id** | **String** | The &#x60;id&#x60; of the order associated to the draft order, once created. | [optional] 
**name** | **String** | Name of the draft order | 
**customer** | [**Customer**](Customer.md) |  | [optional] 
**shipping_address** | **String** | The mailing address to where the draft order will be shipped. | [optional] 
**billing_address** | **String** | The mailing address associated with the payment method. | [optional] 
**note** | **String** | The text of an optional note that a shop owner can attach to the draft order. | [optional] 
**email** | **String** | The email address used for sending notifications. | [optional] 
**currency** | **String** | The three letter code for the currency to be used for the payment. | 
**invoice_sent_at** | **DateTime** | Date when the invoice was emailed to the customer. | [optional] 
**invoice_url** | **String** | The url to send to the customer for completing the checkout.  When using &#x60;send_invoice&#x60;, this url is emailed to the customer. | [optional] 
**line_items** | [**Array&lt;LineItem&gt;**](LineItem.md) |  | 
**metafields** | [**Array&lt;Metafield&gt;**](Metafield.md) |  | [optional] 
**shipping_line** | **Object** |  | [optional] 
**tags** | **String** | Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. Each individual tag is limited to 40 characters in length. | [optional] 
**tax_exempt** | **BOOLEAN** | Sets whether taxes are exempt for this draft order. If this value is &#x60;false&#x60;, Shopify will honor the &#x60;tax_exempt&#x60; value for each &#x60;line_item&#x60;. | 
**tax_lines** | [**Array&lt;TaxLine&gt;**](TaxLine.md) | An array of &#x60;tax_line&#x60; objects, each of which details the taxes applicable to the checkout. | [optional] 
**discount** | **Object** |  | [optional] 
**taxes_included** | **BOOLEAN** | States whether or not taxes are included in the order subtotal. Valid values are &#x60;true&#x60; or &#x60;false&#x60;. | 
**total_tax** | **String** | Total tax amount | 
**subtotal_price** | **String** | Subtotal after discounts, before shipping and taxes have been applied. | 
**total_price** | **String** | Includes discounts, shipping and taxes. | 
**completed_at** | **DateTime** | Date at which an order was created and the draft order moved to “completed” status. | [optional] 
**created_at** | **DateTime** | By default, this auto-generated property is the date and time when the order was created in Shopify, in ISO 8601 format. If you are importing orders to the Shopify platform from another system, the writable &#x60;processed_at&#x60; property will override the &#x60;created_at date&#x60; | 
**updated_at** | **DateTime** | The date and time when the draft order was last updated. | 
**status** | **String** | String describing the state of the draft order - &#x60;open&#x60;, &#x60;invoice sent&#x60;, &#x60;completed&#x60;. | 


