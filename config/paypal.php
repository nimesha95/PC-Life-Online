<?php
return array(
    /** set your paypal credential **/
    'client_id' => 'AZkCgsADkWEqbAqR7Ty-Rpdvg_wjGBBpG6f7pMtihRZJ7Qx46iN0zUrA3L2Fpds8Be_4IN8cE0LPc9eT',
    'secret' => 'EMAlqexcinlpQ6qu_bRZbqeCzPsrKS4zWPqnrPLsai1c0p5D9Z3jEGhbMtCY3EIKSMuGIkEzZIzJHECN',
    /**
     * SDK configuration
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',
        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 1000,
        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,
        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',
        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);
?>