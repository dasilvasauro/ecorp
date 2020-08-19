<!-- junte-se a nós 
  SITE CRIADO SOMENTE PARA FINS DE ESTUDO-->
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="padding: 20px; background-color: black;">
      <li class="breadcrumb-item"><a href="?i=home"  style="color: white;">Sobre a E-Corp</a></li>
      <li class="breadcrumb-item active" aria-current="page">Junte-se a Nós</li>
    </ol>
  </nav>
  <!--body-->
  <div class="container-fluid" style="margin-top: 80px">
    <div class="jumbotron">
      <h1 class="display-4">Junte-se a Nós</h1>
      <p class="lead">Se possui interesse em se integrar a maior corporação do mundo, por favor não hesite em inserir seu e-mail no campo abaixo para que fiquemos sabendo!</p>
      <hr class="my-4">
      <p>Após o envio, devemos retornar o mais rápido possível.</p>
    </div>

    <form id="formJunte" data-toggle="validator" role="form">
      <div class="form-group">
        <label for="inputEmail">Endereço de E-mail:</label>
        <input type="email" class="form-control" id="email1" placeholder="nome@exemplo.com" data-error="Por favor, informe um e-mail correto." required>
        <div class="help-block with-errors" style="color: red;"></div>
      </div>
      <div class="form-group">
        <label for="selectSolicit">Selecione a Natureza da Solicitação:</label>
        <select class="form-control" id="formc1">
          <option>Orçamentária</option>
          <option>Business</option>
          <option>Imprensa</option>
          <option>Estudantil</option>
          <option>Midiática</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="textMsg">Deixe-nos uma mensagem explicando o seu interesse na E-Corp:</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
      </div>
      <button type="submit" class="btn btn-outline-dark">Enviar Solicitação</button>
    </form>

    <hr/>
  </div>

