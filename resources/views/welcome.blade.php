<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
       body{
        background-color:  #f0f2f5;
       }
      .tela-01{
        background-color:#244c35 ;
        width: 1000%;  height:  14rem;
        text-align: center; margin-top: -9px;
      }
      img{
        width:12rem ; margin-top: 1pc;
      }
      .tela-02{
        background-color:  #ffffff; margin-top: -71px; height: 131px;
      }
      .tela-03{
        display: flex;
      }
      p{
        font-size: 21px;
      }
      .valorPrincipal{
        color: #ffffff;
      }
      svg{
        margin-left: auto; width: 52px; height: 3rem;  color: #5ed993;
      }
      .tela-05{
        margin-top: 37px;
      }
   .lte-02{
    margin-top:  5rem;

   }
   .paiBotao{
    text-align: end; margin-top: 18rem;
    margin-right: 4rem;
   }
   button{
    border-radius: 25rem;
    height: 4rem;
    background-color: #244c35;
    border: 1px solid #244c35;
   }
 
   .icone-02{
    color: #ffffff;
   }
   input{
    border: 1px solid white;
    width: 100%;
    font-size: 23px;
    color: #8a8d7b;
   }
   .modal-01{
    background-color: #f0f2f5;
   }
   .folte{
    border: 1px;
   }
  </style>
  <body>
  <nav class="navbar navb">
    <div class="tela-01 ">
    <img src="img\logo.png" alt="">
  
    </div>
    <div class="container-fluid">
    <div class="container text-center">
  <div class="row">
    <div class="col tela-02">
      <div class="g-col-4 mt-3 tela-03" > <p >Entradas</p> <svg xmlns="http://www.w3.org/2000/svg"  width="16"  height="16" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
</svg> </div>
  <div class="g-col-4" ><h2>+ R$ 2.273,31</h2></div>
    </div>
    <div class="col " style="background-color: #ffffff; margin-top: -71px;
    height: 131px; margin-left: 3rem;
    margin-right: 3rem;">
     <div class="g-col-4 mt-3" style="display: flex;">  <p >Saidas</p><svg xmlns="http://www.w3.org/2000/svg" width="16" style="margin-left: auto; width: 52px;
    height: 3rem; color: #eb516c;" height="16" fill="currentColor" class="bi bi-arrow-down-circle" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V4.5z"/>
</svg></div>
  <div class="g-col-4" ><h2>- R$ 10.273,31</h2></div>
    </div>
    <div class="col"  style="background-color: #e93d5b; margin-top: -71px;
    height: 131px;">
     <div class="g-col-4 mt-3" style=" display: flex;">  <p>Total</p><svg xmlns="http://www.w3.org/2000/svg" style="margin-left: auto; width: 52px;
    height: 3rem; color: white;
"  width="16" height="16" fill="currentColor" class="bi bi-currency-dollar" viewBox="0 0 16 16">
  <path d="M4 10.781c.148 1.667 1.513 2.85 3.591 3.003V15h1.043v-1.216c2.27-.179 3.678-1.438 3.678-3.3 0-1.59-.947-2.51-2.956-3.028l-.722-.187V3.467c1.122.11 1.879.714 2.07 1.616h1.47c-.166-1.6-1.54-2.748-3.54-2.875V1H7.591v1.233c-1.939.23-3.27 1.472-3.27 3.156 0 1.454.966 2.483 2.661 2.917l.61.162v4.031c-1.149-.17-1.94-.8-2.131-1.718H4zm3.391-3.836c-1.043-.263-1.6-.825-1.6-1.616 0-.944.704-1.641 1.8-1.828v3.495l-.2-.05zm1.591 1.872c1.287.323 1.852.859 1.852 1.769 0 1.097-.826 1.828-2.2 1.939V8.73l.348.086z"/>
</svg></div>
  <div class="g-col-4" ><h2 class="valorPrincipal">- R$ 7.973,31</h2></div>
    </div>
  </div>
</div>
</div>
   

<div class="container lte-02">
<div class="container text-center">
  <div class="row">
  <table class="table table-bordered">
  <thead>
    <tr style="background-color: #ffffff;">
    
      <th scope="col">Descricao</th>
      <th scope="col">Valor</th>
      <th scope="col">Data</th>
      <th scope="col"></th>
    </tr>
  </thead>
</table>
  </div>
</div>
  </div>
</nav>
<div class="paiBotao">
  <!--Button trigger modal -->
  <button data-bs-toggle="modal" data-bs-target="#exampleModal">
  <svg class="icone-02" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg>
  </button>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " >
    <div class="modal-content modal-01" > 
      <div class="modal-header folte">
        <h1 class="modal-title fs-5" id="exampleModalLabel" > Nova Transacao</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="#">
        <input type="text"   placeholder="  Descricao" required>
        <input type="text"  class="mt-4" placeholder="  0,00" required>  
         <p style="color: #d4d6d9; " class="mt-2">Use o sinal- (negativo) para despesas e, <br>
         (virgula) para cosas decimais</p>
         <input type="date" class="mt-1"  name="  festa" min=" 2017- 04- 01" max=" 2017-04-30" required>
      
      </div>
      <div class="modal-footer folte">
      <button type="button" style="    border: 2px solid red; color: #e93d5b;" class="btn btn-outline-primary" data-bs-dismiss="modal" disabled >Primary button</button>
 
        <button  type="submit" class="btn btn-success">Salvar produtor</button>
        </form>
      </div>
    </div>
  </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>