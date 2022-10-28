<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  
  <div class="carousel-indicators">
    <?php $i = 0; ?>
    <?php foreach($attributes["images"] as $image): ?>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $i ?>" class="active" aria-current="true" aria-label="Slide"></button>
      <?php $i++; ?>
    <?php endforeach ?>
  </div>
  <div class="carousel-inner">
    <?php foreach($attributes["images"] as $image): ?>
      <div class="carousel-item active" data-bs-interval="8000">
        <img src="<?php echo $image["image-url"] ?>" class="d-block w-100" alt="...">
      </div>
    <?php endforeach ?> 
  </div>
</div>