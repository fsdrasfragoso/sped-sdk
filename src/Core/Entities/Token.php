 
<?php

namespace Core\Entities;

class Token
{
    public string $value;
    public \DateTime $expiresAt;

    public function __construct(string $value, \DateTime $expiresAt)
    {
        $this->value = $value;
        $this->expiresAt = $expiresAt;
    }

    public function isExpired(): bool
    {
        return $this->expiresAt < new \DateTime();
    }
}
