<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deltypes
 *
 * @ORM\Table(name="deltypes")
 * @ORM\Entity
 */
class Deltypes
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
     * @ORM\Column(name="deltype", type="string", length=64, nullable=false)
     */
    private $deltype;

    /**
     * @var string
     *
     * @ORM\Column(name="shipment_tracking_url", type="string", length=256, nullable=false)
     */
    private $shipmentTrackingUrl;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDeltype(): ?string
    {
        return $this->deltype;
    }

    public function setDeltype(string $deltype): self
    {
        $this->deltype = $deltype;

        return $this;
    }

    public function getShipmentTrackingUrl(): ?string
    {
        return $this->shipmentTrackingUrl;
    }

    public function setShipmentTrackingUrl(string $shipmentTrackingUrl): self
    {
        $this->shipmentTrackingUrl = $shipmentTrackingUrl;

        return $this;
    }


}
