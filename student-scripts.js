function createDegreeField() {
  var input = document.createElement('input');
  input.type = 'text';
  input.name = 'degree[]';
  return input;
}

function addDegree() {
    var form = document.getElementById("editStudent")
    form.appendChild( createDegreeField() );
}


function addDegree() {
    var div = document.getElementById('degreeContainer');
    var input = document.createElement('input');
    input.type = 'text';
    input.name = 'degrees[]';
    div.appendChild(document.createElement('br'));
    div.appendChild(input);
};