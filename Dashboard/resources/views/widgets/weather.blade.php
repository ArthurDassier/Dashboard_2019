<?php
  //get_object_vars(get_object_vars($weather->getByCityName('paris'))['consolidated_weather'][0])['max_temp'] -> °C max
  //get_object_vars(get_object_vars($weather->getByCityName('paris'))['consolidated_weather'][0])['min_temp'] -> °C min
  //get_object_vars(get_object_vars($weather->getByCityName('paris'))['consolidated_weather'][0])['weather_state_name'] -> le temps
  //get_object_vars(get_object_vars($weather->getByCityName('paris'))['consolidated_weather'][0])['wind_direction_compass'] -> direction du vent
  //get_object_vars(get_object_vars($weather->getByCityName('paris'))['consolidated_weather'][0])['applicable_date'] -> date du jour
  //get_object_vars(get_object_vars($weather->getByCityName('paris'))['consolidated_weather'][0])['humidity'] -> humidité
  //get_object_vars($weather->getByCityName('paris'))['title'] -> nom de l'endroit
  //get_object_vars($weather->getByCityName('paris'))['location_type'] -> type d'endroit
  //get_object_vars($weather->getByCityName('paris'))['timezone'] -> timezone
  // {{$city}} -> valeur envoyer


  use Bioudi\LaravelMetaWeatherApi\Weather;
  $weather = new Weather();
  // var_dump($weather->getByCityName('paris'));
  // print_r(get_object_vars($weather->getByCityName('paris'))['title']);
?>

<div class="card card-stats">
  <div class="card-header card-header-info card-header-icon">
    <div class="card-icon">
      <i class="material-icons">filter_drama</i>
    </div>
    <p class="card-category">Weather in <?php print_r(get_object_vars($weather->getByCityName($city))['title']);?></p>
    <h3 class="card-title">
      Temp min : <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($city))['consolidated_weather'][0])['min_temp']);?> <small>°C</small>
      <br>
      Temp max : <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($city))['consolidated_weather'][0])['max_temp']);?> <small>°C</small>
    </h3>
  </div>
  <div class="card-footer">
    <div class="stats">
      Weather state: <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($city))['consolidated_weather'][0])['weather_state_name'])?>
      <br>
      Wind direction: <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($city))['consolidated_weather'][0])['wind_direction_compass'])?>
      <br>
      Humidity : <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($city))['consolidated_weather'][0])['humidity'])?>
    </div>
  </div>
</div>
