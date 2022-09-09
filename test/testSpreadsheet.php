<?php

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Hello World !');

$writer = new Xlsx($spreadsheet);
$fichier = dirname(__DIR__ ). DIRECTORY_SEPARATOR . 'hello world.xlsx';
$writer->save($fichier);
?>

<?php

// include the autoloader, so we can use PhpSpreadsheet
require_once(__DIR__ . '../vendor/autoload.php');

# Create a new Xls Reader

$reader = new PhpOffice\PhpSpreadsheet\Reader\Xlsx();

// Tell the reader to only read the data. Ignore formatting etc.
// $reader->setReadDataOnly(true);

// Read the spreadsheet file.
$spreadsheet = $reader->load(__DIR__ . '/path/to/file.xlsx');

$sheet = $spreadsheet->getSheet($spreadsheet->getFirstSheetIndex());
$data = $sheet->toArray();

// output the data to the console, so you can see what there is.
die(print_r($data, true));
?>


<?php
//Convert an excel file to csv file

$reader = new \PhpOffice\PhpSpreadsheet\IOFactory::createReader("Xlsx");
$spreadsheet = $reader->load($excelFile);

// write into csv
$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, "Csv");
$writer->save("upload-file.csv");
?>

<?php

// Autoload dependencies
require '../vendor/autoload.php';

// Import the core class of PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;

// Import the Xlsx writer class
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Create a new Spreadsheet object
$spreadsheet = new Spreadsheet();

// Retrieve the current active worksheet
$sheet = $spreadsheet->getActiveSheet();

/**
 * Loop through 'Column A - D'.
 */
foreach (range('A', 'D') as $letter) {
    // Set some data to 'Column A - D' of 'Row 5'
    $sheet->setCellValue($letter . '5', 'Column ' . $letter);
}

/**
 * Insert 2 new rows before row 1.
 * 
 * The created data above from row 2
 * will now be moved to row 7.
 */
$spreadsheet->getActiveSheet()->insertNewRowBefore(1, 2);
$sheet->setCellValue('A1', 'New A1');
$sheet->setCellValue('A2', 'New A2');

// Write a new .xlsx file
$writer = new Xlsx($spreadsheet);

// Save the new .xlsx file
$writer->save('insert-rows-in-xlsx-files.xlsx');

?>