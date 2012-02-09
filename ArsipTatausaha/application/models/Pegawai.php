<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pegawai
 *
 * @author DENY PRASETIA TW
 */
class Pegawai extends CI_Model {
    
/*==============================================================================*/
/* DESKRIPSI HAKAKSES USER :
 * Hakakses 1 : Tata Usaha
 * Hakakses 2 : Kepalai Balai
 * Hakakses 3 : Pegawai*/
/*==============================================================================*/
    
    private $namaTabel = 'T_PEGAWAI';
    private $data;

    public function __construct() {
        parent::__construct();
    }

/*==============================================================================*/
/* FUNCTION INI DIGUNAKAN UNTUK MENANGANI REGISTRASI PEGAWAI
 * IDPEGAWAI, NAMAPEGAWAI, PASSWORD, HAKAKSES, STATUSPEGAWAI*/
/*==============================================================================*/
    public function registrasiPegawai($input) {
        $this->data = array(
            'IDPEGAWAI'     => $input['idpegawai'],
            'NAMAPEGAWAI'   => $input['namapegawai'],
            'PASSWORD'      => $input['password'],
            'HAKAKSES'      => $input['hakakses'],
            'STATUSPEGAWAI' => '2'
        );
        $this->db->insert($this->namaTabel, $this->data);
    }
    
/*==============================================================================*/
/* FUNCTION INI DIGUNAKAN UNTUK MENANGANI EDIT DATA PEGAWAI
 * IDPEGAWAI, NAMAPEGAWAI, PASSWORD, HAKAKSES, STATUSPEGAWAI*/
/*==============================================================================*/
    public function editDataPegawai ($input) {
        $this->data = array(
            'NAMAPEGAWAI'   => $input['namapegawai'],
            'PASSWORD'      => $input['password'],
            'HAKAKSES'      => $input['hakakses'],
            'STATUSPEGAWAI' => $input['statuspegawai']
        );
        $this->db->where('IDPEGAWAI', $input['idpegawai']);
        $this->db->set($this->data);
        $this->db->update($this->namaTabel);
    }
    

    
    
}

?>
