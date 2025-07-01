<?php include 'fpdf/fpdf.php'; ?>

<?php
//conexxo com base de dados
 // conexao
 require_once 'bd_conec.php';
 //sessao
     session_start();
     $id = $_SESSION['id_usuario'];

//pesquisar na tabela

// para exibir todos os registros select : $sql="SELECT * FROM users ";

// $sql=("SELECT * FROM movimento "); //exibe o registro especifico
$sql = ("SELECT * FROM movimento 
INNER JOIN login
ON movimento.id_user = login.id 
WHERE login.id = '$id'");
$resultado = mysqli_query($connect, $sql);


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(100,10,('Relatorio de Movimentos de Saida'),0,0,"C");
//exibir imagem no pdf
// $pdf->Image();
$pdf->ln(15); // espacamento entra linhas de 15 mm


$pdf->SetFont('Arial','B',12);
$pdf->Cell(36, 10,'Conta',1,0,"C");
$pdf->Cell(36, 10,'Operacao',1,0,"C");
$pdf->Cell(42,10,'Data', 1, 0, "C",);
$pdf->Cell(38,10,'Valor', 1, 0, "C",);
// $pdf->Cell(38,10,'Contador', 1, 0, "C",);
$pdf->ln(); //nenhum espacamentos entre linhas


while ($busca = mysqli_fetch_array($resultado)) {

    
    $pdf->Cell(36, 7, $busca['Numero_Conta'],1,0,"C");
    $pdf->Cell(36, 7, $busca['tipo'],1,0,"C");
    $pdf->Cell(42, 7, $busca['data_mov'],1,0,"C");
    $pdf->Cell(38, 7, $busca['valor']. 'MT',1,0,"C");
    // $pdf->Cell(38, 7, $busca['Numero_Contador'],1,0,"C");
    $pdf->Ln();
    
}
$pdf->Output();


?>
