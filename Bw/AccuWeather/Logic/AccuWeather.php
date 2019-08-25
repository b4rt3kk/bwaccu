<?php
namespace Bw\AccuWeather\Logic;

class AccuWeather
{
    const API_KEY = 'EkpZzIDABEYjC2OlSGhQRljeO6FDjgzA';
    
    const LOCATION_KEY_LUBLIN = '274231';
    
    /**
     * Pobierz dane dotyczące pogody w zadanej lokalizacji
     * @param string $locationKey
     * @return \Bw\AccuWeather\Logic\AccuWeather\Response\CurrentWeather
     * @throws \Exception
     */
    public function getCurrentWeather($locationKey = self::LOCATION_KEY_LUBLIN)
    {
        if (empty($locationKey)) {
            throw new \Exception('Klucz lokalizacji nie może być pusty');
        }
        
        $uri  = "http://dataservice.accuweather.com/currentconditions/v1/$locationKey?apikey=" . self::API_KEY;
        $uri .= '&language=pl-pl';
        
        $content = file_get_contents($uri);
        
        if (!$content) {
            throw new \Exception('Nie udało się pobrać danych pogodowych');
        }
        
        $decoded = json_decode($content);
        
        $response = new AccuWeather\Response\CurrentWeather($decoded[0]);
        $response->setLocationKey($locationKey);
        
        return $response;
    }
}

