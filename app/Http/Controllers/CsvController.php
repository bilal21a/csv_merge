<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function csv_merge(Request $request)
    {
        // dd($request->all());
        $rows = file($request->master_file); // Read the file and store each line as an array element
        $header = str_getcsv(array_shift($rows)); // Extract the header row and convert it to an array
        // $data = [];
        // foreach ($rows as $row) {
        //     $data[] = array_combine($header, str_getcsv($row)); // Combine the header with each row and convert them to an associative array
        // }

        // $rows = file($request->report_file); // Read the file and store each line as an array element
        // $header = str_getcsv(array_shift($rows)); // Extract the header row and convert it to an array
        // $data = [];
        // foreach ($rows as $row) {
        //     $data[] = array_combine($header, str_getcsv($row)); // Combine the header with each row and convert them to an associative array
        // }

        foreach ($rows as $row) {
            $columns = str_getcsv($row); // Convert the row to an array of columns
            $data[] = $columns[0]; // Retrieve the value from the first column and add it to the $data array
        }

        dd($data);
    }
}
