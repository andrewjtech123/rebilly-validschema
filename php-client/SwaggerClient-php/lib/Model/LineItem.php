<?php
/**
 * LineItem
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
 * LineItem Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LineItem implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'line_item';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'id' => 'string',
        'variant_id' => 'string',
        'product_id' => 'string',
        'name' => 'string',
        'title' => 'string',
        'variant_title' => 'string',
        'price' => 'string',
        'vendor' => 'string',
        'grams' => 'string',
        'quantity' => 'string',
        'requires_shipping' => 'bool',
        'sku' => 'string',
        'taxable' => 'bool',
        'gift_card' => 'bool',
        'fulfillment_service' => 'string',
        'properties' => 'string',
        'custom' => 'bool',
        'discount' => 'object',
        'tax_line' => '\Swagger\Client\Model\TaxLine[]'
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
        'id' => 'id',
        'variant_id' => 'variant_id',
        'product_id' => 'product_id',
        'name' => 'name',
        'title' => 'title',
        'variant_title' => 'variant_title',
        'price' => 'price',
        'vendor' => 'vendor',
        'grams' => 'grams',
        'quantity' => 'quantity',
        'requires_shipping' => 'requires_shipping',
        'sku' => 'sku',
        'taxable' => 'taxable',
        'gift_card' => 'gift_card',
        'fulfillment_service' => 'fulfillment_service',
        'properties' => 'properties',
        'custom' => 'custom',
        'discount' => 'discount',
        'tax_line' => 'tax_line'
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
        'id' => 'setId',
        'variant_id' => 'setVariantId',
        'product_id' => 'setProductId',
        'name' => 'setName',
        'title' => 'setTitle',
        'variant_title' => 'setVariantTitle',
        'price' => 'setPrice',
        'vendor' => 'setVendor',
        'grams' => 'setGrams',
        'quantity' => 'setQuantity',
        'requires_shipping' => 'setRequiresShipping',
        'sku' => 'setSku',
        'taxable' => 'setTaxable',
        'gift_card' => 'setGiftCard',
        'fulfillment_service' => 'setFulfillmentService',
        'properties' => 'setProperties',
        'custom' => 'setCustom',
        'discount' => 'setDiscount',
        'tax_line' => 'setTaxLine'
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
        'id' => 'getId',
        'variant_id' => 'getVariantId',
        'product_id' => 'getProductId',
        'name' => 'getName',
        'title' => 'getTitle',
        'variant_title' => 'getVariantTitle',
        'price' => 'getPrice',
        'vendor' => 'getVendor',
        'grams' => 'getGrams',
        'quantity' => 'getQuantity',
        'requires_shipping' => 'getRequiresShipping',
        'sku' => 'getSku',
        'taxable' => 'getTaxable',
        'gift_card' => 'getGiftCard',
        'fulfillment_service' => 'getFulfillmentService',
        'properties' => 'getProperties',
        'custom' => 'getCustom',
        'discount' => 'getDiscount',
        'tax_line' => 'getTaxLine'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['variant_id'] = isset($data['variant_id']) ? $data['variant_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['variant_title'] = isset($data['variant_title']) ? $data['variant_title'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['grams'] = isset($data['grams']) ? $data['grams'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['requires_shipping'] = isset($data['requires_shipping']) ? $data['requires_shipping'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['gift_card'] = isset($data['gift_card']) ? $data['gift_card'] : null;
        $this->container['fulfillment_service'] = isset($data['fulfillment_service']) ? $data['fulfillment_service'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['custom'] = isset($data['custom']) ? $data['custom'] : null;
        $this->container['discount'] = isset($data['discount']) ? $data['discount'] : null;
        $this->container['tax_line'] = isset($data['tax_line']) ? $data['tax_line'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
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
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['quantity'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id Can’t be null
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets variant_id
     * @return string
     */
    public function getVariantId()
    {
        return $this->container['variant_id'];
    }

    /**
     * Sets variant_id
     * @param string $variant_id The `id` of the product variant corresponding to the `line_item`.
     * @return $this
     */
    public function setVariantId($variant_id)
    {
        $this->container['variant_id'] = $variant_id;

        return $this;
    }

    /**
     * Gets product_id
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param string $product_id The `id` of the product corresponding to the line item’s product variant.
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The readable name of the product and variant.
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The title of the product or variant.  Can only be specified if this is a custom line item, in which case it is mandatory.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets variant_title
     * @return string
     */
    public function getVariantTitle()
    {
        return $this->container['variant_title'];
    }

    /**
     * Sets variant_title
     * @param string $variant_title The title of the product variant.  Default value is “Custom”
     * @return $this
     */
    public function setVariantTitle($variant_title)
    {
        $this->container['variant_title'] = $variant_title;

        return $this;
    }

    /**
     * Gets price
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param string $price The price of the item before discounts have been applied.  Can only be specified if this is a custom line item, in which case it is mandatory.  To change the price of a product, use `discount` as specified below.
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets vendor
     * @return string
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     * @param string $vendor vendor
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets grams
     * @return string
     */
    public function getGrams()
    {
        return $this->container['grams'];
    }

    /**
     * Sets grams
     * @param string $grams Weight in grams.  Can only be specified if this is a custom line item.  If not specified, defaults to `0`.
     * @return $this
     */
    public function setGrams($grams)
    {
        $this->container['grams'] = $grams;

        return $this;
    }

    /**
     * Gets quantity
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param string $quantity quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets requires_shipping
     * @return bool
     */
    public function getRequiresShipping()
    {
        return $this->container['requires_shipping'];
    }

    /**
     * Sets requires_shipping
     * @param bool $requires_shipping States whether or not the fulfillment requires shipping. Values are `true` or `false`.  Can only be specified if this is a custom line item.  Defaults to `false`.
     * @return $this
     */
    public function setRequiresShipping($requires_shipping)
    {
        $this->container['requires_shipping'] = $requires_shipping;

        return $this;
    }

    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     * @param string $sku Can only be specified if this is a custom line item.
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param bool $taxable States whether or not the product is taxable. Values are `true` or `false`.  Can only be specified if this is a custom line item.  Mandatory for custom products.
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

        return $this;
    }

    /**
     * Gets gift_card
     * @return bool
     */
    public function getGiftCard()
    {
        return $this->container['gift_card'];
    }

    /**
     * Sets gift_card
     * @param bool $gift_card Indicates if the product is a gift card. Values - `true` or `false`.
     * @return $this
     */
    public function setGiftCard($gift_card)
    {
        $this->container['gift_card'] = $gift_card;

        return $this;
    }

    /**
     * Gets fulfillment_service
     * @return string
     */
    public function getFulfillmentService()
    {
        return $this->container['fulfillment_service'];
    }

    /**
     * Sets fulfillment_service
     * @param string $fulfillment_service Service provider who is doing the fulfillment. Valid values are either `manual` or the name of the provider. eg `amazon`, `shipwire`, etc.  Defaults to `manual` for custom line items.
     * @return $this
     */
    public function setFulfillmentService($fulfillment_service)
    {
        $this->container['fulfillment_service'] = $fulfillment_service;

        return $this;
    }

    /**
     * Gets properties
     * @return string
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     * @param string $properties An array of custom information for an item that has been added to the cart. Often used to provide product customization options. For more information, see the [documentation on collecting customization information on the product page] (https://help.shopify.com/themes/customization/products/get-customization-information-for-products)
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets custom
     * @return bool
     */
    public function getCustom()
    {
        return $this->container['custom'];
    }

    /**
     * Sets custom
     * @param bool $custom Indicates if the line item is a custom line item.  `false` if the line item is a product variant, `true` if the line item is `custom`.
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->container['custom'] = $custom;

        return $this;
    }

    /**
     * Gets discount
     * @return object
     */
    public function getDiscount()
    {
        return $this->container['discount'];
    }

    /**
     * Sets discount
     * @param object $discount
     * @return $this
     */
    public function setDiscount($discount)
    {
        $this->container['discount'] = $discount;

        return $this;
    }

    /**
     * Gets tax_line
     * @return \Swagger\Client\Model\TaxLine[]
     */
    public function getTaxLine()
    {
        return $this->container['tax_line'];
    }

    /**
     * Sets tax_line
     * @param \Swagger\Client\Model\TaxLine[] $tax_line
     * @return $this
     */
    public function setTaxLine($tax_line)
    {
        $this->container['tax_line'] = $tax_line;

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


