<?php

namespace App\Entity;

use App\Repository\CustomersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CustomersRepository::class)
 */
class Customers
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(name="CustomerID", type="string",length=5)
     */
    private $id;

    /**
     * @ORM\Column(name="CompanyName", type="string", length=40)
     */
    private $companyname;

    /**
     * @ORM\Column(name="ContactName" ,type="string", length=30)
     */
    private $contactname;

    /**
     * @ORM\Column(name="ContactTitle" ,type="string", length=30, nullable=true)
     */
    private $contacttitle;

    /**
     * @ORM\Column(name="Address" ,type="string", length=60, nullable=true)
     */
    private $address;

    /**
     * @ORM\Column(name="City" ,type="string", length=15, nullable=true)
     */
    private $city;

    /**
     * @ORM\Column(name="Region" ,type="string", length=15, nullable=true)
     */
    private $region;

    /**
     * @ORM\Column(name="PostalCode" ,type="string", length=10, nullable=true)
     */
    private $postalcode;

    /**
     * @ORM\Column(name="Country" ,type="string", length=15, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(name="Phone" ,type="string", length=24, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(name="Fax" ,type="string", length=24, nullable=true)
     */
    private $fax;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyname(): ?string
    {
        return $this->companyname;
    }

    public function setCompanyname(string $companyname): self
    {
        $this->companyname = $companyname;

        return $this;
    }

    public function getContactname(): ?string
    {
        return $this->contactname;
    }

    public function setContactname(string $contactname): self
    {
        $this->contactname = $contactname;

        return $this;
    }

    public function getContacttitle(): ?string
    {
        return $this->contacttitle;
    }

    public function setContacttitle(?string $contacttitle): self
    {
        $this->contacttitle = $contacttitle;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getPostalcode(): ?string
    {
        return $this->postalcode;
    }

    public function setPostalcode(?string $postalcode): self
    {
        $this->postalcode = $postalcode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    
}
