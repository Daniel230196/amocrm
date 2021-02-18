<?php
/*$data = [
    'client_id' => 'd3092927-ecf8-4ef4-87d9-4805577d5c5d',
    'client_secret' => '6UcJf9oYJUpTXV5puL7wyUZfMUcOvWt3OEzXMFEpZlsgN9zfyi5OYcm9QY2synSE',
    'grant_type' => 'authorization_code',
    'code' => 'def502003b7663a52b7d8a43b1a2f67be288c9f9137fc03f46aef8162a82ebf825ef643edc34af562ae53b308a6caffef84126245c6c486c8cda41dc6d119d986bb373d72f18b8c5e345aa406556b07e70faa48e4c8b55cb9c92b304614957db7a403570a4e2f575c3be7fb8574d6d37797fcb7010f68ce383ace288c50e5eb67aed7833f66b3ffcd264534332be8f777412527f6fe019895081e5ebb7412faf41e0f41b023edcba35432d18b0e49bf1a307a823ce5be16f279a98dec785169d4d7ed34cfdb97f94da32523132a27d5bce6590f67f2202ec0d16637682b2c98fde1a3a76d05507b440a2a29d0ddd7b5bf25f34a7aba7514954cfec49cddcc95c4c4e4d7500b26402fef5e821f2e3b57c4951652e2b392d6bf3379690104f9a75dc4156608ba9d7e85ce9aa653dad6234ac5632588c40b61305264614b6382aa04f2cdc5ab868a2986a60dc9ef3f792d3d2a2ba728a2f8312752a0e2111e8e18da1e2a7681e81b14f7a0d8b9855f3603a659c3294634f34a7db6fb78575b38b7ef17008a5181d574d698b365b24120b130a54ca7cb933967a667f9b2359519151222dd3c4e23bfd32086775936d9c825bcdfa68042b2fe6f854bdaeb0',
    'redirect_uri' => "https://google.com"
];
$link = 'https://dann70s.amocrm.ru/oauth2/access_token';

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-oAuth-client/1.0');
curl_setopt($curl, CURLOPT_URL, $link);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,2);



$response = curl_exec($curl);
$responseCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
$response = json_decode($response,true);
echo "</br>".$response['access_token']."</br>";
echo "</br>".$response['refresh_token']."</br>";
curl_close($curl);*/

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2> Create entity </h2>
<form action="leads/add">
    <h4> Add Offer </h4>

        <label for="name"> Company Name </label>
        <input type="text" name="companies[name]">
        <p>Offer</p>
        <label for="leads[name]"> Name </label>
        <input type="text" name="leads[name]">
        <label for="leads[price]"> Price </label>
        <input type="number" name="leads[price]">
        <label for="count">Count (0 - 10000)</label>
        <input type="number" name="count">
        <input type="submit">
</form>
<form action="company/add">
    <h4>Add Company</h4>
    <label for="name"> Company Name </label>
    <input type="text" name="companies[name]">
</form>
<form action="contacts/add">
    <h4>Add contacts</h4>
    <label for=""> First Name </label>
    <input type="text" name="name">
    <label for="phone"> Phone </label>
    <input type="text" name="phone">
    <label for=""> Email </label>
    <input type="text" name="email">
    <label for="entity">Bind Entity</label>
    <select name="entity">
    <option value="company">company</option>
    <option value="customer">customer</option>
    </select>
    <label for="company">ID</label>
    <input type="number" name="company">
    <label for="count">Count (0 - 10000)</label>
    <input type="number" name="count">
    <input type="submit">
</form>

<form action="">
    <h4>Add "text" field</h4>
    <label for="text">Text</label>
    <input type="text" name="text">
    <label for="id">EntityID</label>
    <input type="number">
    <input type="submit">
</form>
<script>

</script>
</body>
</html>
<?php

var_dump($_GET);
$curl = curl_init();
$link = 'https://dann70s.amocrm.ru/api/v4/leads';
$method = 'POST';
$headers = ['Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImM0NmNiM2FhNDA0NjVjN2JiMmU1NzgzNDllNWFhNTMxNmRmYzRmMDVkZjVhMWE1ODlhZGVhZWVlMmVhZmJjY2ZlZWViNDc3MjFlMmY2N2FhIn0.eyJhdWQiOiJkMzA5MjkyNy1lY2Y4LTRlZjQtODdkOS00ODA1NTc3ZDVjNWQiLCJqdGkiOiJjNDZjYjNhYTQwNDY1YzdiYjJlNTc4MzQ5ZTVhYTUzMTZkZmM0ZjA1ZGY1YTFhNTg5YWRlYWVlZTJlYWZiY2NmZWVlYjQ3NzIxZTJmNjdhYSIsImlhdCI6MTYxMzY0NzcwOCwibmJmIjoxNjEzNjQ3NzA4LCJleHAiOjE2MTM3MzQxMDgsInN1YiI6IjY3NjEwMTQiLCJhY2NvdW50X2lkIjoyOTMwMjM3NSwic2NvcGVzIjpbInB1c2hfbm90aWZpY2F0aW9ucyIsImNybSIsIm5vdGlmaWNhdGlvbnMiXX0.WJF59xABYn6eSHyNr49imumDFoLm6xmifvEnY-piYpeJZXr3sfCBWjFfSHrHgIP9SrqhkYt4T3HA74TjZqfMLl59l8c8bLM27TOR-G1-ITM2TYEaztTSvD_nONMHLIEzdLFKaZjBHxj3GH-yxyk4JxUXm-u38-8R118C_mxjY_vKx3K3isTz1JhuABxyS6Bp7i9yId1dQYA9zBCB4618fo7MPCEad_iClHqApfP3KSX8W8LBcj8RcEnAS363ZTSiXwTwi_l5y7kB6_tYfyoGb9xXe0XNslcUOTkNyXv53h5h2xmIj8N9cVtlij03hPNShf2WCYVbV7Lq2Hw7pUo6Sg'];
$data = [['name' => 'offetttt', 'price' => 1245], ['name' => 'ffffff', 'price' => 111111]];

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-oAuth-client/1.0');
curl_setopt($curl, CURLOPT_URL, 'https://dann70s.amocrm.ru/api/v4/companies/2546937/links');
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
$out = curl_exec($curl);
$code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

var_dump($out);
?>