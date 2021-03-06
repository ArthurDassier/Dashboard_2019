<div class="card card-stats">
    <div class="card-header card-header-success card-header-icon">
      <div class="card-icon">
          <i class="material-icons">calendar_today</i>
      </div>
      <p class="card-category"> Calendar <?php echo date('Y-m-d');?></p>
      <h3 class="card-title">
          <small>{{$month}}/2019</small>
      </h3>
      </div>
      <div class="card-footer">
      <div class="stats">
          <?php echo Calendar::generate(2019, $month); ?>
      </div>
    </div>
</div>
