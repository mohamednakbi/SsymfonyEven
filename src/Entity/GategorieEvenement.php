<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Repository\GategorieEvenementRepo;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: GategorieEvenementRepo::class)]

class GategorieEvenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;


   
    #[ORM\Column(length: 255)]

     /**
     *
     * @Assert\NotBlank(message="Le nom de l'evenement est obligatoire")
     */
    private ?string $nom = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }


}
