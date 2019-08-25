<?php
namespace Bw\AccuWeather\Logic;

class OpenWeather
{
    const API_KEY = '405d23b8a276a590aa117a1f2593217c';
    
    public function getCurrentWeather($locationName)
    {
        $uri = "https://api.openweathermap.org/data/2.5/forecast?q={$locationName}&appid=" . self::API_KEY;
        
        $content = file_get_contents($uri);
        
        if (!$content) {
            throw new \Exception('Nie udało się pobrać danych pogodowych');
        }
        
        var_dump($content);die;
    }
}
