<?php

// File generated from our OpenAPI spec

namespace Bkash\Service\TestHelpers;

class TestClockService extends \Bkash\Service\AbstractService
{
    /**
     * Starts advancing a test clock to a specified time in the future. Advancement is
     * done when status changes to <code>Ready</code>.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\TestHelpers\TestClock
     */
    public function advance($id, $params = null, $opts = null)
    {
        return $this->request('post', $this->buildPath('/v1/test_helpers/test_clocks/%s/advance', $id), $params, $opts);
    }

    /**
     * Returns a list of your test clocks.
     *
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\Collection<\Bkash\TestHelpers\TestClock>
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/test_helpers/test_clocks', $params, $opts);
    }

    /**
     * Creates a new test clock that can be attached to new customers and quotes.
     *
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\TestHelpers\TestClock
     */
    public function create($params = null, $opts = null)
    {
        return $this->request('post', '/v1/test_helpers/test_clocks', $params, $opts);
    }

    /**
     * Deletes a test clock.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\TestHelpers\TestClock
     */
    public function delete($id, $params = null, $opts = null)
    {
        return $this->request('delete', $this->buildPath('/v1/test_helpers/test_clocks/%s', $id), $params, $opts);
    }

    /**
     * Retrieves a test clock.
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Bkash\Util\RequestOptions $opts
     *
     * @throws \Bkash\Exception\ApiErrorException if the request fails
     *
     * @return \Bkash\TestHelpers\TestClock
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/test_helpers/test_clocks/%s', $id), $params, $opts);
    }
}
