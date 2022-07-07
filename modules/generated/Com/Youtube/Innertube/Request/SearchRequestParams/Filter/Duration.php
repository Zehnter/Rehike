<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: request/search_request_params.proto

namespace Com\Youtube\Innertube\Request\SearchRequestParams\Filter;

use UnexpectedValueException;

/**
 * Protobuf type <code>com.youtube.innertube.request.SearchRequestParams.Filter.Duration</code>
 */
class Duration
{
    /**
     * Generated from protobuf enum <code>SHORT = 0;</code>
     */
    const SHORT = 0;
    /**
     * Generated from protobuf enum <code>MEDIUM = 2;</code>
     */
    const MEDIUM = 2;
    /**
     * Generated from protobuf enum <code>LONG = 1;</code>
     */
    const LONG = 1;

    private static $valueToName = [
        self::SHORT => 'SHORT',
        self::MEDIUM => 'MEDIUM',
        self::LONG => 'LONG',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Duration::class, \Com\Youtube\Innertube\Request\SearchRequestParams_Filter_Duration::class);

