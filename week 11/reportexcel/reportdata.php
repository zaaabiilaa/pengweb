<?php
include('koneksi.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'nik');
$sheet->setCellValue('B1', 'tanggalisiformulir');
$sheet->setCellValue('C1', 'jenispendaftaran');
$sheet->setCellValue('D1', 'tanggalmasuk');
$sheet->setCellValue('E1', 'nis');
$sheet->setCellValue('F1', 'nomorpendaftaran');
$sheet->setCellValue('G1', 'paud');
$sheet->setCellValue('H1', 'tk');
$sheet->setCellValue('I1', 'skhun');
$sheet->setCellValue('J1', 'ijazah');
$sheet->setCellValue('K1', 'cita');
$sheet->setCellValue('L1', 'hobi');
$sheet->setCellValue('M1', 'nama');
$sheet->setCellValue('N1', 'kelamin');
$sheet->setCellValue('O1', 'nisn');
$sheet->setCellValue('P1', 'tempatlahir');
$sheet->setCellValue('Q1', 'tanggallahir');
$sheet->setCellValue('R1', 'agama');
$sheet->setCellValue('S1', 'kebutuhankhusus');
$sheet->setCellValue('T1', 'alamat');
$sheet->setCellValue('U1', 'rt');
$sheet->setCellValue('V1', 'rw');
$sheet->setCellValue('W1', 'dusun');
$sheet->setCellValue('X1', 'desa');
$sheet->setCellValue('Y1', 'kecamatan');
$sheet->setCellValue('Z1', 'pos');
$sheet->setCellValue('AA1', 'tempattinggal');
$sheet->setCellValue('AB1', 'transportasi');
$sheet->setCellValue('AC1', 'nohp');
$sheet->setCellValue('AD1', 'notlp');
$sheet->setCellValue('AE1', 'mail');
$sheet->setCellValue('AF1', 'penerimapkh');
$sheet->setCellValue('AG1', 'nomorpkh');
$sheet->setCellValue('AH1', 'kewarganegaraan');
$sheet->setCellValue('AI1', 'negara');
$sheet->setCellValue('AJ1', 'ayah');
$sheet->setCellValue('AK1', 'tahunayah');
$sheet->setCellValue('AL1', 'pendidikanayah');
$sheet->setCellValue('AM1', 'pekerjaanayah');
$sheet->setCellValue('AN1', 'penghasilanayah');
$sheet->setCellValue('AO1', 'kebutuhankhususayah');
$sheet->setCellValue('AP1', 'ibu');
$sheet->setCellValue('AQ1', 'tahunibu');
$sheet->setCellValue('AR1', 'pendidikanibu');
$sheet->setCellValue('AS1', 'pekerjaanibu');
$sheet->setCellValue('AT1', 'penghasilanibu');
$sheet->setCellValue('AU1', 'kebutuhankhususibu');


$query = mysqli_query($koneksi,"select * from biodata");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['tanggalisiformulir']);
	$sheet->setCellValue('C'.$i, $row['jenispendaftaran']);
	$sheet->setCellValue('D'.$i, $row['tanggalmasuk']);
    $sheet->setCellValue('E'.$i, $row['nis']);
    $sheet->setCellValue('F'.$i, $row['nomorpendaftaran']);	
    $sheet->setCellValue('G'.$i, $row['paud']);	
    $sheet->setCellValue('H'.$i, $row['tk']);	
    $sheet->setCellValue('I'.$i, $row['skhun']);	
    $sheet->setCellValue('J'.$i, $row['ijazah']);	
    $sheet->setCellValue('K'.$i, $row['cita']);
    $sheet->setCellValue('L'.$i, $row['hobi']);	
    $sheet->setCellValue('M'.$i, $row['nama']);	
    $sheet->setCellValue('N'.$i, $row['kelamin']);	
    $sheet->setCellValue('O'.$i, $row['nisn']);	
    $sheet->setCellValue('P'.$i, $row['tempatlahir']);
    $sheet->setCellValue('Q'.$i, $row['tanggallahir']);	
    $sheet->setCellValue('R'.$i, $row['agama']);	
    $sheet->setCellValue('S'.$i, $row['kebutuhankhusus']);	
    $sheet->setCellValue('T'.$i, $row['alamat']);	
    $sheet->setCellValue('U'.$i, $row['rt']);	
    $sheet->setCellValue('V'.$i, $row['rw']);	
    $sheet->setCellValue('W'.$i, $row['dusun']);	
    $sheet->setCellValue('X'.$i, $row['desa']);	
    $sheet->setCellValue('Y'.$i, $row['kecamatan']);	
    $sheet->setCellValue('Z'.$i, $row['pos']);	
    $sheet->setCellValue('AA'.$i, $row['tempattinggal']);	
    $sheet->setCellValue('AB'.$i, $row['transportasi']);	
    $sheet->setCellValue('AC'.$i, $row['nohp']);	
    $sheet->setCellValue('AD'.$i, $row['notlp']);	
    $sheet->setCellValue('AE'.$i, $row['mail']);	
    $sheet->setCellValue('AF'.$i, $row['penerimapkh']);	
    $sheet->setCellValue('AG'.$i, $row['nomorpkh']);	
    $sheet->setCellValue('AH'.$i, $row['kewarganegaraan']);	
    $sheet->setCellValue('AI'.$i, $row['negara']);	
    $sheet->setCellValue('AJ'.$i, $row['ayah']);	
    $sheet->setCellValue('AU'.$i, $row['tahunayah']);
    $sheet->setCellValue('AK'.$i, $row['pendidikanayah']);	
    $sheet->setCellValue('AL'.$i, $row['pekerjaanayah']);	
    $sheet->setCellValue('AM'.$i, $row['penghasilanayah']);	
    $sheet->setCellValue('AN'.$i, $row['kebutuhankhususayah']);	
    $sheet->setCellValue('AO'.$i, $row['ibu']);	
    $sheet->setCellValue('AP'.$i, $row['tahunibu']);	
    $sheet->setCellValue('AQ'.$i, $row['pendidikanibu']);	
    $sheet->setCellValue('AR'.$i, $row['pekerjaanibu']);	
    $sheet->setCellValue('AS'.$i, $row['penghasilanibu']);	
    $sheet->setCellValue('AT'.$i, $row['kebutuhankhususibu']);	
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AT'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Report Data Pendaftaran SMP.xlsx');
header("location:formpendaftaran.php")
?>