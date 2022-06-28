<?php

  function base_url() {
    return base_url;
  }

  function media() {
    return base_url . "/assets";
  }

  function headerAdmin($data="") {
    $viewHeader = "views/template/header.php";
    require_once ($viewHeader);
  }

  function footerAdmin($data="") {
    $viewFooter = "views/template/footer.php";
    require_once ($viewFooter);
  }