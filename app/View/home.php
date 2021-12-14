<?php

//$id = filter_input(INPUT_POST, 'id' , FILTER_VALIDATE_INT);
//$valor = filter_input(INPUT_POST, 'valor' , FILTER_VALIDATE_FLOAT);
//$descricao = filter_input(INPUT_POST, 'descricao' , FILTER_VALIDATE_STRING);
//$data = filter_input(INPUT_POST, 'data');

//$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);


if(isset($name))

{
    $name = $_POST['data'];
    echo $name;
    $file = fopen("comment.html", "a");
    fwrite($file, $name);
    fclose($file);

    var_dump($name);
}




//if (!action){
    
//}



?>




<script src="jquery-3.6.0.min.js"> </script>
   <main class="container">
        <section id="balance">
            <h2 class="sr-only">Balanço </h2>
            <div class="card">
                <h3>
                    Entradas 
                    <img src="./assets/income.svg" alt="Imagem de entradas">
                </h3>
                <p id="incomeDisplay">R$ 0,00</p>
            </div>

            <div class="card">
                <h3>
                    <span>
                        Saídas
                    </span>
                    <img src="./assets/expense.svg" alt="Imagem de saídas">
                </h3>
                <p id="expenseDisplay">R$ 0,00</p>
            </div>

            <div class="card total">
                <h3>
                    <span>
                        Total
                    </span>
                    <img src="./assets/total.svg" alt="Imagem de total">
                </h3>
                <p id="totalDisplay">R$ 0,00</p>
            </div>
        </section>
        <section id="transaction">
            <h2 class="sr-only">Transações</h2>

            <a href="#" 
            onclick="Modal.open()"
            class="button new">+ Nova transação</a>
            
           
            
            <table id="data-table">
                <thead>
                    <tr>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Data</th>
                        <th></th>
                </thead>
                <tbody>
           
                </tbody>
            </table>
            
        </section>
       
       <section>
           <h1>Transacoes tesntando home.php:</h1>
           
           {% for transacoes in transacoes %}
           
               <p>{{transacoes.descricao}}</p>
               <p>{{transacoes.valor}}</p>
               <p>{{transacoes.data}}</p>

           {% endfor %}
       </section>
       
       
       
       
    </main>

    <div class="modal-overlay">
        <div class="modal">
            <div id="form">
                <h2>Nova Transação</h2>
                <form action="" onsubmit="Form.submit(event)">
                    <div class = "input-group">
                        <label class="sr-only" for="description">Descrição</label>
                        <input type="text" id="description" name="description" placeholder="Descrição">
                    </div>
                    
                    <div class = "input-group">
                        <label class="sr-only" for="amount">Valor</label>
                        <input type="number" step="0.01" id="amount" name="amount" placeholder="0,00">
                        <small class="help">Use o sinal - (negativo) para despesas e , (vírgula) para casas decimais</small>

                    </div>

                    <div class = "input-group">
                        <label class="sr-only" for="date">Data</label>
                        <input type="date" id="date" name="date">
                    </div>
                    <div class ="input-group actions">
                         <a onclick="Modal.close()" href="#" class="button cancel">Cancelar</a>
                         <button>Salvar</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>
    




