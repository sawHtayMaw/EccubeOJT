<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation\EntityExtension;
use Eccube\Entity\Product;

/**
 * @EntityExtension("Eccube\Entity\Product")
 */
trait ProductTrait
{

    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=60, options={"unsigned":true})
     * @ORM\Id
     */
    private $id;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetime", nullable=true)
     */
    private $delivery_date;

    /**
     * Get delivery_date.
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    /**
     * Set id.
     *
     * @param string $id
     *
     * @return Product
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set delivery_date.
     *
     * @param \DateTime $delivery_date
     *
     * @return \DateTime
     */
    public function setDeliveryDate($delivery_date)
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

}
