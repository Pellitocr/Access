<!-- reportsconfirm.php

	This is where the report will be generated, this can be changed to

-->

<?php
if(!empty($_POST['submit']));
{
		$_SESSION['profile']=$_POST['profile'];
		$_SESSION['classroom']=$_POST['classroom'];
		$_SESSION['date']=$_POST['date'];
		$_SESSION['topic']=$_POST['topic'];
		//the variables
}


require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->Addpage();
$pdf->SetFont("Arial","B",14);
$pdf->Cell(0,10,"Interamerican University of Puerto Rico",0,1, "C");
$pdf->SetFont("Arial","",12);
$pdf->Cell(0,10,"Centro de Informacion y Telecomunicacion",0,1, "C");

$pdf->Cell(50, 10, "{$_SESSION['date']}",0,1);
$pdf->Cell(50, 10, "",0,1);

$pdf->Cell(50, 10, "Dear : {$_SESSION['profile']}",0,1);

$pdf->Cell(50, 10, "					We are reaching out to you because of the following reason: {$_SESSION['topic']}, regarding the ",0,1);
$pdf->Cell(50, 10, "classroom: {$_SESSION['classroom']}. Please be aware that we have all the necessary information to contact ",0,1);
$pdf->Cell(50, 10, "you, as an example, this current letter. Please, we are asking you to cooperate with us to fix this ",0,1);
$pdf->Cell(50, 10, "issue as soon as possible. ",0,1);
$pdf->Cell(50, 10, " ",0,1);

$pdf->Cell(50, 10, "					Thank you for your undertanding {$_SESSION['profile']}. ",0,1);
$pdf->Cell(50, 10, "Have a Great Day. ",0,1);
$pdf->Cell(50, 10, " ",0,1);
$pdf->Cell(50, 10, " ",0,1);
$pdf->Cell(50, 10, " ",0,1);

$pdf->Cell(50, 10, "Name: ",1,0);
$pdf->Cell(50, 10, "{$_SESSION['profile']}",1,1);

$pdf->Cell(50, 10, "Topic: ",1,0);
$pdf->Cell(50, 10, "{$_SESSION['topic']}",1,1);

$pdf->Cell(50, 10, "Classroom: ",1,0);
$pdf->Cell(50, 10, "{$_SESSION['classroom']}",1,1);

$pdf->Cell(50, 10, "Date: ",1,0);
$pdf->Cell(50, 10, "{$_SESSION['date']}",1,1);


$pdf->output();

?>
