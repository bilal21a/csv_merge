<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body>
   <form action="{{ route('csv_merge') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="email" id="" placeholder="Email">
    <input type="file" name="master_file" id="">
    <input type="file" name="report_file" id="">
    <input type="submit" value="Merge">
   </form>
    </body>
</html>
