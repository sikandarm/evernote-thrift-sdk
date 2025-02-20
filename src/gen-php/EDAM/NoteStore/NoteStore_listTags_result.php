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

class NoteStore_listTags_result
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        0 => array(
            'var' => 'success',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\EDAM\Types\Tag',
                ),
        ),
        1 => array(
            'var' => 'userException',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Error\EDAMUserException',
        ),
        2 => array(
            'var' => 'systemException',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Error\EDAMSystemException',
        ),
    );

    /**
     * @var \EDAM\Types\Tag[]
     */
    public $success = null;
    /**
     * @var \EDAM\Error\EDAMUserException
     */
    public $userException = null;
    /**
     * @var \EDAM\Error\EDAMSystemException
     */
    public $systemException = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['success'])) {
                $this->success = $vals['success'];
            }
            if (isset($vals['userException'])) {
                $this->userException = $vals['userException'];
            }
            if (isset($vals['systemException'])) {
                $this->systemException = $vals['systemException'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_listTags_result';
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
                case 0:
                    if ($ftype == TType::LST) {
                        $this->success = array();
                        $_size349 = 0;
                        $_etype352 = 0;
                        $xfer += $input->readListBegin($_etype352, $_size349);
                        for ($_i353 = 0; $_i353 < $_size349; ++$_i353) {
                            $elem354 = null;
                            $elem354 = new \EDAM\Types\Tag();
                            $xfer += $elem354->read($input);
                            $this->success []= $elem354;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->userException = new \EDAM\Error\EDAMUserException();
                        $xfer += $this->userException->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->systemException = new \EDAM\Error\EDAMSystemException();
                        $xfer += $this->systemException->read($input);
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
        $xfer += $output->writeStructBegin('NoteStore_listTags_result');
        if ($this->success !== null) {
            if (!is_array($this->success)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('success', TType::LST, 0);
            $output->writeListBegin(TType::STRUCT, count($this->success));
            foreach ($this->success as $iter355) {
                $xfer += $iter355->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->userException !== null) {
            $xfer += $output->writeFieldBegin('userException', TType::STRUCT, 1);
            $xfer += $this->userException->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->systemException !== null) {
            $xfer += $output->writeFieldBegin('systemException', TType::STRUCT, 2);
            $xfer += $this->systemException->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
