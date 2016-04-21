<?php
//Read in student data from XML file
$studentXML = new SimpleXMLElement($_POST['name'], $options = 0, $data_is_url = true);

//Build link back to page being edited
$returnLink = "http://localhost/SDSMT_Web/student.php?name=" . substr( $_POST['name'], 9 );

echo <<<_END
        <html lang="en">
            <head>
                <title>$studentXML->name</title>
                <link rel="stylesheet" type="text/css" href="student.css" />
                <meta charset="utf-8"/>
            </head>
            
            <body>
                <!-- Fixed Header -->
                <div id="fixedheader">
                    Header stuff
                </div>

                <!-- Student content pane -->
                <div id="studentContent">
                    <form action="save-file.php" method="post">
                        Name: <input type="text" name="name" value="$studentXML->name"><br/>
                        Picture Link: <input type="text" name="picture" value="$studentXML->picture"><br/>
                        <br/>
                                               
                        
                        <!-- Save, Reset, & Cancel buttons -->
                        <br/><input type="submit" value="Save"/>
                        <input type="reset"/>
                        <a href=$returnLink><input type="button" value="Cancel"></a>
                    </form>
                </div>
                
                <!-- Fixed Footer -->
                <div id="fixedfooter">
                    Footer stuff
                </div>
            </body>
        </html>
_END;
?>