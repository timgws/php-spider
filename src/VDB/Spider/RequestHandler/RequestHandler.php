<?php

namespace VDB\Spider\RequestHandler;

use VDB\Uri\UriInterface;

interface RequestHandler
{
    /**
     * @param UriInterface $uri
     * @return Resource
     */
    public function request(UriInterface $uri);

    /**
     * @return bool should we send multiple URLs to the request handler at a time?
     */
    public function getDepletesPool();

    /**
     * @see request
     * @param array $uris list of UriInterface (similar to `request`)
     * @param $completed callback closure when a URL is completed.
     * @return bool
     * @callback $completed(Resource $resource)
     */
    public function addToPool(array $uris, $completed);
}
