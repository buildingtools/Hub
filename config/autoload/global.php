<?php
/**
 * App configuration
 */
return [
    //Flexi
    'flexi' => [
        'policy_options' => [
            'lunch_duration'    => '1',
            'hours_in_day'      => 7.5,
        ],

        /**
         * Options for booking time
         * If you would like to set a min and max time for
         * booking time - enter something like:
         * 'min_start_time'    => 09:00,
         * 'max_start_time'    => 17:30,
         *
         */
        'booking_options'   => [
            'min_start_time'    => false,
            'max_start_time'    => false,
            'min_end_time'      => false,
            'max_end_time'      => false,
        ],
    ],

    'hub' => [
        'default_route' => 'home'
    ]
];