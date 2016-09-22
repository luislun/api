<?php
/**
 * Invoice
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
 * API REST Beeusoft Contpaqi
 *
 * Esta es la documentación con la que podrán interactuar con Contpaqi para generar diferentes tipos de documentos..
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
 * Invoice Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Invoice implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'uuid' => 'string',
        'rfc_emisor' => 'string',
        'receptor' => '\Swagger\Client\Model\Contribuyente',
        'detail' => '\Swagger\Client\Model\Item[]'
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
        'uuid' => 'UUID',
        'rfc_emisor' => 'rfcEmisor',
        'receptor' => 'receptor',
        'detail' => 'detail'
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
        'uuid' => 'setUuid',
        'rfc_emisor' => 'setRfcEmisor',
        'receptor' => 'setReceptor',
        'detail' => 'setDetail'
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
        'uuid' => 'getUuid',
        'rfc_emisor' => 'getRfcEmisor',
        'receptor' => 'getReceptor',
        'detail' => 'getDetail'
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
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['rfc_emisor'] = isset($data['rfc_emisor']) ? $data['rfc_emisor'] : null;
        $this->container['receptor'] = isset($data['receptor']) ? $data['receptor'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['rfc_emisor'] === null) {
            $invalid_properties[] = "'rfc_emisor' can't be null";
        }
        if ($this->container['receptor'] === null) {
            $invalid_properties[] = "'receptor' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalid_properties[] = "'detail' can't be null";
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
        if ($this->container['rfc_emisor'] === null) {
            return false;
        }
        if ($this->container['receptor'] === null) {
            return false;
        }
        if ($this->container['detail'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets uuid
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     * @param string $uuid UUID del documento CFDI
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets rfc_emisor
     * @return string
     */
    public function getRfcEmisor()
    {
        return $this->container['rfc_emisor'];
    }

    /**
     * Sets rfc_emisor
     * @param string $rfc_emisor Rfc del emisor de la factura
     * @return $this
     */
    public function setRfcEmisor($rfc_emisor)
    {
        $this->container['rfc_emisor'] = $rfc_emisor;

        return $this;
    }

    /**
     * Gets receptor
     * @return \Swagger\Client\Model\Contribuyente
     */
    public function getReceptor()
    {
        return $this->container['receptor'];
    }

    /**
     * Sets receptor
     * @param \Swagger\Client\Model\Contribuyente $receptor
     * @return $this
     */
    public function setReceptor($receptor)
    {
        $this->container['receptor'] = $receptor;

        return $this;
    }

    /**
     * Gets detail
     * @return \Swagger\Client\Model\Item[]
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     * @param \Swagger\Client\Model\Item[] $detail
     * @return $this
     */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;

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

