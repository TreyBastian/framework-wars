<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

/**
 * Source: https://public.opendatasoft.com/explore/dataset/geonames-all-cities-with-a-population-500/api/
 */
class LocationService
{
    protected static $REQUEST_URL = 'https://public.opendatasoft.com/api/explore/v2.1/catalog/datasets/geonames-all-cities-with-a-population-500/records';

    protected int $limit = 5;
    protected array $where = [
        'population>50000'
    ];
    protected array $select = [
        'name',
        'country',
        'timezone'
    ];

    public function __construct($refresh = false)
    {
        if ($refresh) {
            cache()->forget('locations');
        }
        cache()->rememberForever('locations', function () {
            return $this->load();
        });
    }

    protected function load(array &$elements = [], int &$offset = 0): array
    {
        $response = Http::get($this->buildUrl($offset))->json();
        $elements = array_merge($elements, $response['results']);
        if ($response['total_count'] - $this->limit > $offset) {
            $newOffset = 1 + $offset + $this->limit;
            $this->load($elements, $newOffset);
        }
        return $elements;
    }

    protected function buildUrl(int &$offset = 0): string
    {
        return self::$REQUEST_URL.'?'.http_build_query([
                'select' => implode(',', $this->select),
                'where' => implode(' AND ', $this->where),
                'limit' => $this->limit,
                'offset' => $offset,
            ]);
    }

}
