<?php
/**
 * Dimension
 *
 * PHP version 5
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\analytics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Seller Service Metrics API
 *
 * The <i>Analytics API</i> provides data and information about a seller and their eBay business.  <br><br>The resources and methods in this API let sellers review information on their listing performance, metrics on their customer service performance, and details on their eBay seller performance rating.  <br><br>The three resources in the Analytics API provide the following data and information: <ul><li><b>Customer Service Metric</b> &ndash; Returns data on a seller's customer service performance as compared to other seller's in the same peer group.</li> <li><b>Traffic Report</b> &ndash; Returns data that shows how buyers are engaging with a seller's listings.</li> <li><b>Seller Standards Profile</b> &ndash; Returns data pertaining to a seller's performance rating.</li></ul> Sellers can use the data and information returned by the various Analytics API methods to determine where they can make improvements to increase sales and how they might improve their seller status as viewed by eBay buyers.  <br><br>For details on using this API, see <a href=\"/api-docs/sell/static/performance/analyzing-performance.html\" title=\"Selling Integration Guide\">Analyzing seller performance</a>.
 *
 * The version of the OpenAPI document: 1.2.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\analytics\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\analytics\ObjectSerializer;

/**
 * Dimension Class Doc Comment
 *
 * @category Class
 * @description The fields in this complex type define the dimension, or attributes, by which the associated customer service metric and benchmark data is measured. The value of dimensionKey gets set according to the configuration of the input request. The name and value pair further define dimension under the key.
 * @package  macropage\SDKs\ebay\rest\analytics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Dimension implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Dimension';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dimensionKey' => 'string',
        'name' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dimensionKey' => null,
        'name' => null,
        'value' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'dimensionKey' => 'dimensionKey',
        'name' => 'name',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimensionKey' => 'setDimensionKey',
        'name' => 'setName',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimensionKey' => 'getDimensionKey',
        'name' => 'getName',
        'value' => 'getValue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['dimensionKey'] = isset($data['dimensionKey']) ? $data['dimensionKey'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets dimensionKey
     *
     * @return string|null
     */
    public function getDimensionKey()
    {
        return $this->container['dimensionKey'];
    }

    /**
     * Sets dimensionKey
     *
     * @param string|null $dimensionKey dimensionKey defines the basis against which the seller's customer service metric is measured. The value of this field gets set according to the value of the customer_service_metric_type input parameter. The following input configurations return the responses shown: ITEM_NOT_AS_DESCRIBED &ndash; Returns benchmark ratings based on L1 listing categories, so the result shows metrics where the dimensionKey is set to LISTING_CATEGORY. ITEM_NOT_RECEIVED &ndash; Returns benchmark ratings based on world shipping regions, so the result shows metrics where the dimensionKey is set to SHIPPING_REGION. The shipping region is indicated by the associated value field. For specifics on world shipping regions, see the FAQ section on the following page: Monitor your service metrics For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/DimensionTypeEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setDimensionKey($dimensionKey)
    {
        $this->container['dimensionKey'] = $dimensionKey;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The dimension name returned in this field depends on the dimensionKey: If dimensionKey is set to SHIPPING_REGION, this field is set to one of following values, which represent established shipping corridors: Domestic International: Mature region International: Emerging region If dimensionKey is set to LISTING_CATEGORY, this field is set to the name of the primary (L1) category in which the items being rated were listed.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value The value returned in this field depends on the dimensionKey. If dimensionKey equals LISTING_CATEGORY, the value returned in this field is the category ID of the primary (L1) category in which the items being rated were listed. If dimensionKey equals SHIPPING_REGION, one of the following values is returned: DOMESTIC INTERNATIONAL_MATURED_REGION INTERNATIONAL_EMERGING_REGION
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


