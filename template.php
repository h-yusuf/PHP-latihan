<?php
require 'global_setting.php';
class Template extends Global_setting{
    public function tem_atas($judul = 'form')
    {
        $setting = new Global_setting();
        return '

<!DOCTYPE html>
<html lang="en">
<head>
    <title>'.$judul.'</title>
    <link rel="stylesheet" href="stile.css">
    </head>
<body>
 '.$setting->get_menu().'
 <hr/>
 <h1/>'.$judul.'</h1>
';
}

public function tem_bawah()

{
    return
    '
    <p>Copyright Web programing II</p>
    </body>
    </html>
        ';
    }
} 
?>
