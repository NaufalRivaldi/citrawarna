
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






