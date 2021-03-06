<?php

namespace App\Entity;

use App\Repository\RecipeRepository;
use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(type="repeat", length=255)
     */
    private $ingredients;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     */
    private $recipeText;

    /**
     * @ORM\Column(type="integer", options={"unsigned":true, "default":0})
     */
    private $starCount;

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

    public function getRecipeText(): ?string
    {
        return $this->recipeText;
    }

    public function setRecipeText(string $recipeText): self
    {
        $this->recipeText = $recipeText;

        return $this;
    }

    public function getStarCount(): ?int
    {
        return $this->starCount;
    }

    public function setStarCount($starCount): void
    {
        $this->starCount = $starCount;
    }
}
