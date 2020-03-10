<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"read"}},
 *     denormalizationContext={"groups"={"write"}}
 * )
 * @ORM\Entity(repositoryClass="App\Repository\BegraafplaatsRepository")
 */
class Begraafplaats
{
    /**
     * @var UuidInterface The UUID identifier of this object
     *
     * @example e2984465-190a-4562-829e-a8cca81aa35d
     *
     * @Groups({"read"})
     * @Assert\Uuid
     * @ORM\Id()
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     */
    private $id;

    /**
     * @var string The code of this Begraafplaats
     *
     * @example Zd
     *
     * @Assert\NotNull
     * @Assert\Length(
     *     max = 5
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=5)
     */
    private $Code;

    /**
     * @var string The name of this Begraafplaats
     *
     * @example Zuiderbegraafplaats
     *
     * @Assert\Length(
     *     max = 50
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Naam;

    /**
     * @var string The straat of this Begraafplaats
     *
     * @example Burgemeester Wuiteweg 89
     *
     * @Assert\Length(
     *     max = 50
     * )
     * @Groups({"read","write"})
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $Straat;

    public function getId(): ?Uuid
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->Code;
    }

    public function setCode(string $Code): self
    {
        $this->Code = $Code;

        return $this;
    }

    public function getNaam(): ?string
    {
        return $this->Naam;
    }

    public function setNaam(?string $Naam): self
    {
        $this->Naam = $Naam;

        return $this;
    }

    public function getStraat(): ?string
    {
        return $this->Straat;
    }

    public function setStraat(?string $Straat): self
    {
        $this->Straat = $Straat;

        return $this;
    }
}
