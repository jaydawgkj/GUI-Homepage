<?php
//Read in student data from XML file
$studentXML = new SimpleXMLElement($_POST['name'], $options = 0, $data_is_url = true);

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
                        <input type="hidden" name="name" value=$currStudent>
                        Name: <input type="text" value="$studentXML->name">
                        
                        <!-- Save button -->
                        <br/><input type="submit" value="Save">
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