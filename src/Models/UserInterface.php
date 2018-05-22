<?php

namespace SONFin\Models;


interface UserInterface
{
    public function getId(): int;

    public function getFullname();

    public function getEmail(): string;

    public function getPassword(): string;
}
