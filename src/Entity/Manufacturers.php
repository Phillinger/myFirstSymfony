<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manufacturers
 *
 * @ORM\Table(name="manufacturers")
 * @ORM\Entity
 */
class Manufacturers
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
     * @ORM\Column(name="title", type="string", length=32, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="terms_of_guarantee_url", type="text", length=0, nullable=false)
     */
    private $termsOfGuaranteeUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="terms_of_guarantee_url_status", type="string", length=32, nullable=false)
     */
    private $termsOfGuaranteeUrlStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="service_mailto", type="string", length=128, nullable=false)
     */
    private $serviceMailto;

    /**
     * @var string
     *
     * @ORM\Column(name="service_mailto_cc", type="string", length=128, nullable=false)
     */
    private $serviceMailtoCc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getTermsOfGuaranteeUrl(): ?string
    {
        return $this->termsOfGuaranteeUrl;
    }

    public function setTermsOfGuaranteeUrl(string $termsOfGuaranteeUrl): self
    {
        $this->termsOfGuaranteeUrl = $termsOfGuaranteeUrl;

        return $this;
    }

    public function getTermsOfGuaranteeUrlStatus(): ?string
    {
        return $this->termsOfGuaranteeUrlStatus;
    }

    public function setTermsOfGuaranteeUrlStatus(string $termsOfGuaranteeUrlStatus): self
    {
        $this->termsOfGuaranteeUrlStatus = $termsOfGuaranteeUrlStatus;

        return $this;
    }

    public function getServiceMailto(): ?string
    {
        return $this->serviceMailto;
    }

    public function setServiceMailto(string $serviceMailto): self
    {
        $this->serviceMailto = $serviceMailto;

        return $this;
    }

    public function getServiceMailtoCc(): ?string
    {
        return $this->serviceMailtoCc;
    }

    public function setServiceMailtoCc(string $serviceMailtoCc): self
    {
        $this->serviceMailtoCc = $serviceMailtoCc;

        return $this;
    }


}
