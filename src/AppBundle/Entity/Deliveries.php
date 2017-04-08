<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Deliveries
 *
 * @ORM\Table(name="Deliveries")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Deliveries")
 */
class Deliveries
{
    /**
     * @var int
     *
     * @ORM\Column(name="order_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $order_id;

    /**
     * @var integer
     *
     * @ORM\Column(name="fio_id", type="integer", nullable=true)
     */
    private $fio_id;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string", length=45)
     */
    private $time;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="confirm", type="boolean")
     */
    private $confirm;


}