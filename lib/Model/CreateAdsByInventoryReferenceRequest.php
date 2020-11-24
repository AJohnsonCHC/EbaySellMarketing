<?php
/**
 * CreateAdsByInventoryReferenceRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  eBay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API
 *
 * <p>The <i>Marketing API </i> offers two platforms that sellers can use to promote and advertise their products:</p> <ul><li><b>Promoted Listings</b> is an eBay ad service that lets sellers set up <i>ad campaigns </i> for the products they want to promote. eBay displays the ads in search results and in other marketing modules as <b>SPONSORED</b> listings. If an item in a Promoted Listings campaign sells, the seller is assessed a Promoted Listings fee, which is a seller-specified percentage applied to the sales price. For complete details, see <a href=\"/api-docs/sell/static/marketing/promoted-listings.html\">Promoted Listings</a>.</li>  <li><b>Promotions Manager</b> gives sellers a way to offer discounts on specific items as a way to attract buyers to their inventory. Sellers can set up discounts (such as \"20% off\" and other types of offers) on specific items or on an entire customer order. To further attract buyers, eBay prominently displays promotion <i>teasers</i> throughout buyer flows. For complete details, see <a href=\"/api-docs/sell/static/marketing/promotions-manager.html\">Promotions Manager</a>.</li></ul>  <p><b>Marketing reports</b>, on both the Promoted Listings and Promotions Manager platforms, give sellers information that shows the effectiveness of their marketing strategies. The data gives sellers the ability to review and fine tune their marketing efforts.</p> <p class=\"tablenote\"><b>Important!</b> Sellers must have an active eBay Store subscription, and they must accept the <b>Terms and Conditions</b> before they can make requests to these APIs in the Production environment. There are also site-specific listings requirements and restrictions associated with these marketing tools, as listed in the \"requirements and restrictions\" sections for <a href=\"/api-docs/sell/marketing/static/overview.html#PL-requirements\">Promoted Listings</a> and <a href=\"/api-docs/sell/marketing/static/overview.html#PM-requirements\">Promotions Manager</a>.</p> <p>The table below lists all the Marketing API calls grouped by resource.</p>
 *
 * The version of the OpenAPI document: v1.8.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-beta3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace eBay\Sell\Marketing\Model;

use \ArrayAccess;
use \eBay\Sell\Marketing\ObjectSerializer;

/**
 * CreateAdsByInventoryReferenceRequest Class Doc Comment
 *
 * @category Class
 * @description This type defines the fields needed to create ads by inventory reference ID request.
 * @package  eBay\Sell\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class CreateAdsByInventoryReferenceRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateAdsByInventoryReferenceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bid_percentage' => 'string',
        'inventory_reference_id' => 'string',
        'inventory_reference_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bid_percentage' => null,
        'inventory_reference_id' => null,
        'inventory_reference_type' => null
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
        'bid_percentage' => 'bidPercentage',
        'inventory_reference_id' => 'inventoryReferenceId',
        'inventory_reference_type' => 'inventoryReferenceType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bid_percentage' => 'setBidPercentage',
        'inventory_reference_id' => 'setInventoryReferenceId',
        'inventory_reference_type' => 'setInventoryReferenceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bid_percentage' => 'getBidPercentage',
        'inventory_reference_id' => 'getInventoryReferenceId',
        'inventory_reference_type' => 'getInventoryReferenceType'
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
        $this->container['bid_percentage'] = $data['bid_percentage'] ?? null;
        $this->container['inventory_reference_id'] = $data['inventory_reference_id'] ?? null;
        $this->container['inventory_reference_type'] = $data['inventory_reference_type'] ?? null;
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
     * Gets bid_percentage
     *
     * @return string|null
     */
    public function getBidPercentage()
    {
        return $this->container['bid_percentage'];
    }

    /**
     * Sets bid_percentage
     *
     * @param string|null $bid_percentage The user-defined bid percentage (also known as the ad rate) sets the level that eBay increases the visibility of a listing across the eBay buyer flows. The higher the bidPercentage value, the more eBay promotes the listing. The value specified here is also used to calculate the Promoted Listings fee. This percentage value is multiplied by the final sales price to determine the fee. The Promoted Listings fee is determined at the time the transaction completes and the seller is assessed the fee only when an item sells through a Promoted Listings ad campaign. bidPercentage is a single precision value that is guided by the following rules: These values are valid: &nbsp;&nbsp;&nbsp;1, &nbsp;&nbsp;&nbsp;1.0, &nbsp;&nbsp;&nbsp;4.1, &nbsp;&nbsp;&nbsp;5.0, &nbsp;&nbsp;&nbsp;5.5, ... These values are not valid: &nbsp;&nbsp;&nbsp;0.01, &nbsp;&nbsp;&nbsp;10.75, &nbsp;&nbsp;&nbsp;99.99, &nbsp;&nbsp;&nbsp;and so on. If a bid percentage is not provided for an ad, eBay uses the default bid percentage of the associated campaign.Minimum value: 1.0 Maximum value: 100.0
     *
     * @return self
     */
    public function setBidPercentage($bid_percentage)
    {
        $this->container['bid_percentage'] = $bid_percentage;

        return $this;
    }

    /**
     * Gets inventory_reference_id
     *
     * @return string|null
     */
    public function getInventoryReferenceId()
    {
        return $this->container['inventory_reference_id'];
    }

    /**
     * Sets inventory_reference_id
     *
     * @param string|null $inventory_reference_id An ID that identifies an a single-item listing or multiple-variation listing that is managed with the Inventory API. The inventory reference ID is a seller-defined value that can be either an SKU for a single-item listing or an inventoryItemGroupKey for a multiple-value listing. An inventoryItemGroupKey is a value that the seller defines to indicate a listing that's the parent of a inventory item group (a multiple-variation listing, such as a listing for shirt that's available in multiple sizes and colors). You must always specify both an inventoryRreferenceId and an inventoryReferenceType to indicate an item that's managed with the Inventory API.
     *
     * @return self
     */
    public function setInventoryReferenceId($inventory_reference_id)
    {
        $this->container['inventory_reference_id'] = $inventory_reference_id;

        return $this;
    }

    /**
     * Gets inventory_reference_type
     *
     * @return string|null
     */
    public function getInventoryReferenceType()
    {
        return $this->container['inventory_reference_type'];
    }

    /**
     * Sets inventory_reference_type
     *
     * @param string|null $inventory_reference_type Indicates the type of item the inventoryReferenceId references. The item can be either an INVENTORY_ITEM or INVENTORY_ITEM_GROUP. You must always pair an inventoryReferenceId with and inventoryReferenceType. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/marketing/types/pls:InventoryReferenceTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setInventoryReferenceType($inventory_reference_type)
    {
        $this->container['inventory_reference_type'] = $inventory_reference_type;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


