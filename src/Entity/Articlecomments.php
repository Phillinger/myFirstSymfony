<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Articlecomments
 *
 * @ORM\Table(name="articlecomments", indexes={@ORM\Index(name="articleid", columns={"articleid"})})
 * @ORM\Entity
 */
class Articlecomments
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
     * @ORM\Column(name="articleid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $articleid;

    /**
     * @var string
     *
     * @ORM\Column(name="notes", type="text", length=0, nullable=false)
     */
    private $notes;

    /**
     * @var int
     *
     * @ORM\Column(name="locationid", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $locationid;

    /**
     * @var string
     *
     * @ORM\Column(name="reportedby", type="string", length=64, nullable=false)
     */
    private $reportedby;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="reportdatetime", type="datetime", nullable=false)
     */
    private $reportdatetime;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(string $notes): self
    {
        $this->notes = $notes;

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

    public function getReportedby(): ?string
    {
        return $this->reportedby;
    }

    public function setReportedby(string $reportedby): self
    {
        $this->reportedby = $reportedby;

        return $this;
    }

    public function getReportdatetime(): ?\DateTimeInterface
    {
        return $this->reportdatetime;
    }

    public function setReportdatetime(\DateTimeInterface $reportdatetime): self
    {
        $this->reportdatetime = $reportdatetime;

        return $this;
    }


}
