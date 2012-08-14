#README (o anche LEGGIMI)

##Cos' è PhpMailer?
**PhpMailer** è una **classe PHP** ideata per semplificare l' **invio delle email** con il linguaggio stesso.
PhpMailer è composto da una classe che possiede un metodo principale chiamato *send* con il quale è possible inviare facilmente email.
PHPMailer **validerà** automaticamente le email del mittente e del destinatario e in caso di errore l' email non verrà inviata.

##Utilizzare PhpMailer
Usare PhpMailer è semplicissimo, basterà creare un istanza dell' oggetto (oooo... che ho detto? tranquillo è semplicissimo) e usare il metodo send con i vari parametri per inviare l' email.

 >$obj1 = new phpMailer('explosivedynamicwork@gmail.com', 'cOZZY World', "Ahaahahah. Beh che vuoi? questo dovrebbe essere il messaggio e lo sto allungando parecchio almeno vedo se mi taglia le righe xD ...vediamo \n se gli\n fun \n zionano. :)",'carroburro19@libero.it');
