<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="Telefon_stacjonarny", type="string", length=11, nullable=true)
     */
    private $telefonStacjonarny;

    /**
     * @var string
     *
     * @ORM\Column(name="Telefon_komorkowy", type="string", length=11, nullable=true)
     */
    private $telefonKomorkowy;

    /**
     * @var string
     *
     * @ORM\Column(name="Adres_email", type="string", length=30, unique=true)
     */
    private $adresEmail;





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
     * Set telefonStacjonarny
     *
     * @param string $telefonStacjonarny
     *
     * @return Contact
     */
    public function setTelefonStacjonarny($telefonStacjonarny)
    {
        $this->telefonStacjonarny = $telefonStacjonarny;

        return $this;
    }

    /**
     * Get telefonStacjonarny
     *
     * @return string
     */
    public function getTelefonStacjonarny()
    {
        return $this->telefonStacjonarny;
    }

    /**
     * Set telefonKomorkowy
     *
     * @param string $telefonKomorkowy
     *
     * @return Contact
     */
    public function setTelefonKomorkowy($telefonKomorkowy)
    {
        $this->telefonKomorkowy = $telefonKomorkowy;

        return $this;
    }

    /**
     * Get telefonKomorkowy
     *
     * @return string
     */
    public function getTelefonKomorkowy()
    {
        return $this->telefonKomorkowy;
    }

    /**
     * Set adresEmail
     *
     * @param string $adresEmail
     *
     * @return Contact
     */
    public function setAdresEmail($adresEmail)
    {
        $this->adresEmail = $adresEmail;

        return $this;
    }

    /**
     * Get adresEmail
     *
     * @return string
     */
    public function getAdresEmail()
    {
        return $this->adresEmail;
    }

/**
 * @ORM\ManyToOne(targetEntity="Customer", inversedBy="cus")
 * ORM\JoinColumn(name="customer_id", referencedColumnName='id')
 */
    private $customer;

}

