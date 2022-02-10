<?php

namespace App\Entity;

use App\Repository\ProductsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductsRepository::class)
 */
class Products
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ProductName;

    /**
     * @ORM\Column(type="integer")
     */
    private $CategoryID;

    /**
     * @ORM\Column(type="float")
     */
    private $QuantityPerUnit;

    /**
     * @ORM\Column(type="float")
     */
    private $UnitPrice;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitsInStock;

    /**
     * @ORM\Column(type="integer")
     */
    private $UnitsOnOrder;

    /**
     * @ORM\Column(type="integer")
     */
    private $RecorderLevel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Discontinued;

    /**
     * @ORM\ManyToOne(targetEntity=Suppliers::class, inversedBy="products")
     */
    private $Supplied;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProductName(): ?string
    {
        return $this->ProductName;
    }

    public function setProductName(string $ProductName): self
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    public function getCategoryID(): ?int
    {
        return $this->CategoryID;
    }

    public function setCategoryID(int $CategoryID): self
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    public function getQuantityPerUnit(): ?float
    {
        return $this->QuantityPerUnit;
    }

    public function setQuantityPerUnit(float $QuantityPerUnit): self
    {
        $this->QuantityPerUnit = $QuantityPerUnit;

        return $this;
    }

    public function getUnitPrice(): ?float
    {
        return $this->UnitPrice;
    }

    public function setUnitPrice(float $UnitPrice): self
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    public function getUnitsInStock(): ?int
    {
        return $this->UnitsInStock;
    }

    public function setUnitsInStock(int $UnitsInStock): self
    {
        $this->UnitsInStock = $UnitsInStock;

        return $this;
    }

    public function getUnitsOnOrder(): ?int
    {
        return $this->UnitsOnOrder;
    }

    public function setUnitsOnOrder(int $UnitsOnOrder): self
    {
        $this->UnitsOnOrder = $UnitsOnOrder;

        return $this;
    }

    public function getRecorderLevel(): ?int
    {
        return $this->RecorderLevel;
    }

    public function setRecorderLevel(int $RecorderLevel): self
    {
        $this->RecorderLevel = $RecorderLevel;

        return $this;
    }

    public function getDiscontinued(): ?bool
    {
        return $this->Discontinued;
    }

    public function setDiscontinued(bool $Discontinued): self
    {
        $this->Discontinued = $Discontinued;

        return $this;
    }

    public function getSupplied(): ?Suppliers
    {
        return $this->Supplied;
    }

    public function setSupplied(?Suppliers $Supplied): self
    {
        $this->Supplied = $Supplied;

        return $this;
    }
}
