<?php


include "config.php";

//Sample no akaun, HARDCODE.
$NoAkaun = '1000000002';


//Data Akaun
$sql = "SELECT * FROM Akaun WHERE ID = '$NoAkaun' ";
$result = $mysqli -> query($sql);
$Akaun = $result -> fetch_array(MYSQLI_ASSOC);

$nama_pemilik=$Akaun['NAMA_PEMILIK'];

//Data Akaun_Alamat
$sql = "SELECT * FROM Akaun_Alamat WHERE AKAUN_ID = '$NoAkaun' ";
$result = $mysqli -> query($sql);
$Alamat = $result -> fetch_array(MYSQLI_ASSOC);

// $baris_Address1= $Alamat['ALAMAT_BARIS1'];
// $baris_Address2= $Alamat['ALAMAT_BARIS2'];
// $baris_Address3= $Alamat['ALAMAT_BARIS3'];
// $daerah_Address= $Alamat['ALAMAT_BARIS4'];
// $poskod_pemilik=$Alamat['POSKOD'];

$baris_Address1= 'kkk';
$baris_Address2= '';
$baris_Address3= '';
$daerah_Address= 'kakjjshshshhsk';
$poskod_pemilik= '';



?>


<html>


    <head>
      <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <table border="1">

            <tr>
	          	<td style="width:10%">
	          		<img src="jata.png" style="width: 90px;height:90px">
	          	</td>
	            <td colspan='2' bgcolor="#DE3163" style="font-size:15px;">
			        <b>
			            KERAJAAN NEGERI PAHANG DARUL MAKMUR 
			        </b>
			        <br>
			    	<b>
	            		BILL CUKAI TANAH
	            	</b>
	            </td>
            
	            <td colspan='2' bgcolor="#DE3163" style="text-align:left; padding: 10px;"> 

			         <table  border='1' cellpadding="4" style="width:100%;height:100%;border: none;border-color: #DE3163;">
			            <tr  border='1' >
			                <td colspan='3' align="right" style="text-align:right;vertical-align:top;"><b>SALINAN PEMBAYAR</b></td>
			            </tr>
			            <tr  border='1'>
			                <td colspan='3' align="right"><b></b></td>
			            </tr>



			            <tr >
			                <td align="left"><b>DAERAH</b></td>
			                <td><b>08</b></td>
			                <td><b>Kuantan</b></td>
			            </tr>
			            <tr>
			                <td align="left"><b>TAHUN</b></td>
			                <td><b>2023</b></td>
			                <td><b></b></td>
			            </tr>
			            
			          </table>

            	</td>
            
            </tr>
            
            <tr style="text-align:left;">
            <td bgcolor="pink" style="vertical-align: top; padding:10px;"><b>NAMA <br> ALAMAT</b></td>
            <td colspan='2' style="vertical-align: top;padding:10px;" >
            	<b>
            	<?php 
   			
            	if($nama_pemilik!='')
            	{
            		echo $nama_pemilik;
            	} 
            	else
            	{
            		echo '';
            	}
				
            	?>
            	
            	<?php
    

            	if($baris_Address1!='')
            	{
	                ?>
	                <br>
	                <?php
                	echo $baris_Address1;
            	}
    			else 
    			{
    				echo '';
    			}
				
                
                if($baris_Address2!='')
                {
                	?>
	                <br>
	                <?php
                	echo $baris_Address2;
                }
                else
                {
                	echo '';
                }

                if($baris_Address3!='')
                {
                	?>
	                <br>
	                <?php
                	echo $baris_Address3;
                }
                else
                {
                	echo '';
                }


                if($poskod_pemilik!='')
                {
                	?>
	                <br>
	                <?php
                	echo $poskod_pemilik;
                }
                else
                {
                	echo '';
                }

            

                if($daerah_Address!='' && $poskod_pemilik!='')
                {
                	?>
	                &nbsp;
	                <?php
                	echo "ayam1"."". $daerah_Address;
                }
                else if($daerah_Address!='' && $poskod_pemilik='')
                {
                	?>
	                <br>
	                <?php

                	echo "ayam2"."".$daerah_Address;
                }
                else
                {
                	?>
	                <br>
	                <?php
                	echo "JJJJJ" ."".$daerah_Address;
                }


            	?>
       
                </b>


            </td>
            <td colspan='2'>
               <table border='1'>
                  <tr>
                      <td bgcolor="pink">NO K/P<br>Tarikh Cetak</td> 
                      <td>$KEGUNAAN</td>
                  </tr>
                  <tr>
                      <td colspan="2">
                          <img src="barcode.jpg" style="width: 80px; height: 60px">
                      </td>
                  </tr>
              </table>
            </td>
            </tr>
            
            <tr>
               <td bgcolor="#DE3163"><b>DAERAH</b></td>
               <td bgcolor="#DE3163"><b>MUKIM</b></td>
               <td bgcolor="#DE3163"><b>JENIS HAKMILIK</b></td>
               <td bgcolor="#DE3163"><b>NO. HAKMILIK</b></td>
               <td bgcolor="#DE3163"><b>NO LOT/PT</b></td>
            </tr>
            
            <tr>
               <td>$DAERAH</td>
               <td>$MUKIM</td>
               <td>$JENISHAKMILIK</td>
               <td>$NOHAKMILIK</td>
               <td>$NOLOTPT</td>
            </tr>
            
            <tr>
                <td bgcolor="pink">KELUASAN</td>
                <td>$KELUASAN</td>
                <td bgcolor="pink">KEGUNAAN</td>
                <td colspan="2">$KEGUNAAN</td>
             </tr>
            
             <tr>
                <td colspan="2" bgcolor="#DE3163"><b>PERKARA</b></td>
                <td bgcolor="#DE3163"><b>CUKAI</b></td>
                <td bgcolor="#DE3163"><b>ANSURAN</b></td>
                <td bgcolor="#DE3163"><b>JUMLAH</b></td>
             </tr>

             <tr>
                <td colspan="2" bgcolor="pink">
                  <p>
                    CUKAI<br>
                    REMISYEN<br>
                    HAPUSAN(KREDIT)<br>
                    TUNGGAKAN CUKAI<br>
                    DENDA LEWAT<br>
                    NOTIS 6A<br>
                    KUTIPAN LEBIH/KURANG<br>
                  </p>
                </td>
                <td>$KELUASAN</td>
                <td>$KEGUNAAN</td>
                <td>$KEGUNAAN</td>
             </tr>

             <tr>
                <td colspan="2" bgcolor="pink">JUMLAH</td>
                <td>$KELUASAN</td>
                <td>$KEGUNAAN</td>
                <td>$KEGUNAAN</td>
             </tr>

             <tr>
                <td colspan="5" bgcolor="#DE3163">JUMLAH BAYARAN DIKENAKAN</td>
             </tr>
            
             <tr>
                <td bgcolor="pink">JUMLAH DENDA NOTIS 6A</td>
                <td>$KEGUNAAN</td>
                <td colspan='2' bgcolor="pink">
                    SEBELUM ATAU PADA 31HB MEI<br>
                    PADA ATAU SELEPAS 1HB JUN<br>
                    JIKA NOTIS 6A DISAMPAIKAN
                </td>
                <td>$KEGUNAAN</td>
             </tr>
            
             <tr>
                <td colspan='5'>
                  <p class="one">
                    1.KETIKA HENDAK MEMBAYAR CUKAI SILA RUJUK BIL INI.<br>
                    2.SILA JELASKAN CUKAI TANAH SEBELUM 31HB MEI DENDA LEWAT AKAN DIKENAKAN SELEPAS TARIKH ITU<br>
                    3.JIKA TELAH MENJELASKAN BAYARAN, SILA ABAIKAN INI
                  </p>
                  </td>
             </tr>

             <tr>
               <td colspan='2' bgcolor="pink">
                 <p>CAP AKAUN TERIMA WANG</p>
                 <img class="arw" src="arrow.png">
               </td>
               <td colspan='3'></td>
             </tr>

             <tr>
                <td bgcolor="pink">
                    SALINAN PEJABAT<br>
                    DAERAH<br>
                    TAHUN
                </td>
                <td>..</td>
                <td colspan='3'></td>
             </tr>

             <tr>
                <td bgcolor="#DE3163">DAERAH</td>
                <td bgcolor="#DE3163">MUKIM</td>
                <td bgcolor="#DE3163">JENIS HAKMILIK</td>
                <td bgcolor="#DE3163">NO. HAKMILIK</td>
                <td bgcolor="#DE3163">NO. LOT/PLOT/PT</td>
             </tr>

             <tr>
                <td>$KEGUNAAN</td>
                <td>$KEGUNAAN</td>
                <td>$KEGUNAAN</td>
                <td>$KEGUNAAN</td>
                <td>$KEGUNAAN</td>
             </tr>

             <tr>
                <td bgcolor="pink">NAMA ALAMAT</td>
                <td colspan='2'>..</td>
                <td colspan='2'>
                  <table border='1'>
                     <tr>
                         <td bgcolor="pink">NO K/P<br>Tarikh Cetak</td> 
                         <td>$KEGUNAAN</td>
                     </tr>
                     <tr>
                         <td colspan="2">
                             <img src="barcode.jpg" style="width: 80px; height: 60px">
                         </td>
                     </tr>
                 </table>
                 
              </td>
             </tr>

             <tr>
               <td bgcolor="pink">KELUASAN</td>
               <td></td>
               <td bgcolor="pink">KEGUNAAN</td>
               <td colspan='2'></td>
             </tr>

             <tr>
               <td colspan='2' bgcolor="#DE3163">PERKARA</td>
               <td bgcolor="#DE3163">CUKAI</td>
               <td bgcolor="#DE3163">ANSURAN</td>
               <td bgcolor="#DE3163">JUMLAH</td>
             </tr>

             <tr>
               <td colspan='2' bgcolor="pink">
               <p>
                  CUKAI<br>
                  REMISYEN<br>
                  HAPUSAN (KREDIT)<br>
                  TUNGGAKAN CUKAI<br>
                  DENDA LEWAT<br>
                  NOTIS 6A<br>
                  KUTIPAN LEBIH/KURANG
               </p>
               </td>
               <td>$</td>
               <td>$</td>
               <td>$</td>
             </tr>

             <tr>
               <td colspan='2' bgcolor="pink"><p>JUMLAH</p></td>
               <td>$</td>
               <td>$</td>
               <td>$</td>
             </tr>
            </table>        
    </body>

</html>


