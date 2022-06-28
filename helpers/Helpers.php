<?php

  function base_url() {
    return base_url;
  }

  function media() {
    return base_url . "/assets";
  }

  function headerAdmin() {
    $viewHeader = "views/template/header.php";
    require_once ($viewHeader);
  }

  function footerAdmin() {
    $viewFooter = "views/template/footer.php";
    require_once ($viewFooter);
  }