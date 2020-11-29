<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignefraisforfait
 *
 * @ORM\Table(name="LigneFraisForfait")
 * @ORM\Entity(repositoryClass="App\Repository\LigneFraisForfaitRepository")
 */
class LigneFraisForfait
{
    /**
     * @var string|null
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\Column(name="quantite", type="integer", nullable=false, options={"default"="NULL"})
     */
    private $quantite = 'NULL';
     /**
     * @var \Fichefrais
     *
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idVisiteur", referencedColumnName="idVisiteur")
     * })
     */
    private $idvisiteur;
    /**
     * @var \Fichefrais
     * 
     * @ORM\ManyToOne(targetEntity="Fichefrais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mois", referencedColumnName="mois")
     * })
     */
    private $mois;
    /**
     * @var \Fraisforfait
     *
     * @ORM\ManyToOne(targetEntity="Fraisforfait")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFraisForfait", referencedColumnName="idFraisForfait")
     * })
     */
    private $idFraisForfait;
    

    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    public function setQuantite(?int $quantite): self
    {
        $this->quantite = $quantite;

        return $this;
    }

    public function getIdvisiteur(): ?Visiteur
    {
        return $this->idvisiteur;
    }

    public function setIdvisiteur(?Visiteur $idvisiteur): self
    {
        $this->idvisiteur = $idvisiteur;

        return $this;
    }

    public function getMois(): ?Fichefrais
    {
        return $this->mois;
    }

    public function setMois(?Fichefrais $mois): self
    {
        $this->mois = $mois;

        return $this;
    }

    public function getIdFraisForfait(): ?Fraisforfait
    {
        return $this->idFraisForfait;
    }

    public function setIdFraisForfait(?Fraisforfait $idFraisForfait): self
    {
        $this->idFraisForfait = $idFraisForfait;

        return $this;
    }
    
}