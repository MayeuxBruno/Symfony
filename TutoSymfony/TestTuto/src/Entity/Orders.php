<?php

namespace App\Entity;

use App\Repository\OrdersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrdersRepository::class)
 */
class Orders
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="OrderID",type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="CustomerID",type="string", length=5, nullable=true)
     */
    private $customerid;

    /**
     * @ORM\Column(name="EmployeeID",type="integer", nullable=true)
     */
    private $employeeid;

    /**
     * @ORM\Column(name="OrderDate",type="datetime", nullable=true)
     */
    private $orderdate;

    /**
     * @ORM\Column(name="RequiredDate",type="datetime", nullable=true)
     */
    private $requiredate;

    /**
     * @ORM\Column(name="ShippedDate",type="datetime", nullable=true)
     */
    private $shippeddate;

    /**
     * @ORM\Column(name="ShipVia",type="integer", nullable=true)
     */
    private $shipvia;

    /**
     * @ORM\Column(name="Freight",type="float", nullable=true)
     */
    private $freight;

    /**
     * @ORM\Column(name="ShipName",type="string", length=40, nullable=true)
     */
    private $shipname;

    /**
     * @ORM\Column(name="ShipAddress",type="string", length=60, nullable=true)
     */
    private $shipaddress;

    /**
     * @ORM\Column(name="ShipCity",type="string", length=15, nullable=true)
     */
    private $shipcity;

    /**
     * @ORM\Column(name="ShipRegion",type="string", length=15, nullable=true)
     */
    private $shipregion;

    /**
     * @ORM\Column(name="ShipPostalCode",type="string", length=10, nullable=true)
     */
    private $shippostalcode;

    /**
     * @ORM\Column(name="ShipCountry",type="string", length=15, nullable=true)
     */
    private $shipcountry;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerid(): ?string
    {
        return $this->customerid;
    }

    public function setCustomerid(?string $customerid): self
    {
        $this->customerid = $customerid;

        return $this;
    }

    public function getEmployeeid(): ?int
    {
        return $this->employeeid;
    }

    public function setEmployeeid(?int $employeeid): self
    {
        $this->employeeid = $employeeid;

        return $this;
    }

    public function getOrderdate(): ?\DateTimeInterface
    {
        return $this->orderdate;
    }

    public function setOrderdate(?\DateTimeInterface $orderdate): self
    {
        $this->orderdate = $orderdate;

        return $this;
    }

    public function getRequiredate(): ?\DateTimeInterface
    {
        return $this->requiredate;
    }

    public function setRequiredate(?\DateTimeInterface $requiredate): self
    {
        $this->requiredate = $requiredate;

        return $this;
    }

    public function getShippeddate(): ?\DateTimeInterface
    {
        return $this->shippeddate;
    }

    public function setShippeddate(?\DateTimeInterface $shippeddate): self
    {
        $this->shippeddate = $shippeddate;

        return $this;
    }

    public function getShipvia(): ?int
    {
        return $this->shipvia;
    }

    public function setShipvia(?int $shipvia): self
    {
        $this->shipvia = $shipvia;

        return $this;
    }

    public function getFreight(): ?float
    {
        return $this->freight;
    }

    public function setFreight(?float $freight): self
    {
        $this->freight = $freight;

        return $this;
    }

    public function getShipname(): ?string
    {
        return $this->shipname;
    }

    public function setShipname(?string $shipname): self
    {
        $this->shipname = $shipname;

        return $this;
    }

    public function getShipaddress(): ?string
    {
        return $this->shipaddress;
    }

    public function setShipaddress(?string $shipaddress): self
    {
        $this->shipaddress = $shipaddress;

        return $this;
    }

    public function getShipcity(): ?string
    {
        return $this->shipcity;
    }

    public function setShipcity(?string $shipcity): self
    {
        $this->shipcity = $shipcity;

        return $this;
    }

    public function getShipregion(): ?string
    {
        return $this->shipregion;
    }

    public function setShipregion(?string $shipregion): self
    {
        $this->shipregion = $shipregion;

        return $this;
    }

    public function getShippostalcode(): ?string
    {
        return $this->shippostalcode;
    }

    public function setShippostalcode(?string $shippostalcode): self
    {
        $this->shippostalcode = $shippostalcode;

        return $this;
    }

    public function getShipcountry(): ?string
    {
        return $this->shipcountry;
    }

    public function setShipcountry(?string $shipcountry): self
    {
        $this->shipcountry = $shipcountry;

        return $this;
    }

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Customers", fetch="EAGER")
     * @ORM\JoinColumn(name="CustomerID", referencedColumnName="CustomerID")
     */

     private $customers;

     public function getCustomer()
     {
         return $this->customers;
     }

     public function setCustomer(?Customers $customer): self
     {
         $this->customers=$customer;
         return $this;
     }

}
