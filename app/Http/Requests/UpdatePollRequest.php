<?php

namespace App\Http\Requests;

use App\Enums\PollStatus;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePollRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  auth()->user()->is($this->poll->user) && $this->poll->status == PollStatus::PENDING->value;
    }

    public function prepareForValidation()
    {

        $this->merge([
            'start_date' => Carbon::parse($this->start_date . $this->start_time)->toDateTimeString(),
            'finish_date' => Carbon::parse($this->end_date . $this->end_time)->toDateTimeString(),
        ]);

    }


    public function rules()
    {
        return [
            'title' => ['required', 'string'],
            'start_date' => ['required', 'date' ,'after_or_equal:now'],
            'finish_date' => ['required', 'date' ,'after:start_date'],
            'options' => ['required', 'array', 'min:2']
        ];
    }
}