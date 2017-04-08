<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Shops
 *
 * @ORM\Table(name="Shops")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Shops")
 */
class Shops
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
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=100)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="Products", mappedBy="shops")
     */
    private $products;

    public function __construct_products()
    {
        $this->products = new ArrayCollection();
    }

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="shops")
     */
    private $orders;

    public function __construct_orders()
    {
        $this->orders = new ArrayCollection();
    }

}