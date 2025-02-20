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

class NoteStore_getSharedNotebookByAuth_result
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        0 => array(
            'var' => 'success',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\SharedNotebook',
        ),
        1 => array(
            'var' => 'userException',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Error\EDAMUserException',
        ),
        2 => array(
            'var' => 'notFoundException',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Error\EDAMNotFoundException',
        ),
        3 => array(
            'var' => 'systemException',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Error\EDAMSystemException',
        ),
    );

    /**
     * @var \EDAM\Types\SharedNotebook
     */
    public $success = null;
    /**
     * @var \EDAM\Error\EDAMUserException
     */
    public $userException = null;
    /**
     * @var \EDAM\Error\EDAMNotFoundException
     */
    public $notFoundException = null;
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
            if (isset($vals['notFoundException'])) {
                $this->notFoundException = $vals['notFoundException'];
            }
            if (isset($vals['systemException'])) {
                $this->systemException = $vals['systemException'];
            }
        }
    }

    public function getName()
    {
        return 'NoteStore_getSharedNotebookByAuth_result';
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
                    if ($ftype == TType::STRUCT) {
                        $this->success = new \EDAM\Types\SharedNotebook();
                        $xfer += $this->success->read($input);
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
                        $this->notFoundException = new \EDAM\Error\EDAMNotFoundException();
                        $xfer += $this->notFoundException->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
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
        $xfer += $output->writeStructBegin('NoteStore_getSharedNotebookByAuth_result');
        if ($this->success !== null) {
            if (!is_object($this->success)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('success', TType::STRUCT, 0);
            $xfer += $this->success->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->userException !== null) {
            $xfer += $output->writeFieldBegin('userException', TType::STRUCT, 1);
            $xfer += $this->userException->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->notFoundException !== null) {
            $xfer += $output->writeFieldBegin('notFoundException', TType::STRUCT, 2);
            $xfer += $this->notFoundException->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->systemException !== null) {
            $xfer += $output->writeFieldBegin('systemException', TType::STRUCT, 3);
            $xfer += $this->systemException->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
