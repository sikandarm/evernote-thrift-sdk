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

class NoteStore_getNoteSearchText_args
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
            'var' => 'noteOnly',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        4 => array(
            'var' => 'tokenizeForIndexing',
            'isRequired' => false,
            'type' => TType::BOOL,
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
     * @var bool
     */
    public $noteOnly = null;
    /**
     * @var bool
     */
    public $tokenizeForIndexing = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['authenticationToken'])) {
                $this->authenticationToken = $vals['authenticationToken'];
            }
            if (isset($vals['guid'])) {
                $this->guid = $vals['guid'];
            }
            if (isset($vals['noteOnly'])) {
                $this->noteOnly = $vals['noteOnly'];
            }
            if (isset($vals['tokenizeForIndexing'])) {
                $this->tokenizeForIndexing = $vals['tokenizeForIndexing'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_getNoteSearchText_args';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noteOnly);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->tokenizeForIndexing);
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
        $xfer += $output->writeStructBegin('NoteStore_getNoteSearchText_args');
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
        if ($this->noteOnly !== null) {
            $xfer += $output->writeFieldBegin('noteOnly', TType::BOOL, 3);
            $xfer += $output->writeBool($this->noteOnly);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tokenizeForIndexing !== null) {
            $xfer += $output->writeFieldBegin('tokenizeForIndexing', TType::BOOL, 4);
            $xfer += $output->writeBool($this->tokenizeForIndexing);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
