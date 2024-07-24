<template>
  <div class="container">
    <form class="row g-3 needs-validation" novalidate>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Nome / Empresa</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom01"
          value=""
          placeholder="Ex:  StartGov"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>

      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">CPF/CNPJ</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom02"
          value=""
          placeholder="00.000.000/0001-00"
          required
        />
        <div class="valid-feedback">Looks good!</div>
      </div>

      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">E-mail</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input
            type="email"
            class="form-control"
            id="validationCustomUsername"
            aria-describedby="inputGroupPrepend"
            placeholder="exemplo@hotmail.com"
            required
          />
          <div class="invalid-feedback">Por favor informe um e-mail.</div>
        </div>
      </div>

      <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Cidade</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom03"
          placeholder="Ex: Imperatriz"
          required
        />
        <div class="invalid-feedback">Por favor informe uma cidade válida.</div>
      </div>

      <div class="col-md-3">
        <label for="validationCustom04" class="form-label">Estado</label>
        <select class="form-select" id="validationCustom04" required>
          <option selected disabled value="">Choose...</option>
          <option>Acre</option>
          <option>Alagoas</option>
          <option>Amapá</option>
          <option>Amazonas</option>
          <option>Bahia</option>
          <option>Ceará</option>
          <option>Distrito Federal</option>
          <option>Espírito Santo</option>
          <option>Goiás</option>
          <option>Maranhão</option>
          <option>Mato Grosso</option>
          <option>Mato Grosso do Sul</option>
          <option>Minas Gerais</option>
          <option>Pará</option>
          <option>Paraíba</option>
          <option>Paraná</option>
          <option>Pernambuco</option>
          <option>Piauí</option>
          <option>Rio de Janeiro</option>
          <option>Rio Grande do Norte</option>
          <option>Rio Grande do Sul</option>
          <option>Rondônia</option>
          <option>Roraima</option>
          <option>Santa Catarina</option>
          <option>São Paulo</option>
          <option>Sergipe</option>
          <option>Tocantins</option>
        </select>
        <div class="invalid-feedback">Por favor selecione um estado válido.</div>
      </div>

      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">CEP</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom05"
          placeholder="Ex: 65900-000"
          required
        />
        <div class="invalid-feedback">Por favor informe um CEP válido.</div>
      </div>

      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Endereço</label>
        <input
          type="text"
          class="form-control"
          id="validationCustom05"
          required
          placeholder="Rua & Número"
        />
        <div class="invalid-feedback">Por favor informe um CEP válido.</div>
      </div>

      <div class="col-md-3">
        <label for="validationCustom05" class="form-label">Contato</label>
        <input
          type="tel"
          class="form-control"
          id="validationCustom05"
          placeholder="(99) 9 9999-9999"
          required
        />
        <div class="invalid-feedback">Por favor informe um Contato válido.</div>
      </div>

      <div class="col-12">
        <button class="btn btn-primary" type="submit">Cadastrar</button>
      </div>
    </form>
  </div>
</template>

<script></script>

<style>
.container {
  padding: 20px;
  max-width: 90%;
  border-radius: 8px;
  background-color: #222;
}
</style>
