<?php

namespace Domain\Commons;

class ErrorCode
{
    /**
     * System error
     */

    /** unexpected server error */
    const DBMS_ERROR_900_0001 = "DBMS-ERROR-900-0001";
    /** under maintenance */
    const DBMS_ERROR_900_0002 = "DBMS-ERROR-900-0002";

    /**
     * Common error
     */

    /** not logged in */
    const DBMS_ERROR_000_0001 = "DBMS-ERROR-000-0001";
    /** wrong request */
    const DBMS_ERROR_000_0002 = "DBMS-ERROR-000-0002";
    /** unauthorized */
    const DBMS_ERROR_000_0003 = "DBMS-ERROR-000-0003";
    /** not found */
    const DBMS_ERROR_000_0004 = "DBMS-ERROR-000-0004";
    /** wrong userId id */
    const DBMS_ERROR_000_0005 = "DBMS-ERROR-000-0005";
    /** wrong postId id */
    const DBMS_ERROR_000_0006 = "DBMS-ERROR-000-0006";


    /**
     * get status code
     *
     * @param string $code
     * @return void
     */
    public static function getStatusCode(string $code)
    {
        switch ($code) {
            case self::DBMS_ERROR_900_0001:
            case self::DBMS_ERROR_900_0002:
                return 500;

            case self::DBMS_ERROR_000_0001:
                return 401;
            case self::DBMS_ERROR_000_0002:
                return 400;
            case self::DBMS_ERROR_000_0003:
                return 403;
            case self::DBMS_ERROR_000_0004:
                return 404;
            case self::DBMS_ERROR_000_0005:
                return 500;
            default:
                return 500;
        }
    }
}