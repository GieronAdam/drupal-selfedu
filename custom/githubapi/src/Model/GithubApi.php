<?php
namespace  Drupal\githubapi\Model;


class GithubApi
{

    private $location = 'https://api.github.com';

    public function getRepositories($name)
    {
        return $this->curlRequest('https://api.github.com/search/repositories?q='.$name);
    }

    private function curlRequest($url)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        $data = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        $data = \GuzzleHttp\json_decode($data,true);
        return ($httpcode>=200 && $httpcode<300) ? $data['items'] : false;
    }


}