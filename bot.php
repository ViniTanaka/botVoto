<?php
    $nome = trim($_POST['nome']);
    // $url = substr($_POST['url'], 0, -8);
    $url = substr("https://docs.google.com/forms/d/e/1FAIpQLSd5uEdhoTqtd1y6K-QIByRf325M5MCP3GLSaoF3VeJo3MFVRw/viewform",0,-8);
    $url = $url.'formResponse';
    $votos = $_POST['qtdVotos'];
    $data ='entry.244511147=Teste'; // valor a ser votado no form
for($i=0;$i<$votos; $i++){

    $ch = curl_init(); //init curl para acesso a url
    // $data = $nome;
    curl_setopt($ch, CURLOPT_URL, $url); // link da url do site
    curl_setopt($ch, CURLOPT_POST, true); // set um post
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // seta os campos do form
    curl_exec($ch); //retorno
    curl_close($ch); //fecha e libera sist
}
header("location:index.php");
?>