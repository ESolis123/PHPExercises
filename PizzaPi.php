<?php

class PizzaPi
{
    const DOUGH = 200;
    const DOUGH_PER_PERSON = 20;
    const SAUCE_PER_PIZZA = 125;
    const PI = 3.14;

    /*
        Lilly is a fan of thin, crispy pizzas with a thinner crust.
        The dough needed for the middle is a minimum 200g, but every person
        it serves requires another 20g of dough.

        grams = pizzas * ((persons * 20) + 200)

        Lilly needs a function that:

        Takes the number of pizzas
        The number of persons each pizza will serve
        And returns the dough needed to the nearest gram.

    */

    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * self::DOUGH_PER_PERSON ) + self::DOUGH);
    }

    /*
        Lilly is meticulous when applying her sauce,
        but the size of her pizzas can be inconsistent.

        From her experience, she knows that it takes 125mL of sauce per pizza.
        Lilly needs a function that calculates how many cans of sauce to buy.

        cans of sauce = pizzas * sauce per pizza / sauce can volume
    */

    public function calculateSauceRequirement($pizzas, $sauce_can_volume)
    {
        return ($pizzas * self::SAUCE_PER_PIZZA) / $sauce_can_volume;
    }

    /*
        Cheese comes in perfect cubes and is sold by size.

        The formula Lily uses is not the formula for the area of the pizza
        since she does not want the cheese to cover the entire area.

        She decided to use the following formula to determine how many pizzas of
        some diameter (diameter) can be made from a cheese cube of some
        side-length (cheese_dimension):

        pizzas = (cheese_dimension³) / (thickness * PI * diameter)

        Create a function that:

        Takes a side-length dimension of a cheese cube
        Takes the desired thickness of the cheese layer
        Takes the diameter of the pizza
        And uses Lilly's formula to return the number of pizzas
        that can be made while rounding down.
    */

    public function calculateCheeseCubeCoverage($cheese_dimension, $desired_thickness, $diameter)
    {
        return (int)(($cheese_dimension ** 3) / 
                     ($desired_thickness * self::PI * $diameter));
    }

    /*
        Finally, Lilly wants her pizzas to divide into 8 slices each and distributed evenly among her friends.

        Create a function that:

        Takes a number of pizzas and number of friends
        and returns the number of slices that will be left over
        if each person takes an equal number of slices.

    */

    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return ($pizzas*8)%$friends;
    }
}