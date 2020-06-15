<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderarticles
 *
 * @ORM\Table(name="orderarticles", indexes={@ORM\Index(name="orderid", columns={"orderid"}), @ORM\Index(name="articleid", columns={"articleid"})})
 * @ORM\Entity
 */
class Orderarticles
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
    private $orderid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="articleid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $articleid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="articleparentid", type="integer", nullable=false)
     */
    private $articleparentid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturerid", type="integer", nullable=false, options={"default"="1"})
     */
    private $manufacturerid = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="integer", nullable=false)
     */
    private $categoryid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="categoryparentid", type="integer", nullable=false)
     */
    private $categoryparentid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="artnum", type="string", length=32, nullable=false)
     */
    private $artnum = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="position", type="smallint", nullable=false)
     */
    private $position = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="storno", type="boolean", nullable=false)
     */
    private $storno = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="stornoprice", type="float", precision=10, scale=0, nullable=false)
     */
    private $stornoprice = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=32, nullable=false)
     */
    private $type = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=128, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="shortdescr", type="string", length=256, nullable=false)
     */
    private $shortdescr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mpn", type="string", length=32, nullable=false)
     */
    private $mpn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="mn", type="string", length=32, nullable=false)
     */
    private $mn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="sn", type="string", length=32, nullable=false)
     */
    private $sn = '';

    /**
     * @var string
     *
     * @ORM\Column(name="gtin", type="string", length=32, nullable=false)
     */
    private $gtin = '';

    /**
     * @var string
     *
     * @ORM\Column(name="colourfinish", type="string", length=32, nullable=false)
     */
    private $colourfinish = '';

    /**
     * @var bool
     *
     * @ORM\Column(name="mwarranty", type="boolean", nullable=false)
     */
    private $mwarranty = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="warrantyperiod", type="integer", nullable=false)
     */
    private $warrantyperiod = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="conditionid", type="integer", nullable=false)
     */
    private $conditionid = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="nonmaterial", type="boolean", nullable=false)
     */
    private $nonmaterial = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="singleton", type="boolean", nullable=false)
     */
    private $singleton = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="locationid", type="integer", nullable=false)
     */
    private $locationid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="checkedby", type="string", length=64, nullable=false)
     */
    private $checkedby = '';

    /**
     * @var string
     *
     * @ORM\Column(name="finishedby", type="string", length=64, nullable=false)
     */
    private $finishedby = '';

    /**
     * @var float
     *
     * @ORM\Column(name="adprice", type="float", precision=10, scale=0, nullable=false)
     */
    private $adprice = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantity = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float", precision=10, scale=0, nullable=false)
     */
    private $price = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="total", type="float", precision=10, scale=0, nullable=false)
     */
    private $total = '0';

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

    public function getArticleid(): ?int
    {
        return $this->articleid;
    }

    public function setArticleid(int $articleid): self
    {
        $this->articleid = $articleid;

        return $this;
    }

    public function getArticleparentid(): ?int
    {
        return $this->articleparentid;
    }

    public function setArticleparentid(int $articleparentid): self
    {
        $this->articleparentid = $articleparentid;

        return $this;
    }

    public function getManufacturerid(): ?int
    {
        return $this->manufacturerid;
    }

    public function setManufacturerid(int $manufacturerid): self
    {
        $this->manufacturerid = $manufacturerid;

        return $this;
    }

    public function getCategoryid(): ?int
    {
        return $this->categoryid;
    }

    public function setCategoryid(int $categoryid): self
    {
        $this->categoryid = $categoryid;

        return $this;
    }

    public function getCategoryparentid(): ?int
    {
        return $this->categoryparentid;
    }

    public function setCategoryparentid(int $categoryparentid): self
    {
        $this->categoryparentid = $categoryparentid;

        return $this;
    }

    public function getArtnum(): ?string
    {
        return $this->artnum;
    }

    public function setArtnum(string $artnum): self
    {
        $this->artnum = $artnum;

        return $this;
    }

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getStorno(): ?bool
    {
        return $this->storno;
    }

    public function setStorno(bool $storno): self
    {
        $this->storno = $storno;

        return $this;
    }

    public function getStornoprice(): ?float
    {
        return $this->stornoprice;
    }

    public function setStornoprice(float $stornoprice): self
    {
        $this->stornoprice = $stornoprice;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
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

    public function getShortdescr(): ?string
    {
        return $this->shortdescr;
    }

    public function setShortdescr(string $shortdescr): self
    {
        $this->shortdescr = $shortdescr;

        return $this;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(string $mpn): self
    {
        $this->mpn = $mpn;

        return $this;
    }

    public function getMn(): ?string
    {
        return $this->mn;
    }

    public function setMn(string $mn): self
    {
        $this->mn = $mn;

        return $this;
    }

    public function getSn(): ?string
    {
        return $this->sn;
    }

    public function setSn(string $sn): self
    {
        $this->sn = $sn;

        return $this;
    }

    public function getGtin(): ?string
    {
        return $this->gtin;
    }

    public function setGtin(string $gtin): self
    {
        $this->gtin = $gtin;

        return $this;
    }

    public function getColourfinish(): ?string
    {
        return $this->colourfinish;
    }

    public function setColourfinish(string $colourfinish): self
    {
        $this->colourfinish = $colourfinish;

        return $this;
    }

    public function getMwarranty(): ?bool
    {
        return $this->mwarranty;
    }

    public function setMwarranty(bool $mwarranty): self
    {
        $this->mwarranty = $mwarranty;

        return $this;
    }

    public function getWarrantyperiod(): ?int
    {
        return $this->warrantyperiod;
    }

    public function setWarrantyperiod(int $warrantyperiod): self
    {
        $this->warrantyperiod = $warrantyperiod;

        return $this;
    }

    public function getConditionid(): ?int
    {
        return $this->conditionid;
    }

    public function setConditionid(int $conditionid): self
    {
        $this->conditionid = $conditionid;

        return $this;
    }

    public function getNonmaterial(): ?bool
    {
        return $this->nonmaterial;
    }

    public function setNonmaterial(bool $nonmaterial): self
    {
        $this->nonmaterial = $nonmaterial;

        return $this;
    }

    public function getSingleton(): ?bool
    {
        return $this->singleton;
    }

    public function setSingleton(bool $singleton): self
    {
        $this->singleton = $singleton;

        return $this;
    }

    public function getLocationid(): ?int
    {
        return $this->locationid;
    }

    public function setLocationid(int $locationid): self
    {
        $this->locationid = $locationid;

        return $this;
    }

    public function getCheckedby(): ?string
    {
        return $this->checkedby;
    }

    public function setCheckedby(string $checkedby): self
    {
        $this->checkedby = $checkedby;

        return $this;
    }

    public function getFinishedby(): ?string
    {
        return $this->finishedby;
    }

    public function setFinishedby(string $finishedby): self
    {
        $this->finishedby = $finishedby;

        return $this;
    }

    public function getAdprice(): ?float
    {
        return $this->adprice;
    }

    public function setAdprice(float $adprice): self
    {
        $this->adprice = $adprice;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }


}
