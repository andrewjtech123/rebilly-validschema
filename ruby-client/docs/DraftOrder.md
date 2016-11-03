# SwaggerClient::DraftOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | The id of the draft order. | 
**order_id** | **String** | The id of the order associated to the draft order, once created. | [optional] 
**name** | **String** | Name of the draft order | 
**customer** | **String** | Customer object will be serialized with only the default address, however only the ID can be set in order to associate the customer to the draft order. Setting the value to null removes the customer from the draft order. | [optional] 
**shipping_address** | **String** | The mailing address to where the draft order will be shipped. | [optional] 
**billing_address** | **String** | The mailing address associated with the payment method. | [optional] 
**note** | **String** | The text of an optional note that a shop owner can attach to the draft order. | [optional] 
**email** | **String** | The email address used for sending notifications. | [optional] 
**currency** | **String** | The three letter code for the currency to be used for the payment. | 
**invoice_sent_at** | **DateTime** |  | [optional] 
**invoice_url** | **String** | The url to send to the customer so that they can complete the checkout.  When using send_invoice, this url is emailed to the customer. This field can be used so that an API client can use another method of communication to provide the url to the customer. | [optional] 
**line_items** | [**Array&lt;LineItem&gt;**](LineItem.md) |  | 
**metafields** | [**Array&lt;Metafield&gt;**](Metafield.md) |  | [optional] 
**shipping_line** | **Object** |  | [optional] 
**tags** | **String** | Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. Each individual tag is limited to 40 characters in length. | [optional] 
**tax_exempt** | **BOOLEAN** | Sets whether taxes are exempt for this draft order. If this value is false, Shopify will honor the tax_exempt value for each line_item. | 
**tax_lines** | [**Array&lt;TaxLine&gt;**](TaxLine.md) |  | [optional] 
**discount** | **String** | Order level discount. | [optional] 
**taxes_included** | **BOOLEAN** | Shop settings taxes are included in the price | 
**total_tax** | **String** | Total tax amount | 
**subtotal_price** | **String** | Subtotal after discounts, before shipping and taxes have been applied | 
**total_price** | **String** | Includes discounts, shipping and taxes | 
**completed_at** | **DateTime** | Date at which an order was created and the draft order moved to “completed” status. | [optional] 
**created_at** | **String** | description | 
**updated_at** | **String** | description | 
**status** | **String** | description | 


