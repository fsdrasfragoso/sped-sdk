 
<?php

namespace Core\UseCases\GenerateToken;

use Core\Entities\Token;

class GenerateTokenResponse
{
    public Token $token;

    public function __construct(Token $token)
    {
        $this->token = $token;
    }
}
