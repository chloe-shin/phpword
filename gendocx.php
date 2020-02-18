<?php
require_once 'vendor/autoload.php';

$phpWord = new \PhpOffice\PhpWord\PhpWord();

$section = $phpWord->addSection();
\PhpOffice\PhpWord\Shared\Html::addHtml($section, $_POST['htmlstring']);
// $html = '<td>  I. Services </td>';
// \PhpOffice\PhpWord\Shared\Html::addHtml($section, $html);
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment;filename="test.docx');
// header('Content-Description: File Transfer');
// header('Content-Transfer-Encoding: binary');
// header('Expires: 0');
// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// header('Pragma: public');
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('php://output');


// $section = $phpWord->createSection();
// $section->addText('Hello World!');
// $file = 'HelloWorld.docx';
// header("Content-Description: File Transfer");
// header('Content-Disposition: attachment; filename="' . $file . '"');
// header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
// header('Content-Transfer-Encoding: binary');
// header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
// header('Expires: 0');
// $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
// $xmlWriter->save("php://output");

?>





