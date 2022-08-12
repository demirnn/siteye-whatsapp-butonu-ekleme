<!-- Site sol alttaki whatsapp butonu açılır pencereli


index.php sayfasında footer alanının içine aşşağıda vermiş olduğum kod yapıştırılacak alanları kendinize göre revize edebilirsiniz. -->
	


	<script>
		var url = 'DOSYA YOLU/ DİĞER EKTEKİ DOSYA-> / whatsappwidgets.js';
		var s = document.createElement('script');
		s.type = 'text/javascript';
s.async = true;
s.src = url;
var options = {
"enabled":true,
"chatButtonSetting":{
"backgroundColor":"#4dc247",
"ctaText":"",
"borderRadius":"25",
"marginLeft":"25",
"marginBottom":"25",
"marginRight":"50",
"position":"left"
},
"brandSetting":{
"brandName":"FİRMA ADI",
"brandSubTitle":"Online",
"brandImg":"FİRMALOGO.png",
"welcomeText":"Size nasıl yardımcı olabiliriz ? / How can we help you ?",
"messageText":"Merhaba, bilgi almak istiyorum. {{page_link}} ",
"backgroundColor":"#0a5f54",
"ctaText":"GÖRÜŞMEYİ BAŞLAT",
"borderRadius":"25",
"autoShow":false,
"phoneNumber":"+908502410227"
	}
			};
		s.onload = function() {
			CreateWhatsappChatWidget(options);
			};
		var x = document.getElementsByTagName('script')[0];
		x.parentNode.insertBefore(s, x);
	</script>
