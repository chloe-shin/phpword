<?php
require_once 'vendor/autoload.php';
$phpWord = new \PhpOffice\PhpWord\PhpWord();


function gen_docx() {

    # https://blog.mayflower.de/6699-phpword-create-documents.html
    # https://www.php.net/manual/en/class.domxpath.php
    # https://stackoverflow.com/questions/7972199/how-do-you-remove-duplicate-nested-dom-elements-in-php

    # https://stackoverflow.com/questions/16794294/phpword-doesnt-replace-text

    $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor( 'liquidation2.docx' );
    // $templateProcessor->setValue('date', date("d-m-Y"));
    // $templateProcessor->setValue('name', 'John Doe');
    // $search_replace_array = array(
    //     'contract_name'=>'manny world/2020-298',
    //     'day'=>'10',
    //     'month'=>'2',
    //     'year'=>'2020',
    //     'company_vn'=>'Nguyen',
    //     'month_en'=>'Feburary',
    //     'company_en'=>'Kim', 
    //     'contract_date'=>'2020-02-10',
    //     'address_vn'=>'77 Doan Nhu Hai',
    //     'address_en'=>'77 Creatory',
    //     'phone'=>'0104932817',
    //     'tax' => '1893423',
    //     'rep_vn'=>'Nguyen Van Cu',
    //     'rep_en'=>'James',
    //     'date'=>'2020-02-20',
    //     'total_value'=>'1002934',
    //     'add_cost'=>'500000',
    //     'total_amount'=>'1092837',
    //     'total_amount_vn'=>'mot tram nam muoi',
    //     'total_amount_en'=>'one hundred thousand',
    //     'paid'=>'109837',
    //     'paid_vn'=>'mot tram',
    //     'paid_en'=>'one hundred',
    //     'payment'=>'2091873'
    // );
    $templateProcessor->setValue(
    ['contract_name', 'day', 'month', 'year', 'company_vn', 'month_en', 'company_en', 'contract_date', 'address_vn', 'address_en','phone', 'tax', 'rep_vn', 'rep_en', 'date', 'total_value', 'add_cost','total_amount','total_amount_vn', 'total_amount_en','paid','paid_vn','paid_en','payment'],

    ['manny world/2020-298', '10', '2', '2020', 'Tan Cang', 'April', 'Tan Cant', '2020-10-29', 
    'nguyen van cu', 'Texas', '01025004974', '292181920', 'giam doc', 'willis', '2020-02-30', '200999','384493', '2829309', 'Hai Tram nam muoi','two hundred thousand','298302983', 'thousand', 'thousand dallar', '299,180']);
 
    // $templateProcessor->setValueAdvanced($search_replace_array);

    $templateProcessor->saveAs('MyWordFile7.docx');
    };

    gen_docx(); 