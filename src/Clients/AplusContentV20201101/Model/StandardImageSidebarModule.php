<?php
/**
 * StandardImageSidebarModule
 *
 * PHP version 5
 *
 * @category Class
 * @package  Glue\SpApi\OpenAPI\Clients\AplusContentV20201101
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for A+ Content Management
 *
 * With the A+ Content API, you can build applications that help selling partners add rich marketing content to their Amazon product detail pages. A+ content helps selling partners share their brand and product story, which helps buyers make informed purchasing decisions. Selling partners assemble content by choosing from content modules and adding images and text.
 *
 * OpenAPI spec version: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model;

use \ArrayAccess;
use \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\ObjectSerializer;

/**
 * StandardImageSidebarModule Class Doc Comment
 *
 * @category Class
 * @description Two images, two paragraphs, and two bulleted lists. One image is smaller and displayed in the sidebar.
 * @package  Glue\SpApi\OpenAPI\Clients\AplusContentV20201101
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class StandardImageSidebarModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StandardImageSidebarModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'headline' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\TextComponent',
        'imageCaptionBlock' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageCaptionBlock',
        'descriptionTextBlock' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextBlock',
        'descriptionListBlock' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextListBlock',
        'sidebarImageTextBlock' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageTextBlock',
        'sidebarListBlock' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextListBlock'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'headline' => null,
        'imageCaptionBlock' => null,
        'descriptionTextBlock' => null,
        'descriptionListBlock' => null,
        'sidebarImageTextBlock' => null,
        'sidebarListBlock' => null
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
        'headline' => 'headline',
        'imageCaptionBlock' => 'imageCaptionBlock',
        'descriptionTextBlock' => 'descriptionTextBlock',
        'descriptionListBlock' => 'descriptionListBlock',
        'sidebarImageTextBlock' => 'sidebarImageTextBlock',
        'sidebarListBlock' => 'sidebarListBlock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'headline' => 'setHeadline',
        'imageCaptionBlock' => 'setImageCaptionBlock',
        'descriptionTextBlock' => 'setDescriptionTextBlock',
        'descriptionListBlock' => 'setDescriptionListBlock',
        'sidebarImageTextBlock' => 'setSidebarImageTextBlock',
        'sidebarListBlock' => 'setSidebarListBlock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'headline' => 'getHeadline',
        'imageCaptionBlock' => 'getImageCaptionBlock',
        'descriptionTextBlock' => 'getDescriptionTextBlock',
        'descriptionListBlock' => 'getDescriptionListBlock',
        'sidebarImageTextBlock' => 'getSidebarImageTextBlock',
        'sidebarListBlock' => 'getSidebarListBlock'
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
        $this->container['headline'] = isset($data['headline']) ? $data['headline'] : null;
        $this->container['imageCaptionBlock'] = isset($data['imageCaptionBlock']) ? $data['imageCaptionBlock'] : null;
        $this->container['descriptionTextBlock'] = isset($data['descriptionTextBlock']) ? $data['descriptionTextBlock'] : null;
        $this->container['descriptionListBlock'] = isset($data['descriptionListBlock']) ? $data['descriptionListBlock'] : null;
        $this->container['sidebarImageTextBlock'] = isset($data['sidebarImageTextBlock']) ? $data['sidebarImageTextBlock'] : null;
        $this->container['sidebarListBlock'] = isset($data['sidebarListBlock']) ? $data['sidebarListBlock'] : null;
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
     * Gets headline
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\TextComponent|null
     */
    public function getHeadline()
    {
        return $this->container['headline'];
    }

    /**
     * Sets headline
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\TextComponent|null $headline headline
     *
     * @return $this
     */
    public function setHeadline($headline)
    {
        $this->container['headline'] = $headline;

        return $this;
    }

    /**
     * Gets imageCaptionBlock
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageCaptionBlock|null
     */
    public function getImageCaptionBlock()
    {
        return $this->container['imageCaptionBlock'];
    }

    /**
     * Sets imageCaptionBlock
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageCaptionBlock|null $imageCaptionBlock imageCaptionBlock
     *
     * @return $this
     */
    public function setImageCaptionBlock($imageCaptionBlock)
    {
        $this->container['imageCaptionBlock'] = $imageCaptionBlock;

        return $this;
    }

    /**
     * Gets descriptionTextBlock
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextBlock|null
     */
    public function getDescriptionTextBlock()
    {
        return $this->container['descriptionTextBlock'];
    }

    /**
     * Sets descriptionTextBlock
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextBlock|null $descriptionTextBlock descriptionTextBlock
     *
     * @return $this
     */
    public function setDescriptionTextBlock($descriptionTextBlock)
    {
        $this->container['descriptionTextBlock'] = $descriptionTextBlock;

        return $this;
    }

    /**
     * Gets descriptionListBlock
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextListBlock|null
     */
    public function getDescriptionListBlock()
    {
        return $this->container['descriptionListBlock'];
    }

    /**
     * Sets descriptionListBlock
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextListBlock|null $descriptionListBlock descriptionListBlock
     *
     * @return $this
     */
    public function setDescriptionListBlock($descriptionListBlock)
    {
        $this->container['descriptionListBlock'] = $descriptionListBlock;

        return $this;
    }

    /**
     * Gets sidebarImageTextBlock
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageTextBlock|null
     */
    public function getSidebarImageTextBlock()
    {
        return $this->container['sidebarImageTextBlock'];
    }

    /**
     * Sets sidebarImageTextBlock
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageTextBlock|null $sidebarImageTextBlock sidebarImageTextBlock
     *
     * @return $this
     */
    public function setSidebarImageTextBlock($sidebarImageTextBlock)
    {
        $this->container['sidebarImageTextBlock'] = $sidebarImageTextBlock;

        return $this;
    }

    /**
     * Gets sidebarListBlock
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextListBlock|null
     */
    public function getSidebarListBlock()
    {
        return $this->container['sidebarListBlock'];
    }

    /**
     * Sets sidebarListBlock
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextListBlock|null $sidebarListBlock sidebarListBlock
     *
     * @return $this
     */
    public function setSidebarListBlock($sidebarListBlock)
    {
        $this->container['sidebarListBlock'] = $sidebarListBlock;

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

