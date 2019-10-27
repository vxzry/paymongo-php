<?php

namespace Paymongo\Resource;

interface JsonResource
{
    /**
     * Convert object to json resource
     */
    public function serialize();

    /**
     * Convert json resource to object
     */
    public function deserialize();
}