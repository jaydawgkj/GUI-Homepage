<?php
    //Adapted from http://stackoverflow.com/questions/3552755/how-to-save-xml-using-php
    //Taken on 4/21/2016
    //Written by StackOverFlow user vfn
    
    //Creates XML string and XML document using the DOM
    $dom = new DomDocument( "1.0", "UTF-8" );
    
    //Add student root
    $student = $dom->appendChild( $dom->createElement( "student" ) );
    
    //Add name element to student root
    $nodeName = $dom->createElement( "name", "MATT" );
    $student->appendChild( $nodeName );
    
    //Save XML document
    $dom->formatOutput = true;
    $dom->save( "test.xml" );    
?>