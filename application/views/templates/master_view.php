<?php defined('BASEPATH') OR exit('No direct script access allowed');

$this->load->model('categorymodel');


$this->load->view('templates/_parts/master_header_view'); ?>





<?php echo $the_view_content; ?>

<?php $this->load->view('templates/_parts/master_footer_view'); ?>


<script src="<?php echo base_url();?>assets/js/pages/cart.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/js/custom.js" type="text/javascript"></script>


</body>
</html>


