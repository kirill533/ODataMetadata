<?php

namespace AlgoWeb\ODataMetadata\MetadataV2\mapping\cs;

/**
 * Class representing TFunctionMappingEndPropertyType
 *
 *
 * XSD Type: TFunctionMappingEndProperty
 */
class TFunctionMappingEndPropertyType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property \MetadataV2\mapping\cs\TFunctionMappingScalarPropertyType
     * $scalarProperty
     */
    private $scalarProperty = null;

    /**
     * Gets as name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as scalarProperty
     *
     * @return \MetadataV2\mapping\cs\TFunctionMappingScalarPropertyType
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty
     *
     * @param \MetadataV2\mapping\cs\TFunctionMappingScalarPropertyType $scalarProperty
     * @return self
     */
    public function setScalarProperty(\MetadataV2\mapping\cs\TFunctionMappingScalarPropertyType $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }
}