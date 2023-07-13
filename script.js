const $form = document.getElementById("frmUsers");
const $inputContainer = document.getElementById("inputContainer");
const $btnAdd = document.getElementById("btnAdd");
const $btnSave = document.getElementById("btnSave");
const $instruction = document.getElementById("instruction");

function removeElement(e) {
  const $element = e.target.closest(".field");
  $element.remove();
}

const createInputElement = () => {
  const $div = document.createElement("div");
  $div.classList.add("field", "row", "align-items-center");
  $div.innerHTML = `
    <div class="col-md-10">
      <div class="input-group">
        <input class="form-control" name="Name" type="text" placeholder="Ingrese su nombre" autocomplete="off">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
      </div>
    </div>
    <div class="col-md-2">
      <button class="btn btn-danger delete-btn" onclick="removeElement(event)">
        <span class="fa fa-minus"></span>
      </button>
    </div>
  `;
  return $div;
};

$btnAdd.addEventListener("click", (e) => {
  const $inputElement = createInputElement();
  $inputContainer.appendChild($inputElement);
  $form.reset();
});

$btnSave.addEventListener("click", (e) => {
  e.preventDefault();

  const $inputs = $form.querySelectorAll("input[name='Name']");
  let isValid = true;

  $inputs.forEach(($input) => {
    if ($input.value.trim() === "") {
      $input.classList.add("btn-add-highlight");
      isValid = false;
    } else {
      $input.classList.remove("btn-add-highlight");
    }
  });

  if (isValid) {
    alert("Se guardaron los datos");
  } else {
    alert("Complete todos los campos");
  }
});

