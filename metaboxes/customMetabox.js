
let addField = document.querySelector('.fields');
let fields = document.querySelectorAll('.field');

let key = fields.lenght += 1;

let subHeader = document.createTextNode(`<p>
  <label for="your_fields[text${key}]">Input Text</label>
  <br>
  <input type="text" name="your_fields[text${key}]" id="your_fields[text${key}]" class="regular-text" value="">
  </p>`);

  let addClicked = document.querySelector('.add');

  addClicked.addEventListener('click', (event) => {
      console.log('hello');
      addField.appendChild(subHeader);
  });
