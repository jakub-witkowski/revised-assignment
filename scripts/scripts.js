function removeCheckedCheckboxes() {
  var list = document.getElementsByTagName('input');
  for (var i = 0; i < list.length; ++i) {
    var product = list[i];
    if (product.checked)
      product.parentElement.hidden = true;
  }
}

 function adjustForm() {
        var x = document.getElementById("#productType").value;
        var customForm = document.createElement('div');
        if (x === "0") {
            customForm.innerHTML = '<div class="form"></div>';
            document.getElementById("#autoForm").replaceChildren(customForm);
            }
        else if (x === "DVD") {
            customForm.innerHTML = 
            '<div class="form"><label for="size" class="title">Size (MB):</label><input type="number" id="#size" name="size" required /><p class="instruction">Please indicate size in megabytes.</p></div>';      
            document.getElementById("#autoForm").replaceChildren(customForm);
        } else if (x === "Book") {
            customForm.innerHTML = 
            '<div class="form"><label for="weight" class="title">Weight (kg):</label><input type="number" id="#weight" name="weight" required /><p class="instruction">Please indicate weight in kilograms.</p></div>';
            document.getElementById("#autoForm").replaceChildren(customForm);
        } else if (x === "Furniture") {
            customForm.innerHTML = 
            '<div class="form"><label for="height" class="title">Height (cm):</label><input type="number" id="#height" name="height" required /><p class="instruction">Please indicate height in centimeters.</p><label for="width" class="title">Width (cm):</label><input type="number" id="#width" name="width" required /><p class="instruction">Please indicate width in centimeters.</p><label for="length" class="title">Length (cm):</label><input type="number" id="#length" name="length" required /><p class="instruction">Please indicate length in centimeters.</p></div>';
            document.getElementById("#autoForm").replaceChildren(customForm);
        }
    }