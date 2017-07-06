<?php

namespace FingerString\Entities\Traits;

/**
 * WatchedTrait
 */
trait WatchedTrait
{
    /**
     * @var $watched
     */
    protected $watched;

    /**
     * @return $watched
     */
    public function getWatched()
    {
        return $this->watched;
    }

    /**
     * @param mixed $watched
     */
    public function setWatched($watched)
    {
        $this->watched = $watched;
    }
}