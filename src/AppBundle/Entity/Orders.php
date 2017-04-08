<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="Orders")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Orders")
 */
class Orders
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
     * @var integer
     *
     * @ORM\Column(name="shop_id", type="integer", nullable=true)
     */
    private $shop_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_id", type="integer", nullable=true)
     */
    private $product_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fio_id", type="integer", nullable=true)
     */
    private $fio_id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=100)
     */
    private $tel;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirm", type="boolean")
     */
    private $confirm;

    /**
     * @ORM\ManyToOne(targetEntity="Users", inversedBy="orders")
     * @ORM\JoinColumn(name="fio_id", referencedColumnName="id")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity="Shops", inversedBy="orders")
     * @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     */
    private $shops;

    /**
     * @ORM\ManyToOne(targetEntity="Products", inversedBy="orders")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    private $products;

}