<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Users2groups
 *
 * @ORM\Table(name="users2groups")
 * @ORM\Entity
 */
class Users2groups
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
     * @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var int
     *
     * @ORM\Column(name="groupid", type="integer", nullable=false)
     */
    private $groupid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserid(): ?int
    {
        return $this->userid;
    }

    public function setUserid(int $userid): self
    {
        $this->userid = $userid;

        return $this;
    }

    public function getGroupid(): ?int
    {
        return $this->groupid;
    }

    public function setGroupid(int $groupid): self
    {
        $this->groupid = $groupid;

        return $this;
    }


}
