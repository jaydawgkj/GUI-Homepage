var numDegrees = 0; //Number of student degrees

////////////////////////////////////////////////////////////////////////////////
// Function: initDegrees( degrees )
//
// Description: Sets up initial degrees on edit-student page
//
// Parameter: degrees - string holding student degrees, seperated by a semicolon
////////////////////////////////////////////////////////////////////////////////
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


////////////////////////////////////////////////////////////////////////////////
// Function: addDegree( degreeName )
//
// Description: Adds a textbox to edit degree
//
// Parameter: degreeName - Name of degree to add
////////////////////////////////////////////////////////////////////////////////
function addDegree( degreeName ) {
    //Create new textbox
    var div = document.getElementById('degreeContainer');
    var input = document.createElement('input');
    input.type = 'text';
    input.name = 'degree_';
    input.name = input.name.concat( numDegrees++ );
    input.value = degreeName;
    input.size = 40;
    
    //Add textbox to HTML page
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