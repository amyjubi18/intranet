<?php

require_once ('../fpdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //$this->image('../img/logo.png', 150, 1, 60); // X, Y, Tamaño
    $this->Ln(20);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
  
    // Movernos a la derecha
    $this->Cell(60);

    // Título
    $this->Cell(70,10,'Tabla de usuarios ',0,0,'C');
    // Salto de línea
   
    $this->Ln(30);
    $this->SetFont('Arial','B',10);
    $this->SetX(8);
    $this->Cell(25,10,'Usuarios',1,0,'C',0);
    $this->Cell(40,10,'email',1,0,'C',0,);
    $this->Cell(27,10,'NombreCompleto',1,0,'C',0);
    $this->Cell(27,10,'Clave',1,0,'C',0);
    $this->Cell(40,10,'Fecha',1,0,'C',0);
    $this->Cell(30,10,'Gerencias',1,1,'C',0);
	

  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
  
    $this->Cell(0,10,utf8_decode('Página') .$this->PageNo().'/{nb}',0,0,'C');
   //$this->SetFillColor(223, 229,235);
    //$this->SetDrawColor(181, 14,246);
    //$this->Ln(0.5);
}
}

$conexion=mysqli_connect("localhost","root","","intranet");
$consulta = "SELECT usuario.IdUsuarios, usuario.Usuarios, usuario.email, usuario.Clave, usuario.NombreCompleto,
usuario.Fecha, permisos.Gerencias FROM usuario
LEFT JOIN permisos ON usuario.IdPermisos = permisos.IdPermisos";
$resultado = mysqli_query($conexion, $consulta);

$pdf = new PDF();

$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);
//$pdf->SetWidths(array(10, 30, 27, 27, 20, 20, 20, 20, 22));
while ($row=$resultado->fetch_assoc()) {

    $pdf->SetX(8);

    $pdf->Cell(25,10,$row['Usuarios'],1,0,'C',0);
    $pdf->Cell(40,10,$row['email'],1,0,'C',0);
	$pdf->Cell(27,10,$row['NombreCompleto'],1,0,'C',0);
    $pdf->Cell(27,10,$row['Clave'],1,0,'C',0);
    $pdf->Cell(40,10,$row['Fecha'],1,0,'C',0);
    $pdf->Cell(30,10,$row['Gerencias'],1,1,'C',0);
	


} 


	$pdf->Output();
?>