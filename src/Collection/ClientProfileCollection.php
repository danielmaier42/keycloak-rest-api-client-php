<?php

declare(strict_types=1);

namespace Fschmtt\Keycloak\Collection;

use Fschmtt\Keycloak\Representation\ClientProfile;

/**
 * @codeCoverageIgnore
 * @extends Collection<ClientProfile>
 */
class ClientProfileCollection extends Collection
{
    public static function getRepresentationClass(): string
    {
        return ClientProfile::class;
    }
}