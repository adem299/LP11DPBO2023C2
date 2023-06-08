<?php

  interface KontrakPasienView {
      public function tampil();
      public function addForm();
      public function updateForm($id);
  }

  interface KontrakPasienPresenter {
      public function prosesDataPasien();
      public function processAdd($data);
      public function processDelete($data);
      public function getId($i);
      public function getNik($i);
      public function getNama($i);
      public function getTempat($i);
      public function getTl($i);
      public function getGender($i);
      public function getSize();
  }
