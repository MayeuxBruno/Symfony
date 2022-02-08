<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="suppliers")
 */
class Suppliers
{
    /**
     * @ORM\Column(name="SupplierID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
     private $id;

     public function getId()
     {
         return $this->id;
     }

     /**
      * @ORM\Column(name="CompanyName", type="string", length=40)
      */
      private $name;
     public function getName(): ?string
     {
         return $this->name;
     }

     public function setName(string $name): self
     {
         $this->name=$name;
         return $this;
     }

     /**
      * @ORM\Column(name="ContactName", type="string", length=30)
      */
      private $contactname;
      public function getContactName(): ?string
      {
          return $this->contactname;
      }
 
      public function setContactName(string $contactname): self
      {
          $this->contactname=$contactname;
          return $this;
      }

      /**
      * @ORM\Column(name="ContactTitle", type="string", length=30)
      */
      private $contacttitle;
      public function getContactTitle(): ?string
      {
          return $this->contacttitle;
      }
 
      public function setContactTitle(string $contacttitle): self
      {
          $this->contacttitle=$contacttitle;
          return $this;
      }

      /**
      * @ORM\Column(name="Address", type="string", length=60)
      */
      private $address;
      public function getAddress(): ?string
      {
          return $this->address;
      }
 
      public function setAdress(string $address): self
      {
          $this->adress=$address;
          return $this;
      }

      /**
      * @ORM\Column(name="City", type="string", length=15)
      */
      private $city;
      public function getCity(): ?string
      {
          return $this->city;
      }
 
      public function setCity(string $city): self
      {
          $this->city=$city;
          return $this;
      }

      /**
      * @ORM\Column(name="Region", type="string", length=15)
      */
      private $region;
      public function getRegion(): ?string
      {
          return $this->region;
      }
 
      public function setRegion(string $region): self
      {
          $this->region=$region;
          return $this;
      }

      /**
      * @ORM\Column(name="PostalCode", type="string", length=10)
      */
      private $postalcode;
      public function getPostalCode(): ?string
      {
          return $this->postalcode;
      }
 
      public function setPostalCode(string $postalcode): self
      {
          $this->postalcode=$postalcode;
          return $this;
      }

      /**
      * @ORM\Column(name="Country", type="string", length=15)
      */
      private $country;
      public function getCountry(): ?string
      {
          return $this->country;
      }
 
      public function setCountry(string $country): self
      {
          $this->country=$country;
          return $this;
      }

      /**
      * @ORM\Column(name="Phone", type="string", length=24)
      */
      private $phone;
      public function getPhone(): ?string
      {
          return $this->phone;
      }
 
      public function setPhone(string $phone): self
      {
          $this->phone=$phone;
          return $this;
      }

      /**
      * @ORM\Column(name="Fax", type="string", length=24)
      */
      private $fax;
      public function getFax(): ?string
      {
          return $this->fax;
      }
 
      public function setFax(string $fax): self
      {
          $this->fax=$fax;
          return $this;
      }

       /**
      * @ORM\Column(name="HomePage", type="string", length=150)
      */
      private $homepage;
      public function getHomePage(): ?string
      {
          return $this->homepage;
      }
 
      public function setHomePage(string $homepage): self
      {
          $this->homepage=$homepage;
          return $this;
      }

     /**
      * @ORM\OneToMany(targetEntity="Products", mappedBy="suppliers", orphanRemoval=true)
      */
     private $products;

     public function __construct()
     {
         $this->products = new ArrayCollection();
     }

     public function getProducts(): Collection
     {
         return $this->products;
     }

     public function addProducts(Products $products): self
     {
         if(!$this->products->contains($products)){
             $this->products[] = $products;
             $products->setSuppliers($this);
         }
         return $this;
     }
}
?>