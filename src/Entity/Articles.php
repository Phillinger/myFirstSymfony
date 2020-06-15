<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articles
 *
 * @ORM\Table(name="articles", indexes={@ORM\Index(name="artnum", columns={"artnum"})})
 * @ORM\Entity
 */
class Articles
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
     * @ORM\Column(name="parentid", type="integer", nullable=false)
     */
    private $parentid;

    /**
     * @var int
     *
     * @ORM\Column(name="categoryid", type="integer", nullable=false, options={"default"="1"})
     */
    private $categoryid = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="categoryparentid", type="integer", nullable=false, options={"default"="1"})
     */
    private $categoryparentid = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="setid", type="integer", nullable=false)
     */
    private $setid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="manufacturerid", type="integer", nullable=false, options={"default"="1"})
     */
    private $manufacturerid = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="artnum", type="string", length=32, nullable=false)
     */
    private $artnum = '';

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
     * @ORM\Column(name="ic", type="string", length=32, nullable=false)
     */
    private $ic = '';

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
     * @var int
     *
     * @ORM\Column(name="conditionid", type="integer", nullable=false, options={"default"="1"})
     */
    private $conditionid = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="statusid", type="integer", nullable=false, options={"default"="1"})
     */
    private $statusid = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="warrantyperiod", type="integer", nullable=false)
     */
    private $warrantyperiod = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="parcel", type="boolean", nullable=false)
     */
    private $parcel = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="mwarranty", type="boolean", nullable=false, options={"comment"="-1 = undefined, 0 = No, 1 = Yes"})
     */
    private $mwarranty = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="putonline", type="boolean", nullable=false)
     */
    private $putonline = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="supraregional", type="boolean", nullable=false)
     */
    private $supraregional = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="shopad", type="boolean", nullable=false)
     */
    private $shopad = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="isonline", type="boolean", nullable=false)
     */
    private $isonline = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="nonmaterial", type="boolean", nullable=false)
     */
    private $nonmaterial = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="singleton", type="boolean", nullable=false, options={"default"="1"})
     */
    private $singleton = true;

    /**
     * @var int
     *
     * @ORM\Column(name="locationid", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $locationid = '1';

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
     * @ORM\Column(name="quantity", type="float", precision=10, scale=0, nullable=false)
     */
    private $quantity = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="priceA", type="float", precision=10, scale=0, nullable=false)
     */
    private $pricea = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="priceB", type="float", precision=10, scale=0, nullable=false)
     */
    private $priceb = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="priceC", type="float", precision=10, scale=0, nullable=false)
     */
    private $pricec = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="costA", type="float", precision=10, scale=0, nullable=false)
     */
    private $costa = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="costB", type="float", precision=10, scale=0, nullable=false)
     */
    private $costb = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="costC", type="float", precision=10, scale=0, nullable=false)
     */
    private $costc = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="rrp", type="float", precision=10, scale=0, nullable=false)
     */
    private $rrp = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="adprice", type="float", precision=10, scale=0, nullable=false)
     */
    private $adprice = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="adnote", type="text", length=0, nullable=false)
     */
    private $adnote = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adtext", type="text", length=0, nullable=false)
     */
    private $adtext = '';

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
     * @var string
     *
     * @ORM\Column(name="exturl", type="text", length=0, nullable=false)
     */
    private $exturl = '';

    /**
     * @var string
     *
     * @ORM\Column(name="searchkeys", type="string", length=256, nullable=false)
     */
    private $searchkeys = '';

    /**
     * @var float
     *
     * @ORM\Column(name="weight_A", type="float", precision=10, scale=0, nullable=false)
     */
    private $weightA = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="diameter_A", type="float", precision=10, scale=0, nullable=false)
     */
    private $diameterA = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="diameter_B", type="float", precision=10, scale=0, nullable=false)
     */
    private $diameterB = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="height_A", type="float", precision=10, scale=0, nullable=false)
     */
    private $heightA = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="width_A", type="float", precision=10, scale=0, nullable=false)
     */
    private $widthA = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="depth_A", type="float", precision=10, scale=0, nullable=false)
     */
    private $depthA = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="height_B", type="float", precision=10, scale=0, nullable=false)
     */
    private $heightB = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="width_B", type="float", precision=10, scale=0, nullable=false)
     */
    private $widthB = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="depth_B", type="float", precision=10, scale=0, nullable=false)
     */
    private $depthB = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="height_C", type="float", precision=10, scale=0, nullable=false)
     */
    private $heightC = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="width_C", type="float", precision=10, scale=0, nullable=false)
     */
    private $widthC = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="depth_C", type="float", precision=10, scale=0, nullable=false)
     */
    private $depthC = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="capacity_A", type="float", precision=10, scale=0, nullable=false)
     */
    private $capacityA = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="capacity_B", type="float", precision=10, scale=0, nullable=false)
     */
    private $capacityB = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="capacity_C", type="float", precision=10, scale=0, nullable=false)
     */
    private $capacityC = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="capacity_D", type="float", precision=10, scale=0, nullable=false)
     */
    private $capacityD = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_00", type="string", length=16, nullable=false)
     */
    private $varchar1600 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_01", type="string", length=16, nullable=false)
     */
    private $varchar1601 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_02", type="string", length=16, nullable=false)
     */
    private $varchar1602 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_03", type="string", length=16, nullable=false)
     */
    private $varchar1603 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_04", type="string", length=16, nullable=false)
     */
    private $varchar1604 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_05", type="string", length=16, nullable=false)
     */
    private $varchar1605 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_06", type="string", length=16, nullable=false)
     */
    private $varchar1606 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_07", type="string", length=16, nullable=false)
     */
    private $varchar1607 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_08", type="string", length=16, nullable=false)
     */
    private $varchar1608 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_09", type="string", length=16, nullable=false)
     */
    private $varchar1609 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_10", type="string", length=16, nullable=false)
     */
    private $varchar1610 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_11", type="string", length=16, nullable=false)
     */
    private $varchar1611 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_12", type="string", length=16, nullable=false)
     */
    private $varchar1612 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_13", type="string", length=16, nullable=false)
     */
    private $varchar1613 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_14", type="string", length=16, nullable=false)
     */
    private $varchar1614 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_15", type="string", length=16, nullable=false)
     */
    private $varchar1615 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_16", type="string", length=16, nullable=false)
     */
    private $varchar1616 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_17", type="string", length=16, nullable=false)
     */
    private $varchar1617 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_18", type="string", length=16, nullable=false)
     */
    private $varchar1618 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_19", type="string", length=16, nullable=false)
     */
    private $varchar1619 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_20", type="string", length=16, nullable=false)
     */
    private $varchar1620 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_21", type="string", length=16, nullable=false)
     */
    private $varchar1621 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_22", type="string", length=16, nullable=false)
     */
    private $varchar1622 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_23", type="string", length=16, nullable=false)
     */
    private $varchar1623 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_24", type="string", length=16, nullable=false)
     */
    private $varchar1624 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_25", type="string", length=16, nullable=false)
     */
    private $varchar1625 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_26", type="string", length=16, nullable=false)
     */
    private $varchar1626 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_27", type="string", length=16, nullable=false)
     */
    private $varchar1627 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="varchar16_28", type="string", length=16, nullable=false)
     */
    private $varchar1628 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="createdby", type="string", length=64, nullable=false)
     */
    private $createdby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

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

    public function getParentid(): ?int
    {
        return $this->parentid;
    }

    public function setParentid(int $parentid): self
    {
        $this->parentid = $parentid;

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

    public function getSetid(): ?int
    {
        return $this->setid;
    }

    public function setSetid(int $setid): self
    {
        $this->setid = $setid;

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

    public function getArtnum(): ?string
    {
        return $this->artnum;
    }

    public function setArtnum(string $artnum): self
    {
        $this->artnum = $artnum;

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

    public function getIc(): ?string
    {
        return $this->ic;
    }

    public function setIc(string $ic): self
    {
        $this->ic = $ic;

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

    public function getConditionid(): ?int
    {
        return $this->conditionid;
    }

    public function setConditionid(int $conditionid): self
    {
        $this->conditionid = $conditionid;

        return $this;
    }

    public function getStatusid(): ?int
    {
        return $this->statusid;
    }

    public function setStatusid(int $statusid): self
    {
        $this->statusid = $statusid;

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

    public function getParcel(): ?bool
    {
        return $this->parcel;
    }

    public function setParcel(bool $parcel): self
    {
        $this->parcel = $parcel;

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

    public function getPutonline(): ?bool
    {
        return $this->putonline;
    }

    public function setPutonline(bool $putonline): self
    {
        $this->putonline = $putonline;

        return $this;
    }

    public function getSupraregional(): ?bool
    {
        return $this->supraregional;
    }

    public function setSupraregional(bool $supraregional): self
    {
        $this->supraregional = $supraregional;

        return $this;
    }

    public function getShopad(): ?bool
    {
        return $this->shopad;
    }

    public function setShopad(bool $shopad): self
    {
        $this->shopad = $shopad;

        return $this;
    }

    public function getIsonline(): ?bool
    {
        return $this->isonline;
    }

    public function setIsonline(bool $isonline): self
    {
        $this->isonline = $isonline;

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

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getPricea(): ?float
    {
        return $this->pricea;
    }

    public function setPricea(float $pricea): self
    {
        $this->pricea = $pricea;

        return $this;
    }

    public function getPriceb(): ?float
    {
        return $this->priceb;
    }

    public function setPriceb(float $priceb): self
    {
        $this->priceb = $priceb;

        return $this;
    }

    public function getPricec(): ?float
    {
        return $this->pricec;
    }

    public function setPricec(float $pricec): self
    {
        $this->pricec = $pricec;

        return $this;
    }

    public function getCosta(): ?float
    {
        return $this->costa;
    }

    public function setCosta(float $costa): self
    {
        $this->costa = $costa;

        return $this;
    }

    public function getCostb(): ?float
    {
        return $this->costb;
    }

    public function setCostb(float $costb): self
    {
        $this->costb = $costb;

        return $this;
    }

    public function getCostc(): ?float
    {
        return $this->costc;
    }

    public function setCostc(float $costc): self
    {
        $this->costc = $costc;

        return $this;
    }

    public function getRrp(): ?float
    {
        return $this->rrp;
    }

    public function setRrp(float $rrp): self
    {
        $this->rrp = $rrp;

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

    public function getAdnote(): ?string
    {
        return $this->adnote;
    }

    public function setAdnote(string $adnote): self
    {
        $this->adnote = $adnote;

        return $this;
    }

    public function getAdtext(): ?string
    {
        return $this->adtext;
    }

    public function setAdtext(string $adtext): self
    {
        $this->adtext = $adtext;

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

    public function getExturl(): ?string
    {
        return $this->exturl;
    }

    public function setExturl(string $exturl): self
    {
        $this->exturl = $exturl;

        return $this;
    }

    public function getSearchkeys(): ?string
    {
        return $this->searchkeys;
    }

    public function setSearchkeys(string $searchkeys): self
    {
        $this->searchkeys = $searchkeys;

        return $this;
    }

    public function getWeightA(): ?float
    {
        return $this->weightA;
    }

    public function setWeightA(float $weightA): self
    {
        $this->weightA = $weightA;

        return $this;
    }

    public function getDiameterA(): ?float
    {
        return $this->diameterA;
    }

    public function setDiameterA(float $diameterA): self
    {
        $this->diameterA = $diameterA;

        return $this;
    }

    public function getDiameterB(): ?float
    {
        return $this->diameterB;
    }

    public function setDiameterB(float $diameterB): self
    {
        $this->diameterB = $diameterB;

        return $this;
    }

    public function getHeightA(): ?float
    {
        return $this->heightA;
    }

    public function setHeightA(float $heightA): self
    {
        $this->heightA = $heightA;

        return $this;
    }

    public function getWidthA(): ?float
    {
        return $this->widthA;
    }

    public function setWidthA(float $widthA): self
    {
        $this->widthA = $widthA;

        return $this;
    }

    public function getDepthA(): ?float
    {
        return $this->depthA;
    }

    public function setDepthA(float $depthA): self
    {
        $this->depthA = $depthA;

        return $this;
    }

    public function getHeightB(): ?float
    {
        return $this->heightB;
    }

    public function setHeightB(float $heightB): self
    {
        $this->heightB = $heightB;

        return $this;
    }

    public function getWidthB(): ?float
    {
        return $this->widthB;
    }

    public function setWidthB(float $widthB): self
    {
        $this->widthB = $widthB;

        return $this;
    }

    public function getDepthB(): ?float
    {
        return $this->depthB;
    }

    public function setDepthB(float $depthB): self
    {
        $this->depthB = $depthB;

        return $this;
    }

    public function getHeightC(): ?float
    {
        return $this->heightC;
    }

    public function setHeightC(float $heightC): self
    {
        $this->heightC = $heightC;

        return $this;
    }

    public function getWidthC(): ?float
    {
        return $this->widthC;
    }

    public function setWidthC(float $widthC): self
    {
        $this->widthC = $widthC;

        return $this;
    }

    public function getDepthC(): ?float
    {
        return $this->depthC;
    }

    public function setDepthC(float $depthC): self
    {
        $this->depthC = $depthC;

        return $this;
    }

    public function getCapacityA(): ?float
    {
        return $this->capacityA;
    }

    public function setCapacityA(float $capacityA): self
    {
        $this->capacityA = $capacityA;

        return $this;
    }

    public function getCapacityB(): ?float
    {
        return $this->capacityB;
    }

    public function setCapacityB(float $capacityB): self
    {
        $this->capacityB = $capacityB;

        return $this;
    }

    public function getCapacityC(): ?float
    {
        return $this->capacityC;
    }

    public function setCapacityC(float $capacityC): self
    {
        $this->capacityC = $capacityC;

        return $this;
    }

    public function getCapacityD(): ?float
    {
        return $this->capacityD;
    }

    public function setCapacityD(float $capacityD): self
    {
        $this->capacityD = $capacityD;

        return $this;
    }

    public function getVarchar1600(): ?string
    {
        return $this->varchar1600;
    }

    public function setVarchar1600(string $varchar1600): self
    {
        $this->varchar1600 = $varchar1600;

        return $this;
    }

    public function getVarchar1601(): ?string
    {
        return $this->varchar1601;
    }

    public function setVarchar1601(string $varchar1601): self
    {
        $this->varchar1601 = $varchar1601;

        return $this;
    }

    public function getVarchar1602(): ?string
    {
        return $this->varchar1602;
    }

    public function setVarchar1602(string $varchar1602): self
    {
        $this->varchar1602 = $varchar1602;

        return $this;
    }

    public function getVarchar1603(): ?string
    {
        return $this->varchar1603;
    }

    public function setVarchar1603(string $varchar1603): self
    {
        $this->varchar1603 = $varchar1603;

        return $this;
    }

    public function getVarchar1604(): ?string
    {
        return $this->varchar1604;
    }

    public function setVarchar1604(string $varchar1604): self
    {
        $this->varchar1604 = $varchar1604;

        return $this;
    }

    public function getVarchar1605(): ?string
    {
        return $this->varchar1605;
    }

    public function setVarchar1605(string $varchar1605): self
    {
        $this->varchar1605 = $varchar1605;

        return $this;
    }

    public function getVarchar1606(): ?string
    {
        return $this->varchar1606;
    }

    public function setVarchar1606(string $varchar1606): self
    {
        $this->varchar1606 = $varchar1606;

        return $this;
    }

    public function getVarchar1607(): ?string
    {
        return $this->varchar1607;
    }

    public function setVarchar1607(string $varchar1607): self
    {
        $this->varchar1607 = $varchar1607;

        return $this;
    }

    public function getVarchar1608(): ?string
    {
        return $this->varchar1608;
    }

    public function setVarchar1608(string $varchar1608): self
    {
        $this->varchar1608 = $varchar1608;

        return $this;
    }

    public function getVarchar1609(): ?string
    {
        return $this->varchar1609;
    }

    public function setVarchar1609(string $varchar1609): self
    {
        $this->varchar1609 = $varchar1609;

        return $this;
    }

    public function getVarchar1610(): ?string
    {
        return $this->varchar1610;
    }

    public function setVarchar1610(string $varchar1610): self
    {
        $this->varchar1610 = $varchar1610;

        return $this;
    }

    public function getVarchar1611(): ?string
    {
        return $this->varchar1611;
    }

    public function setVarchar1611(string $varchar1611): self
    {
        $this->varchar1611 = $varchar1611;

        return $this;
    }

    public function getVarchar1612(): ?string
    {
        return $this->varchar1612;
    }

    public function setVarchar1612(string $varchar1612): self
    {
        $this->varchar1612 = $varchar1612;

        return $this;
    }

    public function getVarchar1613(): ?string
    {
        return $this->varchar1613;
    }

    public function setVarchar1613(string $varchar1613): self
    {
        $this->varchar1613 = $varchar1613;

        return $this;
    }

    public function getVarchar1614(): ?string
    {
        return $this->varchar1614;
    }

    public function setVarchar1614(string $varchar1614): self
    {
        $this->varchar1614 = $varchar1614;

        return $this;
    }

    public function getVarchar1615(): ?string
    {
        return $this->varchar1615;
    }

    public function setVarchar1615(string $varchar1615): self
    {
        $this->varchar1615 = $varchar1615;

        return $this;
    }

    public function getVarchar1616(): ?string
    {
        return $this->varchar1616;
    }

    public function setVarchar1616(string $varchar1616): self
    {
        $this->varchar1616 = $varchar1616;

        return $this;
    }

    public function getVarchar1617(): ?string
    {
        return $this->varchar1617;
    }

    public function setVarchar1617(string $varchar1617): self
    {
        $this->varchar1617 = $varchar1617;

        return $this;
    }

    public function getVarchar1618(): ?string
    {
        return $this->varchar1618;
    }

    public function setVarchar1618(string $varchar1618): self
    {
        $this->varchar1618 = $varchar1618;

        return $this;
    }

    public function getVarchar1619(): ?string
    {
        return $this->varchar1619;
    }

    public function setVarchar1619(string $varchar1619): self
    {
        $this->varchar1619 = $varchar1619;

        return $this;
    }

    public function getVarchar1620(): ?string
    {
        return $this->varchar1620;
    }

    public function setVarchar1620(string $varchar1620): self
    {
        $this->varchar1620 = $varchar1620;

        return $this;
    }

    public function getVarchar1621(): ?string
    {
        return $this->varchar1621;
    }

    public function setVarchar1621(string $varchar1621): self
    {
        $this->varchar1621 = $varchar1621;

        return $this;
    }

    public function getVarchar1622(): ?string
    {
        return $this->varchar1622;
    }

    public function setVarchar1622(string $varchar1622): self
    {
        $this->varchar1622 = $varchar1622;

        return $this;
    }

    public function getVarchar1623(): ?string
    {
        return $this->varchar1623;
    }

    public function setVarchar1623(string $varchar1623): self
    {
        $this->varchar1623 = $varchar1623;

        return $this;
    }

    public function getVarchar1624(): ?string
    {
        return $this->varchar1624;
    }

    public function setVarchar1624(string $varchar1624): self
    {
        $this->varchar1624 = $varchar1624;

        return $this;
    }

    public function getVarchar1625(): ?string
    {
        return $this->varchar1625;
    }

    public function setVarchar1625(string $varchar1625): self
    {
        $this->varchar1625 = $varchar1625;

        return $this;
    }

    public function getVarchar1626(): ?string
    {
        return $this->varchar1626;
    }

    public function setVarchar1626(string $varchar1626): self
    {
        $this->varchar1626 = $varchar1626;

        return $this;
    }

    public function getVarchar1627(): ?string
    {
        return $this->varchar1627;
    }

    public function setVarchar1627(string $varchar1627): self
    {
        $this->varchar1627 = $varchar1627;

        return $this;
    }

    public function getVarchar1628(): ?string
    {
        return $this->varchar1628;
    }

    public function setVarchar1628(string $varchar1628): self
    {
        $this->varchar1628 = $varchar1628;

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

    public function setCreated(\DateTimeInterface $created): self
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

    public function setLastchange(\DateTimeInterface $lastchange): self
    {
        $this->lastchange = $lastchange;

        return $this;
    }


}
