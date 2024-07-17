<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Services\TelegramBotService;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class PageController extends Controller
{
    private TelegramBotService $telegramBotService;

    public function __construct(TelegramBotService $telegramBotService)
    {
        $this->telegramBotService = $telegramBotService;
    }

    public function index(): View
    {
        return view('pages/about-us');
    }

    public function getLaserTagPage(): View
    {
        return view('pages/laser-tag');
    }

    public function getQuestPage(): View
    {
        return view('pages/quest');
    }

    public function submitForm(BookRequest $request): JsonResponse
    {
        try {
            $this->telegramBotService->sendMessage($request->input('name'), $request->input('phone'));
        } catch (Exception $e) {
            Log::error(
                'Something went wrong while sending telegram message.',
                ['error' => $e->getMessage()]
            );

            return response()->json([
                'success' => false,
                'message' => 'Something went wrong while sending telegram message.'
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Your message has been sent!'
        ]);
    }
}
