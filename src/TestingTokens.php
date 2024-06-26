<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;

class TestingTokens
{
    private SDKConfiguration $sdkConfiguration;

    /**
     * @param  SDKConfiguration  $sdkConfig
     */
    public function __construct(SDKConfiguration $sdkConfig)
    {
        $this->sdkConfiguration = $sdkConfig;
    }

    /**
     * Retrieve a new testing token
     *
     * Retrieve a new testing token. Only available for development instances.
     *
     * @return \Clerk\Backend\Models\Operations\CreateTestingTokenResponse
     */
    public function createTestingToken(
    ): \Clerk\Backend\Models\Operations\CreateTestingTokenResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/testing_tokens');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\CreateTestingTokenResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->testingToken = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\TestingToken', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400) {
        }

        return $response;
    }
}