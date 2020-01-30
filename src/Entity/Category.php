<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Asserts;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
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
     * @ORM\Column(type="string", length=255)
     * @Asserts\Regex(pattern="/^[a-z0-9\-]+$/")
     */
    private $Slug;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Culin", mappedBy="category")
     */
    private $culins;

    public function __construct()
    {
        $this->culins = new ArrayCollection();
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

    public function getSlug(): ?string
    {
        return $this->Slug;
    }

    public function setSlug(string $Slug): self
    {
        $this->Slug = $Slug;

        return $this;
    }

    /**
     * @return Collection|Culin[]
     */
    public function getCulins(): Collection
    {
        return $this->culins;
    }

    public function addCulin(Culin $culin): self
    {
        if (!$this->culins->contains($culin)) {
            $this->culins[] = $culin;
            $culin->setCategory($this);
        }

        return $this;
    }

    public function removeCulin(Culin $culin): self
    {
        if ($this->culins->contains($culin)) {
            $this->culins->removeElement($culin);
            // set the owning side to null (unless already changed)
            if ($culin->getCategory() === $this) {
                $culin->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString()
    {
        return $this->Name;
    }
}
