<?php

namespace App\Entity;

use App\Repository\VeilleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: VeilleRepository::class)]
class Veille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $daateD = null;

    #[ORM\Column(length: 255)]
    private ?string $acquisition = null;

    #[ORM\Column]
    private ?bool $veilleContinue = null;

    #[ORM\ManyToOne(inversedBy: 'veilles')]
    private ?category $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getDaateD(): ?\DateTimeInterface
    {
        return $this->daateD;
    }

    public function setDaateD(\DateTimeInterface $daateD): static
    {
        $this->daateD = $daateD;

        return $this;
    }

    public function getAcquisition(): ?string
    {
        return $this->acquisition;
    }

    public function setAcquisition(string $acquisition): static
    {
        $this->acquisition = $acquisition;

        return $this;
    }

    public function isVeilleContinue(): ?bool
    {
        return $this->veilleContinue;
    }

    public function setVeilleContinue(bool $veilleContinue): static
    {
        $this->veilleContinue = $veilleContinue;

        return $this;
    }

    public function getCategory(): ?category
    {
        return $this->category;
    }

    public function setCategory(?category $category): static
    {
        $this->category = $category;

        return $this;
    }
}
