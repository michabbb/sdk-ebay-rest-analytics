<?php
/**
 * GetCustomerServiceMetricResponse
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
 * OpenAPI spec version: 1.2.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
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
 * GetCustomerServiceMetricResponse Class Doc Comment
 *
 * @category Class
 * @description This complex data type defines the response data that is returned from a request to getCustomerServiceMetric. The dimensionMetrics object contains the details of the dimension being measured and the calculated customer service metric values. The evaluationCycle defines the period used to calculate the metric values. The marketplaceId is the eBay marketplace for which the metrics are being considered.
 * @package  macropage\SDKs\ebay\rest\analytics
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GetCustomerServiceMetricResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetCustomerServiceMetricResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dimensionMetrics' => '\macropage\SDKs\ebay\rest\analytics\Model\DimensionMetric[]',
        'evaluationCycle' => '\macropage\SDKs\ebay\rest\analytics\Model\EvaluationCycle',
        'marketplaceId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'dimensionMetrics' => null,
        'evaluationCycle' => null,
        'marketplaceId' => null
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
        'dimensionMetrics' => 'dimensionMetrics',
        'evaluationCycle' => 'evaluationCycle',
        'marketplaceId' => 'marketplaceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimensionMetrics' => 'setDimensionMetrics',
        'evaluationCycle' => 'setEvaluationCycle',
        'marketplaceId' => 'setMarketplaceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimensionMetrics' => 'getDimensionMetrics',
        'evaluationCycle' => 'getEvaluationCycle',
        'marketplaceId' => 'getMarketplaceId'
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
        $this->container['dimensionMetrics'] = isset($data['dimensionMetrics']) ? $data['dimensionMetrics'] : null;
        $this->container['evaluationCycle'] = isset($data['evaluationCycle']) ? $data['evaluationCycle'] : null;
        $this->container['marketplaceId'] = isset($data['marketplaceId']) ? $data['marketplaceId'] : null;
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
     * Gets dimensionMetrics
     *
     * @return \macropage\SDKs\ebay\rest\analytics\Model\DimensionMetric[]|null
     */
    public function getDimensionMetrics()
    {
        return $this->container['dimensionMetrics'];
    }

    /**
     * Sets dimensionMetrics
     *
     * @param \macropage\SDKs\ebay\rest\analytics\Model\DimensionMetric[]|null $dimensionMetrics This container provides a seller's customer service metric performance for a given dimension. In the getCustomerServiceMetric request, specify values for the following request parameters to control the returned dimension and the associated metric values: customer_service_metric_type evaluation_type evaluation_marketplace_id
     *
     * @return $this
     */
    public function setDimensionMetrics($dimensionMetrics)
    {
        $this->container['dimensionMetrics'] = $dimensionMetrics;

        return $this;
    }

    /**
     * Gets evaluationCycle
     *
     * @return \macropage\SDKs\ebay\rest\analytics\Model\EvaluationCycle|null
     */
    public function getEvaluationCycle()
    {
        return $this->container['evaluationCycle'];
    }

    /**
     * Sets evaluationCycle
     *
     * @param \macropage\SDKs\ebay\rest\analytics\Model\EvaluationCycle|null $evaluationCycle evaluationCycle
     *
     * @return $this
     */
    public function setEvaluationCycle($evaluationCycle)
    {
        $this->container['evaluationCycle'] = $evaluationCycle;

        return $this;
    }

    /**
     * Gets marketplaceId
     *
     * @return string|null
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplaceId'];
    }

    /**
     * Sets marketplaceId
     *
     * @param string|null $marketplaceId The eBay marketplace ID of the marketplace upon which the customer service metric evaluation is based. The customer_service_metric resource supports a limited set of marketplaces. For a complete list of the supported marketplaces, please see the Service metrics policy page. For implementation help, refer to <a href='https://developer.ebay.com/devzone/rest/api-ref/analytics/types/MarketplaceIdEnum.html'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setMarketplaceId($marketplaceId)
    {
        $this->container['marketplaceId'] = $marketplaceId;

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
}


