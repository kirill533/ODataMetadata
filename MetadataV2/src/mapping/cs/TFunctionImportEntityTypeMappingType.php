<?php

namespace MetadataV2\mapping\cs;

/**
 * Class representing TFunctionImportEntityTypeMappingType
 *
 *
 * XSD Type: TFunctionImportEntityTypeMapping
 */
class TFunctionImportEntityTypeMappingType
{

    /**
     * @property string $typeName
     */
    private $typeName = null;

    /**
     * @property \MetadataV2\mapping\cs\TScalarPropertyType[] $scalarProperty
     */
    private $scalarProperty = array(
        
    );

    /**
     * @property \MetadataV2\mapping\cs\TFunctionImportConditionType[] $condition
     */
    private $condition = array(
        
    );

    /**
     * Gets as typeName
     *
     * @return string
     */
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Sets a new typeName
     *
     * @param string $typeName
     * @return self
     */
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;
        return $this;
    }

    /**
     * Adds as scalarProperty
     *
     * @return self
     * @param \MetadataV2\mapping\cs\TScalarPropertyType $scalarProperty
     */
    public function addToScalarProperty(\MetadataV2\mapping\cs\TScalarPropertyType $scalarProperty)
    {
        $this->scalarProperty[] = $scalarProperty;
        return $this;
    }

    /**
     * isset scalarProperty
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetScalarProperty($index)
    {
        return isset($this->scalarProperty[$index]);
    }

    /**
     * unset scalarProperty
     *
     * @param scalar $index
     * @return void
     */
    public function unsetScalarProperty($index)
    {
        unset($this->scalarProperty[$index]);
    }

    /**
     * Gets as scalarProperty
     *
     * @return \MetadataV2\mapping\cs\TScalarPropertyType[]
     */
    public function getScalarProperty()
    {
        return $this->scalarProperty;
    }

    /**
     * Sets a new scalarProperty
     *
     * @param \MetadataV2\mapping\cs\TScalarPropertyType[] $scalarProperty
     * @return self
     */
    public function setScalarProperty(array $scalarProperty)
    {
        $this->scalarProperty = $scalarProperty;
        return $this;
    }

    /**
     * Adds as condition
     *
     * @return self
     * @param \MetadataV2\mapping\cs\TFunctionImportConditionType $condition
     */
    public function addToCondition(\MetadataV2\mapping\cs\TFunctionImportConditionType $condition)
    {
        $this->condition[] = $condition;
        return $this;
    }

    /**
     * isset condition
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCondition($index)
    {
        return isset($this->condition[$index]);
    }

    /**
     * unset condition
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCondition($index)
    {
        unset($this->condition[$index]);
    }

    /**
     * Gets as condition
     *
     * @return \MetadataV2\mapping\cs\TFunctionImportConditionType[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets a new condition
     *
     * @param \MetadataV2\mapping\cs\TFunctionImportConditionType[] $condition
     * @return self
     */
    public function setCondition(array $condition)
    {
        $this->condition = $condition;
        return $this;
    }
}
