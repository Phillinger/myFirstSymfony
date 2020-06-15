<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locations
 *
 * @ORM\Table(name="locations")
 * @ORM\Entity
 */
class Locations
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
     * @ORM\Column(name="title", type="string", length=64, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=16, nullable=false)
     */
    private $token;

    /**
     * @var string
     *
     * @ORM\Column(name="hostname", type="string", length=32, nullable=false)
     */
    private $hostname;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=128, nullable=false)
     */
    private $company;

    /**
     * @var string
     *
     * @ORM\Column(name="addinfo", type="string", length=128, nullable=false)
     */
    private $addinfo;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=128, nullable=false)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=16, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=128, nullable=false)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=64, nullable=false)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=64, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="email_unseen", type="smallint", nullable=false)
     */
    private $emailUnseen;

    /**
     * @var string
     *
     * @ORM\Column(name="email_username", type="string", length=128, nullable=false)
     */
    private $emailUsername;

    /**
     * @var string
     *
     * @ORM\Column(name="email_password", type="string", length=128, nullable=false)
     */
    private $emailPassword;

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

    public function getToken(): ?string
    {
        return $this->token;
    }

    public function setToken(string $token): self
    {
        $this->token = $token;

        return $this;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(string $hostname): self
    {
        $this->hostname = $hostname;

        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(string $company): self
    {
        $this->company = $company;

        return $this;
    }

    public function getAddinfo(): ?string
    {
        return $this->addinfo;
    }

    public function setAddinfo(string $addinfo): self
    {
        $this->addinfo = $addinfo;

        return $this;
    }

    public function getStreet(): ?string
    {
        return $this->street;
    }

    public function setStreet(string $street): self
    {
        $this->street = $street;

        return $this;
    }

    public function getZip(): ?string
    {
        return $this->zip;
    }

    public function setZip(string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getTel(): ?string
    {
        return $this->tel;
    }

    public function setTel(string $tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getEmailUnseen(): ?int
    {
        return $this->emailUnseen;
    }

    public function setEmailUnseen(int $emailUnseen): self
    {
        $this->emailUnseen = $emailUnseen;

        return $this;
    }

    public function getEmailUsername(): ?string
    {
        return $this->emailUsername;
    }

    public function setEmailUsername(string $emailUsername): self
    {
        $this->emailUsername = $emailUsername;

        return $this;
    }

    public function getEmailPassword(): ?string
    {
        return $this->emailPassword;
    }

    public function setEmailPassword(string $emailPassword): self
    {
        $this->emailPassword = $emailPassword;

        return $this;
    }


}
