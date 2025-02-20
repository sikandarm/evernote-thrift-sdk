<?php
namespace EDAM\Error;

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
 * This exception is thrown by EDAM procedures when a call fails as a result of
 * a problem that a caller may be able to resolve.  For example, if the user
 * attempts to add a note to their account which would exceed their storage
 * quota, this type of exception may be thrown to indicate the source of the
 * error so that they can choose an alternate action.
 * 
 * This exception would not be used for internal system errors that do not
 * reflect user actions, but rather reflect a problem within the service that
 * the user cannot resolve.
 * 
 * errorCode:  The numeric code indicating the type of error that occurred.
 *   must be one of the values of EDAMErrorCode.
 * 
 * parameter:  If the error applied to a particular input parameter, this will
 *   indicate which parameter. For some errors (USER_NOT_ASSOCIATED, USER_NOT_REGISTERED,
 *   SSO_AUTHENTICATION_REQUIRED), this is the user's email.
 */
class EDAMUserException extends TException
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'errorCode',
            'isRequired' => true,
            'type' => TType::I32,
            'class' => '\EDAM\Error\EDAMErrorCode',
        ),
        2 => array(
            'var' => 'parameter',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var int
     */
    public $errorCode = null;
    /**
     * @var string
     */
    public $parameter = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['errorCode'])) {
                $this->errorCode = $vals['errorCode'];
            }
            if (isset($vals['parameter'])) {
                $this->parameter = $vals['parameter'];
            }
        }
    }

    public function getName()
    {
        return 'EDAMUserException';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->errorCode);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->parameter);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('EDAMUserException');
        if ($this->errorCode !== null) {
            $xfer += $output->writeFieldBegin('errorCode', TType::I32, 1);
            $xfer += $output->writeI32($this->errorCode);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->parameter !== null) {
            $xfer += $output->writeFieldBegin('parameter', TType::STRING, 2);
            $xfer += $output->writeString($this->parameter);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
