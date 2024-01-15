<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>first website</title>
  
<header>
  <h1>This is a Header</h1>
  <img alt="" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>
  " height="<?php echo absint( get_custom_header()->height ); ?>">

  <?php wp_head(); ?>

</header>
</head>