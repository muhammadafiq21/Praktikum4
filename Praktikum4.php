<?php
    abstract class karyawan{
        public $no;
        public $nama;
        public $tempatTanggalLahir;
        public $jenisKelamin;
        public $levelKaryawan;
        public $status;
        public $gaji;

        public function __construct($no, $nama, $tempatTanggalLahir, $jenisKelamin, $levelKaryawan){
            $this->no = $no;
            $this->nama = $nama;
            $this->tempatTanggalLahir = $tempatTanggalLahir;
            $this->jenisKelamin = $jenisKelamin;
            $this->levelKaryawan = $levelKaryawan;
        }

        abstract public function gajiKaryawan();
    }

        class fullTime extends karyawan{
            public $status = 'Fulltime';
    
            public function gajiKaryawan(){
                if($this->levelKaryawan =='Junior'){
                    $this->gaji = 2000000;
                    return $this->gaji;
                }
                elseif ($this->levelKaryawan=='Amateur') {
                    $this->gaji = 3500000;
                    return $this->gaji;
                }
                elseif($this->levelKaryawan=='Senior'){
                    $this->gaji = 5000000;
                    return $this->gaji;
                }
            }
        }

        class partTime extends Karyawan{
            public $status = 'Parttime';
            
            public function gajiKaryawan(){
                if($this->levelKaryawan=='Junior'){
                    $this->gaji = 2000000*0.5;
                    return $this->gaji;
                }
                elseif ($this->levelKaryawan=='Amateur') {
                    $this->gaji = 3500000*0.5;
                    return $this->gaji;
                }
                elseif($this->levelKaryawan=='Senior'){
                    $this->gaji = 5000000*0.5;
                    return $this->gaji;
                }
            }
        }

        $karyawan[0] = new fullTime(1, 'Ami', 'Pekanbaru, 23 Mei 2001', 'Perempuan', 'Junior');
        $karyawan[1] = new partTime(2, 'Afiq', 'Cirebon, 22 Mei 2001', 'Laki-laki', 'Senior');
        $karyawan[2] = new fullTime(3, 'Cisero', 'Pamulang,12 Februari 2000', 'Laki-laki', 'Junior');
        $karyawan[3] = new partTime(4,  'Aji', 'Bekasi, 4 April 2001', 'Perempuan', 'Amateur');

    
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="desain.css">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Kerja Lembur Company</h1>
    <table class="Table" border='2' bordercolor= '#000000';>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Status</th>
                <th>Level Karyawan</th>
                <th>Gaji Karyawan</th>
            </tr>

            <?php for ($i=0; $i < 4; $i++) { ?>
            
            <tr>
                <td> <?php echo $karyawan[$i]->no; ?> </td>
                <td> <?php echo $karyawan[$i]->nama; ?> </td>
                <td> <?php echo $karyawan[$i]->tempatTanggalLahir; ?> </td>
                <td> <?php echo $karyawan[$i]->jenisKelamin; ?> </td>
                <td> <?php echo $karyawan[$i]->status; ?> </td>
                <td> <?php echo $karyawan[$i]->levelKaryawan; ?> </td>
                <td> <?php echo $karyawan[$i]->gajiKaryawan(); ?> </td>                   
            </tr> 
            <?php } ?>
    
</body>
