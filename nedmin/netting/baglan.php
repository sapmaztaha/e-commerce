<?php 

try {
	$db = new PDO("mysql:host=localhost; 
		dbname=eticaret;
		charset=utf8",
		'root',
		'');
		
/* Veritabanı Bağlantı Parametre Sırası
host = veritanabının bulunduğu server
dbname = database adı
charset = türkçe karakterde sıkıntı çıkarmaması için
root ve '' = kullanıcı adı ve parola

uzak bir sunucuya bağlantı sağlanıcaksa host kısmına ip adresi atanabilir
*/



	// echo "Veri Tabanı Bağlantısı Başarılı"; //= veritabanı bağlantısının başarılı olup olmadığını anlamak için yazdım ekranda çıktı veriyorsa bağlantı başarılı demektir

} catch (PDOException $e) {
	
	echo $e->getMessage();

	//echo "Veri Tabanı Bağlantısı Gerçekleştirilemedi ".$e->getMessage();
}

// Sonraki yapıtığım projelerde veri tabanı bağlantısı olarak burayı kopyalayıp kullanabiliriz


 ?>