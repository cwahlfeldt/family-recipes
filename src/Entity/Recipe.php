<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;

/**
 * @ORM\Entity(repositoryClass=RecipeRepository::class)
 */
class Recipe
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer", options={"unsigned":true, "default":0})
     */
    private $servingSize;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="array", length=255)
     */
    private $ingredients;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getServingSize(): ?int
    {
        return $this->servingSize;
    }

    public function setServingSize(int $servingSize): self
    {
        $this->servingSize = $servingSize;

        return $this;
    }

    public function getIngredients(): ?RepeatedType
    {
        return $this->ingredients;
    }

    public function setIngredients(RepeatedType $ingredients): void
    {
        $this->ingredients = $ingredients;
    }
}
