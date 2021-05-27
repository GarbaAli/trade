@component('mail::message')
Hello, {{$client->username}}

Welcome to  <span style="color:#3a53c5">CRYPTO.TRADER</span>BONUS

All transactions take place in the AUTOMATIC MODE. You are identified only by the WALLET ADDRESS on
the  purse from which the transfer is made to.

Send the amount to be invested to this address (<span style="color:#3db0b9">16Pt1hUVniDVoJU6mTcTgq9W1pRaA3ytDS or P98147610</span>) and multiply them 200% in just 50 hours

<hr>
Wallet Address : {{$client->adresse}} <br>
Amount : {{$client->montant}} <br>
Email : {{$client->email}}




Sincerely,  <span style="color:#3a53c5">CRYPTO.TRADER</span>BONUS
@endcomponent
