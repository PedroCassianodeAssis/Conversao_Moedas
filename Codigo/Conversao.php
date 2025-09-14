<html>
    <head> 
        <title> Conversao </title>
</head>
<style>
    body {
        background-color: #008000;
        font-size: 30px;
        font-family: "Times New Roman", Georgia, serif;
    }
    

    h1 {
        font-size: 35px;
        color: white;
    }

    img {
        margin-bottom: -40px;
    }

    button {
        background-color: blue;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 6PX;
        cursor: pointer;
        font-size: 16px;
        width: 200px;
    }

    button:hover {
        background-color: yellow;
        color: green;
    }

    .card {
	background-color: #e1fae5ff;
	border-radius: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
	padding: 20px;
	margin: 20px;
	width: 550px;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	text-align: center;
    color: black;
    }


    .card button{
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    background-color: blue;
    color: white;
    }
</style>
<body>
    <center>
        <h1> <b> CONVERSÃO DE MOEDA </b> </h1>
        <img src = "Imagens/paises" width = "350">
        <br> <br>
        <div class="card">

<?php
// Declarei as variaveis aqui
$valor = $_POST ["valor"]; // valor digitado pelo usuario
$de = $_POST ["de"]; // em qual moeda o valor foi digitado pelo usuario
$para = $_POST ["para"]; // em qual moeda será convertida

// valores das conversões
$taxa = [
    "reais" => [
        "euros"   => 5.25,
        "dolares"  => 4.88,
        "pesos"   => 0.020,
        "ienes"   => 0.035,
        "libras"  => 6.12,
    ],
    "euros" => [
        "reais" => 5.12,
        "dolares" => 0.93,
        "pesos" => 0.0038,
        "ienes" => 0.0067,
        "libras" => 0.20,
    ],
    "dolares" => [
        "reais" => 0.20,
        "euros" => 1.08,
        "pesos" => 0.0041,
        "ienes" => 0.0072,
        "libras" => 1.26,
    ],
    "pesos" => [
        "reais" => 50.21,
        "euros" => 263.27,
        "dolares" => 244.60,
        "ienes" => 1.75,
        "libras" => 307.10,
    ],
    "ienes" => [
        "reais" => 28.27,
        "euros" => 149.99,
        "dolares" => 139.41,
        "pesos" => 0.57,
        "libras" => 174.89,
    ],
    "libras" => [
        "reais" => 0.16,
        "euros" => 0.86,
        "dolares" => 0.80,
        "pesos" => 0.0033,
        "ienes" => 0.0057,
    ],
];

// simbolos das moedas

$simbolo = [
            "reais" => "R$",
            "euros" => "€",
            "dolares" => "US$",
            "pesos" => "AR$",
            "ienes" => "¥",
            "libras" => "£",
        ];


// logica da conversão
if($de==$para) {
    echo " As moedas escolhidas para a conversão são iguais, então o resultado da conversão é $valor $para";
} elseif($taxa[$de][$para]){
    $conv = $valor / $taxa[$de][$para]; // conversao dos valores
    $resu = number_format($conv, 2); // foramtação dos valores para dois numeros após a virgula

    echo $simbolo[$para] . " " . $resu ."<br><br>";
    echo strtoupper($de) ." -> " . strtoupper($para); 
    }
?>

<br> <br>
<a href = "Usuario.php"> <button> Voltar </button> </a>
</div>
</center>
</body>
</html>

