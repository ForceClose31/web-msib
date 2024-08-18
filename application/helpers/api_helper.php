<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (! function_exists('call_spring_api')) {
    function call_spring_api($method, $url, $data = array())
    {
        $CI = &get_instance();
        $CI->load->library('curl');

        $CI->curl->create($url);
        $headers = array(
            'Content-Type: application/json',
            'Accept: application/json'
        );
        $CI->curl->option(CURLOPT_HTTPHEADER, $headers);
        $CI->curl->option(CURLOPT_RETURNTRANSFER, true);         
        $json_data = json_encode($data);
        log_message('debug', "JSON Data: " . $json_data); 
        $CI->curl->option(CURLOPT_POSTFIELDS, $json_data); 

        switch (strtoupper($method)) {
            case 'GET':
                $CI->curl->http_get();
                break;
            case 'POST':
                $CI->curl->http_post($json_data);
                break;
            case 'PUT':
                $CI->curl->http_put($json_data);
                break;
            case 'DELETE':
                $CI->curl->http_delete($json_data);
                break;
            default:
                throw new Exception("Unsupported HTTP method: $method");
        }

        $response = $CI->curl->execute();
        return json_decode($response, true);
    }
}
