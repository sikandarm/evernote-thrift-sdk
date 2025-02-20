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
 * The return value of a call to the manageNotebookShares method.
 * 
 * <dl>
 * <dt>errors</dt>
 * <dd>If the method completed without throwing exceptions, some errors
 * might still have occurred, and in that case, this field will contain
 * the list of those errors the occurred.
 * </dd>
 * </dl>
 */
class ManageNotebookSharesResult
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'errors',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\EDAM\NoteStore\ManageNotebookSharesError',
                ),
        ),
    );

    /**
     * @var \EDAM\NoteStore\ManageNotebookSharesError[]
     */
    public $errors = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['errors'])) {
                $this->errors = $vals['errors'];
            }
        }
    }

    public function getName()
    {
        return 'ManageNotebookSharesResult';
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
                    if ($ftype == TType::LST) {
                        $this->errors = array();
                        $_size258 = 0;
                        $_etype261 = 0;
                        $xfer += $input->readListBegin($_etype261, $_size258);
                        for ($_i262 = 0; $_i262 < $_size258; ++$_i262) {
                            $elem263 = null;
                            $elem263 = new \EDAM\NoteStore\ManageNotebookSharesError();
                            $xfer += $elem263->read($input);
                            $this->errors []= $elem263;
                        }
                        $xfer += $input->readListEnd();
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
        $xfer += $output->writeStructBegin('ManageNotebookSharesResult');
        if ($this->errors !== null) {
            if (!is_array($this->errors)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('errors', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->errors));
            foreach ($this->errors as $iter264) {
                $xfer += $iter264->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
