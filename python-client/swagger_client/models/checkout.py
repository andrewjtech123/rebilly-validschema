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


class Checkout(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, to=None, _from=None, bcc=None, subject=None, custom_message=None):
        """
        Checkout - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'to': 'str',
            '_from': 'str',
            'bcc': 'str',
            'subject': 'str',
            'custom_message': 'str'
        }

        self.attribute_map = {
            'to': 'to',
            '_from': 'from',
            'bcc': 'bcc',
            'subject': 'subject',
            'custom_message': 'custom_message'
        }

        self._to = to
        self.__from = _from
        self._bcc = bcc
        self._subject = subject
        self._custom_message = custom_message

    @property
    def to(self):
        """
        Gets the to of this Checkout.
        Email associated with the `draft_order_invoice`.  If not specified, the email associated with the draft order, or the customer's email will be used instead.  If no email address is specified an error is raised.

        :return: The to of this Checkout.
        :rtype: str
        """
        return self._to

    @to.setter
    def to(self, to):
        """
        Sets the to of this Checkout.
        Email associated with the `draft_order_invoice`.  If not specified, the email associated with the draft order, or the customer's email will be used instead.  If no email address is specified an error is raised.

        :param to: The to of this Checkout.
        :type: str
        """

        self._to = to

    @property
    def _from(self):
        """
        Gets the _from of this Checkout.
        Email address that the email will appear to be sent from. This defaults to the shop's customer email, and if none exists, simply the shop's account email. When provided, this email address must correspond to the email address of one of the staff accounts.

        :return: The _from of this Checkout.
        :rtype: str
        """
        return self.__from

    @_from.setter
    def _from(self, _from):
        """
        Sets the _from of this Checkout.
        Email address that the email will appear to be sent from. This defaults to the shop's customer email, and if none exists, simply the shop's account email. When provided, this email address must correspond to the email address of one of the staff accounts.

        :param _from: The _from of this Checkout.
        :type: str
        """

        self.__from = _from

    @property
    def bcc(self):
        """
        Gets the bcc of this Checkout.
        array of staff account e-mail addresses.

        :return: The bcc of this Checkout.
        :rtype: str
        """
        return self._bcc

    @bcc.setter
    def bcc(self, bcc):
        """
        Sets the bcc of this Checkout.
        array of staff account e-mail addresses.

        :param bcc: The bcc of this Checkout.
        :type: str
        """

        self._bcc = bcc

    @property
    def subject(self):
        """
        Gets the subject of this Checkout.
        subject of custom message.

        :return: The subject of this Checkout.
        :rtype: str
        """
        return self._subject

    @subject.setter
    def subject(self, subject):
        """
        Sets the subject of this Checkout.
        subject of custom message.

        :param subject: The subject of this Checkout.
        :type: str
        """

        self._subject = subject

    @property
    def custom_message(self):
        """
        Gets the custom_message of this Checkout.
        Custom message.

        :return: The custom_message of this Checkout.
        :rtype: str
        """
        return self._custom_message

    @custom_message.setter
    def custom_message(self, custom_message):
        """
        Sets the custom_message of this Checkout.
        Custom message.

        :param custom_message: The custom_message of this Checkout.
        :type: str
        """

        self._custom_message = custom_message

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
