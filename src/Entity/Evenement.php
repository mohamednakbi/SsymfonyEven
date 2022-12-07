<?php

namespace App\Entity;
use App\Repository\EvenementRepo;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: EvenementRepo::class)]
class Evenement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     *
     * @Assert\NotBlank(message="Le titre de l'evenement est obligatoire")
     */
    #[ORM\Column(length: 255)]

    private ?string $titre = null;

    /**
     *
     * @Assert\NotBlank(message="La description de l'evenement est obligatoire")
     */
    #[ORM\Column(length: 255)]

    private ?string $description = null;

    /**
     *
    * @Assert\NotBlank(message="Le lieux de l'evenement est obligatoire")

     */
    #[ORM\Column(length: 255)]
    private ?string $lieux = null;

    /**
     *
     * @Assert\NotBlank(message="La date de dévut de l'evenement est obligatoire")
     */
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]

    private ?\DateTimeInterface $dateDebut = null;

    /**
     *
     * @Assert\NotBlank(message="La date de fin de l'evenement est obligatoire")
     */
    #[ORM\Column(type: Types::DATETIME_MUTABLE)]

    private ?\DateTimeInterface $dateFin = null;

    /**
     *
     */
    #[ORM\Column(length: 255)]

    private ?string $gatName = null;




        /**
     *
     * @Assert\NotBlank(message="L'image de dévut de l'evenement est obligatoire")
     */
    #[ORM\Column(length: 255)]

    private ?string $image = null;
















    public function getImage(): ?string
    {
        return $this->image;
    }


    public function setImage(string $image): self
    {
        $this->image = $image;

        return $this;
    }


    





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getLieux(): ?string
    {
        return $this->lieux;
    }

    public function setLieux(string $lieux): self
    {
        $this->lieux = $lieux;

        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    public function getGatName(): ?string
    {
        return $this->gatName;
    }

    public function setGatName(string $gatName): self
    {
        $this->gatName = $gatName;

        return $this;
    }


}
