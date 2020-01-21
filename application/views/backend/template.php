
<?php $this->load->view('backend/layout/header') ?>

 <?php $this->load->view('backend/layout/sidebar') ?>

  <?php 
      if($this->session->flashdata('success')) { 
        echo "<div class='alert alert-success'>". $this->session->flashdata('success'). "</div>";
      } else if($this->session->flashdata('danger')){
        echo "<div class='alert alert-danger'>". $this->session->flashdata('danger'). "</div>";
      } 
   ?>

 <?php $this->load->view($content) ?>

<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
      $('.myTable').DataTable();
  } );
</script>




