<?php

namespace App\Services\Bitrix24;

use App\Services\Bitrix24\Exceptions\BitrixException;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class Bitrix24Service
{
    public function getScheduleByDay(Carbon $date)
    {
        $response = Http::baseUrl(config('services.bitrix.webhook'))
            ->asJson()
            ->acceptJson()
            ->get('calendar.resource.booking.list.json', [
                'filter' => [
                    'resourceTypeIdList' => collect(config('setup.studios'))->pluck('id')->toArray(),
                    'from' => $date->format('Y-m-d'),
                    'to' => $date->format('Y-m-d'),
                ],
            ])
            ->throw(function ($response) {
                if ($response->json('error_description')) {
                    throw new BitrixException('Ошибка при соединении с Битрикс24: '.$response->json('error_description'));
                }

                throw new BitrixException('Ошибка при соединении с Битрикс24: '.$response->json('error'));
            });

        return $response->collect('result')
            ->map(function ($item) {
                return [
                    'studio_id' => (int) $item['SECTION_ID'],
                    'date_from' => Carbon::parse($item['DATE_FROM'], 'Europe/Moscow'),
                    'date_from_raw' => $item['DATE_FROM'],
                    'date_to' => Carbon::parse($item['DATE_TO'], 'Europe/Moscow'),
                    'date_to_raw' => $item['DATE_TO'],
                ];
            });
    }

    public function createLeadFromSchedule(
        string $name,
        string $phone,
        int|string|null $metricaClientId,
        string $studio,
        string $slot,
        string $date,
    ) {
        $phone = str_replace(['(', ')', '-', ' ', '+'], [], $phone);

        if (isset($_COOKIE['utm_campaign'])) {
            $utm_campaign = $_COOKIE['utm_campaign'];
        } else {
            $utm_campaign = 'UTM campaign not specified';
        }

        if (isset($_COOKIE['utm_medium'])) {
            $utm_medium = $_COOKIE['utm_medium'];
        } else {
            $utm_medium = 'UTM medium not specified';
        }

        if (isset($_COOKIE['utm_source'])) {
            $utm_source = $_COOKIE['utm_source'];
        } else {
            $utm_source = $_SERVER['HTTP_REFERER'];
            // $utm_source = "UTM source not specified";
        }

        if (isset($_COOKIE['utm_term'])) {
            $utm_term = $_COOKIE['utm_term'];
        } else {
            $utm_term = 'UTM term not specified';
        }

        if (isset($_COOKIE['utm_content'])) {
            $utm_content = $_COOKIE['utm_content'];
        } else {
            $utm_content = 'UTM content not specified';
        }

        $weekday = date('w', mktime(0, 0, 0, date('m'), date('d'), date('Y')));

        if ($weekday > 6) {
            $respinsible_id = 645;
        } else {
            $respinsible_id = 13;
        }

        $apiLeadData = [
            'FIELDS' => [
                'TITLE' => "Заполнен виджет бронирования: $name $studio $date $slot",
                'NAME' => $name,
                'PHONE' => [[
                    'VALUE' => $phone,
                    'VALUE_TYPE' => 'WORK',
                ]],
                'SOURCE_ID' => 'WEB',
                'SOURCE_DESCRIPTION' => 'Виджет бронирования с сайта',
                'UTM_CAMPAIGN' => $utm_campaign,
                'UTM_MEDIUM' => $utm_medium,
                'UTM_SOURCE' => $utm_source,
                'UTM_TERM' => $utm_term,
                'UTM_CONTENT' => $utm_content,
                'ASSIGNED_BY_ID' => $respinsible_id,
                'UF_CRM_1725351226611' => $metricaClientId,
            ],
        ];

        return $this->leadAdd($apiLeadData);
    }

    public function leadAdd(array $data)
    {
        // return Http::baseUrl(config('services.bitrix.webhook'))
        //     ->asJson()
        //     ->post('crm.lead.add.json', $data)
        //     ->json();
    }
}
