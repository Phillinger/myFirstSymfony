<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paymtypes
 *
 * @ORM\Table(name="paymtypes")
 * @ORM\Entity
 */
class Paymtypes
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
     * @ORM\Column(name="paymtype", type="string", length=64, nullable=false)
     */
    private $paymtype;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPaymtype(): ?string
    {
        return $this->paymtype;
    }

    public function setPaymtype(string $paymtype): self
    {
        $this->paymtype = $paymtype;

        return $this;
    }


}
