<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Discos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    @if(session()->has('mensagem'))
        <div class="alert alert-success">
            {{ session()->get('mensagem') }}
        </div>
    @endif
<div class="container pt-5">
        <form action="/discos" method="post" enctype="multipart/form-data">
            @csrf 
        <div class="form-group">
            <label for="tipo">Título</label>
            <select name="tipo" class="form-control">
                <option value="album">Álbum</option>
                <option value="trilha novela">Trilha Novela</option>
                <option value="trilha filme">Trilha Filme</option>
                <option value="coletania">Coletânea</option>
                <option value="hits">Hits</option>
                <option value="outro">Outro</option>
            </select>
        </div>
        <div class="form-group">
                <label for="artista">Artista</label>
                <input name="artista" placeholder="Digite o(s) nome(s) dos Artista(s)" class="form-control" rows="5"></input>
        </div>
        <div class="form-group">
            <label for="vinil">Quantidade de discos</label>
            <select name="vinil" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
        </div>
        <div class="form-group">
                <label for="titulo">Titulo ou Álbum</label>
                <input name="titulo" placeholder="Digite o titulo ou o álbum" class="form-control"></input>
        </div>
        <div class="form-group">
                <label for="ano">Ano de Lançamento</label>
                <input name="ano" placeholder="Digite o ano de lançamento" class="form-control" rows="5"></input>
        </div>
        <div class="form-group">
                <label for="genero">Gênero</label>
                <input name="genero" placeholder="Digite o gênero" class="form-control" rows="5"></input>
        </div>
        <div class="form-group">
                <label for="selo">Selo</label>
                <input name="selo" placeholder="Digite o selo" class="form-control" rows="5"></input>
        </div>
        <div class="form-group">
            <label for="tamanho">Tamanho do disco (em Polegadas)</label>
            <select name="tamanho" class="form-control">
                <option value="12">12</option>
                <option value="10">10</option>
                <option value="7">7</option>
            </select>
        </div>
        <div class="form-group">
            <label for="rotacoes">Rotação do discos (RPM)</label>
            <select name="rotacoes" class="form-control">
                <option value="33">33</option>
                <option value="45">45</option>
                <option value="78">78</option>
            </select>
        </div>
        <div class="form-group">
                <label for="especificacao">Especificação</label>
                <textarea name="especificacao" placeholder="Digite as especificações do disco" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="condisco">Condições do Disco</label>
            <select name="condisco" class="form-control">
                <option value="novo">Novo</option>
                <option value="pouco riscado">Pouco Riscado</option>
                <option value="muito riscado">Muito Riscado</option>
                <option value="quebrado">Quebrado</option>
            </select>
        </div>
        <div class="form-group">
            <label for="concapa">Condições da Capa</label>
            <select name="concapa" class="form-control">
                <option value="nova">Nova</option>
                <option value="boa">Boa</option>
                <option value="ruim">Ruim</option>
                <option value="pessima">Pessima</option>
                <option value="sem capa">Sem Capa</option>
            </select>
        </div>
        <div class="form-group">
                <label for="especestado">Especificação do Estado</label>
                <textarea name="especestado" placeholder="Digite as especificações do estado do disco" class="form-control" rows="5"></textarea>
        </div>
        <div class="form-group">
            <label for="estante">Estante</label>
            <select name="estante" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
            <label for="nicho">Nicho</label>
            <select name="nicho" class="form-control">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
        </div>
        
<!-- 

            <div class="form-group">
                <label for="data_publicacao">Data da Publicação</label>
                <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR">

            </div>

            <button type="submit" class="btn btn-primary">Salvar</button>
            <a href="\noticias" class="btn btn-info">Voltar</a> -->

            </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</body>
</html>        



