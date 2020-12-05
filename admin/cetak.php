<?php

require_once __DIR__ . '../../vendor/autoload.php';

require '../koneksi.php';


$id = $_GET['id'];
$result=mysqli_query($conn, "SELECT * FROM pegawai where id=$id")or die('Error In Session');
$row=mysqli_fetch_array($result);


$no = 1;
$data =  mysqli_query($conn,"SELECT * FROM pegawai where id=$id");


$html = 
'
<html>
    <head>

    </head>
    <body>

    <style>

    table {
        margin:0;
        border: 0;
      }

      th {
        font-size: 13px;
        padding-left: 20px;
        padding-top: 15px;
        padding-bottom: 15px;
        padding-right: 40px;
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


        <h3> DATA PEGAWAI ASN SAMSAT SUBANG </h3>
        
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
                        <th> Golongan </th> 
                        <td> : </td>     
                        <td>'.$d["golongan"].'</td>         
                    </tr>
                    <tr>
                        <th> Jabatan </th> 
                        <td> : </td>     
                        <td>'.$d["tmt"].'</td>         
                    </tr>
                    <tr>
                        <th> TMT P3DW Subang </th> 
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
                        <td colspan="2" style="line-height:20px; padding-bottom:10px">'.$d["alamat"].'</td>         
                    </tr>


                    <tr>
                        <th> Karsu / Karis </th> 
                        <td> : </td>     
                        <td style="padding:10px"> <img src="../Asn/karsu/'. $d['karsu'] .'" width="230px" height="140px" alt="--"> </td>         
                        <td style="padding:10px"> <img src="../Asn/karis/'. $d['karis'] .'" width="230px" height="140px" alt="--"> </td>      
                    </tr>
                    <tr>
                        <th> Karpeg </th> 
                        <td> : </td>     
                        <td style="padding:10px"> <img src="../Asn/karpeg/'. $d['karpeg'] .'" width="230px" height="140px" alt="--"> </td>         
                    </tr>
                    <tr>
                        <th> SK - Terbaru </th> 
                        <td> : </td>     
                        <td style="padding:10px"> <img src="../Asn/sk-terbaru/'. $d['sk_terbaru'] .'" width="200px" height="280px" alt="--"> </td>
                        <td style="padding:10px"> <img src="../Asn/kgb/'. $d['kgb'] .'" width="200px" height="280px" alt="--"> </td>         
                    </tr>
                    <tr>
                        <th> KPE </th> 
                        <td> : </td>     
                        <td style="padding:10px"> <img src="../Asn/kpe/'. $d['kpe'] .'" width="230px" height="140px" alt="--"> </td>         
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
$mpdf->Output('kepegawaian.pdf', \Mpdf\Output\Destination::INLINE);

?>