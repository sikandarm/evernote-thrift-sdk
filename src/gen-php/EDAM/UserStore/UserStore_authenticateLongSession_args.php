<?php
namespace EDAM\UserStore;

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

class UserStore_authenticateLongSession_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'username',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'password',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'consumerKey',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'consumerSecret',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'deviceIdentifier',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'deviceDescription',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'supportsTwoFactor',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var string
     */
    public $username = null;
    /**
     * @var string
     */
    public $password = null;
    /**
     * @var string
     */
    public $consumerKey = null;
    /**
     * @var string
     */
    public $consumerSecret = null;
    /**
     * @var string
     */
    public $deviceIdentifier = null;
    /**
     * @var string
     */
    public $deviceDescription = null;
    /**
     * @var bool
     */
    public $supportsTwoFactor = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['username'])) {
                $this->username = $vals['username'];
            }
            if (isset($vals['password'])) {
                $this->password = $vals['password'];
            }
            if (isset($vals['consumerKey'])) {
                $this->consumerKey = $vals['consumerKey'];
            }
            if (isset($vals['consumerSecret'])) {
                $this->consumerSecret = $vals['consumerSecret'];
            }
            if (isset($vals['deviceIdentifier'])) {
                $this->deviceIdentifier = $vals['deviceIdentifier'];
            }
            if (isset($vals['deviceDescription'])) {
                $this->deviceDescription = $vals['deviceDescription'];
            }
            if (isset($vals['supportsTwoFactor'])) {
                $this->supportsTwoFactor = $vals['supportsTwoFactor'];
            }
        }
    }

    public function getName()
    {
        return 'UserStore_authenticateLongSession_args';
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
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->username);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->password);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->consumerKey);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->consumerSecret);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->deviceIdentifier);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->deviceDescription);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->supportsTwoFactor);
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
        $xfer += $output->writeStructBegin('UserStore_authenticateLongSession_args');
        if ($this->username !== null) {
            $xfer += $output->writeFieldBegin('username', TType::STRING, 1);
            $xfer += $output->writeString($this->username);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->password !== null) {
            $xfer += $output->writeFieldBegin('password', TType::STRING, 2);
            $xfer += $output->writeString($this->password);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->consumerKey !== null) {
            $xfer += $output->writeFieldBegin('consumerKey', TType::STRING, 3);
            $xfer += $output->writeString($this->consumerKey);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->consumerSecret !== null) {
            $xfer += $output->writeFieldBegin('consumerSecret', TType::STRING, 4);
            $xfer += $output->writeString($this->consumerSecret);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->deviceIdentifier !== null) {
            $xfer += $output->writeFieldBegin('deviceIdentifier', TType::STRING, 5);
            $xfer += $output->writeString($this->deviceIdentifier);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->deviceDescription !== null) {
            $xfer += $output->writeFieldBegin('deviceDescription', TType::STRING, 6);
            $xfer += $output->writeString($this->deviceDescription);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->supportsTwoFactor !== null) {
            $xfer += $output->writeFieldBegin('supportsTwoFactor', TType::BOOL, 7);
            $xfer += $output->writeBool($this->supportsTwoFactor);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
