<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

class Curl
{

	protected $ci;
	protected $ch;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ch = curl_init();
	}

	public function create($url)
	{
		curl_setopt($this->ch, CURLOPT_URL, $url);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, true);
	}

	public function option($option, $value)
	{
		curl_setopt($this->ch, $option, $value);
	}

	public function http_get()
	{
		curl_setopt($this->ch, CURLOPT_HTTPGET, true);
	}

	public function http_post($data)
	{
		curl_setopt($this->ch, CURLOPT_POST, true);
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
	}

	public function http_put($data)
	{
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "PUT");
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
	}

	public function http_delete($data)
	{
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "DELETE");
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
	}

	public function execute()
	{
		$response = curl_exec($this->ch);
		if (curl_errno($this->ch)) {
			throw new Exception('Curl error: ' . curl_error($this->ch));
		}
		curl_close($this->ch);
		return $response;
	}
}
