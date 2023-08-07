<?php
/**
 * ContentModule
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
 * ContentModule Class Doc Comment
 *
 * @category Class
 * @description An A+ Content module. An A+ Content document is composed of content modules. The contentModuleType property selects which content module types to use.
 * @package  Glue\SpApi\OpenAPI\Clients\AplusContentV20201101
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ContentModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContentModule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contentModuleType' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\ContentModuleType',
        'standardCompanyLogo' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardCompanyLogoModule',
        'standardComparisonTable' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardComparisonTableModule',
        'standardFourImageText' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardFourImageTextModule',
        'standardFourImageTextQuadrant' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardFourImageTextQuadrantModule',
        'standardHeaderImageText' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardHeaderImageTextModule',
        'standardImageSidebar' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageSidebarModule',
        'standardImageTextOverlay' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageTextOverlayModule',
        'standardMultipleImageText' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardMultipleImageTextModule',
        'standardProductDescription' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardProductDescriptionModule',
        'standardSingleImageHighlights' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleImageHighlightsModule',
        'standardSingleImageSpecsDetail' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleImageSpecsDetailModule',
        'standardSingleSideImage' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleSideImageModule',
        'standardTechSpecs' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTechSpecsModule',
        'standardText' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextModule',
        'standardThreeImageText' => '\Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardThreeImageTextModule'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'contentModuleType' => null,
        'standardCompanyLogo' => null,
        'standardComparisonTable' => null,
        'standardFourImageText' => null,
        'standardFourImageTextQuadrant' => null,
        'standardHeaderImageText' => null,
        'standardImageSidebar' => null,
        'standardImageTextOverlay' => null,
        'standardMultipleImageText' => null,
        'standardProductDescription' => null,
        'standardSingleImageHighlights' => null,
        'standardSingleImageSpecsDetail' => null,
        'standardSingleSideImage' => null,
        'standardTechSpecs' => null,
        'standardText' => null,
        'standardThreeImageText' => null
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
        'contentModuleType' => 'contentModuleType',
        'standardCompanyLogo' => 'standardCompanyLogo',
        'standardComparisonTable' => 'standardComparisonTable',
        'standardFourImageText' => 'standardFourImageText',
        'standardFourImageTextQuadrant' => 'standardFourImageTextQuadrant',
        'standardHeaderImageText' => 'standardHeaderImageText',
        'standardImageSidebar' => 'standardImageSidebar',
        'standardImageTextOverlay' => 'standardImageTextOverlay',
        'standardMultipleImageText' => 'standardMultipleImageText',
        'standardProductDescription' => 'standardProductDescription',
        'standardSingleImageHighlights' => 'standardSingleImageHighlights',
        'standardSingleImageSpecsDetail' => 'standardSingleImageSpecsDetail',
        'standardSingleSideImage' => 'standardSingleSideImage',
        'standardTechSpecs' => 'standardTechSpecs',
        'standardText' => 'standardText',
        'standardThreeImageText' => 'standardThreeImageText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contentModuleType' => 'setContentModuleType',
        'standardCompanyLogo' => 'setStandardCompanyLogo',
        'standardComparisonTable' => 'setStandardComparisonTable',
        'standardFourImageText' => 'setStandardFourImageText',
        'standardFourImageTextQuadrant' => 'setStandardFourImageTextQuadrant',
        'standardHeaderImageText' => 'setStandardHeaderImageText',
        'standardImageSidebar' => 'setStandardImageSidebar',
        'standardImageTextOverlay' => 'setStandardImageTextOverlay',
        'standardMultipleImageText' => 'setStandardMultipleImageText',
        'standardProductDescription' => 'setStandardProductDescription',
        'standardSingleImageHighlights' => 'setStandardSingleImageHighlights',
        'standardSingleImageSpecsDetail' => 'setStandardSingleImageSpecsDetail',
        'standardSingleSideImage' => 'setStandardSingleSideImage',
        'standardTechSpecs' => 'setStandardTechSpecs',
        'standardText' => 'setStandardText',
        'standardThreeImageText' => 'setStandardThreeImageText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contentModuleType' => 'getContentModuleType',
        'standardCompanyLogo' => 'getStandardCompanyLogo',
        'standardComparisonTable' => 'getStandardComparisonTable',
        'standardFourImageText' => 'getStandardFourImageText',
        'standardFourImageTextQuadrant' => 'getStandardFourImageTextQuadrant',
        'standardHeaderImageText' => 'getStandardHeaderImageText',
        'standardImageSidebar' => 'getStandardImageSidebar',
        'standardImageTextOverlay' => 'getStandardImageTextOverlay',
        'standardMultipleImageText' => 'getStandardMultipleImageText',
        'standardProductDescription' => 'getStandardProductDescription',
        'standardSingleImageHighlights' => 'getStandardSingleImageHighlights',
        'standardSingleImageSpecsDetail' => 'getStandardSingleImageSpecsDetail',
        'standardSingleSideImage' => 'getStandardSingleSideImage',
        'standardTechSpecs' => 'getStandardTechSpecs',
        'standardText' => 'getStandardText',
        'standardThreeImageText' => 'getStandardThreeImageText'
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
        $this->container['contentModuleType'] = isset($data['contentModuleType']) ? $data['contentModuleType'] : null;
        $this->container['standardCompanyLogo'] = isset($data['standardCompanyLogo']) ? $data['standardCompanyLogo'] : null;
        $this->container['standardComparisonTable'] = isset($data['standardComparisonTable']) ? $data['standardComparisonTable'] : null;
        $this->container['standardFourImageText'] = isset($data['standardFourImageText']) ? $data['standardFourImageText'] : null;
        $this->container['standardFourImageTextQuadrant'] = isset($data['standardFourImageTextQuadrant']) ? $data['standardFourImageTextQuadrant'] : null;
        $this->container['standardHeaderImageText'] = isset($data['standardHeaderImageText']) ? $data['standardHeaderImageText'] : null;
        $this->container['standardImageSidebar'] = isset($data['standardImageSidebar']) ? $data['standardImageSidebar'] : null;
        $this->container['standardImageTextOverlay'] = isset($data['standardImageTextOverlay']) ? $data['standardImageTextOverlay'] : null;
        $this->container['standardMultipleImageText'] = isset($data['standardMultipleImageText']) ? $data['standardMultipleImageText'] : null;
        $this->container['standardProductDescription'] = isset($data['standardProductDescription']) ? $data['standardProductDescription'] : null;
        $this->container['standardSingleImageHighlights'] = isset($data['standardSingleImageHighlights']) ? $data['standardSingleImageHighlights'] : null;
        $this->container['standardSingleImageSpecsDetail'] = isset($data['standardSingleImageSpecsDetail']) ? $data['standardSingleImageSpecsDetail'] : null;
        $this->container['standardSingleSideImage'] = isset($data['standardSingleSideImage']) ? $data['standardSingleSideImage'] : null;
        $this->container['standardTechSpecs'] = isset($data['standardTechSpecs']) ? $data['standardTechSpecs'] : null;
        $this->container['standardText'] = isset($data['standardText']) ? $data['standardText'] : null;
        $this->container['standardThreeImageText'] = isset($data['standardThreeImageText']) ? $data['standardThreeImageText'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['contentModuleType'] === null) {
            $invalidProperties[] = "'contentModuleType' can't be null";
        }
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
     * Gets contentModuleType
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\ContentModuleType
     */
    public function getContentModuleType()
    {
        return $this->container['contentModuleType'];
    }

    /**
     * Sets contentModuleType
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\ContentModuleType $contentModuleType contentModuleType
     *
     * @return $this
     */
    public function setContentModuleType($contentModuleType)
    {
        $this->container['contentModuleType'] = $contentModuleType;

        return $this;
    }

    /**
     * Gets standardCompanyLogo
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardCompanyLogoModule|null
     */
    public function getStandardCompanyLogo()
    {
        return $this->container['standardCompanyLogo'];
    }

    /**
     * Sets standardCompanyLogo
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardCompanyLogoModule|null $standardCompanyLogo standardCompanyLogo
     *
     * @return $this
     */
    public function setStandardCompanyLogo($standardCompanyLogo)
    {
        $this->container['standardCompanyLogo'] = $standardCompanyLogo;

        return $this;
    }

    /**
     * Gets standardComparisonTable
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardComparisonTableModule|null
     */
    public function getStandardComparisonTable()
    {
        return $this->container['standardComparisonTable'];
    }

    /**
     * Sets standardComparisonTable
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardComparisonTableModule|null $standardComparisonTable standardComparisonTable
     *
     * @return $this
     */
    public function setStandardComparisonTable($standardComparisonTable)
    {
        $this->container['standardComparisonTable'] = $standardComparisonTable;

        return $this;
    }

    /**
     * Gets standardFourImageText
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardFourImageTextModule|null
     */
    public function getStandardFourImageText()
    {
        return $this->container['standardFourImageText'];
    }

    /**
     * Sets standardFourImageText
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardFourImageTextModule|null $standardFourImageText standardFourImageText
     *
     * @return $this
     */
    public function setStandardFourImageText($standardFourImageText)
    {
        $this->container['standardFourImageText'] = $standardFourImageText;

        return $this;
    }

    /**
     * Gets standardFourImageTextQuadrant
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardFourImageTextQuadrantModule|null
     */
    public function getStandardFourImageTextQuadrant()
    {
        return $this->container['standardFourImageTextQuadrant'];
    }

    /**
     * Sets standardFourImageTextQuadrant
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardFourImageTextQuadrantModule|null $standardFourImageTextQuadrant standardFourImageTextQuadrant
     *
     * @return $this
     */
    public function setStandardFourImageTextQuadrant($standardFourImageTextQuadrant)
    {
        $this->container['standardFourImageTextQuadrant'] = $standardFourImageTextQuadrant;

        return $this;
    }

    /**
     * Gets standardHeaderImageText
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardHeaderImageTextModule|null
     */
    public function getStandardHeaderImageText()
    {
        return $this->container['standardHeaderImageText'];
    }

    /**
     * Sets standardHeaderImageText
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardHeaderImageTextModule|null $standardHeaderImageText standardHeaderImageText
     *
     * @return $this
     */
    public function setStandardHeaderImageText($standardHeaderImageText)
    {
        $this->container['standardHeaderImageText'] = $standardHeaderImageText;

        return $this;
    }

    /**
     * Gets standardImageSidebar
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageSidebarModule|null
     */
    public function getStandardImageSidebar()
    {
        return $this->container['standardImageSidebar'];
    }

    /**
     * Sets standardImageSidebar
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageSidebarModule|null $standardImageSidebar standardImageSidebar
     *
     * @return $this
     */
    public function setStandardImageSidebar($standardImageSidebar)
    {
        $this->container['standardImageSidebar'] = $standardImageSidebar;

        return $this;
    }

    /**
     * Gets standardImageTextOverlay
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageTextOverlayModule|null
     */
    public function getStandardImageTextOverlay()
    {
        return $this->container['standardImageTextOverlay'];
    }

    /**
     * Sets standardImageTextOverlay
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardImageTextOverlayModule|null $standardImageTextOverlay standardImageTextOverlay
     *
     * @return $this
     */
    public function setStandardImageTextOverlay($standardImageTextOverlay)
    {
        $this->container['standardImageTextOverlay'] = $standardImageTextOverlay;

        return $this;
    }

    /**
     * Gets standardMultipleImageText
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardMultipleImageTextModule|null
     */
    public function getStandardMultipleImageText()
    {
        return $this->container['standardMultipleImageText'];
    }

    /**
     * Sets standardMultipleImageText
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardMultipleImageTextModule|null $standardMultipleImageText standardMultipleImageText
     *
     * @return $this
     */
    public function setStandardMultipleImageText($standardMultipleImageText)
    {
        $this->container['standardMultipleImageText'] = $standardMultipleImageText;

        return $this;
    }

    /**
     * Gets standardProductDescription
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardProductDescriptionModule|null
     */
    public function getStandardProductDescription()
    {
        return $this->container['standardProductDescription'];
    }

    /**
     * Sets standardProductDescription
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardProductDescriptionModule|null $standardProductDescription standardProductDescription
     *
     * @return $this
     */
    public function setStandardProductDescription($standardProductDescription)
    {
        $this->container['standardProductDescription'] = $standardProductDescription;

        return $this;
    }

    /**
     * Gets standardSingleImageHighlights
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleImageHighlightsModule|null
     */
    public function getStandardSingleImageHighlights()
    {
        return $this->container['standardSingleImageHighlights'];
    }

    /**
     * Sets standardSingleImageHighlights
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleImageHighlightsModule|null $standardSingleImageHighlights standardSingleImageHighlights
     *
     * @return $this
     */
    public function setStandardSingleImageHighlights($standardSingleImageHighlights)
    {
        $this->container['standardSingleImageHighlights'] = $standardSingleImageHighlights;

        return $this;
    }

    /**
     * Gets standardSingleImageSpecsDetail
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleImageSpecsDetailModule|null
     */
    public function getStandardSingleImageSpecsDetail()
    {
        return $this->container['standardSingleImageSpecsDetail'];
    }

    /**
     * Sets standardSingleImageSpecsDetail
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleImageSpecsDetailModule|null $standardSingleImageSpecsDetail standardSingleImageSpecsDetail
     *
     * @return $this
     */
    public function setStandardSingleImageSpecsDetail($standardSingleImageSpecsDetail)
    {
        $this->container['standardSingleImageSpecsDetail'] = $standardSingleImageSpecsDetail;

        return $this;
    }

    /**
     * Gets standardSingleSideImage
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleSideImageModule|null
     */
    public function getStandardSingleSideImage()
    {
        return $this->container['standardSingleSideImage'];
    }

    /**
     * Sets standardSingleSideImage
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardSingleSideImageModule|null $standardSingleSideImage standardSingleSideImage
     *
     * @return $this
     */
    public function setStandardSingleSideImage($standardSingleSideImage)
    {
        $this->container['standardSingleSideImage'] = $standardSingleSideImage;

        return $this;
    }

    /**
     * Gets standardTechSpecs
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTechSpecsModule|null
     */
    public function getStandardTechSpecs()
    {
        return $this->container['standardTechSpecs'];
    }

    /**
     * Sets standardTechSpecs
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTechSpecsModule|null $standardTechSpecs standardTechSpecs
     *
     * @return $this
     */
    public function setStandardTechSpecs($standardTechSpecs)
    {
        $this->container['standardTechSpecs'] = $standardTechSpecs;

        return $this;
    }

    /**
     * Gets standardText
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextModule|null
     */
    public function getStandardText()
    {
        return $this->container['standardText'];
    }

    /**
     * Sets standardText
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardTextModule|null $standardText standardText
     *
     * @return $this
     */
    public function setStandardText($standardText)
    {
        $this->container['standardText'] = $standardText;

        return $this;
    }

    /**
     * Gets standardThreeImageText
     *
     * @return \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardThreeImageTextModule|null
     */
    public function getStandardThreeImageText()
    {
        return $this->container['standardThreeImageText'];
    }

    /**
     * Sets standardThreeImageText
     *
     * @param \Glue\SpApi\OpenAPI\Clients\AplusContentV20201101\Model\StandardThreeImageTextModule|null $standardThreeImageText standardThreeImageText
     *
     * @return $this
     */
    public function setStandardThreeImageText($standardThreeImageText)
    {
        $this->container['standardThreeImageText'] = $standardThreeImageText;

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


