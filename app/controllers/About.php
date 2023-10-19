<?php

class About
{
    public function index($nama = 'Ahmad Zidane', $pekerjaan = 'Gaming parah')
    {
        echo "Halo nama saya $nama, saya adalah seorang $pekerjaan";
    }

    public function about()
    {

        echo 'about/page';
    }
}
