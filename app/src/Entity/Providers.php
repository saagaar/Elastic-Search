<?php

namespace App\Entity;

use App\Repository\ProvidersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProvidersRepository::class)]
class Providers
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $provider_name = null;

    #[ORM\OneToMany(mappedBy: 'provider', targetEntity: Images::class)]
    private Collection $images;

    
    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProviderName(): ?string
    {
        return $this->provider_name;
    }

    public function setProviderName(string $provider_name): self
    {
        $this->provider_name = $provider_name;

        return $this;
    }

    /**
     * @return Collection<int, Images>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Images $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setProvider($this);
        }

        return $this;
    }

    public function removeImage(Images $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProvider() === $this) {
                $image->setProvider(null);
            }
        }

        return $this;
    }

}
