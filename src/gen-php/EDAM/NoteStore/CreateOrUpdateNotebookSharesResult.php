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
 * A structure containing the results of a call to createOrUpdateNotebookShares.
 * 
 * <dl>
 *   <dt>updateSequenceNum</dt>
 *   <dd>The USN of the notebook after the call.</dd>
 * 
 *   <dt>matchingShares</dt>
 *   <dd>A list of SharedNotebook records that match the desired recipients. These
 *       records may have been either created or updated by the call to
 *       createOrUpdateNotebookShares, or they may have been at the desired privilege
 *       privilege level prior to the call.</dd>
 * </dl>
 */
class CreateOrUpdateNotebookSharesResult
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'updateSequenceNum',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        2 => array(
            'var' => 'matchingShares',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\EDAM\Types\SharedNotebook',
                ),
        ),
    );

    /**
     * @var int
     */
    public $updateSequenceNum = null;
    /**
     * @var \EDAM\Types\SharedNotebook[]
     */
    public $matchingShares = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['updateSequenceNum'])) {
                $this->updateSequenceNum = $vals['updateSequenceNum'];
            }
            if (isset($vals['matchingShares'])) {
                $this->matchingShares = $vals['matchingShares'];
            }
        }
    }

    public function getName()
    {
        return 'CreateOrUpdateNotebookSharesResult';
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
                        $xfer += $input->readI32($this->updateSequenceNum);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->matchingShares = array();
                        $_size279 = 0;
                        $_etype282 = 0;
                        $xfer += $input->readListBegin($_etype282, $_size279);
                        for ($_i283 = 0; $_i283 < $_size279; ++$_i283) {
                            $elem284 = null;
                            $elem284 = new \EDAM\Types\SharedNotebook();
                            $xfer += $elem284->read($input);
                            $this->matchingShares []= $elem284;
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
        $xfer += $output->writeStructBegin('CreateOrUpdateNotebookSharesResult');
        if ($this->updateSequenceNum !== null) {
            $xfer += $output->writeFieldBegin('updateSequenceNum', TType::I32, 1);
            $xfer += $output->writeI32($this->updateSequenceNum);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->matchingShares !== null) {
            if (!is_array($this->matchingShares)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('matchingShares', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->matchingShares));
            foreach ($this->matchingShares as $iter285) {
                $xfer += $iter285->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
