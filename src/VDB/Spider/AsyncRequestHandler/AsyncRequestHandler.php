<?php
namespace VDB\Spider\AsyncRequestHandler;


interface AsyncRequestHandler {
    /**
     * @see VDB\Spider\RequestHandler request
     * @param array $uris list of UriInterface (similar to `request`)
     * @param $completed callback closure when a URL is completed.
     * @return bool
     * @callback $completed(Resource $resource)
     */
    public function addToPool(array $uris, $completed);

}