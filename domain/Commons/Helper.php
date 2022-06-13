<?php

if ( !function_exists('jsonResponse') ) {

    /**
     * common json response
     */
    function jsonResponse($status, $msg, $redirectUrl, $code=200)
    {
        return response()->json([
            'status' => $status,
            'msg' => $msg,
            'redirectUrl' => $redirectUrl
        ], $code=200);
    }
    
}