<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Shipments
 *
 * @ORM\Table(name="shipments")
 * @ORM\Entity
 */
class Shipments
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
     * @var int
     *
     * @ORM\Column(name="orderid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $orderid;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment", type="string", length=32, nullable=false)
     */
    private $shipment;

    /**
     * @var string
     *
     * @ORM\Column(name="shipmentnumber", type="string", length=32, nullable=false)
     */
    private $shipmentnumber;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="text", length=0, nullable=false)
     */
    private $label;

    /**
     * @var string
     *
     * @ORM\Column(name="trackingurl", type="text", length=0, nullable=false)
     */
    private $trackingurl;

    /**
     * @var string
     *
     * @ORM\Column(name="lastchangeby", type="string", length=64, nullable=false)
     */
    private $lastchangeby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastchange", type="datetime", nullable=false)
     */
    private $lastchange;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOrderid(): ?int
    {
        return $this->orderid;
    }

    public function setOrderid(int $orderid): self
    {
        $this->orderid = $orderid;

        return $this;
    }

    public function getShipment(): ?string
    {
        return $this->shipment;
    }

    public function setShipment(string $shipment): self
    {
        $this->shipment = $shipment;

        return $this;
    }

    public function getShipmentnumber(): ?string
    {
        return $this->shipmentnumber;
    }

    public function setShipmentnumber(string $shipmentnumber): self
    {
        $this->shipmentnumber = $shipmentnumber;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getTrackingurl(): ?string
    {
        return $this->trackingurl;
    }

    public function setTrackingurl(string $trackingurl): self
    {
        $this->trackingurl = $trackingurl;

        return $this;
    }

    public function getLastchangeby(): ?string
    {
        return $this->lastchangeby;
    }

    public function setLastchangeby(string $lastchangeby): self
    {
        $this->lastchangeby = $lastchangeby;

        return $this;
    }

    public function getLastchange(): ?\DateTimeInterface
    {
        return $this->lastchange;
    }

    public function setLastchange(\DateTimeInterface $lastchange): self
    {
        $this->lastchange = $lastchange;

        return $this;
    }


}
