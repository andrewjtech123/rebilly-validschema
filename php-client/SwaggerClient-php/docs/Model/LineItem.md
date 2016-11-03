# LineItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Can’t be null | 
**variant_id** | **string** | The &#x60;id&#x60; of the product variant corresponding to the &#x60;line_item&#x60;. | [optional] 
**product_id** | **string** | The &#x60;id&#x60; of the product corresponding to the line item’s product variant. | [optional] 
**name** | **string** | The readable name of the product and variant. | 
**title** | **string** | The title of the product or variant.  Can only be specified if this is a custom line item, in which case it is mandatory. | [optional] 
**variant_title** | **string** | The title of the product variant.  Default value is “Custom” | [optional] 
**price** | **string** | The price of the item before discounts have been applied.  Can only be specified if this is a custom line item, in which case it is mandatory.  To change the price of a product, use &#x60;discount&#x60; as specified below. | [optional] 
**vendor** | **string** | vendor | [optional] 
**grams** | **string** | Weight in grams.  Can only be specified if this is a custom line item.  If not specified, defaults to &#x60;0&#x60;. | [optional] 
**quantity** | **string** | quantity | 
**requires_shipping** | **bool** | States whether or not the fulfillment requires shipping. Values are &#x60;true&#x60; or &#x60;false&#x60;.  Can only be specified if this is a custom line item.  Defaults to &#x60;false&#x60;. | [optional] 
**sku** | **string** | Can only be specified if this is a custom line item. | [optional] 
**taxable** | **bool** | States whether or not the product is taxable. Values are &#x60;true&#x60; or &#x60;false&#x60;.  Can only be specified if this is a custom line item.  Mandatory for custom products. | [optional] 
**gift_card** | **bool** | Indicates if the product is a gift card. Values - &#x60;true&#x60; or &#x60;false&#x60;. | [optional] 
**fulfillment_service** | **string** | Service provider who is doing the fulfillment. Valid values are either &#x60;manual&#x60; or the name of the provider. eg &#x60;amazon&#x60;, &#x60;shipwire&#x60;, etc.  Defaults to &#x60;manual&#x60; for custom line items. | [optional] 
**properties** | **string** | An array of custom information for an item that has been added to the cart. Often used to provide product customization options. For more information, see the [documentation on collecting customization information on the product page] (https://help.shopify.com/themes/customization/products/get-customization-information-for-products) | [optional] 
**custom** | **bool** | Indicates if the line item is a custom line item.  &#x60;false&#x60; if the line item is a product variant, &#x60;true&#x60; if the line item is &#x60;custom&#x60;. | [optional] 
**discount** | **object** |  | [optional] 
**tax_line** | [**\Swagger\Client\Model\TaxLine[]**](TaxLine.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


