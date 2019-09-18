<?php

namespace App\Http\Requests;

use App\Constants\Attribute;
use App\Constants\Messages;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\ValidationException;

class Request extends FormRequest
{
    /**
     * Lidar com uma tentativa de validação com falha.
     *
     * @param Validator $validator
     *
     * @return void
     *
     */
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(
            response()->json(
                [
                    Attribute::STATUS      => false,
                    Attribute::MESSAGE     => Messages::VERIFIQUE_INFORMACOES,
                    Attribute::STATUS_CODE => JsonResponse::HTTP_UNPROCESSABLE_ENTITY,
                    Attribute::ERRORS      => $errors
                ],
                JsonResponse::HTTP_UNPROCESSABLE_ENTITY
            )
        );
    }
}
