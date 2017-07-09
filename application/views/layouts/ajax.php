<!DOCTYPE html>
<html lang="en">

<?php echo $this->template->block('header', 'layouts/blocks/header'); ?>

<body class="">

<?php 
//echo $this->template->block('header', 'layouts/blocks/top_menu'); ?>

<?php echo $this->template->block('header', 'layouts/blocks/top_header'); ?>

<?php echo $this->template->yield_content(); ?> 

<?php 
// echo $this->template->block('header', 'layouts/blocks/footer_menu'); ?>

<?php echo $this->template->block('header', 'layouts/blocks/footer'); ?>

</body>
</html>