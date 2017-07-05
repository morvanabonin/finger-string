<?php

class UserEntity
{
   public $title;
   public $slug;
   public $posted;
   public function __construct($title, $slug, \Carbon\Carbon $posted)
   {
      $this->title = $title;
      $this->slug = $slug;
      $this->posted = $posted;
   }
}

