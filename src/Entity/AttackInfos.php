<?php

namespace App\Entity;

use App\Repository\AttackInfosRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AttackInfosRepository::class)]
class AttackInfos
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $damage = null;

    #[ORM\Column]
    private ?int $stamina_use = null;

    #[ORM\Column]
    private ?int $speed = null;

    #[ORM\Column(length: 255)]
    private ?string $hitstun = null;

    #[ORM\Column]
    private ?bool $pin = null;

    #[ORM\Column]
    private ?int $pin_duration = null;

    #[ORM\Column]
    private ?bool $hyperarmor = null;

    #[ORM\Column]
    private ?int $hyperarmor_startup = null;

    #[ORM\Column]
    private ?bool $superarmor = null;

    #[ORM\Column]
    private ?int $superarmor_startup = null;

    #[ORM\Column]
    private ?bool $wallsplat = null;

    #[ORM\Column]
    private ?bool $unblockable = null;

    #[ORM\Column]
    private ?bool $undodgeable = null;

    #[ORM\Column]
    private ?bool $feintable = null;

    #[ORM\Column]
    private ?bool $guaranted = null;

    #[ORM\Column]
    private ?bool $bleed = null;

    #[ORM\Column]
    private ?int $bleed_damage = null;

    #[ORM\ManyToOne(inversedBy: 'has')]
    private ?Attack $attack = null;

    #[ORM\ManyToOne(inversedBy: 'has')]
    private ?Character $character = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDamage(): ?int
    {
        return $this->damage;
    }

    public function setDamage(int $damage): static
    {
        $this->damage = $damage;

        return $this;
    }

    public function getStaminaUse(): ?int
    {
        return $this->stamina_use;
    }

    public function setStaminaUse(int $stamina_use): static
    {
        $this->stamina_use = $stamina_use;

        return $this;
    }

    public function getSpeed(): ?int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): static
    {
        $this->speed = $speed;

        return $this;
    }

    public function getHitstun(): ?string
    {
        return $this->hitstun;
    }

    public function setHitstun(string $hitstun): static
    {
        $this->hitstun = $hitstun;

        return $this;
    }

    public function isPin(): ?bool
    {
        return $this->pin;
    }

    public function setPin(bool $pin): static
    {
        $this->pin = $pin;

        return $this;
    }

    public function getPinDuration(): ?int
    {
        return $this->pin_duration;
    }

    public function setPinDuration(int $pin_duration): static
    {
        $this->pin_duration = $pin_duration;

        return $this;
    }

    public function isHyperarmor(): ?bool
    {
        return $this->hyperarmor;
    }

    public function setHyperarmor(bool $hyperarmor): static
    {
        $this->hyperarmor = $hyperarmor;

        return $this;
    }

    public function getHyperarmorStartup(): ?int
    {
        return $this->hyperarmor_startup;
    }

    public function setHyperarmorStartup(int $hyperarmor_startup): static
    {
        $this->hyperarmor_startup = $hyperarmor_startup;

        return $this;
    }

    public function isSuperarmor(): ?bool
    {
        return $this->superarmor;
    }

    public function setSuperarmor(bool $superarmor): static
    {
        $this->superarmor = $superarmor;

        return $this;
    }

    public function getSuperarmorStartup(): ?int
    {
        return $this->superarmor_startup;
    }

    public function setSuperarmorStartup(int $superarmor_startup): static
    {
        $this->superarmor_startup = $superarmor_startup;

        return $this;
    }

    public function isWallsplat(): ?bool
    {
        return $this->wallsplat;
    }

    public function setWallsplat(bool $wallsplat): static
    {
        $this->wallsplat = $wallsplat;

        return $this;
    }

    public function isUnblockable(): ?bool
    {
        return $this->unblockable;
    }

    public function setUnblockable(bool $unblockable): static
    {
        $this->unblockable = $unblockable;

        return $this;
    }

    public function isUndodgeable(): ?bool
    {
        return $this->undodgeable;
    }

    public function setUndodgeable(bool $undodgeable): static
    {
        $this->undodgeable = $undodgeable;

        return $this;
    }

    public function isFeintable(): ?bool
    {
        return $this->feintable;
    }

    public function setFeintable(bool $feintable): static
    {
        $this->feintable = $feintable;

        return $this;
    }

    public function isGuaranted(): ?bool
    {
        return $this->guaranted;
    }

    public function setGuaranted(bool $guaranted): static
    {
        $this->guaranted = $guaranted;

        return $this;
    }

    public function isBleed(): ?bool
    {
        return $this->bleed;
    }

    public function setBleed(bool $bleed): static
    {
        $this->bleed = $bleed;

        return $this;
    }

    public function getBleedDamage(): ?int
    {
        return $this->bleed_damage;
    }

    public function setBleedDamage(int $bleed_damage): static
    {
        $this->bleed_damage = $bleed_damage;

        return $this;
    }

    public function getAttack(): ?Attack
    {
        return $this->attack;
    }

    public function setAttack(?Attack $attack): static
    {
        $this->attack = $attack;

        return $this;
    }

    public function getCharacter(): ?Character
    {
        return $this->character;
    }

    public function setCharacter(?Character $character): static
    {
        $this->character = $character;

        return $this;
    }
}
