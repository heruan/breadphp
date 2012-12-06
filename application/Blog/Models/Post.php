<?php

namespace Blog\Models;
use Bread\L10n\Models\Localized;

class Post extends Localized {
  protected $title;
  protected $body;

  protected static $attributes = array(
    'title' => array(
      'extension' => Localized::EXTENSION
    ),
    'body' => array(
      'extension' => Localized::EXTENSION
    )
  );
}
