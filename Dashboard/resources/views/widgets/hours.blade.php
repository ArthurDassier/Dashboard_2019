<div class="card card-stats">
  <div class="card-header card-header-success card-header-icon">
    <div class="card-icon">
      <i class="material-icons">alarm</i>
    </div>
    <p class="card-category"> Hours </p>
    <h3 class="card-title"> <?php date_default_timezone_set($hours); echo date('H:i:s'); ?></h3>
  </div>
  <div class="card-footer">
    <div class="stats">
        The current hour in {{$hours}}.
    </div>
  </div>
</div>
