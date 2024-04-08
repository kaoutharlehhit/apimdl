<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\QualiteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QualiteRepository::class)]
#[ApiResource]
class Qualite
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $LibelleQualite = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelleQualite(): ?string
    {
        return $this->LibelleQualite;
    }

    public function setLibelleQualite(string $LibelleQualite): static
    {
        $this->LibelleQualite = $LibelleQualite;

        return $this;
    }
}
