<?php

use Illuminate\Support\Facades\Http;

if (!function_exists('buscarCep')) {
    function buscarCep(string $cep): ?array
    {
        $cep = preg_replace('/\D/', '', $cep);

        if (strlen($cep) !== 8) {
            return null;
        }

        $response = Http::withOptions([
            'verify' => false,
            'base_uri' => 'https://viacep.com.br/ws/',
        ])->get("{$cep}/json/");

        if ($response->failed() || $response->json('erro') === true) {
            return null;
        }

        return $response->json();
    }
}


if (!function_exists('buscarCnpj')) {
    function buscarCnpj(string $cnpj): ?array
    {
        // Remove tudo que não for número
        $cnpj = preg_replace('/\D/', '', $cnpj);

        // CNPJ precisa ter 14 dígitos
        if (strlen($cnpj) !== 14) {
            return null;
        }

        $response = Http::withOptions([
            'verify' => false,
            'base_uri' => 'https://publica.cnpj.ws/cnpj/',
        ])->get($cnpj);

        if ($response->failed()) {
            return null;
        }

        // A API retorna JSON exatamente como está — então só devolvemos
        return $response->json();
    }
}
