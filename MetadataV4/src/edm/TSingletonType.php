<?php

namespace MetadataV4\edm;

/**
 * Class representing TSingletonType
 *
 *
 * XSD Type: TSingleton
 */
class TSingletonType
{

    /**
     * @property string $name
     */
    private $name = null;

    /**
     * @property string $type
     */
    private $type = null;

    /**
     * @property \MetadataV4\edm\TNavigationPropertyBindingType[]
     * $navigationPropertyBinding
     */
    private $navigationPropertyBinding = array(
        
    );

    /**
     * @property \MetadataV4\edm\Annotation[] $annotation
     */
    private $annotation = array(
        
    );

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
     * Gets as type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets a new type
     *
     * @param string $type
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Adds as navigationPropertyBinding
     *
     * @return self
     * @param \MetadataV4\edm\TNavigationPropertyBindingType $navigationPropertyBinding
     */
    public function addToNavigationPropertyBinding(\MetadataV4\edm\TNavigationPropertyBindingType $navigationPropertyBinding)
    {
        $this->navigationPropertyBinding[] = $navigationPropertyBinding;
        return $this;
    }

    /**
     * isset navigationPropertyBinding
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNavigationPropertyBinding($index)
    {
        return isset($this->navigationPropertyBinding[$index]);
    }

    /**
     * unset navigationPropertyBinding
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNavigationPropertyBinding($index)
    {
        unset($this->navigationPropertyBinding[$index]);
    }

    /**
     * Gets as navigationPropertyBinding
     *
     * @return \MetadataV4\edm\TNavigationPropertyBindingType[]
     */
    public function getNavigationPropertyBinding()
    {
        return $this->navigationPropertyBinding;
    }

    /**
     * Sets a new navigationPropertyBinding
     *
     * @param \MetadataV4\edm\TNavigationPropertyBindingType[]
     * $navigationPropertyBinding
     * @return self
     */
    public function setNavigationPropertyBinding(array $navigationPropertyBinding)
    {
        $this->navigationPropertyBinding = $navigationPropertyBinding;
        return $this;
    }

    /**
     * Adds as annotation
     *
     * @return self
     * @param \MetadataV4\edm\Annotation $annotation
     */
    public function addToAnnotation(\MetadataV4\edm\Annotation $annotation)
    {
        $this->annotation[] = $annotation;
        return $this;
    }

    /**
     * isset annotation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAnnotation($index)
    {
        return isset($this->annotation[$index]);
    }

    /**
     * unset annotation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAnnotation($index)
    {
        unset($this->annotation[$index]);
    }

    /**
     * Gets as annotation
     *
     * @return \MetadataV4\edm\Annotation[]
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }

    /**
     * Sets a new annotation
     *
     * @param \MetadataV4\edm\Annotation[] $annotation
     * @return self
     */
    public function setAnnotation(array $annotation)
    {
        $this->annotation = $annotation;
        return $this;
    }
}
