<?php

if (!class_exists('Google_Client')) {
  require_once __DIR__ . '/autoload.php';
}

/**
 * Extension to the regular Google_Model that automatically
 * exposes the items array for iteration, so you can just
 * iterate over the object rather than a reference inside.
 */
class Google_Collection extends Google_Model implements Iterator, Countable
{
  protected $collection_key = 'items';

  public function rewind() : void
  {
    if (isset($this->{$this->collection_key})
        && is_array($this->{$this->collection_key})) {
      reset($this->{$this->collection_key});
    }
  }

  public function current() : mixed
  {
    $this->coerceType($this->key());
    if (is_array($this->{$this->collection_key})) {
      return current($this->{$this->collection_key});
    }
  }

  public function key() : mixed
  {
    if (isset($this->{$this->collection_key})
        && is_array($this->{$this->collection_key})) {
      return key($this->{$this->collection_key});
    }
  }

  public function next() : void
  {
    // return next($this->{$this->collection_key});
    next($this->{$this->collection_key});
  }

  public function valid() : bool
  {
    $key = $this->key();
    return $key !== null && $key !== false;
  }

  public function count() : int
  {
    if (!isset($this->{$this->collection_key})) {
      return 0;
    }
    return count($this->{$this->collection_key});
  }

  public function offsetExists($offset) : bool
  {
    if (!is_numeric($offset)) {
      return parent::offsetExists($offset);
    }
    return isset($this->{$this->collection_key}[$offset]);
  }

  public function offsetGet($offset) : mixed
  {
    if (!is_numeric($offset)) {
      return parent::offsetGet($offset);
    }
    $this->coerceType($offset);
    return $this->{$this->collection_key}[$offset];
  }

  public function offsetSet($offset, $value) : void
  {
    if (!is_numeric($offset)) {
      // return parent::offsetSet($offset, $value);
      parent::offsetSet($offset, $value);
      return;
    }
    $this->{$this->collection_key}[$offset] = $value;
  }

  public function offsetUnset($offset) : void
  {
    if (!is_numeric($offset)) {
      // return parent::offsetUnset($offset);
      parent::offsetUnset($offset);
      return;
    }
    unset($this->{$this->collection_key}[$offset]);
  }

  private function coerceType($offset)
  {
    $keyType = $this->keyType($this->collection_key);
    if ($keyType && !is_object($this->{$this->collection_key}[$offset])) {
      $this->{$this->collection_key}[$offset] =
          new $keyType($this->{$this->collection_key}[$offset]);
    }
  }
}
