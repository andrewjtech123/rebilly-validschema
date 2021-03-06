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

from __future__ import absolute_import

import sys
import os
import re

# python 2 and python 3 compatibility library
from six import iteritems

from ..configuration import Configuration
from ..api_client import ApiClient


class UpdateApi(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        config = Configuration()
        if api_client:
            self.api_client = api_client
        else:
            if not config.api_client:
                config.api_client = ApiClient()
            self.api_client = config.api_client

    def admin_draft_ordersid_complete_json_put(self, id, **kwargs):
        """
        
        Mark a draft order as paid or pending payment

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.admin_draft_ordersid_complete_json_put(id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int id:  (required)
        :param int payment_gateway_id: Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway.
        :param bool payment_pending: true/false
        :return: DraftOrder
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.admin_draft_ordersid_complete_json_put_with_http_info(id, **kwargs)
        else:
            (data) = self.admin_draft_ordersid_complete_json_put_with_http_info(id, **kwargs)
            return data

    def admin_draft_ordersid_complete_json_put_with_http_info(self, id, **kwargs):
        """
        
        Mark a draft order as paid or pending payment

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.admin_draft_ordersid_complete_json_put_with_http_info(id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int id:  (required)
        :param int payment_gateway_id: Gateway used to receive payment. Either ID of custom manual gateway, or null if using the default “Mark As Paid” gateway.
        :param bool payment_pending: true/false
        :return: DraftOrder
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['id', 'payment_gateway_id', 'payment_pending']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method admin_draft_ordersid_complete_json_put" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'id' is set
        if ('id' not in params) or (params['id'] is None):
            raise ValueError("Missing the required parameter `id` when calling `admin_draft_ordersid_complete_json_put`")

        resource_path = '/admin/draft_orders/#{id}/complete.json'.replace('{format}', 'json')
        path_params = {}
        if 'id' in params:
            path_params['id'] = params['id']

        query_params = {}
        if 'payment_gateway_id' in params:
            query_params['payment_gateway_id'] = params['payment_gateway_id']
        if 'payment_pending' in params:
            query_params['paymentPending'] = params['payment_pending']

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept([])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type([])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'PUT',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='DraftOrder',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))

    def admin_draft_ordersid_json_put(self, id, **kwargs):
        """
        Modify draft order
        You can modify an existing draft order. ### Example   Only showing the parameters needed to select a particular shipping rate as returned from     `GET /admin/draft_orders/#{id}/shipping_rates`       draft_order: {       shipping_line: {         handle: ,         phone:       }     } 

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.admin_draft_ordersid_json_put(id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int id: draft order id (required)
        :param DraftOrder draft_order: the draft order to modify.
        :return: DraftOrder
                 If the method is called asynchronously,
                 returns the request thread.
        """
        kwargs['_return_http_data_only'] = True
        if kwargs.get('callback'):
            return self.admin_draft_ordersid_json_put_with_http_info(id, **kwargs)
        else:
            (data) = self.admin_draft_ordersid_json_put_with_http_info(id, **kwargs)
            return data

    def admin_draft_ordersid_json_put_with_http_info(self, id, **kwargs):
        """
        Modify draft order
        You can modify an existing draft order. ### Example   Only showing the parameters needed to select a particular shipping rate as returned from     `GET /admin/draft_orders/#{id}/shipping_rates`       draft_order: {       shipping_line: {         handle: ,         phone:       }     } 

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.admin_draft_ordersid_json_put_with_http_info(id, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param int id: draft order id (required)
        :param DraftOrder draft_order: the draft order to modify.
        :return: DraftOrder
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['id', 'draft_order']
        all_params.append('callback')
        all_params.append('_return_http_data_only')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method admin_draft_ordersid_json_put" % key
                )
            params[key] = val
        del params['kwargs']
        # verify the required parameter 'id' is set
        if ('id' not in params) or (params['id'] is None):
            raise ValueError("Missing the required parameter `id` when calling `admin_draft_ordersid_json_put`")

        resource_path = '/admin/draft_orders/#{id}.json'.replace('{format}', 'json')
        path_params = {}
        if 'id' in params:
            path_params['id'] = params['id']

        query_params = {}

        header_params = {}

        form_params = []
        local_var_files = {}

        body_params = None
        if 'draft_order' in params:
            body_params = params['draft_order']

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept([])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type([])

        # Authentication setting
        auth_settings = []

        return self.api_client.call_api(resource_path, 'PUT',
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=local_var_files,
                                            response_type='DraftOrder',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'),
                                            _return_http_data_only=params.get('_return_http_data_only'))
