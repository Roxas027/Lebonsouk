<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\RubriqueRepository")
 */
class Rubrique
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**

     * @ORM\Column(type="string", length=255)
     *  @Assert\Length(min = 5, max = 255, minMessage = "L'intitulé de votre rubrique est bien trop courte")

     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
}
