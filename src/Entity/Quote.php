<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuoteRepository")
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
     */
    private $Text;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Theme", mappedBy="Label")
     */
    private $Themes;

    public function getId()
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->Text;
    }

    public function setText(string $Text): self
    {
        $this->Text = $Text;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getThemes()
    {
        return $this->Themes;
    }

    /**
     * @param mixed $Themes
     */
    public function setThemes($Themes)
    {
        $this->Themes = $Themes;
    }


}
