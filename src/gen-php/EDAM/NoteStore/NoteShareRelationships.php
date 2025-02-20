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
 * Captures a collection of share relationships for a single note,
 * for example, as returned by the getNoteShares method. The share
 * relationships fall into two broad categories: members, and
 * invitations that can be used to become members.
 * 
 * <dl>
 * <dt>invitations</dt>
 * <dd>A list of open invitations that can be redeemed into
 * memberships to the note.</dd>
 * 
 * <dt>memberships</dt>
 * <dd>A list of memberships of the noteb. A member is identified
 * by their Evernote UserID and has rights to access the
 * note.</dd>
 * 
 * <dt>restrictions</dt>
 * <dd>The restrictions on which privileges may be assigned to the recipient
 * of an open invitation. These restrictions only apply to invitations;
 * restrictions on memberships are specified on the NoteMemberShareRelationship.
 * This field is used by the service to convey information to the user, so
 * clients should treat it as read-only.</dd>
 * 
 * </dl>
 */
class NoteShareRelationships
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'invitations',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\EDAM\NoteStore\NoteInvitationShareRelationship',
                ),
        ),
        2 => array(
            'var' => 'memberships',
            'isRequired' => false,
            'type' => TType::LST,
            'etype' => TType::STRUCT,
            'elem' => array(
                'type' => TType::STRUCT,
                'class' => '\EDAM\NoteStore\NoteMemberShareRelationship',
                ),
        ),
        3 => array(
            'var' => 'invitationRestrictions',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\NoteStore\NoteShareRelationshipRestrictions',
        ),
    );

    /**
     * @var \EDAM\NoteStore\NoteInvitationShareRelationship[]
     */
    public $invitations = null;
    /**
     * @var \EDAM\NoteStore\NoteMemberShareRelationship[]
     */
    public $memberships = null;
    /**
     * @var \EDAM\NoteStore\NoteShareRelationshipRestrictions
     */
    public $invitationRestrictions = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['invitations'])) {
                $this->invitations = $vals['invitations'];
            }
            if (isset($vals['memberships'])) {
                $this->memberships = $vals['memberships'];
            }
            if (isset($vals['invitationRestrictions'])) {
                $this->invitationRestrictions = $vals['invitationRestrictions'];
            }
        }
    }

    public function getName()
    {
        return 'NoteShareRelationships';
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
                        $this->invitations = array();
                        $_size286 = 0;
                        $_etype289 = 0;
                        $xfer += $input->readListBegin($_etype289, $_size286);
                        for ($_i290 = 0; $_i290 < $_size286; ++$_i290) {
                            $elem291 = null;
                            $elem291 = new \EDAM\NoteStore\NoteInvitationShareRelationship();
                            $xfer += $elem291->read($input);
                            $this->invitations []= $elem291;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::LST) {
                        $this->memberships = array();
                        $_size292 = 0;
                        $_etype295 = 0;
                        $xfer += $input->readListBegin($_etype295, $_size292);
                        for ($_i296 = 0; $_i296 < $_size292; ++$_i296) {
                            $elem297 = null;
                            $elem297 = new \EDAM\NoteStore\NoteMemberShareRelationship();
                            $xfer += $elem297->read($input);
                            $this->memberships []= $elem297;
                        }
                        $xfer += $input->readListEnd();
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->invitationRestrictions = new \EDAM\NoteStore\NoteShareRelationshipRestrictions();
                        $xfer += $this->invitationRestrictions->read($input);
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
        $xfer += $output->writeStructBegin('NoteShareRelationships');
        if ($this->invitations !== null) {
            if (!is_array($this->invitations)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('invitations', TType::LST, 1);
            $output->writeListBegin(TType::STRUCT, count($this->invitations));
            foreach ($this->invitations as $iter298) {
                $xfer += $iter298->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->memberships !== null) {
            if (!is_array($this->memberships)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('memberships', TType::LST, 2);
            $output->writeListBegin(TType::STRUCT, count($this->memberships));
            foreach ($this->memberships as $iter299) {
                $xfer += $iter299->write($output);
            }
            $output->writeListEnd();
            $xfer += $output->writeFieldEnd();
        }
        if ($this->invitationRestrictions !== null) {
            if (!is_object($this->invitationRestrictions)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('invitationRestrictions', TType::STRUCT, 3);
            $xfer += $this->invitationRestrictions->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
