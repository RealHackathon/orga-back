<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(attributes={
 *     "normalization_context"={"groups"={"user"}}
 *     })
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"user"})
     */
    private $pseudo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"user"})
     */
    private $round;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"user"})
     */
    private $points;

    /**
     * @ORM\ManyToOne(targetEntity="Game", inversedBy="users")
     * @Groups({"user"})
     */
    private $game;

    public function getId()
    {
        return $this->id;
    }

    public function getPseudo(): ?string
    {
        return $this->pseudo;
    }

    public function setPseudo(string $pseudo): self
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getRound(): ?string
    {
        return $this->round;
    }

    public function setRound(?string $round): self
    {
        $this->round = $round;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getGame()
    {
        return $this->game;
    }

    /**
     * @param mixed $game
     * @return User
     */
    public function setGame($game)
    {
        $this->game = $game;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $points
     * @return User
     */
    public function setPoints($points)
    {
        $this->points = $points;
        return $this;
    }
}
