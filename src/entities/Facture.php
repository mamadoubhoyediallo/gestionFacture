<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity @Table(name="facture") 
 **/

class Facture
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    /** @Column(type="decimal") **/
    private $montant;
    /** @Column(type="integer") **/
    private $mois;
    /** @Column(type="integer") **/
    private $annee;
    /** @Column(type="integer") **/
    private $etat;
    /**
     * Many factures have one compteur. This is the owning side.
     * @ManyToOne(targetEntity="Compteur", inversedBy="factures")
     * @JoinColumn(name="compteur_id", referencedColumnName="id")
     */
    private $compteur;
    /**
     * Many factures have one user. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="factures")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    public function __construct()
    {
        $this->compteur = new ArrayCollection();
        $this->user = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
    }

    public function getMontant()
    {
        return $this->montant;
    }
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }

    public function getMois()
    {
        return $this->mois;
    }
    public function setMois($mois)
    {
         $this->mois = $mois;
    }

    public function getAnnee()
    {
        return $this->annee;
    }
    public function setAnnee($annee)
    {
        $this->annee = $annee;
    }

    public function getEtat()
    {
        return $this->etat;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    public function getCompteur()
    {
        return $this->compteur;
    }
    public function setCompteur($compteur)
    {
        $this->compteur = $compteur;
    }

    public function getUser()
    {
        return $this->user;
    }
    public function setUser($user)
    {
        $this->user = $user;
    }
}

?>