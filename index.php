<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
    <style>
        .div {
            width: 200px;
            height: 170px;
            background-color: #EEE;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        numero 1: <br>
        <input type="number" name="n1" id="n1"> <br><br>
        numero 2: <br>
        <input type="number" name="n2" id="n2"> <br><br>
        <input type="submit" value="Acessar">
    </form>
    <div class="div">
    </div>
    <button>Ação</button>

    <script src="jquery.min.js"></script>
    <script>
        $(function() {
            $('form').bind('submit',function(e){
                e.preventDefault();

                var txt = $(this).serialize();
                console.log(txt);

                $.ajax({
                    type:'GET',
                    url:'ajax.php',
                    data:txt,
                    success:function(resultado){
                        $('.div').html('Resultado '+ resultado);
                    },
                    error:function(){
                        alert("ocorreu um erro");
                    }
                })
            })


            $('button').bind('click', function() {
              
                $('.div').load('teste.html');  
            })
        })
    </script>
</body>

</html>