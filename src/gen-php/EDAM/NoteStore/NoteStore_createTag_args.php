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

class NoteStore_createTag_args
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'authenticationToken',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'tag',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\Tag',
        ),
    );

    /**
     * @var string
     */
    public $authenticationToken = null;
    /**
     * @var \EDAM\Types\Tag
     */
    public $tag = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['authenticationToken'])) {
                $this->authenticationToken = $vals['authenticationToken'];
            }
            if (isset($vals['tag'])) {
                $this->tag = $vals['tag'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_createTag_args';
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
                    if ($ftype == TType::STRUCT) {
                        $this->tag = new \EDAM\Types\Tag();
                        $xfer += $this->tag->read($input);
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
        $xfer += $output->writeStructBegin('NoteStore_createTag_args');
        if ($this->authenticationToken !== null) {
            $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 1);
            $xfer += $output->writeString($this->authenticationToken);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tag !== null) {
            if (!is_object($this->tag)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('tag', TType::STRUCT, 2);
            $xfer += $this->tag->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
