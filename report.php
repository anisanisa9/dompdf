<?php 
    require 'vendor/autoload.php';

    use Dompdf\Dompdf;

    $dompdf = new Dompdf();
    $dompdf->loadhtml('Menggunakan Lirary DOMPDF untuk membuat report PDF dengan DOMPDF');

    $dompdf->setPaper('A4','lanscape');

    $dompdf->render();

    $dompdf->stream('hasil_report.pdf');

?>