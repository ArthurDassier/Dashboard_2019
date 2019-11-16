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
  // {{$config['city']}} -> valeur envoyer


  use Bioudi\LaravelMetaWeatherApi\Weather;
  $weather = new Weather();
  // var_dump($weather->getByCityName('paris'));
  // print_r(get_object_vars($weather->getByCityName('paris'))['title']);
?>

<!-- <div class="content"> -->
  <!-- <div class="container-fluid"> -->
    <!-- <div class="row"> -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
          <div class="card-header card-header-info card-header-icon">
            <div class="card-icon">
              <i class="material-icons">filter_drama</i>
            </div>
            <p class="card-category">Weather in <?php print_r(get_object_vars($weather->getByCityName($config['city']))['title']);?></p>
            <h3 class="card-title">
              <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($config['city']))['consolidated_weather'][0])['min_temp']);?>
               - <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($config['city']))['consolidated_weather'][0])['max_temp']);?>
              <small>°C</small>
            </h3>
          </div>
          <div class="card-footer">
            <div class="stats">
              <p>Weather state: <?php print_r(get_object_vars(get_object_vars($weather->getByCityName($config['city']))['consolidated_weather'][0])['weather_state_name'])?></p>
            </div>
          </div>
        </div>
      </div>
    <!-- </div> -->
  <!-- </div> -->
<!-- </div> -->