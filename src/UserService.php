<?php


namespace Skillz;


class UserService extends ApiService
{
    public function __construct()
    {
        $this->endpoint = config('skillz.users') . '/api';
    }
}