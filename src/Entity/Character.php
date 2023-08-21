<?php

namespace App\Entity;

use App\Repository\CharacterRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CharacterRepository::class)]
class Character
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(length: 255)]
    private ?string $faction = null;

    #[ORM\Column]
    private ?int $health = null;

    #[ORM\Column]
    private ?int $stamina = null;

    #[ORM\Column(length: 255)]
    private ?string $guard_type = null;

    #[ORM\Column(length: 255)]
    private ?string $guard_direction = null;

    #[ORM\Column]
    private ?bool $unlock_enhanced = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $sprint_speed = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $lock_speed = null;

    #[ORM\Column]
    private ?int $forward_dodge_recovery = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $lock_speed_side = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $lock_speed_backward = null;

    #[ORM\OneToMany(mappedBy: 'character', targetEntity: AttackInfos::class)]
    private Collection $has;

    public function __construct()
    {
        $this->has = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
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

    public function getFaction(): ?string
    {
        return $this->faction;
    }

    public function setFaction(string $faction): static
    {
        $this->faction = $faction;

        return $this;
    }

    public function getHealth(): ?int
    {
        return $this->health;
    }

    public function setHealth(int $health): static
    {
        $this->health = $health;

        return $this;
    }

    public function getStamina(): ?int
    {
        return $this->stamina;
    }

    public function setStamina(int $stamina): static
    {
        $this->stamina = $stamina;

        return $this;
    }

    public function getGuardType(): ?string
    {
        return $this->guard_type;
    }

    public function setGuardType(string $guard_type): static
    {
        $this->guard_type = $guard_type;

        return $this;
    }

    public function getGuardDirection(): ?string
    {
        return $this->guard_direction;
    }

    public function setGuardDirection(string $guard_direction): static
    {
        $this->guard_direction = $guard_direction;

        return $this;
    }

    public function isUnlockEnhanced(): ?bool
    {
        return $this->unlock_enhanced;
    }

    public function setUnlockEnhanced(bool $unlock_enhanced): static
    {
        $this->unlock_enhanced = $unlock_enhanced;

        return $this;
    }

    public function getSprintSpeed(): ?string
    {
        return $this->sprint_speed;
    }

    public function setSprintSpeed(string $sprint_speed): static
    {
        $this->sprint_speed = $sprint_speed;

        return $this;
    }

    public function getLockSpeed(): ?string
    {
        return $this->lock_speed;
    }

    public function setLockSpeed(string $lock_speed): static
    {
        $this->lock_speed = $lock_speed;

        return $this;
    }

    public function getForwardDodgeRecovery(): ?int
    {
        return $this->forward_dodge_recovery;
    }

    public function setForwardDodgeRecovery(int $forward_dodge_recovery): static
    {
        $this->forward_dodge_recovery = $forward_dodge_recovery;

        return $this;
    }

    public function getLockSpeedSide(): ?string
    {
        return $this->lock_speed_side;
    }

    public function setLockSpeedSide(string $lock_speed_side): static
    {
        $this->lock_speed_side = $lock_speed_side;

        return $this;
    }

    public function getLockSpeedBackward(): ?string
    {
        return $this->lock_speed_backward;
    }

    public function setLockSpeedBackward(string $lock_speed_backward): static
    {
        $this->lock_speed_backward = $lock_speed_backward;

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
            $ha->setCharacter($this);
        }

        return $this;
    }

    public function removeHa(AttackInfos $ha): static
    {
        if ($this->has->removeElement($ha)) {
            // set the owning side to null (unless already changed)
            if ($ha->getCharacter() === $this) {
                $ha->setCharacter(null);
            }
        }

        return $this;
    }
}
