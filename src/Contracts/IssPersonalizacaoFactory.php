<?php

namespace Bildvitta\IssPersonalizacao\Contracts;

interface IssPersonalizacaoFactory
{
    public const DEFAULT_HEADERS = [
        'content-type' => 'application/json',
        'accept' => 'application/json',
        'User-Agent' => 'ISS v0.0.1-alpha',
    ];

    public const DEFAULT_OPTIONS = ['allow_redirects' => false];
}
