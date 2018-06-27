<?php
/**
 * @author      Julien Guittard <hello@julienguittard.com>
 * @copyright   Copyright (c) Julien Guittard
 * @license     http://mit-license.org/
 *
 * @link        https://github.com/thephpleague/oauth2-server
 */

namespace League\OAuth2\Server\Repositories;

use League\OAuth2\Server\Entities\ClientEntityInterface;

/**
 * Interface TokenRepositoryInterface
 */
interface TokenRepositoryInterface
{
    /**
     * Check whether client has issued the token
     *
     * @param mixed $tokenId
     * @param ClientEntityInterface $clientEntity
     * @return bool
     */
    public function tokenIssuedByClient($tokenId, ClientEntityInterface $clientEntity);
}
