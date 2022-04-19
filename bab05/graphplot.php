<?php
/* graphplot.php */

// include class PHPlot
include_once './phplot.php';

// Mendefinisikan objek grafik
$graph =& new PHPlot(300,200);

// Set tipe plot dan title
$graph->SetPlotType('pie');
$graph->SetTitle('PHPlot Pie Chart');

// Legend grafik
$legend = array();
$legend[] = 'Soto';
$legend[] = 'Sate';
$legend[] = 'Bakso';
$legend[] = 'Bakwan';
$legend[] = 'Lainnya';

// Data grafik
$arrData = array(
   array('a',89, 73, 15, 56, 48)
);

$graph->SetDataValues($arrData);
$graph->SetLegend($legend);

// Draw grafik
$graph->DrawGraph();
?>