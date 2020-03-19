<?php

namespace App\Preconditions;

use Carbon\Carbon;

class BasePrecondition
{
    public $amount = 100;
    public $currency = 'USD';
    public $type = 'merchantpay';
    public $subType = 'supermarket';
    public $descriptionText = 'GSMA supermarket';
    public $requestDate;
    public $requestingOrganisationTransactionReference = 'GSMAUSP12345678';
    public $geoCode = '51.5120623, -0.0897727';
    public $debitParty = [
        [
            'key' => 'msisdn',
            'value' => '+33555123456',
        ]
    ];
    public $creditParty = [
        [
            'key' => 'msisdn',
            'value' => '+33555789123',
        ]
    ];
    public $senderKyc = [
        'nationality' => 'GB',
        'dateOfBirth' => '1990-01-01',
        'occupation' => 'manager',
        'employerName' => 'GSMA',
        'contactPhone' => '+447777111111',
        'gender' => 'm',
        'idDocument' => [
            [
                'idType' => 'passport',
                'idNumber' => '123456789',
                'issueDate' => ' 2015-01-01',
                'expiryDate' => '2025-01-01',
                'issuer' => 'HMPO',
                'issuerPlace' => 'CROYDON',
                'issuerCountry' => 'GB',
            ],
        ],
        'postalAddress' => [
            'addressLine1' => '25 Walbrook',
            'city' => 'London',
            'stateProvince' => 'London',
            'postalCode' => 'EC4N 8AF',
            'country' => 'GB',
        ],
        'subjectName' => [
            'title' => 'Mr',
            'firstName' => 'John',
            'middleName' => 'Peter',
            'lastName' => 'Smith',
            'fullName' => 'John Peter Smith',
        ],
        'emailAddress' => 'johnpsmith@gsma.com',
        'birthCountry' => 'GB',
    ];
    public $recipientKyc = [
        'nationality' => 'GB',
        'dateOfBirth' => '1990-01-01',
        'occupation' => 'manager',
        'employerName' => 'GSMA',
        'contactPhone' => '+447777111111',
        'gender' => 'm',
        'idDocument' => [
            [
                'idType' => 'passport',
                'idNumber' => '123456789',
                'issueDate' => ' 2015-01-01',
                'expiryDate' => '2025-01-01',
                'issuer' => 'HMPO',
                'issuerPlace' => 'CROYDON',
                'issuerCountry' => 'GB',
            ],
        ],
        'postalAddress' => [
            'addressLine1' => '25 Walbrook',
            'city' => 'London',
            'stateProvince' => 'London',
            'postalCode' => 'EC4N 8AF',
            'country' => 'GB',
        ],
        'subjectName' => [
            'title' => 'Mr',
            'firstName' => 'John',
            'middleName' => 'Peter',
            'lastName' => 'Smith',
            'fullName' => 'John Peter Smith',
        ],
        'emailAddress' => 'johnpsmith@gsma.com',
        'birthCountry' => 'GB',
    ];
    public $originalTransactionReference = 'string';
    public $servicingIdentity = '123456';
    public $transactionReceipt = 'GSMA Utility 12345678';

    public function __construct()
    {
        $this->requestDate = (new Carbon())->toRfc7231String();
    }

    public function getData()
    {
        return (array)$this;
    }
}
