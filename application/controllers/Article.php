<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use chriskacerguis\RestServer\RestController;

class Article extends RestController {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('article_mdl', 'mdl');
    }


    public function index_get()
    {
        $id = $this->get('id');
        if($id === null){
            $p = $this->get('page');
            $p = (empty($p) ? 1 : $p);
            $total_data = $this->mdl->count();
            $total_page = ceil($total_data / 5);
            $start = ($p - 1) * 5;

            $list = $this->mdl->get(null, 5, $start);

            if($list){
                $data = [
                    'status' => true,
                    'page' => $p,
                    'total_data' => $total_data,
                    'total_page' => $total_page,
                    'data' => $list
                ];
            }else{
                $data = [
                    'status' => false,
                    'msg' => 'Data Kosong'
                ];
            }
            
            $this->response($data,RestController::HTTP_OK);

        }else{
            $data = $this->mdl->get($id);
            if($data){
                $this->response(['status' => true, 'data' => $data],RestController::HTTP_OK);
            }else{
                $this->response(['status' => false, 'msg' => $id .'Data Kosong'],RestController::HTTP_NOT_FOUND);
            }
        }
        
    }

    public function index_post()
    {
        $title          = $this->post('title');
        $content        = $this->post('content');
        $category       = $this->post('category');
        $created_date   = $this->post('created_date');
        $status         = $this->post('status');

        $data = [
            'title'         => $title,
            'content'       => $content,
            'category'      => $category,
            'created_date'  => $created_date,
            'status'        => $status
        ];
        $simpan = $this->mdl->add($data);

        if($simpan['status']){
            $this->response(['status' => true, 'msg' => $simpan['data']. ' Data Sukses Ditambah'], RestController::HTTP_CREATED);
        }else{
            $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_put()
    {
        $id             = $this->put('id');
        $title          = $this->put('title');
        $content        = $this->put('content');
        $category       = $this->put('category');
        $update_date    = $this->put('update_date');
        $status         = $this->put('status');

        $data = [
            'id'            => $id,
            'title'         => $title,
            'content'       => $content,
            'category'      => $category,
            'update_date'   => $update_date,
            'status'        => $status
        ];
        $id = $this->put('id_article');

        if($id === null){
            $this->response(['status' => false, 'msg' => 'Masukan ID'], RestController::HTTP_BAD_REQUEST);
        }

        $simpan = $this->mdl->update($id, $data);

        if($simpan['status']){
            $status = (int)$simpan['data'];
            if($status > 0){
                $this->response(['status' => true, 'msg' => $simpan['data']. ' Data Sukses Dirubah'], RestController::HTTP_OK);
            }else{
                $this->response(['status' => false, 'msg' => 'Tidak Ada Data Yang Dirubah'], RestController::HTTP_BAD_REQUEST);
            }
        }else{
            $this->response(['status' => false, 'msg' => $simpan['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if($id === null){
            $this->response(['status' => false, 'msg' => 'Masukan ID Yang Akan Di Hapus'], RestController::HTTP_BAD_REQUEST);
        }

        $delete = $this->mdl->delete($id);

        if($delete['status']){
            $status = (int)$delete['data'];
            if($status > 0){
                $this->response(['status' => true, 'msg' => $id. ' Data Sukses Dihapus'], RestController::HTTP_OK);
            }else{
                $this->response(['status' => false, 'msg' => 'Tidak Ada Data Yang Dihapus'], RestController::HTTP_BAD_REQUEST);
            }
        }else{
            $this->response(['status' => false, 'msg' => $delete['msg']], RestController::HTTP_INTERNAL_ERROR);
        }
    }

}