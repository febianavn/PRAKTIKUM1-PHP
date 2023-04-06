<?php

include_once'book.php';

class model
{
    public function getData()
    {
        return array(
            new book('Pemprograman PHP & Mysql', 'Bayu Priyambadha', 'UB Press', '2011'),
            new book('Pemprograman Framework MVC dengan PHP', 'Widhy', 'UB Press', '2011'),
            new book('Membangun Aplikasi Web dengan PHP dan AJAX', 'Achmad Arwan', 'UB Press', '2012'),
            new book('Kolaborasi PHP, MVC, AJAX', 'Bayu Priyambadha', 'UB Press', '2012')
        );
    }
}