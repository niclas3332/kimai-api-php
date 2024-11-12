<?php
/**
 * ActivityEntity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Kimai - API
 *
 * JSON API for the Kimai time-tracking software. Read our [API documentation](https://www.kimai.org/documentation/rest-api.html) and download the [Open API definition](doc.json) to import into your API client.
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.64
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * ActivityEntity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ActivityEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ActivityEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'parent_title' => 'string',
        'project' => 'int',
        'id' => 'int',
        'name' => 'string',
        'comment' => 'string',
        'visible' => 'bool',
        'billable' => 'bool',
        'meta_fields' => '\Swagger\Client\Model\ActivityMeta[]',
        'teams' => '\Swagger\Client\Model\Team[]',
        'number' => 'string',
        'budget' => 'float',
        'time_budget' => 'int',
        'budget_type' => 'string',
        'color' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'parent_title' => null,
        'project' => null,
        'id' => null,
        'name' => null,
        'comment' => null,
        'visible' => null,
        'billable' => null,
        'meta_fields' => null,
        'teams' => null,
        'number' => null,
        'budget' => 'float',
        'time_budget' => null,
        'budget_type' => null,
        'color' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'parent_title' => 'parentTitle',
        'project' => 'project',
        'id' => 'id',
        'name' => 'name',
        'comment' => 'comment',
        'visible' => 'visible',
        'billable' => 'billable',
        'meta_fields' => 'metaFields',
        'teams' => 'teams',
        'number' => 'number',
        'budget' => 'budget',
        'time_budget' => 'timeBudget',
        'budget_type' => 'budgetType',
        'color' => 'color'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'parent_title' => 'setParentTitle',
        'project' => 'setProject',
        'id' => 'setId',
        'name' => 'setName',
        'comment' => 'setComment',
        'visible' => 'setVisible',
        'billable' => 'setBillable',
        'meta_fields' => 'setMetaFields',
        'teams' => 'setTeams',
        'number' => 'setNumber',
        'budget' => 'setBudget',
        'time_budget' => 'setTimeBudget',
        'budget_type' => 'setBudgetType',
        'color' => 'setColor'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'parent_title' => 'getParentTitle',
        'project' => 'getProject',
        'id' => 'getId',
        'name' => 'getName',
        'comment' => 'getComment',
        'visible' => 'getVisible',
        'billable' => 'getBillable',
        'meta_fields' => 'getMetaFields',
        'teams' => 'getTeams',
        'number' => 'getNumber',
        'budget' => 'getBudget',
        'time_budget' => 'getTimeBudget',
        'budget_type' => 'getBudgetType',
        'color' => 'getColor'
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
        return self::$swaggerModelName;
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
        $this->container['parent_title'] = isset($data['parent_title']) ? $data['parent_title'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['visible'] = isset($data['visible']) ? $data['visible'] : null;
        $this->container['billable'] = isset($data['billable']) ? $data['billable'] : null;
        $this->container['meta_fields'] = isset($data['meta_fields']) ? $data['meta_fields'] : null;
        $this->container['teams'] = isset($data['teams']) ? $data['teams'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
        $this->container['time_budget'] = isset($data['time_budget']) ? $data['time_budget'] : null;
        $this->container['budget_type'] = isset($data['budget_type']) ? $data['budget_type'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['visible'] === null) {
            $invalidProperties[] = "'visible' can't be null";
        }
        if ($this->container['billable'] === null) {
            $invalidProperties[] = "'billable' can't be null";
        }
        if ($this->container['budget'] === null) {
            $invalidProperties[] = "'budget' can't be null";
        }
        if ($this->container['time_budget'] === null) {
            $invalidProperties[] = "'time_budget' can't be null";
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
     * Gets parent_title
     *
     * @return string
     */
    public function getParentTitle()
    {
        return $this->container['parent_title'];
    }

    /**
     * Sets parent_title
     *
     * @param string $parent_title parent_title
     *
     * @return $this
     */
    public function setParentTitle($parent_title)
    {
        $this->container['parent_title'] = $parent_title;

        return $this;
    }

    /**
     * Gets project
     *
     * @return int
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param int $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->container['visible'];
    }

    /**
     * Sets visible
     *
     * @param bool $visible visible
     *
     * @return $this
     */
    public function setVisible($visible)
    {
        $this->container['visible'] = $visible;

        return $this;
    }

    /**
     * Gets billable
     *
     * @return bool
     */
    public function getBillable()
    {
        return $this->container['billable'];
    }

    /**
     * Sets billable
     *
     * @param bool $billable billable
     *
     * @return $this
     */
    public function setBillable($billable)
    {
        $this->container['billable'] = $billable;

        return $this;
    }

    /**
     * Gets meta_fields
     *
     * @return \Swagger\Client\Model\ActivityMeta[]
     */
    public function getMetaFields()
    {
        return $this->container['meta_fields'];
    }

    /**
     * Sets meta_fields
     *
     * @param \Swagger\Client\Model\ActivityMeta[] $meta_fields meta_fields
     *
     * @return $this
     */
    public function setMetaFields($meta_fields)
    {
        $this->container['meta_fields'] = $meta_fields;

        return $this;
    }

    /**
     * Gets teams
     *
     * @return \Swagger\Client\Model\Team[]
     */
    public function getTeams()
    {
        return $this->container['teams'];
    }

    /**
     * Sets teams
     *
     * @param \Swagger\Client\Model\Team[] $teams teams
     *
     * @return $this
     */
    public function setTeams($teams)
    {
        $this->container['teams'] = $teams;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param float $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

        return $this;
    }

    /**
     * Gets time_budget
     *
     * @return int
     */
    public function getTimeBudget()
    {
        return $this->container['time_budget'];
    }

    /**
     * Sets time_budget
     *
     * @param int $time_budget time_budget
     *
     * @return $this
     */
    public function setTimeBudget($time_budget)
    {
        $this->container['time_budget'] = $time_budget;

        return $this;
    }

    /**
     * Gets budget_type
     *
     * @return string
     */
    public function getBudgetType()
    {
        return $this->container['budget_type'];
    }

    /**
     * Sets budget_type
     *
     * @param string $budget_type budget_type
     *
     * @return $this
     */
    public function setBudgetType($budget_type)
    {
        $this->container['budget_type'] = $budget_type;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
