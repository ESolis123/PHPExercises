<?php

class HighSchoolSweetheart
{
    /*1. Get the name's first letter
        Implement the HighSchoolSweetheart::firstLetter function.
        It should take a name and return its first letter.
        It should clean up any unnecessary whitespace from the name.
    */

    public function firstLetter(string $name): string
    {
        $temp = trim($name);
        return substr($temp,0,1);
    }

    /*2. Format the first letter as an initial
        Implement the HighSchoolSweetheart::initial function.
        It should take a name and return its first letter, uppercase, followed by a dot.
        Make sure to reuse HighSchoolSweetheart::first_letter that
        you defined in the previous step.
    */


    public function initial(string $name): string
    {
        return strtoupper(self::firstLetter($name)).".";
    }

    /*3. Split the full name into the first name and the last name
        Implement the HighSchoolSweetheart::initials function.
        It should take a full name, consisting of a first name and a last name
        separated by a space, and return the initials.

        Make sure to reuse HighSchoolSweetheart::initial that you defined in the previous step.
    */

    public function initials(string $name): string
    {
        $array = explode(" ", $name);
        $firstLetter = self::initial($array[0]);
        $secondLetter = self::initial($array[1]);
        return "$firstLetter $secondLetter";
    }

    /*4. Put the initials inside of the heart
        Implement the HighSchoolSweetheart::pair function.
        It should take two full names and return the initials inside an ASCII heart.
        Make sure to reuse HighSchoolSweetheart::initials that you defined in the
        previous step.
    */

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $first_initials = self::initials($sweetheart_a);
        $second_initials = self::initials($sweetheart_b);
        
        $heart = "     ******       ******\n";
        $heart .= "   **      **   **      **\n";
        $heart .= " **         ** **         **\n";
        $heart .= "**            *            **\n";
        $heart .= "**                         **\n";
        $heart .= "**     $first_initials  +  $second_initials     **\n";
        $heart .= " **                       **\n";//1
        $heart .= "   **                   **\n";//2
        $heart .= "     **               **\n";//3
        $heart .= "       **           **\n";//4
        $heart .= "         **       **\n";//5
        $heart .= "           **   **\n";//6
        $heart .= "             ***\n";//7
        $heart .= "              *";//7

        return $heart;
    }
}