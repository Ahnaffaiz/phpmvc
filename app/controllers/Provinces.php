<?php 

class Provinces extends Controller{

    public function index(){
        $data['judul']="Province";
        $data['province'] = $this->model('Provinces_model')-> getALlProvinces();
        $this->view('templates/header', $data);
        $this->view('provinces/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id){
        $data['judul']="Province Details";
        $data['prov'] = $this->model('Provinces_model')->getProvinceById($id);
        $this->view('templates/header', $data);
        $this->view('provinces/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah(){
        if($this->model('Provinces_model')->tambahDataProvinces($_POST)>0){
            Flasher::setFlash('Berhasil ','ditambahkan', 'success');
            header('location: ' . BASEURL  . '/provinces');
            exit;
        }
        else {
            Flasher::setFlash('Gagal ','ditambahkan', 'danger');
            header('location: ' . BASEURL  . '/provinces');
            exit;
        }
    }
    public function hapus($id){
        if($this->model('Provinces_model')->hapusDataProvinces($id)>0){
            Flasher::setFlash('Berhasil ','dihapus', 'success');
            header('location: ' . BASEURL  . '/provinces');
            exit;
        }
        else {
            Flasher::setFlash('Gagal ','dihapus', 'danger');
            header('location: ' . BASEURL  . '/provinces');
            exit;
        }
    }

    public function hapusDataProvinces(){

    }
}
?>