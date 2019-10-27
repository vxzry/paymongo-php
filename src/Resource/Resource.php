<?php

namespace Paymongo\Resource;

use Paymongo\Support\Str;

abstract class Resource implements JsonResource
{
    public $resource_id = null;
    public $resource_type = null;

    public $uri = null;

    private $resource_attribute = [];

    protected $jsonResource = [
        'attribute' => [], 
        'relationships' => []
    ];

    public function __construct()
    {
        $this->uri = $this->getUri();
    }

    public function getUri()
    {
        if ($this->uri) {
            return $this->uri;
        }

        return $this->getType() . 's';
    }

    public function getType()
    {
        $classShortname = (new \ReflectionClass($this))->getShortName();
        return $this->resource_type = Str::kebab($classShortname);
    }

    
    protected function setResourceAttribute($key, $value)
    {
        
    }
    
    /**
     * Convert object to json resource
     */
    public function serialize()
    {

    }

    /**
     * Convert json resource to object
     */
    public function deserialize()
    {

    }

}