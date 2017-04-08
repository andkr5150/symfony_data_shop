<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="Products")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Products")
 */
class Products
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
     * @ORM\Column(name="type_id", type="integer", nullable=true)
     */
    private $type_id;

    /**
     * @var string
     *
     * @ORM\Column(name="brand", type="string", length=255)
     */
    private $brand;

    /**
     * @var string
     *
     * @ORM\Column(name="model", type="string", length=255)
     */
    private $model;

    /**
     * @var string
     *
     * @ORM\Column(name="data", type="string", length=100)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=255)
     */
    private $img;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="string", length=45)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="warranty", type="string", length=45)
     */
    private $warranty;

    /**
     * @ORM\ManyToOne(targetEntity="Product_type", inversedBy="products")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id")
     */
    private $product_type;

    /**
     * @ORM\ManyToOne(targetEntity="Shops", inversedBy="products")
     * @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
     */
    private $products;

    /**
     * @ORM\OneToMany(targetEntity="Orders", mappedBy="products")
     */
    private $orders;

    public function __construct_orders()
    {
        $this->orders = new ArrayCollection();
    }


}