<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;

class InstanceSettings
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
     * Update instance settings
     *
     * Updates the settings of an instance
     *
     * @param  \Clerk\Backend\Models\Operations\UpdateInstanceRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\UpdateInstanceResponse
     */
    public function updateInstance(
        ?\Clerk\Backend\Models\Operations\UpdateInstanceRequestBody $request,
    ): \Clerk\Backend\Models\Operations\UpdateInstanceResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/instance');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\UpdateInstanceResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 204) {
        } elseif ($httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Update instance restrictions
     *
     * Updates the restriction settings of an instance
     *
     * @param  \Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsResponse
     */
    public function updateInstanceRestrictions(
        ?\Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsRequestBody $request,
    ): \Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/instance/restrictions');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\UpdateInstanceRestrictionsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->instanceRestrictions = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\InstanceRestrictions', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 402 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Update instance organization settings
     *
     * Updates the organization settings of the instance
     *
     * @param  \Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsResponse
     */
    public function updateInstanceOrganizationSettings(
        ?\Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsRequestBody $request,
    ): \Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/instance/organization_settings');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\UpdateInstanceOrganizationSettingsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->organizationSettings = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\OrganizationSettings', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 402 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }
}