<?php

class Lasagna
{
    const EXPECTED_OVEN_TIME = 40.0;
    const MINUTES_PER_LAYER=2;

    /*
        Implement the expectedCookTime function in class Lasagna that does
        not take any arguments and returns how many minutes the
        lasagna should be in the oven. According to the cooking book,
        the expected oven time in minutes is 40:
    */

    public function expectedCookTime()
    {
        return self::EXPECTED_OVEN_TIME;
    }

    /*
        Implement the remainingCookTime function in class Lasagna
        that takes the actual minutes the lasagna has been in the oven as
        an argument and returns how many minutes the lasagna still has
        to remain in the oven, based on the expected oven time
        in minutes from the previous task.
    */

    public function remainingCookTime($elapsed_minutes)
    {
        if($elapsed_minutes <= 40)
            return $this->expectedCookTime() - $elapsed_minutes;
        else
            return 0;
    }

    /*
        Implement the totalPreparationTime function in class Lasagna
        that takes the number of layers you added to the lasagna as an
        argument and returns how many minutes you spent preparing the lasagna,
        assuming each layer takes you 2 minutes to prepare.
    */
    public function totalPreparationTime($layers_to_prep)
    {
        return $layers_to_prep * self::MINUTES_PER_LAYER;
    }

    /*
        Implement the totalElapsedTime function in class Lasagna
        that takes two arguments: the first argument is the number
        of layers you added to the lasagna, and the second argument
        is the number of minutes the lasagna has been in the oven.

        The function should return how many minutes in total you've worked
        on cooking the lasagna, which is the sum of the preparation time in minutes,
        and the time in minutes the lasagna has spent in the oven at the moment.
    */

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        return $this-> totalPreparationTime($layers_to_prep) + $elapsed_minutes;
    }

    /*
        Implement the alarm function in class Lasagna that does
        not take any arguments and returns a message indicating that
        the lasagna is ready to eat.

        <?php
        $timer = new Lasagna();
        $timer->alarm()
        // => "Ding!"
    */

    public function alarm()
    {
        return "Ding!";
    }
}