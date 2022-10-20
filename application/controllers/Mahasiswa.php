<?php
class Mahasiswa extends CI_Controller
{
 public function index()
 {
 $this->load->view('view-form-mahasiswa');
 }
 public function cetak()
 {
 $data = [
 'nama' => $this->input->post('nama'),
 'NIS' => $this->input->post('NIS'),
 'kelas' => $this->input->post('kelas'),
 'kelas' => $this->input->post('kelas'),
 'alamat' => $this->input->post('alamat'),
 'tempat_lahir' => $this->input->post('tempat_lahir'),
 'tanggal_lahir' => $this->input->post('tanggal_lahir'),
 ];
 $this->load->view('view-data-mahasiswa', $data);
 }
}