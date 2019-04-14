<?php

use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="compteur") 
 **/

class Compteur
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="integer") **/
    private $numero;
    /**
     * One compteur has many factures. This is the inverse side.
     * @OneToMany(targetEntity="Facture", mappedBy="compteur")
     */
    private $factures;

    public function __construct()
    {
        $this->factures = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getFactures()
    {
        return $this->factures;
    }
    public function setFactures($factures)
    {
        $this->factures = $factures;
    }
}

?>