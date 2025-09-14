<html>
<head>
    <title> Usuario </title>
</head>
<style>
    body {
        background-color: #008000;
        color: white;
        font-family: "Times New Roman", Georgia, serif;
    }

    label {
        font-size: 30px;
        color: black;
    }

    input {
        font-size: 35px;
    }

    h1 {
        font-size: 35px;
    }

    input[type="submit"]  {
                  background-color: blue;
                  color: white;
                  padding: 10px 20px;
                  border: none;
                  border-radius: 6px;
                  cursor: pointer;
                  font-size: 16px;
                  width: 250px;
                                     }

    input[type="submit"]:hover {
                 background-color: green;
                 color: white;
                 width: 270px;
                 padding: 12px 22px;
                 cursor: pointer;
                 transition: background-color 0.3s ease, transform 0.2s ease;

                                          }

    input[type= "number"] {
                 border-radius: 8px;
    }

    img {
        margin-bottom: -20px;
    }

    select{
        font-size: 18px;
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
    }


    .card button{
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    background-color: blue;
    color: white;
    }



</style>
<center>
<h1> <b> CONVERSÃO DE MOEDA </b> </h1>
 

<body>

    <img src="Imagens/paises" width="350">
<div class="card">
<form action="Conversao.php" method="post">

    
    <label for="valor"> Valor: </label> <br> <br>
    <input type="number" id="valor" name="valor" required>
    <br> <br> <br>

    <label for="de"> De:  </label>
    <select id="de" name="de"> 
    <option value="reais"> Real </option>
    <option value="euros"> Euro </option>
    <option value="dolares"> Dolar (EUA) </option>
    <option value="pesos"> Peso (ARG) </option>
    <option value="ienes"> Iene </option>
    <option value="libras"> Libra Esterlina </option>
    </select> 

    &nbsp; &nbsp; &nbsp; &nbsp;  

    <label for="para"> Para:  </label>
    <select id="para" name="para">        
    <option value="reais"> Real </option>
    <option value="euros"> Euro </option>
    <option value="dolares"> Dolar (EUA) </option>
    <option value="pesos"> Peso (ARG) </option>
    <option value="ienes"> Iene </option>
    <option value="libras"> Libra Esterlina </option>
    </select>
    <br> <br> <br>

    <input type="submit" value="Enviar">

</form>
</center>
</div>
    <?php            
    ?>
</body>
</html>