<?php
class Voiture implements JsonSerializable
{
  public $marque;

  public function __construct(string $marque)
  {
    $this->marque = $marque;
  }
  public function jsonSerialize()
  {
    return array(
      'marque' => $this->marque
    );
  }
  /**
   * Get the value of marque
   */
  public function getMarque()
  {
    return $this->marque;
  }

  /**
   * Set the value of marque
   *
   * @return  self
   */
  public function setMarque($marque)
  {
    $this->marque = $marque;

    return $this;
  }
}
