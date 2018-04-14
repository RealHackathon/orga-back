<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuoteRepository")
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"quote"}},
 *     "filters"={"quote.search", "quote.random"}
 *     })
 */
class Quote
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"quote"})
     */
    private $text;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"quote"})
     */
    private $movie;

    public function getId()
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMovie()
    {
        return $this->movie;
    }

    /**
     * @param mixed $movie
     * @return Quote
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;
        return $this;
    }
}
