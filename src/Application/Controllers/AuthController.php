 
<?php

namespace Application\Controllers;

use Core\UseCases\GenerateToken\GenerateTokenUseCase;
use Core\UseCases\GenerateToken\GenerateTokenRequest;

class AuthController
{
    private GenerateTokenUseCase $generateTokenUseCase;

    public function __construct(GenerateTokenUseCase $generateTokenUseCase)
    {
        $this->generateTokenUseCase = $generateTokenUseCase;
    }

    public function generateToken(string $clientId, string $clientSecret): string
    {
        $request = new GenerateTokenRequest($clientId, $clientSecret);
        $response = $this->generateTokenUseCase->execute($request);
        return $response->token->value;
    }
}
