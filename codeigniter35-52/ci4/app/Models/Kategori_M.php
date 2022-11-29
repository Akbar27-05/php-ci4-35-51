<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class Kategori_M extends Model
    {
        protected $table = 'tblkategori';

        protected $allowedFields = ['kategori','keterangan'];

        protected $primaryKey = 'idkategori';

        protected $validationRules    = [
            'kategori'     => 'alpha_numeric_space|min_length[3]|is_unique[tblkategori.kategori]',
        ];
        protected $validationMessages = [
            'kategori' => [
                'alpha_numeric_space' => 'Tidk Boleh menggunakan simbol',
                'min_length[3]' => 'Minimal 3 huruf',
                'is_unique' => 'Data sudah ada'
            ],
        ];
    }
    

?>