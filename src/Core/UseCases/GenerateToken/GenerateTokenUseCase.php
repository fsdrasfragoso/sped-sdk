 
<?php

namespace Core\UseCases\GenerateToken;

use Core\Entities\Token;

class GenerateTokenUseCase
{
    public function execute(GenerateTokenRequest $request): GenerateTokenResponse
    {
        // Simula geração de token
        $token = new Token('1234567890abcdef', (new \DateTime())->modify('+1 hour'));
        return new GenerateTokenResponse($token);
    }
}
