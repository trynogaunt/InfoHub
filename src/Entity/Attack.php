<?php

namespace App\Entity;

use App\Repository\AttackRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttackRepository::class)]
class Attack
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $direction = null;

    #[ORM\Column]
    private ?int $chain_position = null;

    #[ORM\OneToMany(mappedBy: 'attack', targetEntity: AttackInfos::class)]
    private Collection $has;

    public function __construct()
    {
        $this->has = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDirection(): ?string
    {
        return $this->direction;
    }

    public function setDirection(string $direction): static
    {
        $this->direction = $direction;

        return $this;
    }

    public function getChainPosition(): ?int
    {
        return $this->chain_position;
    }

    public function setChainPosition(int $chain_position): static
    {
        $this->chain_position = $chain_position;

        return $this;
    }

    /**
     * @return Collection<int, AttackInfos>
     */
    public function getHas(): Collection
    {
        return $this->has;
    }

    public function addHa(AttackInfos $ha): static
    {
        if (!$this->has->contains($ha)) {
            $this->has->add($ha);
            $ha->setAttack($this);
        }

        return $this;
    }

    public function removeHa(AttackInfos $ha): static
    {
        if ($this->has->removeElement($ha)) {
            // set the owning side to null (unless already changed)
            if ($ha->getAttack() === $this) {
                $ha->setAttack(null);
            }
        }

        return $this;
    }
}
