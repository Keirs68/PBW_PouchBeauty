<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey</title>
    <link rel="stylesheet" href="style/user/survey.css">
</head>
<body>
<div class="container">
    <div class="container-left">
      <h1><Texturina>Skin Check</Texturina></h1>
      <h2><Stylish>yuk kenali jenis kulitmu !
                      analisa kulit wajah untuk menemukan product skincare yang tepat untukmu</Stylish></p>
    </div>
    <p>1. Apa gender kamu?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO1" value="a">Pria</li>
      <li><input type="radio" name="NO1" value="b">Wanita</li>
      </i>  
    </div>
    <p>2. Berapa usia kamu?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO2" value="a">>17</li>
      <li><input type="radio" name="NO2" value="b">18 - 24 tahun</li>
      <li><input type="radio" name="NO2" value="a">25 - 34 tahun</li>
      <li><input type="radio" name="NO2" value="b">35 - 44 tahun</li>
      <li><input type="radio" name="NO2" value="b">45 - 54 tahun</li>
      <li><input type="radio" name="NO2" value="b">55 - 64 tahun</li>
      </i>  
    </div>
    <p>3. di pagi hari, ketika bangun tidur apakah daerah t-zone (jidat, hidung, dagu) anda berminyak?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO3" value="a">tidak berminyak></li>
      <li><input type="radio" name="NO3" value="b">ya , berminyak</li>
      <li><input type="radio" name="NO3" value="a">sangat berminyak</li>
      </i>  
    </div>
    <p>4. bagaimana dengan area pipi anda? apakah berminyak?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO4" value="a">tidak berminyak></li>
      <li><input type="radio" name="NO4" value="b">ya , berminyak</li>
      <li><input type="radio" name="NO4" value="a">sangat berminyak</li>
      </i>  
    </div>
    <p>5. setelah mencuci wajah, apakah wajah anda terasa kencang?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO5" value="a">Ya, Kencang dan tertarik></li>
      <li><input type="radio" name="NO5" value="b">tidak, merasa fresh</li>
      </i>  
    </div>
    <p>6. dalam kegiatan sehari-hari lebih sering berada di?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO6" value="a">di luar ruangan></li>
      <li><input type="radio" name="NO6" value="b">di dalam ruangan</li>
      <li><input type="radio" name="NO6" value="b">di dalam ruangan ber-AC</li>
      </i>  
    </div>

    <p>7. Apakah anda sedang mengkonsumsi obat dalam waktu yang lama?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO7" value="a">Ya></li>
      <li><input type="radio" name="NO7" value="b">Tidak</li>
      </i>  
    </div>
    <p>8. jika ya sedang mengkonsumsi obat apa?</p>
    <div class="container-right form input">
    <form>
            <input type="text"><br>
        </form> 
    </div>
    <p>9. istilah masalah kulit yang sedang anda alami : (boleh pilih lebih dari satu)</p>
    <div class="input type">
    <form action="survey.php" method="get">
      <p><input type='checkbox' name='bahasa1' value='kulit extra kering / mengelupas' />kulit extra kering / mengelupas</p>
      <p><input type='checkbox' name='bahasa2' value='sensitif / kemerahan' />sensitif / kemerahan</p>
      <p><input type='checkbox' name='bahasa3' value='kulit kasar' />kulit kasar</p>
      <p><input type='checkbox' name='bahasa1' value='kusam' />kusam</p>
      <p><input type='checkbox' name='bahasa2' value='jerawat' />jerawat</p>
      <p><input type='checkbox' name='bahasa3' value='jbekas jerawat / bopengsp' />bekas jerawat / bopeng</p>
      <p><input type='checkbox' name='bahasa1' value='flek / noda hitam' />flek / noda hitam</p>
      <p><input type='checkbox' name='bahasa2' value='pori-pori terbuka' />pori-pori terbuka</p>
      <p><input type='checkbox' name='bahasa3' value='garis halus' />garis halus</p>
      <p><input type='checkbox' name='bahasa1' value='kendur / kerutan' />kendur / kerutan</p>
      <p><input type='checkbox' name='bahasa2' value='kulit extra berminyak' />kulit extra berminyak</p>
      <p><input type='checkbox' name='bahasa3' value='eye bag / lingkar mata hitam' />eye bag / lingkar mata hitam</p>
      <p><input type='checkbox' name='bahasa1' value='rebound after cream racikan' />rebound after cream racikan</p>
      <p><input type='checkbox' name='bahasa2' value='kulit tidak merata / masalah pigmentasi' />kulit tidak merata / masalah pigmentasi</p>
