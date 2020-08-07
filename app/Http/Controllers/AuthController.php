<?php   

namespace App\Http\Controllers;

use App\Http\Controllers\Controllers;

class AuthController extends Controller {
    public function me() {
        return[
            "NIS" => "3103118042",
            "Nama" => "Devana Putra Nur Ardanu",
            "Gender" => "Laki-laki",
            "Phone" => "6282328387237",
            "Class" => "XII RPL 2"
        ];
    }
}