<?php

namespace FingerString\Entities\Traits;

/**
 * CreatedAtTrait
 */
trait CreatedAtTrait
{
    /**
     * @var $createdAt
     */
    protected $createdAt;

    /**
     * @return $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}