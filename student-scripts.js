var numDegrees = 0;

function initDegrees( degrees ) { 
    //Get index of first ; in degree string
    var index = degrees.value.indexOf( ";" );
    
    //Loop over all semicolons in degrees string
    while( index > 0 )
    {
        //Add a field for current degree
        addDegree( degrees.value.substring(0, index ) );
        
        //Trim degrees string to remove current degree
        degrees.value = degrees.value.substring( index+1, degrees.value.length )
        
        //Find index of next ; in remaining degree string
        index = degrees.value.indexOf( ";" );
    }
};

function addDegree( degreeName ) {
    var div = document.getElementById('degreeContainer');
    var input = document.createElement('input');
    input.type = 'text';
    input.name = 'degree_';
    input.name = input.name.concat( numDegrees++ );
    input.value = degreeName;
    input.size = 40;
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