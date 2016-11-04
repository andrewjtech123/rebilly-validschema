# Checkout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **str** | Email associated with the &#x60;draft_order_invoice&#x60;.  If not specified, the email associated with the draft order, or the customer&#39;s email will be used instead.  If no email address is specified an error is raised. | [optional] 
**_from** | **str** | Email address that the email will appear to be sent from. This defaults to the shop&#39;s customer email, and if none exists, simply the shop&#39;s account email. When provided, this email address must correspond to the email address of one of the staff accounts. | [optional] 
**bcc** | **str** | array of staff account e-mail addresses. | [optional] 
**subject** | **str** | subject of custom message. | [optional] 
**custom_message** | **str** | Custom message. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


