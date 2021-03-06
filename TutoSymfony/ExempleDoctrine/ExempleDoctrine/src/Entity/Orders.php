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
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $EmployeeID;

    /**
     * @ORM\Column(type="datetime")
     */
    private $OrderDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $RequiredDate;

    /**
     * @ORM\Column(type="datetime")
     */
    private $ShippedDate;

    /**
     * @ORM\Column(type="integer")
     */
    private $ShipVia;

    /**
     * @ORM\Column(type="float")
     */
    private $Freight;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ShipName;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $ShipAddress;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ShipCity;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ShipRegion;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $ShipPostalCode;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ShipCountry;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeID(): ?int
    {
        return $this->EmployeeID;
    }

    public function setEmployeeID(int $EmployeeID): self
    {
        $this->EmployeeID = $EmployeeID;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->OrderDate;
    }

    public function setOrderDate(\DateTimeInterface $OrderDate): self
    {
        $this->OrderDate = $OrderDate;

        return $this;
    }

    public function getRequiredDate(): ?\DateTimeInterface
    {
        return $this->RequiredDate;
    }

    public function setRequiredDate(\DateTimeInterface $RequiredDate): self
    {
        $this->RequiredDate = $RequiredDate;

        return $this;
    }

    public function getShippedDate(): ?\DateTimeInterface
    {
        return $this->ShippedDate;
    }

    public function setShippedDate(\DateTimeInterface $ShippedDate): self
    {
        $this->ShippedDate = $ShippedDate;

        return $this;
    }

    public function getShipVia(): ?int
    {
        return $this->ShipVia;
    }

    public function setShipVia(int $ShipVia): self
    {
        $this->ShipVia = $ShipVia;

        return $this;
    }

    public function getFreight(): ?float
    {
        return $this->Freight;
    }

    public function setFreight(float $Freight): self
    {
        $this->Freight = $Freight;

        return $this;
    }

    public function getShipName(): ?string
    {
        return $this->ShipName;
    }

    public function setShipName(string $ShipName): self
    {
        $this->ShipName = $ShipName;

        return $this;
    }

    public function getShipAddress(): ?string
    {
        return $this->ShipAddress;
    }

    public function setShipAddress(string $ShipAddress): self
    {
        $this->ShipAddress = $ShipAddress;

        return $this;
    }

    public function getShipCity(): ?string
    {
        return $this->ShipCity;
    }

    public function setShipCity(string $ShipCity): self
    {
        $this->ShipCity = $ShipCity;

        return $this;
    }

    public function getShipRegion(): ?string
    {
        return $this->ShipRegion;
    }

    public function setShipRegion(string $ShipRegion): self
    {
        $this->ShipRegion = $ShipRegion;

        return $this;
    }

    public function getShipPostalCode(): ?string
    {
        return $this->ShipPostalCode;
    }

    public function setShipPostalCode(string $ShipPostalCode): self
    {
        $this->ShipPostalCode = $ShipPostalCode;

        return $this;
    }

    public function getShipCountry(): ?string
    {
        return $this->ShipCountry;
    }

    public function setShipCountry(string $ShipCountry): self
    {
        $this->ShipCountry = $ShipCountry;

        return $this;
    }
}
