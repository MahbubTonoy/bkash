<?php

// File generated from our OpenAPI spec

namespace Bkash\Service;

class ReviewService extends \Bkash\Service\AbstractService
{
    /**
     * Returns a list of <code>Review</code> objects that have <code>open</code> set to
     * <code>true</code>. The objects are sorted in descending order by creation date,
     * with the most recently created object appearing first.
     *
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Collection<\Bkash\Review>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/reviews', $params, $opts);
    }

    /**
     * Approves a <code>Review</code> object, closing it and removing it from the list
     * of reviews.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Review
     */
    public function approve($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/reviews/%s/approve', $id), $params, $opts);
    }

    /**
     * Retrieves a <code>Review</code> object.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Review
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/reviews/%s', $id), $params, $opts);
    }
}
