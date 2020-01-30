<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IngredientRepository")
 */
class Ingredient
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Culin", inversedBy="ingredients")
     */
    private $culin;

    public function __construct()
    {
        $this->culin = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    /**
     * @return Collection|Culin[]
     */
    public function getCulin(): Collection
    {
        return $this->culin;
    }

    public function addCulin(Culin $culin): self
    {
        if (!$this->culin->contains($culin)) {
            $this->culin[] = $culin;
        }

        return $this;
    }

    public function removeCulin(Culin $culin): self
    {
        if ($this->culin->contains($culin)) {
            $this->culin->removeElement($culin);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->Name;
    }
}