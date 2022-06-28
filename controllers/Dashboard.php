<?php
  class Dashboard extends Controller {
    public function index() {
      $data["page_name"] = "Dashboard";
      $this->views->getView($this, "index", $data);
    }
  }