</form> 
    </div>
    <p>10. seberapa sering kamu makan makanan berminyak dan junkfood perharinya? tulis di kolom dibawah</p>
    <div class="container-right form input">
    <form>
            <input type="text"><br>
        </form> 
    </div>
    <p>11. berapa lama rata-rata lamu tidur dalam sehari?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO6" value="a">kurang dari 6 jam></li>
      <li><input type="radio" name="NO6" value="b">6 - 8 jam sehari</li>
      <li><input type="radio" name="NO6" value="b">8 jam lebih</li>
      </i>  
    </div>
    <p>12. permasalahan kulit yang ingin kamu atasi saat ini? : (boleh pilih lebih dari satu)</p>
    <div class="input type">
    <form action="survey.php" method="get">
      <p><input type='checkbox' name='bahasa1' value='mengatasi jerawat' />mengatasi jerawat</p>
      <p><input type='checkbox' name='bahasa2' value='smenghilangkan bekas jerawat' />menghilangkan bekas jerawat</p>
      <p><input type='checkbox' name='bahasa3' value='menerahkan kulit' />menerahkan kulit</p>
      <p><input type='checkbox' name='bahasa1' value='proteksi sinar matahari' />proteksi sinar matahari</p>
      <p><input type='checkbox' name='bahasa2' value='melawan penuaan kulit' />melawan penuaan kulit</p>
      <p><input type='checkbox' name='bahasa3' value='kulit kusam' />kulit kusam</p>
      <p><input type='checkbox' name='bahasa1' value='kulit kering' />kulit kering</p>
      <p><input type='checkbox' name='bahasa2' value='menghilangkan komedo />menghilangkan komedo</p>
      <p><input type='checkbox' name='bahasa3' value='memperbaiki tekstur kulit' />memperbaiki tekstur kulit</p>
      <p><input type='checkbox' name='bahasa1' value='mengatasi kerutan' />mengatasi kerutan</p>
      <p><input type='checkbox' name='bahasa2' value='kulit berminyak' />kulit berminyak</p>
      <p><input type='checkbox' name='bahasa3' value='menghilangkan mata panda' />menghilangkan mata panda</p>
</form> 
    </div>
    <p>13. berapa anggaran skincare yang ingin kamu sediakan setiap bulan?</p>
    <div class="teks">
    <i>
      <li><input type="radio" name="NO2" value="a">kurang dari rp.100.1000</li>
      <li><input type="radio" name="NO2" value="b">rp.100.000 - rp.200.000</li>
      <li><input type="radio" name="NO2" value="a">rp.200.000 - rp.300.000</li>
      <li><input type="radio" name="NO2" value="b">rp.300.000 - rp.500.000</li>
      <li><input type="radio" name="NO2" value="b">lebih dari rp.500.000</li>
      </i>  
    </div>
    <p>14. foto pipi kanan, pipi kiri dan sekuruh wajah kamu ya</p>
    <form action ="upload_file.php" metode="post" enctype="multipart/form-data">
<label for="file"> Filename: </label>
<input type="file" name="file" id="file" />
<br />
</form> 
      <div class="container-right form button">
      <center><button type="submit">NEXT</button></center>
        </div>
  </div>
    
</body>
</html>