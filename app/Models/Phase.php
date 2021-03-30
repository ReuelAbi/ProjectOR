<?php
namespace App\Models;

class Phase
{
    // Declare variables
    private $id;
    private $name;
    private $description;
    private $resources;
    private $tags;
    
    /**
     * 
     * @param $name
     * @param $description
     * @param $resources
     * @param $tags
     */
    public function __construct($name, $description, $resources, $tags)
    {
        $this->name = $name;
        $this->description = $description;
        $this->resources = $resources;
        $this->tags = $tags;
    }
}