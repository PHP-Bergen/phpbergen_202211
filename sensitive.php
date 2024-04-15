<?php declare(strict_types=1);

function passwordHash(string $password) {
  password_hash($password, 'Slitan');
}

passwordHash('hunter2');
