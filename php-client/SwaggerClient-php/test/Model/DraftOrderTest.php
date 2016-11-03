<?php
/**
 * DraftOrderTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Draft Orders API
 *
 * ### Draft Orders API       This API is about operations you can perform on the draft order object as defind below:  Field | Definition | Data Type   -----|-----------|-------------------------   `id`| `id` of the draft order |`string`   `order_id`  | The id of the order associated to the draft order, once created. | `string`           `name` | Name of the draft order, format #D<number>, where number, is an sequential identifier unique to the shop, starting at 1. For example #D133 | `integer`   `customer` | Customer object will be serialized with only the default address, however only the ID can be set in order to associate the customer to the draft order. Setting the value to null removes the customer from the draft order. | `object`   `shipping_address` | The mailing address to where the draft order will be shipped. | `string`   `billing_address` | The mailing address associated with the payment method. | `string`   `note` | The text of an optional note that a shop owner can attach to the draft order. | `string`   `email` | The email address used for sending notifications. |`string`   `currency` | The three letter code for the currency to be used for the payment. | `string`   `invoice_sent_at` | DateTime when the invoice was emailed to the customer by Shopify. | `dateTime`   `invoice_url` | The url to send to the customer so that they can complete the checkout.  When using `send_invoice`, this url is emailed to the customer. This field can be used so that an API client can use another method of communication to provide the url to the customer. | `string`   `line_item`[ ] | | array of `line_item` objects   `metafields`[ ] | | array of `metafield` objects   `shipping_line` | | `object`   `tags` | Tags are additional short descriptors, commonly used for filtering and searching, formatted as a string of comma-separated values. Each individual tag is limited to 40 characters in length. | `string`   `tax_exempt` | Sets whether taxes are exempt for this draft order. If this value is `false`, Shopify will honor the `tax_exempt` value for each `line_item`. | `boolean`   `tax_lines` | Tax lines describing the sum of each type of tax line for line items and shipping line. | array of `tax_line` objects   `discount` | Order level discount. | `string`   `taxes_included` | Shop settings taxes are included in the price | `boolean`   `total_tax` | Total tax amount | `integer`   `completed_at` | Date at which an order was created and the draft order moved to “completed” status. | `DateTime`   `created_at` | By default, this auto-generated property is the date and time when the order was created in Shopify, in ISO 8601 format. If you are importing orders to the Shopify platform from another system, the writable `processed_at` property will override the `created_at` date. | `dateTime`   `updated_at` | | `dateTime`   `status` | String describing the state of the draft order. Possible values are `open`, `invoice sent`, or `completed`. | `string`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * DraftOrderTest Class Doc Comment
 *
 * @category    Class */
// * @description DraftOrder
/**
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DraftOrderTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {

    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {

    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {

    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {

    }

    /**
     * Test "DraftOrder"
     */
    public function testDraftOrder()
    {

    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {

    }

    /**
     * Test attribute "order_id"
     */
    public function testPropertyOrderId()
    {

    }

    /**
     * Test attribute "name"
     */
    public function testPropertyName()
    {

    }

    /**
     * Test attribute "customer"
     */
    public function testPropertyCustomer()
    {

    }

    /**
     * Test attribute "shipping_address"
     */
    public function testPropertyShippingAddress()
    {

    }

    /**
     * Test attribute "billing_address"
     */
    public function testPropertyBillingAddress()
    {

    }

    /**
     * Test attribute "note"
     */
    public function testPropertyNote()
    {

    }

    /**
     * Test attribute "email"
     */
    public function testPropertyEmail()
    {

    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {

    }

    /**
     * Test attribute "invoice_sent_at"
     */
    public function testPropertyInvoiceSentAt()
    {

    }

    /**
     * Test attribute "invoice_url"
     */
    public function testPropertyInvoiceUrl()
    {

    }

    /**
     * Test attribute "line_items"
     */
    public function testPropertyLineItems()
    {

    }

    /**
     * Test attribute "metafields"
     */
    public function testPropertyMetafields()
    {

    }

    /**
     * Test attribute "shipping_line"
     */
    public function testPropertyShippingLine()
    {

    }

    /**
     * Test attribute "tags"
     */
    public function testPropertyTags()
    {

    }

    /**
     * Test attribute "tax_exempt"
     */
    public function testPropertyTaxExempt()
    {

    }

    /**
     * Test attribute "tax_lines"
     */
    public function testPropertyTaxLines()
    {

    }

    /**
     * Test attribute "discount"
     */
    public function testPropertyDiscount()
    {

    }

    /**
     * Test attribute "taxes_included"
     */
    public function testPropertyTaxesIncluded()
    {

    }

    /**
     * Test attribute "total_tax"
     */
    public function testPropertyTotalTax()
    {

    }

    /**
     * Test attribute "subtotal_price"
     */
    public function testPropertySubtotalPrice()
    {

    }

    /**
     * Test attribute "total_price"
     */
    public function testPropertyTotalPrice()
    {

    }

    /**
     * Test attribute "completed_at"
     */
    public function testPropertyCompletedAt()
    {

    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {

    }

    /**
     * Test attribute "updated_at"
     */
    public function testPropertyUpdatedAt()
    {

    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {

    }

}
