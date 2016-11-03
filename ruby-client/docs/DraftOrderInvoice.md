# SwaggerClient::DraftOrderInvoice

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **String** | Email associated with the &#x60;draft_order_invoice&#x60;.  If not specified, the email associated with the draft order, or the customer&#39;s email will be used instead.  If no email address is specified an error is raised. | [optional] 
**from** | **String** | The email address that the email will appear to be sent from. This defaults to the shop&#39;s customer email, and if none exists, simply the shop&#39;s account email. When provided, this email address must correspond to the email address of one of the staff accounts. | [optional] 
**bcc** | **String** | Optional array of email addresses to bcc. These must correspond to valid staff account email addresses. | [optional] 
**subject** | **String** | The subject of the email that will be sent. When not provided, defaults to the Draft Order Invoice template&#39;s subject, as specified in the shop&#39;s Notification settings. | [optional] 
**custom_message** | **String** | An optional custom message inserted in the email&#39;s body. | [optional] 


