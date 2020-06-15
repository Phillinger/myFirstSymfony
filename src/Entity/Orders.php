<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="delfon2", columns={"delfon2"}), @ORM\Index(name="fon3", columns={"fon3"}), @ORM\Index(name="delfon3", columns={"delfon3"}), @ORM\Index(name="fon1", columns={"fon1"}), @ORM\Index(name="delfon1", columns={"delfon1"}), @ORM\Index(name="billnr", columns={"billnr"}), @ORM\Index(name="fon2", columns={"fon2"})})
 * @ORM\Entity
 */
class Orders
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
     * @var int
     *
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     */
    private $parentid;

    /**
     * @var string
     *
     * @ORM\Column(name="customernum", type="string", length=32, nullable=false)
     */
    private $customernum = '';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=32, nullable=false)
     */
    private $status = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="billdate", type="date", nullable=false, options={"default"="0000-00-00"})
     */
    private $billdate = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="billnr", type="string", length=16, nullable=false)
     */
    private $billnr = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="paid", type="datetime", nullable=true)
     */
    private $paid;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=128, nullable=false)
     */
    private $company = '';

    /**
     * @var string
     *
     * @ORM\Column(name="lname", type="string", length=128, nullable=false)
     */
    private $lname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fname", type="string", length=128, nullable=false)
     */
    private $fname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="addinfo", type="string", length=128, nullable=false)
     */
    private $addinfo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=128, nullable=false)
     */
    private $street = '';

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=16, nullable=false)
     */
    private $zip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=128, nullable=false)
     */
    private $city = '';

    /**
     * @var string
     *
     * @ORM\Column(name="countryid", type="string", length=16, nullable=false)
     */
    private $countryid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fon1", type="string", length=64, nullable=false)
     */
    private $fon1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fon2", type="string", length=64, nullable=false)
     */
    private $fon2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="fon3", type="string", length=64, nullable=false)
     */
    private $fon3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email = '';

    /**
     * @var string
     *
     * @ORM\Column(name="iban", type="string", length=32, nullable=false)
     */
    private $iban = '';

    /**
     * @var string
     *
     * @ORM\Column(name="bic", type="string", length=32, nullable=false)
     */
    private $bic = '';

    /**
     * @var string
     *
     * @ORM\Column(name="vatin", type="string", length=32, nullable=false)
     */
    private $vatin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delcompany", type="string", length=128, nullable=false)
     */
    private $delcompany = '';

    /**
     * @var string
     *
     * @ORM\Column(name="dellname", type="string", length=128, nullable=false)
     */
    private $dellname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delfname", type="string", length=128, nullable=false)
     */
    private $delfname = '';

    /**
     * @var string
     *
     * @ORM\Column(name="deladdinfo", type="string", length=128, nullable=false)
     */
    private $deladdinfo = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delstreet", type="string", length=128, nullable=false)
     */
    private $delstreet = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delzip", type="string", length=16, nullable=false)
     */
    private $delzip = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delcity", type="string", length=128, nullable=false)
     */
    private $delcity = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delcountryid", type="string", length=16, nullable=false)
     */
    private $delcountryid = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delfon1", type="string", length=128, nullable=false)
     */
    private $delfon1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delfon2", type="string", length=128, nullable=false)
     */
    private $delfon2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delfon3", type="string", length=128, nullable=false)
     */
    private $delfon3 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="delemail", type="string", length=128, nullable=false)
     */
    private $delemail = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="shipped", type="datetime", nullable=true)
     */
    private $shipped;

    /**
     * @var string
     *
     * @ORM\Column(name="shipmentid", type="string", length=64, nullable=false)
     */
    private $shipmentid = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="deltypeid", type="boolean", nullable=false)
     */
    private $deltypeid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="paymtypeid", type="boolean", nullable=false)
     */
    private $paymtypeid = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="ordertotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $ordertotal = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="deposit", type="float", precision=10, scale=0, nullable=false)
     */
    private $deposit = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="financing_1_date", type="datetime", nullable=true)
     */
    private $financing1Date;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_1_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $financing1Value = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="financing_2_date", type="datetime", nullable=true)
     */
    private $financing2Date;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_2_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $financing2Value = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="financing_3_date", type="datetime", nullable=true)
     */
    private $financing3Date;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_3_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $financing3Value = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="financing_4_date", type="datetime", nullable=true)
     */
    private $financing4Date;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_4_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $financing4Value = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="financing_5_date", type="datetime", nullable=true)
     */
    private $financing5Date;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_5_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $financing5Value = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="financing_6_date", type="datetime", nullable=true)
     */
    private $financing6Date;

    /**
     * @var float
     *
     * @ORM\Column(name="financing_6_value", type="float", precision=10, scale=0, nullable=false)
     */
    private $financing6Value = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="notes1", type="text", length=0, nullable=false)
     */
    private $notes1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="notes2", type="text", length=0, nullable=false)
     */
    private $notes2 = '';

    /**
     * @var int
     *
     * @ORM\Column(name="shopid", type="integer", nullable=false)
     */
    private $shopid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="oxordernr", type="integer", nullable=false)
     */
    private $oxordernr = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="oxorderdata", type="text", length=0, nullable=false)
     */
    private $oxorderdata = '';

    /**
     * @var string
     *
     * @ORM\Column(name="createdby", type="string", length=64, nullable=false)
     */
    private $createdby = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created", type="datetime", nullable=true)
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="lastchangeby", type="string", length=64, nullable=false)
     */
    private $lastchangeby = '';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lastchange", type="datetime", nullable=true)
     */
    private $lastchange;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParentid(): ?int
    {
        return $this->parentid;
    }

    public function setParentid(int $parentid): self
    {
        $this->parentid = $parentid;

        return $this;
    }

    public function getCustomernum(): ?string
    {
        return $this->customernum;
    }

    public function setCustomernum(string $customernum): self
    {
        $this->customernum = $customernum;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getBilldate(): ?\DateTimeInterface
    {
        return $this->billdate;
    }

    public function setBilldate(\DateTimeInterface $billdate): self
    {
        $this->billdate = $billdate;

        return $this;
    }

    public function getBillnr(): ?string
    {
        return $this->billnr;
    }

    public function setBillnr(string $billnr): self
    {
        $this->billnr = $billnr;

        return $this;
    }

    public function getPaid(): ?\DateTimeInterface
    {
        return $this->paid;
    }

    public function setPaid(?\DateTimeInterface $paid): self
    {
        $this->paid = $paid;

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

    public function getLname(): ?string
    {
        return $this->lname;
    }

    public function setLname(string $lname): self
    {
        $this->lname = $lname;

        return $this;
    }

    public function getFname(): ?string
    {
        return $this->fname;
    }

    public function setFname(string $fname): self
    {
        $this->fname = $fname;

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

    public function getCountryid(): ?string
    {
        return $this->countryid;
    }

    public function setCountryid(string $countryid): self
    {
        $this->countryid = $countryid;

        return $this;
    }

    public function getFon1(): ?string
    {
        return $this->fon1;
    }

    public function setFon1(string $fon1): self
    {
        $this->fon1 = $fon1;

        return $this;
    }

    public function getFon2(): ?string
    {
        return $this->fon2;
    }

    public function setFon2(string $fon2): self
    {
        $this->fon2 = $fon2;

        return $this;
    }

    public function getFon3(): ?string
    {
        return $this->fon3;
    }

    public function setFon3(string $fon3): self
    {
        $this->fon3 = $fon3;

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

    public function getIban(): ?string
    {
        return $this->iban;
    }

    public function setIban(string $iban): self
    {
        $this->iban = $iban;

        return $this;
    }

    public function getBic(): ?string
    {
        return $this->bic;
    }

    public function setBic(string $bic): self
    {
        $this->bic = $bic;

        return $this;
    }

    public function getVatin(): ?string
    {
        return $this->vatin;
    }

    public function setVatin(string $vatin): self
    {
        $this->vatin = $vatin;

        return $this;
    }

    public function getDelcompany(): ?string
    {
        return $this->delcompany;
    }

    public function setDelcompany(string $delcompany): self
    {
        $this->delcompany = $delcompany;

        return $this;
    }

    public function getDellname(): ?string
    {
        return $this->dellname;
    }

    public function setDellname(string $dellname): self
    {
        $this->dellname = $dellname;

        return $this;
    }

    public function getDelfname(): ?string
    {
        return $this->delfname;
    }

    public function setDelfname(string $delfname): self
    {
        $this->delfname = $delfname;

        return $this;
    }

    public function getDeladdinfo(): ?string
    {
        return $this->deladdinfo;
    }

    public function setDeladdinfo(string $deladdinfo): self
    {
        $this->deladdinfo = $deladdinfo;

        return $this;
    }

    public function getDelstreet(): ?string
    {
        return $this->delstreet;
    }

    public function setDelstreet(string $delstreet): self
    {
        $this->delstreet = $delstreet;

        return $this;
    }

    public function getDelzip(): ?string
    {
        return $this->delzip;
    }

    public function setDelzip(string $delzip): self
    {
        $this->delzip = $delzip;

        return $this;
    }

    public function getDelcity(): ?string
    {
        return $this->delcity;
    }

    public function setDelcity(string $delcity): self
    {
        $this->delcity = $delcity;

        return $this;
    }

    public function getDelcountryid(): ?string
    {
        return $this->delcountryid;
    }

    public function setDelcountryid(string $delcountryid): self
    {
        $this->delcountryid = $delcountryid;

        return $this;
    }

    public function getDelfon1(): ?string
    {
        return $this->delfon1;
    }

    public function setDelfon1(string $delfon1): self
    {
        $this->delfon1 = $delfon1;

        return $this;
    }

    public function getDelfon2(): ?string
    {
        return $this->delfon2;
    }

    public function setDelfon2(string $delfon2): self
    {
        $this->delfon2 = $delfon2;

        return $this;
    }

    public function getDelfon3(): ?string
    {
        return $this->delfon3;
    }

    public function setDelfon3(string $delfon3): self
    {
        $this->delfon3 = $delfon3;

        return $this;
    }

    public function getDelemail(): ?string
    {
        return $this->delemail;
    }

    public function setDelemail(string $delemail): self
    {
        $this->delemail = $delemail;

        return $this;
    }

    public function getShipped(): ?\DateTimeInterface
    {
        return $this->shipped;
    }

    public function setShipped(?\DateTimeInterface $shipped): self
    {
        $this->shipped = $shipped;

        return $this;
    }

    public function getShipmentid(): ?string
    {
        return $this->shipmentid;
    }

    public function setShipmentid(string $shipmentid): self
    {
        $this->shipmentid = $shipmentid;

        return $this;
    }

    public function getDeltypeid(): ?bool
    {
        return $this->deltypeid;
    }

    public function setDeltypeid(bool $deltypeid): self
    {
        $this->deltypeid = $deltypeid;

        return $this;
    }

    public function getPaymtypeid(): ?bool
    {
        return $this->paymtypeid;
    }

    public function setPaymtypeid(bool $paymtypeid): self
    {
        $this->paymtypeid = $paymtypeid;

        return $this;
    }

    public function getOrdertotal(): ?float
    {
        return $this->ordertotal;
    }

    public function setOrdertotal(float $ordertotal): self
    {
        $this->ordertotal = $ordertotal;

        return $this;
    }

    public function getDeposit(): ?float
    {
        return $this->deposit;
    }

    public function setDeposit(float $deposit): self
    {
        $this->deposit = $deposit;

        return $this;
    }

    public function getFinancing1Date(): ?\DateTimeInterface
    {
        return $this->financing1Date;
    }

    public function setFinancing1Date(?\DateTimeInterface $financing1Date): self
    {
        $this->financing1Date = $financing1Date;

        return $this;
    }

    public function getFinancing1Value(): ?float
    {
        return $this->financing1Value;
    }

    public function setFinancing1Value(float $financing1Value): self
    {
        $this->financing1Value = $financing1Value;

        return $this;
    }

    public function getFinancing2Date(): ?\DateTimeInterface
    {
        return $this->financing2Date;
    }

    public function setFinancing2Date(?\DateTimeInterface $financing2Date): self
    {
        $this->financing2Date = $financing2Date;

        return $this;
    }

    public function getFinancing2Value(): ?float
    {
        return $this->financing2Value;
    }

    public function setFinancing2Value(float $financing2Value): self
    {
        $this->financing2Value = $financing2Value;

        return $this;
    }

    public function getFinancing3Date(): ?\DateTimeInterface
    {
        return $this->financing3Date;
    }

    public function setFinancing3Date(?\DateTimeInterface $financing3Date): self
    {
        $this->financing3Date = $financing3Date;

        return $this;
    }

    public function getFinancing3Value(): ?float
    {
        return $this->financing3Value;
    }

    public function setFinancing3Value(float $financing3Value): self
    {
        $this->financing3Value = $financing3Value;

        return $this;
    }

    public function getFinancing4Date(): ?\DateTimeInterface
    {
        return $this->financing4Date;
    }

    public function setFinancing4Date(?\DateTimeInterface $financing4Date): self
    {
        $this->financing4Date = $financing4Date;

        return $this;
    }

    public function getFinancing4Value(): ?float
    {
        return $this->financing4Value;
    }

    public function setFinancing4Value(float $financing4Value): self
    {
        $this->financing4Value = $financing4Value;

        return $this;
    }

    public function getFinancing5Date(): ?\DateTimeInterface
    {
        return $this->financing5Date;
    }

    public function setFinancing5Date(?\DateTimeInterface $financing5Date): self
    {
        $this->financing5Date = $financing5Date;

        return $this;
    }

    public function getFinancing5Value(): ?float
    {
        return $this->financing5Value;
    }

    public function setFinancing5Value(float $financing5Value): self
    {
        $this->financing5Value = $financing5Value;

        return $this;
    }

    public function getFinancing6Date(): ?\DateTimeInterface
    {
        return $this->financing6Date;
    }

    public function setFinancing6Date(?\DateTimeInterface $financing6Date): self
    {
        $this->financing6Date = $financing6Date;

        return $this;
    }

    public function getFinancing6Value(): ?float
    {
        return $this->financing6Value;
    }

    public function setFinancing6Value(float $financing6Value): self
    {
        $this->financing6Value = $financing6Value;

        return $this;
    }

    public function getNotes1(): ?string
    {
        return $this->notes1;
    }

    public function setNotes1(string $notes1): self
    {
        $this->notes1 = $notes1;

        return $this;
    }

    public function getNotes2(): ?string
    {
        return $this->notes2;
    }

    public function setNotes2(string $notes2): self
    {
        $this->notes2 = $notes2;

        return $this;
    }

    public function getShopid(): ?int
    {
        return $this->shopid;
    }

    public function setShopid(int $shopid): self
    {
        $this->shopid = $shopid;

        return $this;
    }

    public function getOxordernr(): ?int
    {
        return $this->oxordernr;
    }

    public function setOxordernr(int $oxordernr): self
    {
        $this->oxordernr = $oxordernr;

        return $this;
    }

    public function getOxorderdata(): ?string
    {
        return $this->oxorderdata;
    }

    public function setOxorderdata(string $oxorderdata): self
    {
        $this->oxorderdata = $oxorderdata;

        return $this;
    }

    public function getCreatedby(): ?string
    {
        return $this->createdby;
    }

    public function setCreatedby(string $createdby): self
    {
        $this->createdby = $createdby;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self
    {
        $this->created = $created;

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

    public function setLastchange(?\DateTimeInterface $lastchange): self
    {
        $this->lastchange = $lastchange;

        return $this;
    }


}
