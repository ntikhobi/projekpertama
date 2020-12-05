<?php

require_once __DIR__ . '../../vendor/autoload.php';

require '../koneksi.php';

$id = $_GET['id'];

$no = 1;
$data =  mysqli_query($conn,"SELECT * FROM nonasn where id=$id");


$html = 
'
<html>
    <head>
        <title> Cetak Data Non ASN </title>
    </head>
    <body>

    <style>

      table {
        margin:0;
        line-height: 5px;
      }

      th {
        font-size: 13px;
        padding-left: 20px;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 20px;
        text-align: left;
      }

      td {
        font-size: 12px;
      }

      h3 {
      text-align: center;
      padding-bottom: 20px;
      
      }



      tr:hover {background-color:#f5f5f5;}
    
    </style>


        <h3> DATA PEGAWAI NON ASN SAMSAT SUBANG </h3>
        <center>
        
            <table>    
            ';

            while($d = mysqli_fetch_array($data)){
             
                $html .= 
                '
                    <tr>
                        <th> Nama Pegawai </th> 
                        <td> : </td>     
                        <td>'.$d["nama_pegawai"].'</td>         
                    </tr>
                    <tr>
                        <th> Tempat, tanggal lahir </th> 
                        <td> : </td>     
                        <td>'.$d["ttl"].'</td>         
                    </tr>
                    <tr>
                        <th> Jenis Kelamin </th> 
                        <td> : </td>     
                        <td>'.$d["jk"].'</td>         
                    </tr>
                    <tr>
                        <th> Jabatan </th> 
                        <td> : </td>     
                        <td>'.$d["jabatan"].'</td>         
                    </tr>
                    <tr>
                        <th> Status </th> 
                        <td> : </td>     
                        <td>'.$d["status"].'</td>         
                    </tr>
                    <tr>
                        <th> Jumlah Anak </th> 
                        <td> : </td>     
                        <td>'.$d["jumlah_anak"].'</td>         
                    </tr>
                    <tr>
                        <th> Nama Suami / Istri </th> 
                        <td> : </td>     
                        <td>'.$d["nama_pendamping"].'</td>         
                    </tr>
                    <tr>
                        <th> Pendidikan Terakhir </th> 
                        <td> : </td>     
                        <td>'.$d["pendidikan_terakhir"].'</td>         
                    </tr>
                    <tr>
                        <th> Nama PT / Sekolah </th> 
                        <td> : </td>     
                        <td>'.$d["nama_sekolah"].'</td>         
                    </tr>
                    <tr>
                        <th> Tahun Masuk </th> 
                        <td> : </td>     
                        <td>'.$d["tahun_masuk"].'</td>         
                    </tr>
                    <tr>
                        <th> Tahun Lulus </th> 
                        <td> : </td>     
                        <td>'.$d["tahun_lulus"].'</td>         
                    </tr>
                    <tr>
                        <th> No HP </th> 
                        <td> : </td>     
                        <td>'.$d["nope"].'</td>         
                    </tr>
                    <tr>
                        <th> Alamat </th> 
                        <td> : </td>     
                        <td>'.$d["alamat"].'</td>         
                    </tr>
                    <tr>
                        <th> Bukti Ijazah </th> 
                        <td> : </td>     
                        <td> <img src="../non_Asn/'. $d['gambar'] .'" width="250px" height="300px" alt="--">  </td>       
                    </tr>
            </table>
            ';
            }

        $html .= '</center>
    </body>

</html>
';
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-P']);
$mpdf->WriteHTML($html);
$mpdf->Output('kepegawaian-NonAsn.pdf', \Mpdf\Output\Destination::INLINE);

?>