<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Product_type
 *
 * @ORM\Table(name="Product_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Product_type")
 */
class Product_type
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
     * @ORM\OneToMany(targetEntity="Products", mappedBy="product_type")
     */
    private $products;

    public function __construct_products()
    {
        $this->products = new ArrayCollection();
    }

}