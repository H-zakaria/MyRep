<?php
class Model implements JsonSerializable
{
  public $marque;
  public $nomModel;

  public function __construct(string $marque, string $nom)
  {
    $this->marque = $marque;
    $this->nomModel = $nom;
  }
  public function jsonSerialize()
  {
    return array(
      'marque' => $this->marque,
      'nomModel' => $this->nomModel
    );
  }

  /**
   * Get the value of nom
   */
  public function getNom()
  {
    return $this->nom;
  }

  /**
   * Set the value of nom
   *
   * @return  self
   */
  public function setNom($nom)
  {
    $this->nom = $nom;

    return $this;
  }
}
