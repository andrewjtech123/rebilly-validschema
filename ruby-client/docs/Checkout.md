# SwaggerClient::Checkout

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **String** | Email associated with the &#x60;draft_order_invoice&#x60;.  If not specified, the email associated with the draft order, or the customer&#39;s email will be used instead.  If no email address is specified an error is raised. | [optional] 
**from** | **String** | Email address that the email will appear to be sent from. This defaults to the shop&#39;s customer email, and if none exists, simply the shop&#39;s account email. When provided, this email address must correspond to the email address of one of the staff accounts. | [optional] 
**bcc** | **String** | array of staff account e-mail addresses. | [optional] 
**subject** | **String** | subject of custom message. | [optional] 
**custom_message** | **String** | Custom message. | [optional] 


