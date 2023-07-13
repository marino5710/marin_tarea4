<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario Dinámico</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>
.btn-add-highlight {
  background-color: lightsalmon;
}

.delete-btn {
      margin-top: 10px;
}
</style>

<body>
  <div class="container-fluid bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="container py-5 bg-secondary rounded">
      <h1 class="text-center text-light mb-4">Formulario Dinámico</h1>
      <form action="" id="frmUsers">
        <div class="mb-3 d-flex justify-content-center text-center align-items-center">
          <p class="text-center text-light" id="parrafo">Para agregar sus datos, presione el botón "Más".</p>
        </div>
        <div id="inputContainer"></div>
        <div class="mb-3 text-center">
          <button id="btnAdd" type="button" class="btn btn-primary">
            <span class="fa fa-plus"></span>
            <span>Más</span>
          </button>
        </div>
        <div class="mb-3 text-center">
          <button id="btnSave" type="button" class="btn btn-success">
            <span class="fa fa-save"></span>
            <span>Guardar</span>
          </button>
        </div>
      </form>
    </div>
  </div>


  <script src="script.js"></script>
</body>

</html>
