<?php

namespace App\Http\Controllers;

use App\Http\Requests\ScheduleSlotRequest;
use App\Services\Bitrix24\Bitrix24Service;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class ScheduleWidgetController extends Controller
{
    public function __construct(public Bitrix24Service $bitrix) {}

    public function getDaySchedule(Request $request): JsonResponse
    {
        $date = Carbon::createFromTimeString($request->get('date'), 'UTC')
            ->timezone('Europe/Moscow');

        $busy = $this->bitrix->getScheduleByDay($date);

        $response = [];

        foreach (config('setup.studios') as $studio) {
            $busySlots = $busy->where('studio_id', $studio['id']);

            foreach ($studio['slots'] as &$slot) {
                $slotStart = Carbon::parse($date)->setHours($slot['start']['h'])
                    ->setMinutes($slot['start']['m']);
                $slotEnd = Carbon::parse($date)->setHours($slot['end']['h'])
                    ->setMinutes($slot['end']['m']);

                $slot['is_busy'] = false;
                $slot['interval'] = $slotStart->format('H:i').' - '.$slotEnd->format('H:i');

                $busySlots->each(function ($busySlot) use ($slotStart, $slotEnd, &$slot) {
                    if ($busySlot['date_from'] >= $slotStart && $busySlot['date_from'] < $slotEnd) {
                        $slot['is_busy'] = true;

                        return;
                    }

                    if ($busySlot['date_to'] > $slotStart && $busySlot['date_to'] <= $slotEnd) {
                        $slot['is_busy'] = true;

                        return;
                    }

                    if ($busySlot['date_from'] <= $slotStart && $busySlot['date_to'] >= $slotEnd) {
                        $slot['is_busy'] = true;

                        return;
                    }
                });

            }

            if (isset($studio['from_date'])) {
                $fromDate = Carbon::parse($studio['from_date']);
                if ($fromDate > $date) {
                    continue;
                }
            }
            $response[] = $studio;
        }

        return response()->json(['data' => $response, 'busy' => $busy]);
    }

    public function scheduleSlot(ScheduleSlotRequest $request)
    {
        $response = $this->bitrix->createLeadFromSchedule(
            $request->get('name'),
            $request->get('phone'),
            $request->get('metrika_client_id'),
            $request->get('studio'),
            $request->get('slot'),
            $request->get('date'),
        );

        $status = isset($response['error']) ? 500 : 200;

        return response()->json($response, $status);
    }
}
