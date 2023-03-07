<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @Assert\NotBlank(message="Uuid is required field")
     * @Assert\Type(type="string", message="Uuid needs to be string value")
     * @Assert\Length(min=3, max=255, minMessage="Uuid must be at least {{ limit }} characters long", maxMessage="Uuid can be a maximum of {{ max }} characters long.")
     */
    #[ORM\Column(length: 255)]
    private ?string $uuid = null;

    /**
     * @Assert\NotBlank(message="Name is required field")
     * @Assert\Type(type="string", message="Name needs to be string value")
     * @Assert\Length(min=3, max=255, minMessage="Name must be at least {{ limit }} characters long", maxMessage="Name can be a maximum of {{ max }} characters long.")
     */
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    /**
     * @Assert\NotBlank(message="Url address is required field")
     * @Assert\Type(type="string", message="Url address needs to be string value")
     * @Assert\Length(min=9, max=255, minMessage="Url address must be at least {{ limit }} characters long", maxMessage="Url address can be a maximum of {{ max }} characters long.")
     */
    #[ORM\Column(length: 255)]
    private ?string $url = null;

    /**
     * @Assert\NotBlank(message="Price is required field")
     * @Assert\Type(type="float", message="Price needs to be float value")
     */
    #[ORM\Column]
    private ?float $price = null;

    /**
     * @Assert\Type(type="bool", message="Visibility needs to be bolean value (true/false)")
     */
    #[ORM\Column]
    private ?bool $visible = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUuid(): ?string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): self
    {
        $this->uuid = $uuid;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function isVisible(): ?bool
    {
        return $this->visible;
    }

    public function setVisible(bool $visible): self
    {
        $this->visible = $visible;

        return $this;
    }
}
