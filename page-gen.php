<?php

$studentXML = new SimpleXMLElement("C:\\xampp\\htdocs\\SDSMT_Web\\student.xml", $options = 0, $data_is_url = true);

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
            
                <!-- Student name & picture -->
                <h1 class="studentName"><img class="student" src="matt-dyke.jpg">Matt Dyke</h1>
                <hr class="picture"/>
                
                <!-- Personal info pane -->
                <div id="personalInfo">
                
                    <!-- Degree information -->
                    <p>B.S. Computer Science<br/>B.S. Applied & Computational Mathematics</p>
                    <p> <span class="emphasize">Graduation Date:</span> May 2017 </p>
                    
                    <!-- Contact information -->
                    <p>
                        <span class="emphasize">School Email:</span> matthew.dyke@mines.sdsmt.edu<br/>
                        <span class="emphasize">Personal Email:</span> email@example.com <br/>
                        <span class="emphasize">Phone Number:</span> 605-555-1234<br/>
                    </p>
                
                </div>
                
                <!-- Course info pane -->
                <div id="coursesInfo">
                
                    <p class="subSection">Courses</p>
                    <hr/>
                    
                    <!-- List of courses -->
                    <p class="course">CSC 447 - Artificial Intelligence</p>
                    <p class="course">CSC 468 - Graphical Interface Programming</p>
                    <p class="course">CSC 470 - Software Engineering</p>
                    <p class="course">MATH 424 - Advanced Calculus II</p>
                    <p class="course">MATH 402 - Undergraduate Research</p>
                
                </div>
                
                <!-- External Links -->
                <div id="externalLinks">
                
                    <p class="subSection">External Links</p>
                    <hr/>
                    
                    <!-- List of external links -->
                    <a class="link" href="http://dev.mcs.sdsmt.edu/~7025592/">Student Webpage</a><br/>
                    <a class="link" href="https://www.linkedin.com/in/matthewdyke">LinkedIn</a><br/>
                    <a class="link" href="https://github.com/madyke">GitHub</a><br/>
                    <a class="link" href="https://beta.knewrecruit.com/s/Matt">KnewRecruit</a><br/>
                
                </div>
                
            </div>
            
            <!-- Fixed Footer -->
            <div id="fixedfooter">
                Footer stuff
            </div>
        </body>
    </html>
_END;

?>