# SwaggerClient::LineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **String** | Can’t be null | 
**variant_id** | **String** | The &#x60;id&#x60; of the product variant corresponding to the &#x60;line_item&#x60;. | [optional] 
**product_id** | **String** | The &#x60;id&#x60; of the product corresponding to the line item’s product variant. | [optional] 
**name** | **String** | The readable name of the product and variant. | 
**title** | **String** | The title of the product or variant.  Can only be specified if this is a custom line item, in which case it is mandatory. | [optional] 
**variant_title** | **String** | The title of the product variant.  Default value is “Custom” | [optional] 
**price** | **String** | The price of the item before discounts have been applied.  Can only be specified if this is a custom line item, in which case it is mandatory.  To change the price of a product, use &#x60;discount&#x60; as specified below. | [optional] 
**vendor** | **String** | vendor | [optional] 
**grams** | **String** | Weight in grams.  Can only be specified if this is a custom line item.  If not specified, defaults to &#x60;0&#x60;. | [optional] 
**quantity** | **String** | quantity | 
**requires_shipping** | **BOOLEAN** | States whether or not the fulfillment requires shipping. Values are &#x60;true&#x60; or &#x60;false&#x60;.  Can only be specified if this is a custom line item.  Defaults to &#x60;false&#x60;. | [optional] 
**sku** | **String** | Can only be specified if this is a custom line item. | [optional] 
**taxable** | **BOOLEAN** | States whether or not the product is taxable. Values are &#x60;true&#x60; or &#x60;false&#x60;.  Can only be specified if this is a custom line item.  Mandatory for custom products. | [optional] 
**gift_card** | **BOOLEAN** | Indicates if the product is a gift card. Values - &#x60;true&#x60; or &#x60;false&#x60;. | [optional] 
**fulfillment_service** | **String** | Service provider who is doing the fulfillment. Valid values are either &#x60;manual&#x60; or the name of the provider. eg &#x60;amazon&#x60;, &#x60;shipwire&#x60;, etc.  Defaults to &#x60;manual&#x60; for custom line items. | [optional] 
**properties** | **String** | An array of custom information for an item that has been added to the cart. Often used to provide product customization options. For more information, see the [documentation on collecting customization information on the product page] (https://help.shopify.com/themes/customization/products/get-customization-information-for-products) | [optional] 
**custom** | **BOOLEAN** | Indicates if the line item is a custom line item.  &#x60;false&#x60; if the line item is a product variant, &#x60;true&#x60; if the line item is &#x60;custom&#x60;. | [optional] 
**discount** | **Object** |  | [optional] 
**tax_line** | [**Array&lt;TaxLine&gt;**](TaxLine.md) |  | [optional] 


