<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shops
 *
 * @ORM\Table(name="shops")
 * @ORM\Entity
 */
class Shops
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="baseurl", type="string", length=256, nullable=false)
     */
    private $baseurl;

    /**
     * @var string
     *
     * @ORM\Column(name="alfemactrl", type="string", length=128, nullable=false)
     */
    private $alfemactrl;

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

    public function getBaseurl(): ?string
    {
        return $this->baseurl;
    }

    public function setBaseurl(string $baseurl): self
    {
        $this->baseurl = $baseurl;

        return $this;
    }

    public function getAlfemactrl(): ?string
    {
        return $this->alfemactrl;
    }

    public function setAlfemactrl(string $alfemactrl): self
    {
        $this->alfemactrl = $alfemactrl;

        return $this;
    }


}
