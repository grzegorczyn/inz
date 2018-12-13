<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CustomerRepository")
 *
 */
class Customer
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
     * @ORM\Column(name="Imie", type="string", length=20, nullable=false)
     */
    private $imie;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwisko", type="string", length=20, nullable=true)
     */
    private $nazwisko;

    /**
     * @var string
     *
     * @ORM\Column(name="Nazwa_firmy", type="string", length=40, nullable=true)
     */
    private $nazwaFirmy;

    /**
     * @var string
     *
     * @ORM\Column(name="NIP", type="string", length=13, nullable=true)
     */
    private $nIP;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumn(name="contact_id", referencedColumnName="id", onDelete="CASCADE")
     */
    #private $customer;

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
     * Set imie
     *
     * @param string $imie
     *
     * @return Customer
     */
    public function setImie($imie)
    {
        $this->imie = $imie;

        return $this;
    }

    /**
     * Get imie
     *
     * @return string
     */
    public function getImie()
    {
        return $this->imie;
    }

    /**
     * Set nazwisko
     *
     * @param string $nazwisko
     *
     * @return Customer
     */
    public function setNazwisko($nazwisko)
    {
        $this->nazwisko = $nazwisko;

        return $this;
    }

    /**
     * Get nazwisko
     *
     * @return string
     */
    public function getNazwisko()
    {
        return $this->nazwisko;
    }

    /**
     * Set nazwaFirmy
     *
     * @param string $nazwaFirmy
     *
     * @return Customer
     */
    public function setNazwaFirmy($nazwaFirmy)
    {
        $this->nazwaFirmy = $nazwaFirmy;

        return $this;
    }

    /**
     * Get nazwaFirmy
     *
     * @return string
     */
    public function getNazwaFirmy()
    {
        return $this->nazwaFirmy;
    }

    /**
     * Set nIP
     *
     * @param string $nIP
     *
     * @return Customer
     */
    public function setNIP($nIP)
    {
        $this->nIP = $nIP;

        return $this;
    }

    /**
     * Get nIP
     *
     * @return string
     */
    public function getNIP()
    {
        return $this->nIP;
    }

    /**
     * @return int
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param int $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }



/**
 * @ORM\OneToMany(targetEntity="Contact", mappedBy="customer", cascade={"persist"})
 */
    private $contact;


    public function __construct()
    {
        $this->contact = new ArrayCollection();
    }


    /**
     * Add contact
     * @param \AppBundle\Entity\Contact $contact
     *
     * @return Customer
     */
    public function addContact(Contact $contact){
        $this->contact[]= $contact;
       # $contact->setCustomer($this);
        return $this;
    }

    public function removeContact(Contact $contact){
        $this->contact->removeElement($contact);
    }

   # protected $contacts;



public function getContact()
{
    return $this->contact;
}


}
