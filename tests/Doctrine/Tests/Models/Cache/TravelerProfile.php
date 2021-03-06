<?php

declare(strict_types=1);

namespace Doctrine\Tests\Models\Cache;

/**
 * @Entity
 * @Table("cache_traveler_profile")
 * @Cache("NONSTRICT_READ_WRITE")
 */
class TravelerProfile
{
    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    protected $id;

    /** @Column(unique=true) */
    private $name;

    /**
     * @var TravelerProfileInfo
     * @OneToOne(targetEntity="TravelerProfileInfo", mappedBy="profile")
     * @Cache()
     */
    private $info;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($nae): void
    {
        $this->name = $nae;
    }

    public function getInfo()
    {
        return $this->info;
    }

    public function setInfo(TravelerProfileInfo $info): void
    {
        $this->info = $info;
    }
}
