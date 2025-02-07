<?php

class AnnalynsInfiltration
{
    /*
        Fast attack: a fast attack can be made if the knight is sleeping,
        as it takes time for him to get his armor on, so he will be vulnerable.

        Implement a function named canFastAttack that takes a boolean value
        which indicates if the knight is awake.

        This function returns true if the 'Fast Attack' action is
        available based on the state of the character. Otherwise, returns false:

    */

    public function canFastAttack($is_knight_awake)
    {
        return !$is_knight_awake;
    }

    /*
    Spy: the group can be spied upon if at least one of them is awake.
    Otherwise, spying is a waste of time.
    */

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_knight_awake ||$is_archer_awake || $is_prisoner_awake;
    }

    /*
        Signal prisoner: the prisoner can be signalled using bird sounds if the prisoner
        is awake and the archer is sleeping,
        as archers are trained in bird signaling so they could intercept the message.
    */

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_prisoner_awake && !$is_archer_awake;
    }

    /*
    Liberate prisoner: Annalyn can try sneaking into the camp to free the prisoner.

    This is a risky thing to do and can only succeed in one of two ways:
    If Annalyn has her pet dog with her she can rescue the prisoner if the archer is asleep.
    The knight is scared of the dog and the archer will not have time to get
    ready before Annalyn and the prisoner can escape.

    If Annalyn does not have her dog then she and the prisoner
    must be very sneaky!

    Annalyn can free the prisoner if the prisoner is awake and the knight
    and archer are both sleeping, but if the prisoner is sleeping
    they can't be rescued: the prisoner would be startled by Annalyn's
    sudden appearance and wake up the knight and archer.

    */

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        return ($is_dog_present && !$is_archer_awake) ||
            ($is_prisoner_awake && !$is_archer_awake && !$is_knight_awake)
    }
}
