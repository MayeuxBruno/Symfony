<?php

namespace App\Entity;

use App\Repository\VillesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VillesRepository::class)
 */
class Villes
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $NomVille;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $CodePostal;

    /**
     * @ORM\ManyToOne(targetEntity=Departements::class, inversedBy="villes")
     */
    private $IdDepartement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomVille(): ?string
    {
        return $this->NomVille;
    }

    public function setNomVille(string $NomVille): self
    {
        $this->NomVille = $NomVille;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->CodePostal;
    }

    public function setCodePostal(string $CodePostal): self
    {
        $this->CodePostal = $CodePostal;

        return $this;
    }

    public function getIdDepartement(): ?Departements
    {
        return $this->IdDepartement;
    }

    public function setIdDepartement(?Departements $IdDepartement): self
    {
        $this->IdDepartement = $IdDepartement;

        return $this;
    }
    public function __toString()
    {
        return $this->getNomVille();
    }

}
