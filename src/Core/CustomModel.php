<?php

namespace Core;

if ( ! defined( 'RAPID_IN' ) ) exit( 'No direct script access allowed' );

/**
 * Custom Model
 */
class CustomModel
{
    public static function getAccessToken($param, &$blockCustom, $vendorUrl)
    {
        // Setup client
        $clientSetup['Content-Type'] = 'application/x-www-form-urlencoded';
        $clientSetup['Authorization'] = 'Basic ' . base64_encode ($param['appClientId'] . ':' . $param['appClientSecret']);
        $clientSetup['User-Agent'] = 'RapidAPI-' . $param['appClientId'];

        $body['grant_type'] = 'authorization_code';
        $body['code'] = $param['code'];
        $body['redirect_uri'] = $param['redirect_uri'];

        return [
            'headers' => $clientSetup,
            'form_params' => $body,
        ];
    }
    public static function refreshAccessToken($param, $blockCustom, $vendorUrl)
    {
        // Setup client
        $clientSetup['Content-Type'] = 'application/x-www-form-urlencoded';
        $clientSetup['Authorization'] = 'Basic ' . base64_encode ($param['appClientId'] . ':' . $param['appClientSecret']);
        $clientSetup['User-Agent'] = 'RapidAPI-' . $param['appClientId'];

        $body['grant_type'] = 'refresh_token';
        $body['refresh_token'] = $param['refresh_token'];

        return [
            'headers' => $clientSetup,
            'form_params' => $body,
        ];
    }
    public static function revokeAccessToken($param, $blockCustom, $vendorUrl)
    {
        // Setup client
        $clientSetup['Content-Type'] = 'application/x-www-form-urlencoded';
        $clientSetup['Authorization'] = 'Basic ' . base64_encode ($param['appClientId'] . ':' . $param['appClientSecret']);
        $clientSetup['User-Agent'] = 'RapidAPI-' . $param['appClientId'];

        $body['token'] = 'token';
        $body['token_type_hint'] = $param['token_type_hint'];

        return [
            'headers' => $clientSetup,
            'form_params' => $body,
        ];
    }
    public static function upVote($param, $blockCustom, $vendorUrl)
    {
        $param['dir'] = 1;

        return json_encode($param);
    }
    public static function downVote($param, $blockCustom, $vendorUrl)
    {
        $param['dir'] = -1;

        return json_encode($param);
    }
    public static function unVote($param, $blockCustom, $vendorUrl)
    {
        $param['dir'] = 0;

        return json_encode($param);
    }
}