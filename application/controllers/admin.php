<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        // cek login
        if ($this->session->userdata('status') != "login") {
            redirect(base_url() . 'welcome?pesan=belomlogin');
        }
    }
    function index()
    {
        $data['pemesanan'] = $this->db->query("select * from pemesanan order by pemesanan_id desc limit 10")->result();
        $data['customer'] = $this->db->query("select * from customer order by customer_id desc limit 10")->result();
        $data['kamar'] = $this->db->query("select * from kamar order by kamar_id desc limit 10")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/index', $data);
        $this->load->view('admin/footer');
    }

    function kamar()
    {
        $data['kamar'] = $this->m_hotel->get_data('kamar')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/kamar', $data);
        $this->load->view('admin/footer');
    }

    function kamar_add()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/kamar_add');
        $this->load->view('admin/footer');
    }

    function kamar_add_act()
    {
        $nomor = $this->input->post('kamar_nomor');
        $tipe = $this->input->post('kamar_tipe');
        $fasilitas = $this->input->post('kamar_fasilitas');
        $status = $this->input->post('kamar_status');
        $this->form_validation->set_rules('kamar_nomor', 'Nomor Kamar', 'required');
        $this->form_validation->set_rules('kamar_status', 'Status Kamar', 'required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'kamar_nomor' => $nomor,
                'kamar_tipe' => $tipe,
                'kamar_fasilitas' => $fasilitas,
                'kamar_status' => $status,
            );
            $this->m_hotel->insert_data($data, 'kamar');
            redirect(base_url() . 'admin/kamar');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/kamar_add');
            $this->load->view('admin/footer');
        }
    }

    function kamar_edit($id)
    {
        $where = array(
            'kamar_id' => $id
        );
        $data['kamar'] = $this->m_hotel->edit_data($where, 'kamar')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/kamar_edit', $data);
        $this->load->view('admin/footer');
    }

    function kamar_update()
    {
        $id = $this->input->post('kamar_id');
        $nomor = $this->input->post('kamar_nomor');
        $tipe = $this->input->post('kamar_tipe');
        $fasilitas = $this->input->post('kamar_fasilitas');
        $status = $this->input->post('kamar_status');
        $this->form_validation->set_rules('kamar_nomor', 'Nomor Kamar', 'required');
        $this->form_validation->set_rules('kamar_status', 'Status Kamar', 'required');
        if ($this->form_validation->run() != false) {
            $where = array(
                'kamar_id' => $id
            );
            $data = array(
                'kamar_nomor' => $nomor,
                'kamar_tipe' => $tipe,
                'kamar_fasilitas' => $fasilitas,
                'kamar_status' => $status,
            );
            $this->m_hotel->update_data($where, $data, 'kamar');
            redirect(base_url() . 'admin/kamar');
        } else {
            $where = array(
                'kamar_id' => $id
            );
            $data['kamar'] = $this->m_hotel->edit_data($where, 'kamar')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/kamar_edit', $data);
            $this->load->view('admin/footer');
        }
    }

    function kamar_hapus($id)
    {
        $where = array(
            'kamar_id' => $id
        );
        $this->m_hotel->delete_data($where, 'kamar');
        redirect(base_url() . 'admin/kamar');
    }

    function customer()
    {
        $data['customer'] = $this->m_hotel->get_data('customer')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/customer', $data);
        $this->load->view('admin/footer');
    }

    function customer_add()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/customer_add');
        $this->load->view('admin/footer');
    }

    function customer_add_act()
    {
        $ktp = $this->input->post('ktp');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $hp = $this->input->post('hp');
        $this->form_validation->set_rules('ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');

        if ($this->form_validation->run() != false) {
            $data = array(
                'customer_ktp' => $ktp,
                'customer_nama' => $nama,
                'customer_alamat' => $alamat,
                'customer_jk' => $jk,
                'customer_hp' => $hp,

            );
            $this->m_hotel->insert_data($data, 'customer');
            redirect(base_url() . 'admin/customer');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/customer_add');
            $this->load->view('admin/footer');
        }
    }

    function customer_edit($id)
    {
        $where = array(
            'customer_id' => $id
        );
        $data['customer'] = $this->m_hotel->edit_data($where, 'customer')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/customer_edit', $data);
        $this->load->view('admin/footer');
    }

    function customer_update()
    {
        $id = $this->input->post('customer_id');
        $ktp = $this->input->post('ktp');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $hp = $this->input->post('hp');
        $this->form_validation->set_rules('ktp', 'Nomor KTP', 'required');
        $this->form_validation->set_rules('jk', 'Jenis Kelamin', 'required');
        if ($this->form_validation->run() != false) {
            $where = array(
                'customer_id' => $id
            );
            $data = array(
                'customer_ktp' => $ktp,
                'customer_nama' => $nama,
                'customer_alamat' => $alamat,
                'customer_jk' => $jk,
                'customer_hp' => $hp,
            );
            $this->m_hotel->update_data($where, $data, 'customer');
            redirect(base_url() . 'admin/customer');
        } else {
            $where = array(
                'customer_id' => $id
            );
            $data['customer'] = $this->m_hotel->edit_data($where, 'customer')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/customer_edit', $data);
            $this->load->view('admin/footer');
        }
    }

    function customer_hapus($id)
    {
        $where = array(
            'customer_id' => $id
        );
        $this->m_hotel->delete_data($where, 'customer');
        redirect(base_url() . 'admin/customer');
    }

    function pemesanan()
    {
        $data['pemesanan'] = $this->db->query("select * from pemesanan,kamar,customer where pemesanan_kamar=kamar_id and pemesanan_customer=customer_id")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/pemesanan', $data);
        $this->load->view('admin/footer');
    }

    function pemesanan_add()
    {
        $w = array('kamar_status' => 'tersedia');
        $data['kamar'] = $this->m_hotel->edit_data($w, 'kamar')->result();
        $data['customer'] = $this->m_hotel->get_data('customer')->result();
        $this->load->view('admin/header');
        $this->load->view('admin/pemesanan_add', $data);
        $this->load->view('admin/footer');
    }

    function pemesanan_add_act()
    {
        $customer = $this->input->post('customer');
        $kamar = $this->input->post('kamar_tipe');
        $tgl_checkin = $this->input->post('tgl_checkin');
        $tgl_checkout = $this->input->post('tgl_checkout');
        $harga = $this->input->post('harga');
        $durasiMalam = round((strtotime($tgl_checkout) - strtotime($tgl_checkin)) / (60 * 60 * 24));
        $totalHarga = $harga * $durasiMalam;


        $this->form_validation->set_rules('customer', 'Customer', 'required');
        $this->form_validation->set_rules('kamar_tipe', 'Kamar', 'required');
        $this->form_validation->set_rules('tgl_checkin', 'Tanggal Checkin', 'required');
        $this->form_validation->set_rules('tgl_checkout', 'Tanggal Checkout', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');


        if ($this->form_validation->run() != false) {
            $data = array(
                'pemesanan_nomor' => $this->session->userdata('id'),
                'pemesanan_customer' => $customer,
                'pemesanan_kamar' => $kamar,
                'pemesanan_checkin' => $tgl_checkin,
                'pemesanan_checkout' => $tgl_checkout,
                'pemesanan_harga' => $harga,
                'hari' => $durasiMalam,
                'pemesanan_totalharga' => $totalHarga,
                'pemesanan_tgl' => date('Y-m-d')
            );
            $this->m_hotel->insert_data($data, 'pemesanan');

            $d = array(
                'kamar_status' => 'tidak tersedia'
            );

            $w = array(
                'kamar_id' => $kamar
            );
            $this->m_hotel->update_data($w, $d, 'kamar');
            redirect(base_url() . 'admin/pemesanan');
        } else {
            $w = array('kamar_status' => 'tersedia');
            $data['kamar'] = $this->m_hotel->edit_data($w, 'kamar')->result();
            $data['customer'] = $this->m_hotel->get_data('customer')->result();
            $this->load->view('admin/header');
            $this->load->view('admin/pemesanan_add', $data);
            $this->load->view('admin/footer');
        }
    }

    function pemesanan_hapus($id)
    {
        $where = array(
            'pemesanan_id' => $id
        );
        $data = $this->m_hotel->edit_data($where, 'pemesanan')->row();

        $ww = array(
            'kamar_id' => $data->pemesanan_kamar
        );
        $data2 = array(
            'kamar_status' => 'tersedia'
        );
        $this->m_hotel->update_data($ww, $data2, 'kamar');

        $this->m_hotel->delete_data($where, 'pemesanan');
        redirect(base_url() . 'admin/pemesanan');
    }

    function pemesanan_selesai($id)
    {
        $data['kamar'] = $this->m_hotel->get_data('kamar')->result();
        $data['customer'] = $this->m_hotel->get_data('customer')->result();
        $data['pemesanan'] = $this->db->query("select * from pemesanan,kamar,customer where 
        pemesanan_kamar=kamar_id and pemesanan_customer=customer_id and pemesanan_id='$id'")->result();
        $this->load->view('admin/header');
        $this->load->view('admin/pemesanan_selesai', $data);
        $this->load->view('admin/footer');
    }

    function pemesanan_selesai_act()
    {
        $id = $this->input->post('id');
        $pembayaran = $this->input->post('pembayaran');

        $this->form_validation->set_rules('pembayaran', 'Pembayaran', 'required');

        if ($this->form_validation->run() != false) {

            $data = array(
                'pembayaran' => $pembayaran,
                'pemesanan_status' => '1',
            );

            $w = array(
                'pemesanan_id' => $id
            );

            $this->m_hotel->update_data($w, $data, 'pemesanan');

            $data2 = array(
                'kamar_status' => 'tersedia'
            );
            $w2 = array(
                'kamar_id' => $kamar
            );

            $this->m_hotel->update_data($w2, $data2, 'kamar');
            redirect(base_url() . 'admin/pemesanan');
        } else {
            $data['kamar'] = $this->m_hotel->get_data('kamar')->result();
            $data['customer'] = $this->m_hotel->get_data('customer')->result();
            $data['pemesanan'] = $this->db->query("select * from pemesanan,kamar,customer where 
            pemesanan_kamar=kamar_id and pemesanan_customer=customer_id and pemesanan_id='$id'")->result();
            $this->load->view('admin/header');
            $this->load->view('admin/pemesanan_selesai', $data);
            $this->load->view('admin/footer');
        }
    }

    function laporan()
    {
        $dari = $this->input->post('dari');
        $sampai = $this->input->post('sampai');
        $this->form_validation->set_rules('dari', 'Dari Tanggal', 'required');
        $this->form_validation->set_rules('sampai', 'Sampai Tanggal', 'required');

        if ($this->form_validation->run() != false) {
            $data['laporan'] = $this->db->query("select * from pemesanan,kamar,customer where 
            pemesanan_kamar=kamar_id and pemesanan_customer=customer_id and date(pemesanan_tgl)>='$dari' and date(pemesanan_tgl)<='$sampai'")->result();
            $this->load->view('admin/header');
            $this->load->view('admin/laporan_filter', $data);
            $this->load->view('admin/footer');
        } else {
            $this->load->view('admin/header');
            $this->load->view('admin/laporan');
            $this->load->view('admin/footer');
        }
    }

    function laporan_print()
    {
        $dari = $this->input->get('dari');
        $sampai = $this->input->get('sampai');

        if ($dari != "" && $sampai != "") {
            $data['laporan'] = $this->db->query("select * from pemesanan,kamar,customer where
            pemesanan_kamar=kamar_id and pemesanan_customer=customer_id and date(pemesanan_tgl)>='$dari' and date(pemesanan_tgl)<='$sampai'")->result();
            $this->load->view('admin/laporan_print', $data);
        } else {
            redirect("admin/laporan");
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'welcome?pesan=logout');
    }
}
