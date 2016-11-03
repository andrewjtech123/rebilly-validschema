# coding: utf-8

"""
    Draft Orders API

    ### Draft Orders API       This API is about operations you can perform on the draft order object as defind below:  Field | Definition | Data Type   -----|-----------|-------------------------   `id`| `id` of the draft order |`string`   `order_id`  | The id of the order associated to the draft order, once created. | `string`           `name` | Name of the draft order, format #D<number>, where number, is an sequential identifier unique to the shop, starting at 1. For example #D133 | `integer`   `customer` | Customer object will be serialized with only the default address, however only the ID can be set in order to associate the customer to the draft order. Setting the value to null removes the customer from the draft order. | `object`   `shipping_address` | The mailing address to where the draft order will be shipped. | `string`   `billing_address` | The mailing address associated with the payment method. | `string`   `note` | The text of an optional note that a shop owner can attach to the draft order. | `string`   `email` | The email address used for sending notifications. |`string`   `currency` | The three letter code for the currency to be used for the payment. | `string`   `invoice_sent_at` | DateTime when the invoice was emailed to the customer by Shopify. | `dateTime`   `invoice_url` | The url to send to the customer so that they can complete the checkout.  When using `send_invoice`, this url is emailed to the customer. This field can be used so that an API client can use another method of communication to provide the url to the customer. | `string`   `line_item`[ ] | | array of `line_item` objects   `metafields`[ ] | | array of `metafield` objects   `shipping_line` | | `object`   `tags` | Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. Each individual tag is limited to 40 characters in length. | `string`   `tax_exempt` | Sets whether taxes are exempt for this draft order. If this value is `false`, Shopify will honor the `tax_exempt` value for each `line_item`. | `boolean`   `tax_lines` | Tax lines describing the sum of each type of tax line for line items and shipping line. | array of `tax_line` objects   `discount` | Order level discount. | `string`   `taxes_included` | Shop settings taxes are included in the price | `boolean`   `total_tax` | Total tax amount | `integer`   `completed_at` | Date at which an order was created and the draft order moved to “completed” status. | `DateTime`   `created_at` | By default, this auto-generated property is the date and time when the order was created in Shopify, in ISO 8601 format. If you are importing orders to the Shopify platform from another system, the writable `processed_at` property will override the `created_at` date. | `dateTime`   `updated_at` | | `dateTime`   `status` | String describing the state of the draft order. Possible values are `open`, `invoice sent`, or `completed`. | `string`       

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
"""

import sys
from setuptools import setup, find_packages

NAME = "swagger_client"
VERSION = "1.0.0"

# To install the library, run the following
#
# python setup.py install
#
# prerequisite: setuptools
# http://pypi.python.org/pypi/setuptools

REQUIRES = ["urllib3 >= 1.15", "six >= 1.10", "certifi", "python-dateutil"]

setup(
    name=NAME,
    version=VERSION,
    description="Draft Orders API",
    author_email="",
    url="",
    keywords=["Swagger", "Draft Orders API"],
    install_requires=REQUIRES,
    packages=find_packages(),
    include_package_data=True,
    long_description="""\
    ### Draft Orders API       This API is about operations you can perform on the draft order object as defind below:  Field | Definition | Data Type   -----|-----------|-------------------------   &#x60;id&#x60;| &#x60;id&#x60; of the draft order |&#x60;string&#x60;   &#x60;order_id&#x60;  | The id of the order associated to the draft order, once created. | &#x60;string&#x60;           &#x60;name&#x60; | Name of the draft order, format #D&lt;number&gt;, where number, is an sequential identifier unique to the shop, starting at 1. For example #D133 | &#x60;integer&#x60;   &#x60;customer&#x60; | Customer object will be serialized with only the default address, however only the ID can be set in order to associate the customer to the draft order. Setting the value to null removes the customer from the draft order. | &#x60;object&#x60;   &#x60;shipping_address&#x60; | The mailing address to where the draft order will be shipped. | &#x60;string&#x60;   &#x60;billing_address&#x60; | The mailing address associated with the payment method. | &#x60;string&#x60;   &#x60;note&#x60; | The text of an optional note that a shop owner can attach to the draft order. | &#x60;string&#x60;   &#x60;email&#x60; | The email address used for sending notifications. |&#x60;string&#x60;   &#x60;currency&#x60; | The three letter code for the currency to be used for the payment. | &#x60;string&#x60;   &#x60;invoice_sent_at&#x60; | DateTime when the invoice was emailed to the customer by Shopify. | &#x60;dateTime&#x60;   &#x60;invoice_url&#x60; | The url to send to the customer so that they can complete the checkout.  When using &#x60;send_invoice&#x60;, this url is emailed to the customer. This field can be used so that an API client can use another method of communication to provide the url to the customer. | &#x60;string&#x60;   &#x60;line_item&#x60;[ ] | | array of &#x60;line_item&#x60; objects   &#x60;metafields&#x60;[ ] | | array of &#x60;metafield&#x60; objects   &#x60;shipping_line&#x60; | | &#x60;object&#x60;   &#x60;tags&#x60; | Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. Each individual tag is limited to 40 characters in length. | &#x60;string&#x60;   &#x60;tax_exempt&#x60; | Sets whether taxes are exempt for this draft order. If this value is &#x60;false&#x60;, Shopify will honor the &#x60;tax_exempt&#x60; value for each &#x60;line_item&#x60;. | &#x60;boolean&#x60;   &#x60;tax_lines&#x60; | Tax lines describing the sum of each type of tax line for line items and shipping line. | array of &#x60;tax_line&#x60; objects   &#x60;discount&#x60; | Order level discount. | &#x60;string&#x60;   &#x60;taxes_included&#x60; | Shop settings taxes are included in the price | &#x60;boolean&#x60;   &#x60;total_tax&#x60; | Total tax amount | &#x60;integer&#x60;   &#x60;completed_at&#x60; | Date at which an order was created and the draft order moved to “completed” status. | &#x60;DateTime&#x60;   &#x60;created_at&#x60; | By default, this auto-generated property is the date and time when the order was created in Shopify, in ISO 8601 format. If you are importing orders to the Shopify platform from another system, the writable &#x60;processed_at&#x60; property will override the &#x60;created_at&#x60; date. | &#x60;dateTime&#x60;   &#x60;updated_at&#x60; | | &#x60;dateTime&#x60;   &#x60;status&#x60; | String describing the state of the draft order. Possible values are &#x60;open&#x60;, &#x60;invoice sent&#x60;, or &#x60;completed&#x60;. | &#x60;string&#x60;       
    """
)
