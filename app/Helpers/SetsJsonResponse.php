<?php

namespace App\Helpers;

use Illuminate\Http\Response;

/**
 * Helper trait that contains handy methods to set json response,
 * with appropriate headers.
 */
trait SetsJsonResponse
{
    /**
     * Sets `success` key along with data and returns json response.
     *
     * @param  array  $data
     * @param  int  $statusCode
     * @return Response
     */
    public function setSuccessResponse($data = [], $statusCode = 200): Response
    {
        return $this->setJsonResponse(array_merge($data, ['success' => true]), $statusCode);
    }

    /**
     * Sets json response with given data and status code.
     *
     * @param  array  $data
     * @param  int  $statusCode
     * @return Response
     */
    public function setJsonResponse($data, $statusCode = 200): Response
    {
        return response($data, $statusCode, ['Content-Type', 'application/json']);
    }
}
