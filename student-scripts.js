var numDegrees = 0;

function initDegrees( degrees ) {
    addDegree();
};

function addDegree() {
    var div = document.getElementById('degreeContainer');
    var input = document.createElement('input');
    input.type = 'text';
    input.name = 'degree_';
    input.name = input.name.concat( numDegrees++ );
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