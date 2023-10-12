<?php
class Global_setting{
    private $arr_menu = [
        [
            'nama' => ' List Barang ',
            'link' =>'index.php',
        ],
        [
            'nama' => ' form inputan barang',
            'link' => 'form_barang.php ',
        ],
        [
            'nama' => ' keranjang ',
            'link' => 'keranjang.php',
        ]
        ];
        protected function get_menu(){
            $html_kode = '';
            foreach ($this -> arr_menu as $key => $value ){
                $html_kode .= '<button class="btn-switch"/><a  href="'.$value['link'].'">'.$value['nama'].'</a></button>';

            }
            return $html_kode;
        }
}
?>