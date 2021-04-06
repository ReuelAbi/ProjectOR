<?php

namespace App\Models;

class Organization
{
    // Declare Variables
    private $id;
    private $name;
    private $desc;
    private $type;
    
    public function __construct($id, $name, $desc, $type)
    {
        // Assign values to the Organization
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
        $this->type = $type;
    }
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}