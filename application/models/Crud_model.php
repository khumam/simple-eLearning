<?php

/*
    Ini adalah model untuk mengatur seluruh aktifitas CRUD. Akan dimodifikasi lebih baik supaya mudah digunakan.
*/

class Crud_model extends CI_Model
{
    /*
    
    Ini adalah fungsi untuk memasukkan data ke dalam tabel di database.

    @parameter
    $data berupa array dari controllers. Gunakan array dengan key dan value dimana key sebagai nama kolom di dalam tabel, dan value sebagai nilainya.
    $table adalah nama table yang menjadi tempat dimasukkannya data.

    @return
    Fungsi akan mengembalikan nilai true jika berhail dan false jika gagal dalam memasukkan data.
    
    */

    public function insertData($data, $table)
    {
        $insert = $this->db->insert($data, $table);
        return $insert ? true : false;
    }

    /*
    
    Ini adalah fungsi untuk membaca data dari sebuah table. 

    @parameter
    $func berisi array asosiatif yang bisa diset untuk melakukan berbagai konfigurasi dalam pengambilan data. Fungsi yang ada.
    $table adalah nama table yang menjadi target untuk pengambilan data

    @return
    Fungsi akan mengembalikan data dalam bentuk array jika berhasil dan mengembalikan false jika gagal
    
    */

    public function getData($func, $table)
    {

        if ($func['select'] != null) {
            $this->db->select($func['select']);
        }

        if ($func['identifier'] != null) {
            $this->db->where($func['identifier']);
        }

        if ($func['limit'] != null) {
            if ($func['start'] != null) {
                $this->db->limit($func['limit'], $func['start']);
            } else {
                $this->db->limit($func['limit']);
            }
        }

        if ($func['like'] != null) {
            $this->db->like($func['like'][0], $func['like'][1], $func['like'][2]);
        }

        if ($func['or_like'] != null) {
            $this->db->like($func['or_like'][0], $func['or_like'][1]);
        }

        if ($func['order_by'] != null) {
            $this->db->order_by($func['order_by'][0], $func['order_by'][1]);
        }

        $data = $this->db->get($table);
        return $data ? $data->result_array() : false;
    }

    /*
    
    Ini adalah fungsi untuk mengupdate data yang sudah ada dalam database. Dapat digunakan untuk softDelete dari sebuah data

    @parameter
    $data adalah data baru yang akan dimasukkan
    $func berisi array assosiative untuk menentukan spesifikasi value mana dan id berapa kolom akan diubah
    $table adalah nama table yang akan diubah

    @return
    Fungsi akan mengembalikan nilai true jika berhasil dan false jika gagal
    
    */

    public function updateData($data, $func, $table)
    {
        if ($func['identifier'] != null) {
            $this->db->where($func['identifier']);
        }

        $update = $this->db->update($table, $data);
        return $update ? true : false;
    }
}
