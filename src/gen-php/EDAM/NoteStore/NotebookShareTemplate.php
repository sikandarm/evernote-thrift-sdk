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

/**
 * A structure used to share a notebook with one or more recipients at a given privilege.
 * 
 * <dl>
 *   <dt>notebookGuid</dt>
 *   <dd>The GUID of the notebook.</dd>
 * 
 *   <dt>recipientThreadId</dt>
 *   <dd>The recipients of the notebook share specified as a messaging thread ID. If you
 *       have an existing messaging thread to share the note with, specify its ID
 *       here instead of recipientContacts in order to properly support defunct
 *       identities. The sharer must be a participant of the thread. Either this field
 *       or recipientContacts must be set.</dd>
 * 
 *   <dt>recipientContacts</dt>
 *   <dd>The recipients of the notebook share specified as a list of contacts. This should
 *       only be set if the sharing takes place before the thread is created. Use
 *       recipientThreadId instead when sharing with an existing thread. Either this
 *       field or recipientThreadId must be set.</dd>
 * 
 *   <dt>privilege</dt>
 *   <dd>The privilege level to be granted.</dd>
 * </dl>
 */
class NotebookShareTemplate
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'notebookGuid',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'recipientThreadId',
            'isRequired' => false,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'recipientContacts',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\EDAM\Types\Contact',
                ),
        ),
        3 => array(
            'var' => 'privilege',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\Types\SharedNotebookPrivilegeLevel',
        ),
    );

    /**
     * @var string
     */
    public $notebookGuid = null;
    /**
     * @var int
     */
    public $recipientThreadId = null;
    /**
     * @var \EDAM\Types\Contact[]
     */
    public $recipientContacts = null;
    /**
     * @var int
     */
    public $privilege = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['notebookGuid'])) {
                $this->notebookGuid = $vals['notebookGuid'];
            }
            if (isset($vals['recipientThreadId'])) {
                $this->recipientThreadId = $vals['recipientThreadId'];
            }
            if (isset($vals['recipientContacts'])) {
                $this->recipientContacts = $vals['recipientContacts'];
            }
            if (isset($vals['privilege'])) {
                $this->privilege = $vals['privilege'];
            }
        }
    }

    public function getName()
    {
        return 'NotebookShareTemplate';
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
                        $xfer += $input->readString($this->notebookGuid);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->recipientThreadId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->recipientContacts = array();
                        $_size272 = 0;
                        $_etype275 = 0;
                        $xfer += $input->readListBegin($_etype275, $_size272);
                        for ($_i276 = 0; $_i276 < $_size272; ++$_i276) {
                            $elem277 = null;
                            $elem277 = new \EDAM\Types\Contact();
                            $xfer += $elem277->read($input);
                            $this->recipientContacts []= $elem277;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->privilege);
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
        $xfer += $output->writeStructBegin('NotebookShareTemplate');
        if ($this->notebookGuid !== null) {
            $xfer += $output->writeFieldBegin('notebookGuid', TType::STRING, 1);
            $xfer += $output->writeString($this->notebookGuid);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->recipientContacts !== null) {
            if (!is_array($this->recipientContacts)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('recipientContacts', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->recipientContacts));
            foreach ($this->recipientContacts as $iter278) {
                $xfer += $iter278->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->privilege !== null) {
            $xfer += $output->writeFieldBegin('privilege', TType::I32, 3);
            $xfer += $output->writeI32($this->privilege);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->recipientThreadId !== null) {
            $xfer += $output->writeFieldBegin('recipientThreadId', TType::I64, 4);
            $xfer += $output->writeI64($this->recipientThreadId);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
