<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hashing Driver Padrão
    |--------------------------------------------------------------------------
    |
    | Define qual algoritmo será usado para gerar hashes de senhas.
    |
    | Opções comuns:
    | - bcrypt (padrão clássico, bem compatível)
    | - argon  (Argon2id, recomendado em muitos cenários modernos)
    |
    | Dica: controle via .env usando HASH_DRIVER
    |
    */
    'driver' => env('HASH_DRIVER', 'bcrypt'),

    /*
    |--------------------------------------------------------------------------
    | Configurações do Bcrypt
    |--------------------------------------------------------------------------
    |
    | "rounds" controla o custo do hash. Quanto maior, mais seguro contra brute
    | force, porém mais lento no login/cadastro.
    |
    | Valores típicos: 10, 12, 14... (depende do seu servidor).
    |
    | "verify" (Laravel 11/12) permite checar automaticamente se o hash precisa
    | de "rehash" quando parâmetros mudam.
    |
    */
    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),

        // Mantém verificação/rehash automático quando aplicável
        'verify' => env('HASH_VERIFY', true),
    ],

    /*
    |--------------------------------------------------------------------------
    | Configurações do Argon2 (Argon2id)
    |--------------------------------------------------------------------------
    |
    | Argon2id é uma opção moderna e muito forte, especialmente contra ataques
    | com GPU/ASIC.
    |
    | - memory  : memória usada (KB). Mais memória => mais custoso para atacar
    |            (e também mais pesado pro servidor).
    | - threads : número de threads.
    | - time    : número de iterações (tempo).
    |
    | Ajuste com cuidado conforme o desempenho do seu servidor.
    |
    */
    'argon' => [
        'memory' => env('ARGON_MEMORY', 65536),
        'threads' => env('ARGON_THREADS', 1),
        'time' => env('ARGON_TIME', 4),

        // Mantém verificação/rehash automático quando aplicável
        'verify' => env('HASH_VERIFY', true),
    ],

];
