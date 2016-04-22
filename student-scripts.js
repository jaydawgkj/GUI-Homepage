function createDegreeField() {
  var input = document.createElement('input');
  input.type = 'text';
  input.name = 'pet[]';
  return input;
}

function addDegree() {
    var form = document.getElementById("editStudent")
    form.appendChild( createDegreeField() );
}