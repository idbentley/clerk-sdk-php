<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Clerk\Backend;

class EmailAddresses
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
     * Create an email address
     *
     * Create a new email address
     *
     * @param  \Clerk\Backend\Models\Operations\CreateEmailAddressRequestBody  $request
     * @return \Clerk\Backend\Models\Operations\CreateEmailAddressResponse
     */
    public function createEmailAddress(
        ?\Clerk\Backend\Models\Operations\CreateEmailAddressRequestBody $request,
    ): \Clerk\Backend\Models\Operations\CreateEmailAddressResponse {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/email_addresses');
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

        $response = new \Clerk\Backend\Models\Operations\CreateEmailAddressResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->emailAddress = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\EmailAddress', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404 or $httpResponse->getStatusCode() === 422) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Retrieve an email address
     *
     * Returns the details of an email address.
     *
     * @param  string  $emailAddressId
     * @return \Clerk\Backend\Models\Operations\GetEmailAddressResponse
     */
    public function getEmailAddress(
        string $emailAddressId,
    ): \Clerk\Backend\Models\Operations\GetEmailAddressResponse {
        $request = new \Clerk\Backend\Models\Operations\GetEmailAddressRequest();
        $request->emailAddressId = $emailAddressId;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/email_addresses/{email_address_id}', \Clerk\Backend\Models\Operations\GetEmailAddressRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('GET', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\GetEmailAddressResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->emailAddress = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\EmailAddress', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Delete an email address
     *
     * Delete the email address with the given ID
     *
     * @param  string  $emailAddressId
     * @return \Clerk\Backend\Models\Operations\DeleteEmailAddressResponse
     */
    public function deleteEmailAddress(
        string $emailAddressId,
    ): \Clerk\Backend\Models\Operations\DeleteEmailAddressResponse {
        $request = new \Clerk\Backend\Models\Operations\DeleteEmailAddressRequest();
        $request->emailAddressId = $emailAddressId;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/email_addresses/{email_address_id}', \Clerk\Backend\Models\Operations\DeleteEmailAddressRequest::class, $request);
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('DELETE', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\DeleteEmailAddressResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->deletedObject = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\DeletedObject', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }

    /**
     * Update an email address
     *
     * Updates an email address.
     *
     * @param  string  $emailAddressId
     * @param  ?\Clerk\Backend\Models\Operations\UpdateEmailAddressRequestBody  $requestBody
     * @return \Clerk\Backend\Models\Operations\UpdateEmailAddressResponse
     */
    public function updateEmailAddress(
        string $emailAddressId,
        ?\Clerk\Backend\Models\Operations\UpdateEmailAddressRequestBody $requestBody = null,
    ): \Clerk\Backend\Models\Operations\UpdateEmailAddressResponse {
        $request = new \Clerk\Backend\Models\Operations\UpdateEmailAddressRequest();
        $request->emailAddressId = $emailAddressId;
        $request->requestBody = $requestBody;
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/email_addresses/{email_address_id}', \Clerk\Backend\Models\Operations\UpdateEmailAddressRequest::class, $request);
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, 'requestBody', 'json');
        if ($body !== null) {
            $options = array_merge_recursive($options, $body);
        }
        $options['headers']['Accept'] = 'application/json';
        $options['headers']['user-agent'] = $this->sdkConfiguration->userAgent;

        $httpResponse = $this->sdkConfiguration->securityClient->request('PATCH', $url, $options);
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $statusCode = $httpResponse->getStatusCode();

        $response = new \Clerk\Backend\Models\Operations\UpdateEmailAddressResponse();
        $response->statusCode = $statusCode;
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->emailAddress = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\EmailAddress', 'json');
            }
        } elseif ($httpResponse->getStatusCode() === 400 or $httpResponse->getStatusCode() === 401 or $httpResponse->getStatusCode() === 403 or $httpResponse->getStatusCode() === 404) {
            if (Utils\Utils::matchContentType($contentType, 'application/json')) {
                $serializer = Utils\JSON::createSerializer();
                $response->clerkErrors = $serializer->deserialize((string) $httpResponse->getBody(), 'Clerk\Backend\Models\Components\ClerkErrors', 'json');
            }
        }

        return $response;
    }
}