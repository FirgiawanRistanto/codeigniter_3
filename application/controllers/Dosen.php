<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->model('dosenM');
        $data['dosen'] = $this->dosenM->getData();
        $this->load->view('dosen/index', $data);
        $this->load->view('admin/footer');
    }

    public function tambah()
    {
        $this->load->view('admin/header');
        $this->load->view('dosen/tambah');
        $this->load->view('admin/footer');
    }


    public function act_tambah()
    {
        $this->form_validation->set_rules('nidn', 'nidn', 'required|min_length[10]|max_length[13]|numeric|is_unique[dosen.nidn]', array('required' => '%s harus diisi!', 'is_unique' => '%s sudah ada!', 'max_length' => '%s tidak boleh lebih dari 13 karakter','min_length' => '%s minimal 10 karakter', 'numeric' => '%s harus diisi angka'));
        $this->form_validation->set_rules('nama', 'nama', 'required', array('required' => '%s tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat', 'alamat', 'required', array('required' => '%s tidak boleh kosong!'));
        $this->form_validation->set_rules('prodi', 'prodi', 'required', array('required' => '%s tidak boleh kosong!'));
        if ($this->form_validation->run()) {
            $data = [
                'nidn' => $this->input->post('nidn'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'prodi' => $this->input->post('prodi'),
            ];
            $this->load->model('dosenM');
            $this->dosenM->insert_data($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('dosen');
        } else {
            $this->tambah();
        }
    }

    public function edit($id)
    {
        $this->load->view('admin/header');

        $this->load->model('dosenM');
        $data['dosen'] = $this->dosenM->edit_data($id);

        $this->load->view('dosen/edit', $data);
        $this->load->view('admin/footer');
    }

    public function update($id)
    {
        $this->form_validation->set_rules('nidn', 'nidn', 'required|min_length[10]|max_length[13]|is_unique[dosen.nidn]', array('required' => '%s harus diisi!', 'is_unique' => '%s sudah ada!', 'max_length' => '%s tidak boleh lebih dari 13 karakter','min_length' => '%s minimal 10 karakter', 'numeric' => '%s harus diisi angka'));
        $this->form_validation->set_rules('nama', 'nama', 'required', array('required' => '%s tidak boleh kosong!'));
        $this->form_validation->set_rules('alamat', 'alamat', 'required', array('required' => '%s tidak boleh kosong!'));
        $this->form_validation->set_rules('prodi', 'prodi', 'required', array('required' => '%s tidak boleh kosong!'));

        if ($this->form_validation->run()):
            $data = [
                'nidn' => $this->input->post('nidn'),
                'nama' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'prodi' => $this->input->post('prodi'),
            ];
            $this->load->model('dosenM');
            $this->dosenM->update($data, $id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil diedit!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect(base_url('dosen'));

        else:
            $this->edit($id);
        endif;
    }

    public function delete($id)
    {
        $this->load->model('dosenM');
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data berhasil dihapus! 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
        $this->dosenM->delete($id);
    }
}
