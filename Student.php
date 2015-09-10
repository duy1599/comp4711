<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Adds information to a student object created and calculates the
 * average grade of the student.
 *
 * @author Duy
 */
class Student {
    
    /* Constructor of Student class. Each student contains a surname,
    firstname, emails, and grades */
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    // Adds an email to a specified index for an object
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    
    // Adds a grade for an object
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    // Calculates the average of the object's grades
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }
    
    // Formats output to neatly display the object's information
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result.= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which => $what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}
