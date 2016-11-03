<?php
/**
 * Checkout
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
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * Checkout Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Checkout implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'checkout';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'to' => 'string',
        'from' => 'string',
        'bcc' => 'string',
        'subject' => 'string',
        'custom_message' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'to' => 'to',
        'from' => 'from',
        'bcc' => 'bcc',
        'subject' => 'subject',
        'custom_message' => 'custom_message'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'to' => 'setTo',
        'from' => 'setFrom',
        'bcc' => 'setBcc',
        'subject' => 'setSubject',
        'custom_message' => 'setCustomMessage'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'to' => 'getTo',
        'from' => 'getFrom',
        'bcc' => 'getBcc',
        'subject' => 'getSubject',
        'custom_message' => 'getCustomMessage'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['bcc'] = isset($data['bcc']) ? $data['bcc'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['custom_message'] = isset($data['custom_message']) ? $data['custom_message'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets to
     * @return string
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     * @param string $to Email associated with the `draft_order_invoice`.  If not specified, the email associated with the draft order, or the customer's email will be used instead.  If no email address is specified an error is raised.
     * @return $this
     */
    public function setTo($to)
    {
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets from
     * @return string
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     * @param string $from Email address that the email will appear to be sent from. This defaults to the shop's customer email, and if none exists, simply the shop's account email. When provided, this email address must correspond to the email address of one of the staff accounts.
     * @return $this
     */
    public function setFrom($from)
    {
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets bcc
     * @return string
     */
    public function getBcc()
    {
        return $this->container['bcc'];
    }

    /**
     * Sets bcc
     * @param string $bcc array of staff account e-mail addresses.
     * @return $this
     */
    public function setBcc($bcc)
    {
        $this->container['bcc'] = $bcc;

        return $this;
    }

    /**
     * Gets subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     * @param string $subject subject of custom message.
     * @return $this
     */
    public function setSubject($subject)
    {
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets custom_message
     * @return string
     */
    public function getCustomMessage()
    {
        return $this->container['custom_message'];
    }

    /**
     * Sets custom_message
     * @param string $custom_message Custom message.
     * @return $this
     */
    public function setCustomMessage($custom_message)
    {
        $this->container['custom_message'] = $custom_message;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


