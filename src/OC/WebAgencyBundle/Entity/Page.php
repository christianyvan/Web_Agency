<?php

namespace OC\WebAgencyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * page
 *
 * @ORM\Table(name="page")
 * @ORM\Entity(repositoryClass="OC\WebAgencyBundle\Repository\PageRepository")
 */
class Page
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="pagenumber", type="smallint", nullable=true, unique=true)
     */
    private $pagenumber;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return page
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set pagenumber
     *
     * @param integer $pagenumber
     *
     * @return page
     */
    public function setPagenumber($pagenumber)
    {
        $this->pagenumber = $pagenumber;

        return $this;
    }

    /**
     * Get pagenumber
     *
     * @return int
     */
    public function getPagenumber()
    {
        return $this->pagenumber;
    }
}

