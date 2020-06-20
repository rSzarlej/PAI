<?php


class Role
{
    private $role;

    public function __construct(string $role)
    {
        $this->role = $role;
    }

    public function getRole(): string
    {
        return $this->role;
    }


    public function setRole(string $role): void
    {
        $this->role = $role;
    }

}