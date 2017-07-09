
<!DOCTYPE html>
<html lang="en">

<?php echo $this->template->block('header', 'layouts/blocks/header'); ?>

<body class="" id="wrapper">
<script>
  window.intercomSettings = {
    app_id: "il4v96dr"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/il4v96dr';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

<?php 
//echo $this->template->block('header', 'layouts/blocks/top_menu'); ?>

<?php echo $this->template->block('header', 'layouts/blocks/top_header'); ?>

<?php echo $this->template->yield_content(); ?> 

<?php 
// echo $this->template->block('header', 'layouts/blocks/footer_menu'); ?>

<?php echo $this->template->block('header', 'layouts/blocks/footer'); ?>

</body>
</html>