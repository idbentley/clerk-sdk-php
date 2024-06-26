<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;

class BetaFeatures
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
     * @param  \Clerk\Backend\Models\Operations\UpdateInstanceAuthConfigRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\UpdateInstanceAuthConfigResponse
     */
    public function updateInstanceAuthConfig(
        ?\Clerk\Backend\Models\Operations\UpdateInstanceAuthConfigRequestBody $request,
    ): \Clerk\Backend\Models\Operations\UpdateInstanceAuthConfigResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/beta_features/instance_settings');
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

        $response = new \Clerk\Backend\Models\Operations\UpdateInstanceAuthConfigResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->instanceSettings = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\InstanceSettings', 'json');
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
     * Update production instance domain
     *
     * Change the domain of a production instance.
     *
     * Changing the domain requires updating the [DNS records](https://clerk.com/docs/deployments/overview#dns-records) accordingly, deploying new [SSL certificates](https://clerk.com/docs/deployments/overview#deploy), updating your Social Connection's redirect URLs and setting the new keys in your code.
     *
     * WARNING: Changing your domain will invalidate all current user sessions (i.e. users will be logged out). Also, while your application is being deployed, a small downtime is expected to occur.
     *
     * @param  \Clerk\Backend\Models\Operations\UpdateProductionInstanceDomainRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\UpdateProductionInstanceDomainResponse
     * @deprecated  method: This will be removed in a future release, please migrate away from it as soon as possible.
     */
    public function updateProductionInstanceDomain(
        ?\Clerk\Backend\Models\Operations\UpdateProductionInstanceDomainRequestBody $request,
    ): \Clerk\Backend\Models\Operations\UpdateProductionInstanceDomainResponse {
        trigger_error('Method '.__METHOD__.' is deprecated', E_USER_DEPRECATED);
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/beta_features/domain');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PUT', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\UpdateProductionInstanceDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 202) {
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Update production instance domain
     *
     * Change the domain of a production instance.
     *
     * Changing the domain requires updating the [DNS records](https://clerk.com/docs/deployments/overview#dns-records) accordingly, deploying new [SSL certificates](https://clerk.com/docs/deployments/overview#deploy), updating your Social Connection's redirect URLs and setting the new keys in your code.
     *
     * WARNING: Changing your domain will invalidate all current user sessions (i.e. users will be logged out). Also, while your application is being deployed, a small downtime is expected to occur.
     *
     * @param  \Clerk\Backend\Models\Operations\ChangeProductionInstanceDomainRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\ChangeProductionInstanceDomainResponse
     */
    public function changeProductionInstanceDomain(
        ?\Clerk\Backend\Models\Operations\ChangeProductionInstanceDomainRequestBody $request,
    ): \Clerk\Backend\Models\Operations\ChangeProductionInstanceDomainResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/instance/change_domain');
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'request', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('POST', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\ChangeProductionInstanceDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 202) {
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }
}