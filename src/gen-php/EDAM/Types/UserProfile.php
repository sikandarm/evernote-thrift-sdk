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
 * This structure represents profile information for a user in a business.
 * 
 * <dl>
 * <dt>id</dt>
 * <dd>The numeric identifier that uniquely identifies a user.</dd>
 * 
 * <dt>name</dt>
 * <dd>The full name of the user.</dd>
 * 
 * <dt>email</dt>
 * <dd>The user's business email address. If the user has not registered their business
 *   email address, this field will be empty.
 * </dd>
 * 
 * <dt>username</dt>
 * <dd>The user's Evernote username.</dd>
 * 
 * <dt>attributes</dt>
 * <dd>The user's business specific attributes.</dd>
 * 
 * <dt>joined</dt>
 * <dd>The time when the user joined the business</dd>
 * 
 * <dt>photoLastUpdated</dt>
 * <dd>The time when the user's profile photo was most recently updated</dd>
 * 
 * <dt>photoUrl</dt>
 * <dd>A URL identifying a copy of the user's current profile photo</dd>
 * 
 * <dt>role</dt>
 * <dd>The BusinessUserRole for the user</dd>
 * 
 * <dt>status</dt>
 * <dd>The BusinessUserStatus for the user</dd>
 * 
 * </dl>
 */
class UserProfile
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'id',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'name',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'email',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'username',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'attributes',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\BusinessUserAttributes',
        ),
        6 => array(
            'var' => 'joined',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        7 => array(
            'var' => 'photoLastUpdated',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        8 => array(
            'var' => 'photoUrl',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        9 => array(
            'var' => 'role',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\Types\BusinessUserRole',
        ),
        10 => array(
            'var' => 'status',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\Types\BusinessUserStatus',
        ),
    );

    /**
     * @var int
     */
    public $id = null;
    /**
     * @var string
     */
    public $name = null;
    /**
     * @var string
     */
    public $email = null;
    /**
     * @var string
     */
    public $username = null;
    /**
     * @var \EDAM\Types\BusinessUserAttributes
     */
    public $attributes = null;
    /**
     * @var int
     */
    public $joined = null;
    /**
     * @var int
     */
    public $photoLastUpdated = null;
    /**
     * @var string
     */
    public $photoUrl = null;
    /**
     * @var int
     */
    public $role = null;
    /**
     * @var int
     */
    public $status = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['id'])) {
                $this->id = $vals['id'];
            }
            if (isset($vals['name'])) {
                $this->name = $vals['name'];
            }
            if (isset($vals['email'])) {
                $this->email = $vals['email'];
            }
            if (isset($vals['username'])) {
                $this->username = $vals['username'];
            }
            if (isset($vals['attributes'])) {
                $this->attributes = $vals['attributes'];
            }
            if (isset($vals['joined'])) {
                $this->joined = $vals['joined'];
            }
            if (isset($vals['photoLastUpdated'])) {
                $this->photoLastUpdated = $vals['photoLastUpdated'];
            }
            if (isset($vals['photoUrl'])) {
                $this->photoUrl = $vals['photoUrl'];
            }
            if (isset($vals['role'])) {
                $this->role = $vals['role'];
            }
            if (isset($vals['status'])) {
                $this->status = $vals['status'];
            }
        }
    }

    public function getName()
    {
        return 'UserProfile';
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
                        $xfer += $input->readI32($this->id);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->name);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->email);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->username);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->attributes = new \EDAM\Types\BusinessUserAttributes();
                        $xfer += $this->attributes->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->joined);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->photoLastUpdated);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->photoUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->role);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->status);
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
        $xfer += $output->writeStructBegin('UserProfile');
        if ($this->id !== null) {
            $xfer += $output->writeFieldBegin('id', TType::I32, 1);
            $xfer += $output->writeI32($this->id);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->name !== null) {
            $xfer += $output->writeFieldBegin('name', TType::STRING, 2);
            $xfer += $output->writeString($this->name);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->email !== null) {
            $xfer += $output->writeFieldBegin('email', TType::STRING, 3);
            $xfer += $output->writeString($this->email);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->username !== null) {
            $xfer += $output->writeFieldBegin('username', TType::STRING, 4);
            $xfer += $output->writeString($this->username);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->attributes !== null) {
            if (!is_object($this->attributes)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('attributes', TType::STRUCT, 5);
            $xfer += $this->attributes->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->joined !== null) {
            $xfer += $output->writeFieldBegin('joined', TType::I64, 6);
            $xfer += $output->writeI64($this->joined);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->photoLastUpdated !== null) {
            $xfer += $output->writeFieldBegin('photoLastUpdated', TType::I64, 7);
            $xfer += $output->writeI64($this->photoLastUpdated);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->photoUrl !== null) {
            $xfer += $output->writeFieldBegin('photoUrl', TType::STRING, 8);
            $xfer += $output->writeString($this->photoUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->role !== null) {
            $xfer += $output->writeFieldBegin('role', TType::I32, 9);
            $xfer += $output->writeI32($this->role);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->status !== null) {
            $xfer += $output->writeFieldBegin('status', TType::I32, 10);
            $xfer += $output->writeI32($this->status);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
