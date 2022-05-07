<?php

namespace App\JsonApi\V1\Users;

use CloudCreativity\LaravelJsonApi\Auth\AbstractAuthorizer;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;

class Authorizer extends AbstractAuthorizer
{

    /**
     * Authorize a resource index request.
     *
     * @param string $type
     *      the domain record type.
     * @param Request $request
     *      the inbound request.
     * @return bool
     * @throws AuthenticationException|AuthorizationException
     *      if the request is not authorized.
     */
    public function index($type, $request)
    {
        return true;
    }

    /**
     * Authorize a resource create request.
     *
     * @param string $type
     *      the domain record type.
     * @param Request $request
     *      the inbound request.
     * @return bool
     * @throws AuthenticationException|AuthorizationException
     *      if the request is not authorized.
     */
    public function create($type, $request)
    {
        return true;
    }

    /**
     * Authorize a resource read request.
     *
     * @param object $record
     *      the domain record.
     * @param Request $request
     *      the inbound request.
     * @return bool
     * @throws AuthenticationException|AuthorizationException
     *      if the request is not authorized.
     */
    public function read($record, $request)
    {
        return true;
    }

    /**
     * Authorize a resource update request.
     *
     * @param object $record
     *      the domain record.
     * @param Request $request
     *      the inbound request.
     * @return bool
     * @throws AuthenticationException|AuthorizationException
     *      if the request is not authorized.
     */
    public function update($record, $request)
    {
        return true;
    }

    /**
     * Authorize a resource read request.
     *
     * @param object $record
     *      the domain record.
     * @param Request $request
     *      the inbound request.
     * @return bool
     * @throws AuthenticationException|AuthorizationException
     *      if the request is not authorized.
     */
    public function delete($record, $request)
    {
        return true;
    }
}
