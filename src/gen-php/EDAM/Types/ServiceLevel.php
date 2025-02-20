<?php
namespace EDAM\Types;

/**
 * Autogenerated by Thrift Compiler (0.21.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

/**
 * This enumeration defines the possible tiers of service that a user may have. A
 * ServiceLevel of BUSINESS signifies a business-only account, which can never be any
 * other ServiceLevel.
 */
final class ServiceLevel
{
    const BASIC = 1;

    const PLUS = 2;

    const PREMIUM = 3;

    const BUSINESS = 4;

    static public $__names = array(
        1 => 'BASIC',
        2 => 'PLUS',
        3 => 'PREMIUM',
        4 => 'BUSINESS',
    );
}

