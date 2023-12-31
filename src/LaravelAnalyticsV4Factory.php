<?php

namespace MkEcodr\AnalyticsV4;

use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;

class AnalyticsV4Factory
{
    public static function createFromConfiguration(array $analyticsConfiguration)
    {
        if (is_array($analyticsConfiguration['service_account_credentials_json'])) {
            $credentialConfiguration = array_merge($analyticsConfiguration['service_account_credentials_json'], $analyticsConfiguration['cache']);
        } elseif (is_string($analyticsConfiguration['service_account_credentials_json'])) {
            $credentialConfiguration = array_merge(self::readCredentials($analyticsConfiguration['service_account_credentials_json']), $analyticsConfiguration['cache']);
        } else {
            // In these cases, the underlying CredentialWrapper from google will fall back to some sane defaults ƒrom the system env
            $credentialConfiguration = array_merge(['keyFile' => null, $analyticsConfiguration['cache']]);
        }

        $client = new BetaAnalyticsDataClient([
            'credentials' => $credentialConfiguration,
        ]);

        $analyticsClient = (new AnalyticsV4Client())
            ->setProperty($analyticsConfiguration['property_id'])
            ->setGoogleClient($client);

        return new AnalyticsV4($analyticsClient);
    }

    public static function readCredentials(string $credentialLocation): array
    {
        return json_decode(file_get_contents($credentialLocation), true);
    }
}
