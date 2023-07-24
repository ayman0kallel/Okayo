<?php

namespace App\Entity;

use App\Repository\LigneFactureRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneFactureRepository::class)]
class LigneFacture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Qte = null;

    #[ORM\Column]
    private ?float $Total_HT = null;

    #[ORM\Column]
    private ?float $Total_TTC = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQte(): ?int
    {
        return $this->Qte;
    }

    public function setQte(int $Qte): static
    {
        $this->Qte = $Qte;

        return $this;
    }

    public function getTotalHT(): ?float
    {
        return $this->Total_HT;
    }

    public function setTotalHT(float $Total_HT): static
    {
        $this->Total_HT = $Total_HT;

        return $this;
    }

    public function getTotalTTC(): ?float
    {
        return $this->Total_TTC;
    }

    public function setTotalTTC(float $Total_TTC): static
    {
        $this->Total_TTC = $Total_TTC;

        return $this;
    }
}
