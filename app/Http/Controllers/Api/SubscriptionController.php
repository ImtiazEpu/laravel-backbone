<?php

namespace App\Http\Controllers\Api;

use App\Models\Subscriber;
use App\Notifications\SubscribedNotification;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SubscriptionController extends BaseController
{
    /**
     * @param  Request  $request
     * @return JsonResponse
     * @throws ValidationException
     */
    public function subscribe(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:subscribers,email',
        ]);

        try {
            $subscriber = Subscriber::create($request->only(['email']));
            $subscriber->notify(new SubscribedNotification());

            return $this->respondWithSuccess(__('backbone.landing.subscribe-success'), []);
        } catch (Exception $e) {
            return $this->respondWithError($e->getMessage());
        }
    }
}
