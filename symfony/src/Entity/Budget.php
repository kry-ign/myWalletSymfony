<?php

namespace App\Entity;

use App\Repository\BudgetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BudgetRepository::class)
 */
class Budget
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private int $id;

    /**
     * @ORM\Column(type="integer")
     */
    private int $value;

    /**
     * @ORM\Column(type="date")
     */
    private \DateTime $month;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="budgets")
     */
    private User $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $budgetValue): self
    {
        $this->value = $budgetValue;

        return $this;
    }

    public function getMonth(): ?\DateTimeInterface
    {
        return $this->month;
    }

    public function setMonth(\DateTimeInterface $month): self
    {
        $this->month = $month;

        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
