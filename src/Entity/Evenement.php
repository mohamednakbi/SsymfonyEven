<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity
 */
class Evenement
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="Le titre de l'evenement est obligatoire")
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
    * @Assert\NotBlank(message="La description de l'evenement est obligatoire")

     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="lieux", type="string", length=50, nullable=false)
         * @Assert\NotBlank(message="Le lieux de l'evenement est obligatoire")

     */
    private $lieux;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     * @Assert\NotBlank(message="La date de dévut de l'evenement est obligatoire")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     * @Assert\NotBlank(message="La date de fin de l'evenement est obligatoire")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="gat_name", type="string", length=50, nullable=false)

     */
    private $gatName;




        /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50, nullable=false)
     * @Assert\NotBlank(message="L'image  de l'evenement est obligatoire")
     */
    private $image;



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

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
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
