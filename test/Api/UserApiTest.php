<?php
/**
 * UserApiTest
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Prepaidforge API
 *
 * The public api for prepaidforge
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Client;

use OpenAPI\Client\Api\UserApi;
use  OpenAPI\Client\Model\MerchantSignInRequest;

use \OpenAPI\Client\Api;
use \OpenAPI\Client\Configuration;
use \OpenAPI\Client\ApiException;
use \OpenAPI\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * UserApiTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UserApiTest extends TestCase
{


    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
        $this->user = new UserApi();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for signInWithApi
     *
     * 
     *
     */
    public function testSignInWithApi()
    {
        $merchantSignInRequest = new MerchantSignInRequest(['email'=>"USERNAME", "password"=>"PASS"]);
        $apiKey = $this->user->signInWithApi($merchantSignInRequest)["api_token"];
        $this->assertTrue($apiKey !== null);
    }
}
