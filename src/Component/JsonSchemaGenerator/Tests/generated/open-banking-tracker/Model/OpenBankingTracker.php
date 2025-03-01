<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\Component\JsonSchemaGenerator\Tests\Generated\OpenBankingTracker\Model;

class OpenBankingTracker
{
    public function __construct(
        public string $id,
        public string $parentId,
        public bool $bankingGroup,
        public bool $bankingGroupId,
        public float $numberOfBanks,
        /** @var string[] */
        public array $type,
        /** @var string[] */
        public array $bankType,
        public string $status,
        public string $name,
        public string $desription,
        public string $bic,
        public string|null $wikipediaUrl,
        public string|null $legalName,
        public bool $verified,
        public string $icon,
        public string $websiteUrl,
        public string $countryHQ,
        /** @var mixed[] */
        public array $countries,
        /** @var string|mixed[]|null */
        public string|array|null $thirdPartyBankingLicense,
        public string|null $debitAccountLicense,
        /** @var mixed[] */
        public array $debitCards,
        /** @var mixed[] */
        public array $creditCards,
        /** @var mixed[] */
        public array $virtualCards,
        public bool $webApplication,
        /** @var OpenBankingTrackerMobileApps[] */
        public array $mobileApps,
        /** @var OpenBankingTrackerCompliance[]|null */
        public array|null $compliance,
        public OpenBankingTrackerSandbox $sandbox,
        public string|null $developerPortalUrl,
        public string|null $developerSuccesStoriesUrl,
        /** @var string[] */
        public array $tppAccessInterface,
        /** @var string[]|null */
        public array|null $apiAggregators,
        /** @var string[]|null */
        public array|null $collections,
        public string|null $openBankProjectUrl,
        public string|null $developerCommunityUrl,
        public bool $slackCommunity,
        public string|null $acceleratorProgramUrl,
        public null|OpenBankingTrackerAcceleratorProgram $acceleratorProgram,
        /** @var string[]|null */
        public array|null $apiGateways,
        /** @var string[]|null */
        public null|array $apiAuth,
        public string|null $apiChangelogUrl,
        public string|null $apiReferenceUrl,
        /** @var string[] */
        public array $apiStandards,
        /** @var OpenBankingTrackerApiServerEndpoints[] */
        public array $apiServerEndpoints,
        public string|null $apiAccess,
        public string|null $apiAccessRequestUrl,
        /** @var OpenBankingTrackerApiStatusUrls[]|null */
        public array|null $apiStatusUrls,
        public string|null $totalApiProducts,
        public string|null $developerContactEmail,
        /** @var OpenBankingTrackerApiSpecs[] */
        public array $apiSpecs,
        /** @var OpenBankingTrackerApiPerformanceReports[]|null */
        public null|array $apiPerformanceReports,
        /** @var OpenBankingTrackerApiProducts[]|null */
        public null|array $apiProducts,
        /** @var OpenBankingTrackerSdks[]|null */
        public array|null $sdks,
        /** @var OpenBankingTrackerPostmanCollections[]|null */
        public array|null $postmanCollections,
        public string|null $apiMarketplaceUrl,
        public null|OpenBankingTrackerPartnerships $partnerships,
        public null|OpenBankingTrackerRewardPartners $rewardPartners,
        public OpenBankingTrackerUx $ux,
        public string|null $twitter,
        public string|null $github,
        public string|null $crunchbase,
        public string|null $fca,
        public string|null $legalEntityIdentifier,
        public string|null $swiftCode,
        public string $ipoStatus,
        public string|null $stockSymbol,
        public string|null $investorRelationsUrl,
        /** @var OpenBankingTrackerFinancialReports[]|null */
        public null|array $financialReports,
        /** @var OpenBankingTrackerOwnership[] */
        public array $ownership,
        public bool $stateOwned,
        /** @var OpenBankingTrackerDataBreaches[] */
        public array $dataBreaches,
        /** @var OpenBankingTrackerArticles[]|null */
        public null|array $articles
    ) {
    }
}
