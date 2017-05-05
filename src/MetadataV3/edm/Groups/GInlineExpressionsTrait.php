<?php

namespace AlgoWeb\ODataMetadata\MetadataV3\edm\Groups;

use AlgoWeb\ODataMetadata\MetadataV3\edm\IsOKTraits\TGuidLiteralTrait;
use AlgoWeb\ODataMetadata\MetadataV3\edm\IsOKTraits\TQualifiedNameTrait;
use AlgoWeb\ODataMetadata\StringTraits\XSDTopLevelTrait;

trait GInlineExpressionsTrait
{
    use TQualifiedNameTrait, XSDTopLevelTrait, TGuidLiteralTrait;

    /**
     * @property string $string
     */
    private $string = null;

    /**
     * @property mixed $binary
     */
    private $binary = null;

    /**
     * @property integer $int
     */
    private $int = null;

    /**
     * @property float $float
     */
    private $float = null;

    /**
     * @property string $guid
     */
    private $guid = null;

    /**
     * @property float $decimal
     */
    private $decimal = null;

    /**
     * @property boolean $bool
     */
    private $bool = null;

    /**
     * @property \DateTime $dateTime
     */
    private $dateTime = null;

    /**
     * @property \DateTime $dateTimeOffset
     */
    private $dateTimeOffset = null;

    /**
     * @property string $enum
     */
    private $enum = null;

    /**
     * @property string $path
     */
    private $path = null;

    /**
     * Gets as string
     *
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * Sets a new string
     *
     * @param string $string
     * @return self
     */
    public function setString($string)
    {
        $this->string = $string;
        return $this;
    }

    /**
     * Gets as binary
     *
     * @return mixed
     */
    public function getBinary()
    {
        return $this->binary;
    }

    /**
     * Sets a new binary
     *
     * @param mixed $binary
     * @return self
     */
    public function setBinary($binary)
    {
        $this->binary = $binary;
        return $this;
    }

    /**
     * Gets as int
     *
     * @return integer
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * Sets a new int
     *
     * @param integer $int
     * @return self
     */
    public function setInt($int)
    {
        $this->int = $int;
        return $this;
    }

    /**
     * Gets as float
     *
     * @return float
     */
    public function getFloat()
    {
        return $this->float;
    }

    /**
     * Sets a new float
     *
     * @param float $float
     * @return self
     */
    public function setFloat($float)
    {
        $this->float = $float;
        return $this;
    }

    /**
     * Gets as guid
     *
     * @return string
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Sets a new guid
     *
     * @param string $guid
     * @return self
     */
    public function setGuid($guid)
    {
        $this->guid = $guid;
        return $this;
    }

    /**
     * Gets as decimal
     *
     * @return float
     */
    public function getDecimal()
    {
        return $this->decimal;
    }

    /**
     * Sets a new decimal
     *
     * @param float $decimal
     * @return self
     */
    public function setDecimal($decimal)
    {
        $this->decimal = $decimal;
        return $this;
    }

    /**
     * Gets as bool
     *
     * @return boolean
     */
    public function getBool()
    {
        return $this->bool;
    }

    /**
     * Sets a new bool
     *
     * @param boolean $bool
     * @return self
     */
    public function setBool($bool)
    {
        $this->bool = $bool;
        return $this;
    }

    /**
     * Gets as dateTime
     *
     * @return \DateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * Sets a new dateTime
     *
     * @param \DateTime $dateTime
     * @return self
     */
    public function setDateTime(\DateTime $dateTime)
    {
        $this->dateTime = $dateTime;
        return $this;
    }

    /**
     * Gets as dateTimeOffset
     *
     * @return \DateTime
     */
    public function getDateTimeOffset()
    {
        return $this->dateTimeOffset;
    }

    /**
     * Sets a new dateTimeOffset
     *
     * @param \DateTime $dateTimeOffset
     * @return self
     */
    public function setDateTimeOffset(\DateTime $dateTimeOffset)
    {
        $this->dateTimeOffset = $dateTimeOffset;
        return $this;
    }

    /**
     * Gets as enum
     *
     * @return string
     */
    public function getEnum()
    {
        return $this->enum;
    }

    /**
     * Sets a new enum
     *
     * @param string $enum
     * @return self
     */
    public function setEnum($enum)
    {
        $this->enum = $enum;
        return $this;
    }

    /**
     * Gets as path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Sets a new path
     *
     * @param string $path
     * @return self
     */
    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    public function isGInlineExpressionsValid(&$msg = null)
    {
        if (null != $this->string && !is_string($this->string)) {
            $msg = "String must be a string";
            return false;
        }
        if (null != $this->binary && !$this->hexBinary($this->binary)) {
            $msg = "Binary must be hexadecimal";
            return false;
        }
        if (null != $this->int && $this->int !== intval($this->int)) {
            $msg = "Integer must be integral";
            return false;
        }
        if (null != $this->float && $this->float !== floatval($this->float)) {
            $msg = "Float must be floating-point";
            return false;
        }
        if (null != $this->guid && !$this->isTGuidLiteralValid($this->guid)) {
            $msg = "Guid must be valid GUID";
            return false;
        }
        if (null != $this->bool && $this->bool !== boolval($this->bool)) {
            $msg = "Bool must be boolean";
            return false;
        }
        if (null != $this->decimal && $this->decimal !== floatval($this->decimal)) {
            $msg = "Decimal must be decimal";
            return false;
        }
        if (null != $this->enum && !$this->isTQualifiedNameValid($this->enum)) {
            $msg = "Enum must be a valid TQualifiedName";
            return false;
        }
        if (null != $this->path && !$this->isTQualifiedNameValid($this->path)) {
            $msg = "Path must be a valid TQualifiedName";
            return false;
        }
        if (null != $this->dateTime && $this->dateTime !== $this->dateTime($this->dateTime)) {
            $msg = "DateTime must be a valid date/time";
            return false;
        }
        if (null != $this->dateTimeOffset && $this->dateTimeOffset !== $this->dateTime($this->dateTimeOffset)) {
            $msg = "DateTimeOffset must be a valid date/time";
            return false;
        }

        return true;
    }
}