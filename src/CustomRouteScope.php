<?php declare(strict_types=1);

namespace Endereco\Shopware6Client;

use Shopware\Core\Framework\Routing\AbstractRouteScope;
use Symfony\Component\HttpFoundation\Request;

class CustomRouteScope extends AbstractRouteScope
{
    final public const ID = 'ENDERECO_CUSTOM_ROUTE_SCOPE';

    public function isAllowed(Request $request): bool
    {
        return true;
    }

    public function getId(): string
    {
        return self::ID;
    }
}