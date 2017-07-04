<?php

require_once($_SESSION['basepath'] . 'models/homePageModel.php');

class homePageClass extends homePageModel {

    /**
     * ======================================================
     * --------------------- Section 1 -----------------------
     */
    public function save_section1($data) {
        return $this->save($data);
    }

    public function getAll_section1() {
        return $this->findAll();
    }

    public function getOne_section1($id) {
        return $this->findOne($id);
    }

    public function update_section1($data) {
        return $this->updateOne($data);
    }

    public function delete_section1($id) {
        return $this->deleteOne($id);
    }

    /**
     * ======================================================
     * --------------------- Section 2 -----------------------
     */
}
