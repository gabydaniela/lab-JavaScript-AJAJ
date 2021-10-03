const asunto = document.getElementById('asunto');
const subasunto = document.getElementById('subasunto');
const url = 'https://jsonplaceholder.typicode.com/';
const labels = {
  users: 'name',
  todos: 'title',
  albums: 'title'
};

const clearSelect = () => {
  const options = subasunto.querySelectorAll('option:not([value=""])');
  options.forEach(option => subasunto.removeChild(option));
};

const fillSelect = (asunto, json) => {
  json.forEach(item => {
    const option = document.createElement('option');
    option.value = item.id;
    option.innerText = item[labels[asunto]];
    subasunto.appendChild(option);
  });
  subasunto.disabled = false;
};

asunto.addEventListener('change', () => {
  clearSelect();
  subasunto.disabled = true;
  const value = asunto.value;
  if (value) {
    fetch(`${url}${value}`)
      .then(result => result.json())
      .then(json => fillSelect(value, json));
  }
});