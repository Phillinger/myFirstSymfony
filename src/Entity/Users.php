<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class Users
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
     * @ORM\Column(name="username", type="string", length=64, nullable=false)
     */
    private $username;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @ORM\Column(name="initials", type="string", length=4, nullable=false)
     */
    private $initials;

    /**
     * @var string
     *
     * @ORM\Column(name="fon1", type="string", length=64, nullable=false)
     */
    private $fon1;

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

    /**
     * @var int
     *
     * @ORM\Column(name="actuallocationid", type="integer", nullable=false)
     */
    private $actuallocationid;

    /**
     * @var int
     *
     * @ORM\Column(name="search_results_limit", type="integer", nullable=false)
     */
    private $searchResultsLimit;

    /**
     * @var bool
     *
     * @ORM\Column(name="compact_view", type="boolean", nullable=false)
     */
    private $compactView;

    /**
     * @var bool
     *
     * @ORM\Column(name="bcr_active", type="boolean", nullable=false)
     */
    private $bcrActive;

    /**
     * @var bool
     *
     * @ORM\Column(name="full_member_search", type="boolean", nullable=false)
     */
    private $fullMemberSearch;

    /**
     * @var string
     *
     * @ORM\Column(name="jumpto_url", type="string", length=500, nullable=false)
     */
    private $jumptoUrl;

    /**
     * @var string
     *
     * @ORM\Column(name="link_0", type="string", length=500, nullable=false)
     */
    private $link0;

    /**
     * @var string
     *
     * @ORM\Column(name="link_1", type="string", length=500, nullable=false)
     */
    private $link1;

    /**
     * @var string
     *
     * @ORM\Column(name="link_2", type="string", length=500, nullable=false)
     */
    private $link2;

    /**
     * @var string
     *
     * @ORM\Column(name="link_3", type="string", length=500, nullable=false)
     */
    private $link3;

    /**
     * @var string
     *
     * @ORM\Column(name="link_4", type="string", length=500, nullable=false)
     */
    private $link4;

    /**
     * @var string
     *
     * @ORM\Column(name="link_5", type="string", length=500, nullable=false)
     */
    private $link5;

    /**
     * @var string
     *
     * @ORM\Column(name="link_6", type="string", length=500, nullable=false)
     */
    private $link6;

    /**
     * @var string
     *
     * @ORM\Column(name="link_7", type="string", length=500, nullable=false)
     */
    private $link7;

    /**
     * @var string
     *
     * @ORM\Column(name="link_8", type="string", length=500, nullable=false)
     */
    private $link8;

    /**
     * @var string
     *
     * @ORM\Column(name="link_9", type="string", length=500, nullable=false)
     */
    private $link9;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_0", type="string", length=20, nullable=false)
     */
    private $linktext0;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_1", type="string", length=20, nullable=false)
     */
    private $linktext1;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_2", type="string", length=20, nullable=false)
     */
    private $linktext2;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_3", type="string", length=20, nullable=false)
     */
    private $linktext3;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_4", type="string", length=20, nullable=false)
     */
    private $linktext4;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_5", type="string", length=20, nullable=false)
     */
    private $linktext5;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_6", type="string", length=20, nullable=false)
     */
    private $linktext6;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_7", type="string", length=20, nullable=false)
     */
    private $linktext7;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_8", type="string", length=20, nullable=false)
     */
    private $linktext8;

    /**
     * @var string
     *
     * @ORM\Column(name="linktext_9", type="string", length=20, nullable=false)
     */
    private $linktext9;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getActive(): ?bool
    {
        return $this->active;
    }

    public function setActive(bool $active): self
    {
        $this->active = $active;

        return $this;
    }

    public function getInitials(): ?string
    {
        return $this->initials;
    }

    public function setInitials(string $initials): self
    {
        $this->initials = $initials;

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

    public function getActuallocationid(): ?int
    {
        return $this->actuallocationid;
    }

    public function setActuallocationid(int $actuallocationid): self
    {
        $this->actuallocationid = $actuallocationid;

        return $this;
    }

    public function getSearchResultsLimit(): ?int
    {
        return $this->searchResultsLimit;
    }

    public function setSearchResultsLimit(int $searchResultsLimit): self
    {
        $this->searchResultsLimit = $searchResultsLimit;

        return $this;
    }

    public function getCompactView(): ?bool
    {
        return $this->compactView;
    }

    public function setCompactView(bool $compactView): self
    {
        $this->compactView = $compactView;

        return $this;
    }

    public function getBcrActive(): ?bool
    {
        return $this->bcrActive;
    }

    public function setBcrActive(bool $bcrActive): self
    {
        $this->bcrActive = $bcrActive;

        return $this;
    }

    public function getFullMemberSearch(): ?bool
    {
        return $this->fullMemberSearch;
    }

    public function setFullMemberSearch(bool $fullMemberSearch): self
    {
        $this->fullMemberSearch = $fullMemberSearch;

        return $this;
    }

    public function getJumptoUrl(): ?string
    {
        return $this->jumptoUrl;
    }

    public function setJumptoUrl(string $jumptoUrl): self
    {
        $this->jumptoUrl = $jumptoUrl;

        return $this;
    }

    public function getLink0(): ?string
    {
        return $this->link0;
    }

    public function setLink0(string $link0): self
    {
        $this->link0 = $link0;

        return $this;
    }

    public function getLink1(): ?string
    {
        return $this->link1;
    }

    public function setLink1(string $link1): self
    {
        $this->link1 = $link1;

        return $this;
    }

    public function getLink2(): ?string
    {
        return $this->link2;
    }

    public function setLink2(string $link2): self
    {
        $this->link2 = $link2;

        return $this;
    }

    public function getLink3(): ?string
    {
        return $this->link3;
    }

    public function setLink3(string $link3): self
    {
        $this->link3 = $link3;

        return $this;
    }

    public function getLink4(): ?string
    {
        return $this->link4;
    }

    public function setLink4(string $link4): self
    {
        $this->link4 = $link4;

        return $this;
    }

    public function getLink5(): ?string
    {
        return $this->link5;
    }

    public function setLink5(string $link5): self
    {
        $this->link5 = $link5;

        return $this;
    }

    public function getLink6(): ?string
    {
        return $this->link6;
    }

    public function setLink6(string $link6): self
    {
        $this->link6 = $link6;

        return $this;
    }

    public function getLink7(): ?string
    {
        return $this->link7;
    }

    public function setLink7(string $link7): self
    {
        $this->link7 = $link7;

        return $this;
    }

    public function getLink8(): ?string
    {
        return $this->link8;
    }

    public function setLink8(string $link8): self
    {
        $this->link8 = $link8;

        return $this;
    }

    public function getLink9(): ?string
    {
        return $this->link9;
    }

    public function setLink9(string $link9): self
    {
        $this->link9 = $link9;

        return $this;
    }

    public function getLinktext0(): ?string
    {
        return $this->linktext0;
    }

    public function setLinktext0(string $linktext0): self
    {
        $this->linktext0 = $linktext0;

        return $this;
    }

    public function getLinktext1(): ?string
    {
        return $this->linktext1;
    }

    public function setLinktext1(string $linktext1): self
    {
        $this->linktext1 = $linktext1;

        return $this;
    }

    public function getLinktext2(): ?string
    {
        return $this->linktext2;
    }

    public function setLinktext2(string $linktext2): self
    {
        $this->linktext2 = $linktext2;

        return $this;
    }

    public function getLinktext3(): ?string
    {
        return $this->linktext3;
    }

    public function setLinktext3(string $linktext3): self
    {
        $this->linktext3 = $linktext3;

        return $this;
    }

    public function getLinktext4(): ?string
    {
        return $this->linktext4;
    }

    public function setLinktext4(string $linktext4): self
    {
        $this->linktext4 = $linktext4;

        return $this;
    }

    public function getLinktext5(): ?string
    {
        return $this->linktext5;
    }

    public function setLinktext5(string $linktext5): self
    {
        $this->linktext5 = $linktext5;

        return $this;
    }

    public function getLinktext6(): ?string
    {
        return $this->linktext6;
    }

    public function setLinktext6(string $linktext6): self
    {
        $this->linktext6 = $linktext6;

        return $this;
    }

    public function getLinktext7(): ?string
    {
        return $this->linktext7;
    }

    public function setLinktext7(string $linktext7): self
    {
        $this->linktext7 = $linktext7;

        return $this;
    }

    public function getLinktext8(): ?string
    {
        return $this->linktext8;
    }

    public function setLinktext8(string $linktext8): self
    {
        $this->linktext8 = $linktext8;

        return $this;
    }

    public function getLinktext9(): ?string
    {
        return $this->linktext9;
    }

    public function setLinktext9(string $linktext9): self
    {
        $this->linktext9 = $linktext9;

        return $this;
    }


}
