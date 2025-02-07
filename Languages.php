<?php
    /*1. Define a function to return an empty language list
        Define the language_list function that takes no arguments and returns an empty list.
    */


    /*2. Modify function to create a list from any number of languages
        Modify the language_list function, so it takes a variadic argument
        of languages (strings).

        It should return the resulting list with the languages in the list.
    */
function language_list(...$x)
{
    $languages = [];

    foreach($x as $language){
        $languages[] = $language;
    }
    return $languages;
}

    /*3. Define a function to add a language to the list
        Define the add_to_language_list function that takes 2 arguments,
        an array of languages, and the new language.
    */

function add_to_language_list($languages, $newLanguage){
    $languages[] = $newLanguage;
    return $languages;
}

    /*4. Define a function to remove an item from the language list
        Define the prune_language_list function to remove the first language
        from the array of languages.

    */

function prune_language_list($languages){
     array_shift($languages);
    return $languages;
}

/*5. Define a function to get the first item in the list
        Define the current_language function that takes 1 argument (a language list).
        It should return the first language in the list.
        Assume the list will always have at least one item.
    */

function current_language($languages){
    if(count($languages)>0)
        return $languages[0];
    return "";
}
    /*
        6. Define a function to return how many languages are in the list
        Define the language_list_length function that takes 1 argument (a language list).
        It should return the number of languages in the list.
    */

function language_list_length($languages){
    return count($languages);
}