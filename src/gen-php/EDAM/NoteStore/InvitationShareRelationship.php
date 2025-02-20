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
 * Describes an invitation to a person to use their Evernote
 * credentials to become a member of a notebook.
 * 
 * <dl>
 * <dt>displayName</dt>
 * <dd>The string that clients should show to users to represent this
 * invitation.</dd>
 * 
 * <dt>recipientUserIdentity</dt>
 * <dd>Identifies the recipient of the invitation. The user identity
 * type can be either EMAIL, EVERNOTE or IDENTITYID. If the
 * invitation was created using the classic notebook sharing APIs it will be EMAIL. If it
 * was created using the new identity-based notebook sharing APIs it will either be
 * EVERNOTE or IDENTITYID, depending on whether we can map the identity to an Evernote
 * user at the time of creation.
 * </dd>
 * 
 * <dt>privilege</dt>
 * <dd>The privilege level at which the member will be joined, if it
 * turns out that the member is not already joined at a higher level.
 * Note that the <tt>identity</tt> field may not uniquely identify an
 * Evernote User ID, and so we won't know until the invitation is
 * redeemed whether or not the recipient already has privilege.</dd>
 * 
 * <dt>sharerUserId</dt>
 * <dd>The user id of the user who most recently shared this notebook
 * to this identity. This field is used by the service to convey information
 * to the user, so clients should treat it as read-only.</dd>
 * </dl>
 */
class InvitationShareRelationship
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'displayName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'recipientUserIdentity',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\UserIdentity',
        ),
        3 => array(
            'var' => 'privilege',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\NoteStore\ShareRelationshipPrivilegeLevel',
        ),
        5 => array(
            'var' => 'sharerUserId',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $displayName = null;
    /**
     * @var \EDAM\Types\UserIdentity
     */
    public $recipientUserIdentity = null;
    /**
     * @var int
     */
    public $privilege = null;
    /**
     * @var int
     */
    public $sharerUserId = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['displayName'])) {
                $this->displayName = $vals['displayName'];
            }
            if (isset($vals['recipientUserIdentity'])) {
                $this->recipientUserIdentity = $vals['recipientUserIdentity'];
            }
            if (isset($vals['privilege'])) {
                $this->privilege = $vals['privilege'];
            }
            if (isset($vals['sharerUserId'])) {
                $this->sharerUserId = $vals['sharerUserId'];
            }
        }
    }

    public function getName()
    {
        return 'InvitationShareRelationship';
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
                        $xfer += $input->readString($this->displayName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->recipientUserIdentity = new \EDAM\Types\UserIdentity();
                        $xfer += $this->recipientUserIdentity->read($input);
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
                case 5:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->sharerUserId);
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
        $xfer += $output->writeStructBegin('InvitationShareRelationship');
        if ($this->displayName !== null) {
            $xfer += $output->writeFieldBegin('displayName', TType::STRING, 1);
            $xfer += $output->writeString($this->displayName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->recipientUserIdentity !== null) {
            if (!is_object($this->recipientUserIdentity)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('recipientUserIdentity', TType::STRUCT, 2);
            $xfer += $this->recipientUserIdentity->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->privilege !== null) {
            $xfer += $output->writeFieldBegin('privilege', TType::I32, 3);
            $xfer += $output->writeI32($this->privilege);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sharerUserId !== null) {
            $xfer += $output->writeFieldBegin('sharerUserId', TType::I32, 5);
            $xfer += $output->writeI32($this->sharerUserId);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
