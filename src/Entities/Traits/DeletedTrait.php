<?php

namespace FingerString\Entities\Traits;

/**
 * DeletedTrait
 */
trait DeletedTrait
{
    /**
     * @var $deleted
     */
    protected $deleted;

    /**
     * @return $deleted
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param mixed $deleted
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;
    }
}