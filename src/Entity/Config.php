<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Config
 *
 * @ORM\Table(name="config")
 * @ORM\Entity
 */
class Config
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
     * @ORM\Column(name="name", type="string", length=32, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=16, nullable=false)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="companyname", type="string", length=32, nullable=false)
     */
    private $companyname;

    /**
     * @var int
     *
     * @ORM\Column(name="max_count_article_pics", type="integer", nullable=false)
     */
    private $maxCountArticlePics;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn1", type="integer", nullable=false)
     */
    private $oaAddIdBtn1;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn2", type="integer", nullable=false)
     */
    private $oaAddIdBtn2;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn3", type="integer", nullable=false)
     */
    private $oaAddIdBtn3;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn4", type="integer", nullable=false)
     */
    private $oaAddIdBtn4;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn5", type="integer", nullable=false)
     */
    private $oaAddIdBtn5;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn6", type="integer", nullable=false)
     */
    private $oaAddIdBtn6;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn7", type="integer", nullable=false)
     */
    private $oaAddIdBtn7;

    /**
     * @var int
     *
     * @ORM\Column(name="oa_add_id_btn8", type="integer", nullable=false)
     */
    private $oaAddIdBtn8;

    /**
     * @var string
     *
     * @ORM\Column(name="article_service_mailto", type="string", length=128, nullable=false)
     */
    private $articleServiceMailto;

    /**
     * @var string
     *
     * @ORM\Column(name="article_service_mailto_cc", type="string", length=128, nullable=false)
     */
    private $articleServiceMailtoCc;

    /**
     * @var string
     *
     * @ORM\Column(name="no_total_keyword", type="string", length=128, nullable=false)
     */
    private $noTotalKeyword;

    /**
     * @var string
     *
     * @ORM\Column(name="alfema_email_from", type="string", length=128, nullable=false)
     */
    private $alfemaEmailFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="alfema_email_to", type="string", length=128, nullable=false)
     */
    private $alfemaEmailTo;

    /**
     * @var string
     *
     * @ORM\Column(name="imap_server", type="string", length=128, nullable=false)
     */
    private $imapServer;

    /**
     * @var string
     *
     * @ORM\Column(name="imap_mailbox_string", type="string", length=128, nullable=false)
     */
    private $imapMailboxString;

    /**
     * @var string
     *
     * @ORM\Column(name="webmail_baseurl", type="string", length=128, nullable=false)
     */
    private $webmailBaseurl;

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

    public function getVersion(): ?string
    {
        return $this->version;
    }

    public function setVersion(string $version): self
    {
        $this->version = $version;

        return $this;
    }

    public function getCompanyname(): ?string
    {
        return $this->companyname;
    }

    public function setCompanyname(string $companyname): self
    {
        $this->companyname = $companyname;

        return $this;
    }

    public function getMaxCountArticlePics(): ?int
    {
        return $this->maxCountArticlePics;
    }

    public function setMaxCountArticlePics(int $maxCountArticlePics): self
    {
        $this->maxCountArticlePics = $maxCountArticlePics;

        return $this;
    }

    public function getOaAddIdBtn1(): ?int
    {
        return $this->oaAddIdBtn1;
    }

    public function setOaAddIdBtn1(int $oaAddIdBtn1): self
    {
        $this->oaAddIdBtn1 = $oaAddIdBtn1;

        return $this;
    }

    public function getOaAddIdBtn2(): ?int
    {
        return $this->oaAddIdBtn2;
    }

    public function setOaAddIdBtn2(int $oaAddIdBtn2): self
    {
        $this->oaAddIdBtn2 = $oaAddIdBtn2;

        return $this;
    }

    public function getOaAddIdBtn3(): ?int
    {
        return $this->oaAddIdBtn3;
    }

    public function setOaAddIdBtn3(int $oaAddIdBtn3): self
    {
        $this->oaAddIdBtn3 = $oaAddIdBtn3;

        return $this;
    }

    public function getOaAddIdBtn4(): ?int
    {
        return $this->oaAddIdBtn4;
    }

    public function setOaAddIdBtn4(int $oaAddIdBtn4): self
    {
        $this->oaAddIdBtn4 = $oaAddIdBtn4;

        return $this;
    }

    public function getOaAddIdBtn5(): ?int
    {
        return $this->oaAddIdBtn5;
    }

    public function setOaAddIdBtn5(int $oaAddIdBtn5): self
    {
        $this->oaAddIdBtn5 = $oaAddIdBtn5;

        return $this;
    }

    public function getOaAddIdBtn6(): ?int
    {
        return $this->oaAddIdBtn6;
    }

    public function setOaAddIdBtn6(int $oaAddIdBtn6): self
    {
        $this->oaAddIdBtn6 = $oaAddIdBtn6;

        return $this;
    }

    public function getOaAddIdBtn7(): ?int
    {
        return $this->oaAddIdBtn7;
    }

    public function setOaAddIdBtn7(int $oaAddIdBtn7): self
    {
        $this->oaAddIdBtn7 = $oaAddIdBtn7;

        return $this;
    }

    public function getOaAddIdBtn8(): ?int
    {
        return $this->oaAddIdBtn8;
    }

    public function setOaAddIdBtn8(int $oaAddIdBtn8): self
    {
        $this->oaAddIdBtn8 = $oaAddIdBtn8;

        return $this;
    }

    public function getArticleServiceMailto(): ?string
    {
        return $this->articleServiceMailto;
    }

    public function setArticleServiceMailto(string $articleServiceMailto): self
    {
        $this->articleServiceMailto = $articleServiceMailto;

        return $this;
    }

    public function getArticleServiceMailtoCc(): ?string
    {
        return $this->articleServiceMailtoCc;
    }

    public function setArticleServiceMailtoCc(string $articleServiceMailtoCc): self
    {
        $this->articleServiceMailtoCc = $articleServiceMailtoCc;

        return $this;
    }

    public function getNoTotalKeyword(): ?string
    {
        return $this->noTotalKeyword;
    }

    public function setNoTotalKeyword(string $noTotalKeyword): self
    {
        $this->noTotalKeyword = $noTotalKeyword;

        return $this;
    }

    public function getAlfemaEmailFrom(): ?string
    {
        return $this->alfemaEmailFrom;
    }

    public function setAlfemaEmailFrom(string $alfemaEmailFrom): self
    {
        $this->alfemaEmailFrom = $alfemaEmailFrom;

        return $this;
    }

    public function getAlfemaEmailTo(): ?string
    {
        return $this->alfemaEmailTo;
    }

    public function setAlfemaEmailTo(string $alfemaEmailTo): self
    {
        $this->alfemaEmailTo = $alfemaEmailTo;

        return $this;
    }

    public function getImapServer(): ?string
    {
        return $this->imapServer;
    }

    public function setImapServer(string $imapServer): self
    {
        $this->imapServer = $imapServer;

        return $this;
    }

    public function getImapMailboxString(): ?string
    {
        return $this->imapMailboxString;
    }

    public function setImapMailboxString(string $imapMailboxString): self
    {
        $this->imapMailboxString = $imapMailboxString;

        return $this;
    }

    public function getWebmailBaseurl(): ?string
    {
        return $this->webmailBaseurl;
    }

    public function setWebmailBaseurl(string $webmailBaseurl): self
    {
        $this->webmailBaseurl = $webmailBaseurl;

        return $this;
    }


}
