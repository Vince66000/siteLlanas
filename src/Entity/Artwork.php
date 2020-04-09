<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArtworkRepository")
 * @UniqueEntity("id")
 * @Vich\Uploadable()
 */
class Artwork
{


    const TYPE = [
        0 => 'Acryliques et huiles',
        1 => 'Pastels',
        2 => 'Encres',
        3 => 'Collages',
        4 => 'Dessins',
        5 => 'Aquarelles et gouaches',
        6 => 'Créations diverses'
    ];
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     *
     * @ORM\Column(type="integer")
     */
    private $type_art;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;


    /**
     * @var string|null
     * @ORM\Column(type="string", length=255)
     */
    private $fileName;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="artworks", fileNameProperty="fileName")
     */
    private $imageFile;


    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;



     /** **************************************************************************************************************



    /**
     * Artwork constructor.
     * @throws \Exception
     */
    public function  __construct()
    {
        $this->createdAt = new \DateTime();

    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeArt(): ?int
    {
        return $this->type_art;
    }

    public function setTypeArt(int $type_art): self
    {
        $this->type_art = $type_art;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     * @return Artwork
     * @throws \Exception
     */
    public function setImageFile(?File $imageFile): Artwork
    {
        $this->imageFile = $imageFile;
        if ($this->imageFile instanceof UploadedFile) {
            $this->updated_at = new \DateTime('now');
        }
        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    /**
     * @param string|null $fileName
     * @return Artwork
     */
    public function setFileName(?string $fileName): Artwork
    {
        $this->fileName = $fileName;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updated_at;
    }

    /**
     * @param \DateTime $updated_at
     * @return Artwork
     */
    public function setUpdatedAt(\DateTime $updated_at): self
    {
        $this->updated_at = $updated_at;
        return $this;
    }


}
