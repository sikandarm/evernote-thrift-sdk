<?php
namespace EDAM\NoteStore;

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

class NoteStore_setNoteApplicationDataEntry_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'authenticationToken',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'guid',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'key',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'value',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var string
     */
    public $authenticationToken = null;
    /**
     * @var string
     */
    public $guid = null;
    /**
     * @var string
     */
    public $key = null;
    /**
     * @var string
     */
    public $value = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['authenticationToken'])) {
                $this->authenticationToken = $vals['authenticationToken'];
            }
            if (isset($vals['guid'])) {
                $this->guid = $vals['guid'];
            }
            if (isset($vals['key'])) {
                $this->key = $vals['key'];
            }
            if (isset($vals['value'])) {
                $this->value = $vals['value'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_setNoteApplicationDataEntry_args';
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
                        $xfer += $input->readString($this->authenticationToken);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->guid);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->key);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->value);
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
        $xfer += $output->writeStructBegin('NoteStore_setNoteApplicationDataEntry_args');
        if ($this->authenticationToken !== null) {
            $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 1);
            $xfer += $output->writeString($this->authenticationToken);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->guid !== null) {
            $xfer += $output->writeFieldBegin('guid', TType::STRING, 2);
            $xfer += $output->writeString($this->guid);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->key !== null) {
            $xfer += $output->writeFieldBegin('key', TType::STRING, 3);
            $xfer += $output->writeString($this->key);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->value !== null) {
            $xfer += $output->writeFieldBegin('value', TType::STRING, 4);
            $xfer += $output->writeString($this->value);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
