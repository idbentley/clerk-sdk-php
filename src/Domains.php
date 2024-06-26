<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;

class Domains
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
     * List all instance domains
     *
     * Use this endpoint to get a list of all domains for an instance.
     * The response will contain the primary domain for the instance and any satellite domains. Each domain in the response contains information about the URLs where Clerk operates and the required CNAME targets.
     *
     * @return \Clerk\Backend\Models\Operations\ListDomainsResponse
     */
    public function listDomains(
    ): \Clerk\Backend\Models\Operations\ListDomainsResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains');
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\ListDomainsResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domains = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\Domains', 'json');
            }
        }

        return $response;
    }

    /**
     * Add a domain
     *
     * Add a new domain for your instance.
     * Useful in the case of multi-domain instances, allows adding satellite domains to an instance.
     * The new domain must have a `name`. The domain name can contain the port for development instances, like `localhost:3000`.
     * At the moment, instances can have only one primary domain, so the `is_satellite` parameter must be set to `true`.
     * If you're planning to configure the new satellite domain to run behind a proxy, pass the `proxy_url` parameter accordingly.
     *
     * @param  \Clerk\Backend\Models\Operations\AddDomainRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\AddDomainResponse
     */
    public function addDomain(
        ?\Clerk\Backend\Models\Operations\AddDomainRequestBody $request,
    ): \Clerk\Backend\Models\Operations\AddDomainResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains');
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

        $response = new \Clerk\Backend\Models\Operations\AddDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domain = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\Domain', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 402 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Delete a satellite domain
     *
     * Deletes a satellite domain for the instance.
     * It is currently not possible to delete the instance's primary domain.
     *
     * @param  string  $domainId
     * @return \Clerk\Backend\Models\Operations\DeleteDomainResponse
     */
    public function deleteDomain(
        string $domainId,
    ): \Clerk\Backend\Models\Operations\DeleteDomainResponse {
        $request = new \Clerk\Backend\Models\Operations\DeleteDomainRequest();
        $request->domainId = $domainId;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains/{domain_id}', \Clerk\Backend\Models\Operations\DeleteDomainRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\DeleteDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deletedObject = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\DeletedObject', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Update a domain
     *
     * The `proxy_url` can be updated only for production instances.
     * Update one of the instance's domains. Both primary and satellite domains can be updated.
     * If you choose to use Clerk via proxy, use this endpoint to specify the `proxy_url`.
     * Whenever you decide you'd rather switch to DNS setup for Clerk, simply set `proxy_url`
     * to `null` for the domain. When you update a production instance's primary domain name,
     * you have to make sure that you've completed all the necessary setup steps for DNS and
     * emails to work. Expect downtime otherwise. Updating a primary domain's name will also
     * update the instance's home origin, affecting the default application paths.
     *
     * @param  string  $domainId
     * @param  \Clerk\Backend\Models\Operations\UpdateDomainRequestBody  $requestBody
     * @return \Clerk\Backend\Models\Operations\UpdateDomainResponse
     */
    public function updateDomain(
        string $domainId,
        \Clerk\Backend\Models\Operations\UpdateDomainRequestBody $requestBody,
    ): \Clerk\Backend\Models\Operations\UpdateDomainResponse {
        $request = new \Clerk\Backend\Models\Operations\UpdateDomainRequest();
        $request->domainId = $domainId;
        $request->requestBody = $requestBody;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/domains/{domain_id}', \Clerk\Backend\Models\Operations\UpdateDomainRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\UpdateDomainResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->domain = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\Domain', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }
}