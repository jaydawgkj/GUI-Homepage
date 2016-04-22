function addDegree() {
    var div = document.getElementById('degreeContainer');
    var input = document.createElement('input');
    input.type = 'text';
    input.name = 'degrees[]';
    div.appendChild(document.createElement('br'));
    div.appendChild(input);
};

function addCourse() {
    var div = document.getElementById('courseContainer');
    var input = document.createElement('input');
    input.type = 'text';
    input.name = 'courses[]';
    div.appendChild(document.createElement('br'));
    div.appendChild(input);
};