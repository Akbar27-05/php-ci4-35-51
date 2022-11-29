<?php 
    namespace App\Models;
    use CodeIgniter\Model;

    class User_M extends Model
    {
        protected $table = 'tbluser';

        protected $allowedFields = ['user','email','password','level','aktif'];

        protected $primaryKey = 'iduser';

        protected $validationRules    = [
            'user'     => 'alpha_numeric_space|min_length[3]|is_unique[tbluser.user]',
            'email'     => 'valid_email'
        ];

        protected $validationMessages = [
            'user' => [
                'alpha_numeric_space' => 'Tidk Boleh menggunakan simbol',
                'min_length[3]' => 'Minimal 3 huruf',
                'is_unique' => 'Data sudah ada'
            ],

            'email' => [
                'valid_email' => 'ada email yang sama'
            ]
        ];
    }
    

?>