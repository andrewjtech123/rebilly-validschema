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

from pprint import pformat
from six import iteritems
import re


class ShippingLine(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, handle=None, title=None, price=None, phone=None, tax_lines=None):
        """
        ShippingLine - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'handle': 'str',
            'title': 'str',
            'price': 'int',
            'phone': 'str',
            'tax_lines': 'list[TaxLine]'
        }

        self.attribute_map = {
            'handle': 'handle',
            'title': 'title',
            'price': 'price',
            'phone': 'phone',
            'tax_lines': 'tax_lines'
        }

        self._handle = handle
        self._title = title
        self._price = price
        self._phone = phone
        self._tax_lines = tax_lines

    @property
    def handle(self):
        """
        Gets the handle of this ShippingLine.
        The handle of the shipping rate which was selected and applied, if applicable

        :return: The handle of this ShippingLine.
        :rtype: str
        """
        return self._handle

    @handle.setter
    def handle(self, handle):
        """
        Sets the handle of this ShippingLine.
        The handle of the shipping rate which was selected and applied, if applicable

        :param handle: The handle of this ShippingLine.
        :type: str
        """

        self._handle = handle

    @property
    def title(self):
        """
        Gets the title of this ShippingLine.
        The title of the shipping method.

        :return: The title of this ShippingLine.
        :rtype: str
        """
        return self._title

    @title.setter
    def title(self, title):
        """
        Sets the title of this ShippingLine.
        The title of the shipping method.

        :param title: The title of this ShippingLine.
        :type: str
        """

        self._title = title

    @property
    def price(self):
        """
        Gets the price of this ShippingLine.
        The price of this shipping method.

        :return: The price of this ShippingLine.
        :rtype: int
        """
        return self._price

    @price.setter
    def price(self, price):
        """
        Sets the price of this ShippingLine.
        The price of this shipping method.

        :param price: The price of this ShippingLine.
        :type: int
        """

        self._price = price

    @property
    def phone(self):
        """
        Gets the phone of this ShippingLine.
        The phone number, if required as specified in the `shipping_rate`.

        :return: The phone of this ShippingLine.
        :rtype: str
        """
        return self._phone

    @phone.setter
    def phone(self, phone):
        """
        Sets the phone of this ShippingLine.
        The phone number, if required as specified in the `shipping_rate`.

        :param phone: The phone of this ShippingLine.
        :type: str
        """

        self._phone = phone

    @property
    def tax_lines(self):
        """
        Gets the tax_lines of this ShippingLine.


        :return: The tax_lines of this ShippingLine.
        :rtype: list[TaxLine]
        """
        return self._tax_lines

    @tax_lines.setter
    def tax_lines(self, tax_lines):
        """
        Sets the tax_lines of this ShippingLine.


        :param tax_lines: The tax_lines of this ShippingLine.
        :type: list[TaxLine]
        """

        self._tax_lines = tax_lines

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other
