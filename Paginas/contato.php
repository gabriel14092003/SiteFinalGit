
<h1> Entre em Contato </h1>
<form class="row g-3 needs-validation " novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Usuario </label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Cidade </label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estado</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Estado...</option>
      <option>AC</option>
      <option>AL</option>
      <option>AM</option>
      <option>AP</option>
      <option>BA</option>
      <option>CE</option>
      <option>DF</option>
      <option>ES</option>
      <option>GO</option>
      <option>MA</option>
      <option>MG</option>
      <option>MS</option>
      <option>MT</option>
      <option>PA</option>
      <option>PB</option>
      <option>PE</option>
      <option>PI</option>
      <option>PR</option>
      <option>RJ</option>
      <option>RO</option>
      <option>RS</option>
      <option>SC</option>
      <option>SE</option>
      <option>RN</option>
     <option>RN</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">Cep</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
      Concorde com os termos e condições
      </label>
      <div class="invalid-feedback">
      Você deve concordar antes de enviar.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar formulário</button>
  </div>
</form>