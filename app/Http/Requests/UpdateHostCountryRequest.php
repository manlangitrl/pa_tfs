<?php

namespace App\Http\Requests;

use App\HostCountry;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class UpdateHostCountryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('host_country_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            'category' => [
                'required',
            ],
        ];
    }
}
