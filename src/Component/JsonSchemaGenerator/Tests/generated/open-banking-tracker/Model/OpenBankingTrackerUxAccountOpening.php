<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\Component\JsonSchemaGenerator\Tests\Generated\OpenBankingTracker\Model;

class OpenBankingTrackerUxAccountOpening
{
    public function __construct(public bool $openAccountViaApp, public float $numberOfworkingDaysTillActiveAccount, public float $numberOfClicksToCreateAccount, public bool $instantAccessToApplePay, public bool $digitalIdVerification, public bool $asksLimitedAddressHistory, public bool $brandedWelcomeLetter)
    {
    }
}
