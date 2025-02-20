<?php
namespace EDAM\Types;

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
 * This structure captures information about the types of operations
 * that cannot be performed on a given notebook with a type of
 * authenticated access and credentials.  The values filled into this
 * structure are based on then-current values in the server database
 * for shared notebooks and notebook publishing records, as well as
 * information related to the authentication token.  Information from
 * the authentication token includes the application that is accessing
 * the server, as defined by the permissions granted by consumer (api)
 * key, and the method used to obtain the token, for example via
 * authenticateToSharedNotebook, authenticateToBusiness, etc.  Note
 * that changes to values in this structure that are the result of
 * shared notebook or publishing record changes are communicated to
 * the client via a change in the notebook USN during sync.  It is
 * important to use the same access method, parameters, and consumer
 * key in order obtain correct results from the sync engine.
 * 
 * The server has the final say on what is allowed as values may
 * change between calls to obtain NotebookRestrictions instances
 * and to operate on data on the service.
 * 
 * If the following are set and true, then the given restriction is
 * in effect, as accessed by the same authentication token from which
 * the values were obtained.
 * 
 * <dl>
 * <dt>noReadNotes</dt>
 *   <dd>The client is not able to read notes from the service and
 *   the notebook is write-only.
 *   </dd>
 * <dt>noCreateNotes</dt>
 *   <dd>The client may not create new notes in the notebook.
 *   </dd>
 * <dt>noUpdateNotes</dt>
 *   <dd>The client may not update notes currently in the notebook.
 *   </dd>
 * <dt>noExpungeNotes</dt>
 *   <dd>The client may not expunge notes currently in the notebook.
 *   </dd>
 * <dt>noShareNotes</dt>
 *   <dd>The client may not share notes in the notebook via the
 *   shareNote or createOrUpdateSharedNotes methods.
 *   </dd>
 * <dt>noEmailNotes</dt>
 *   <dd>The client may not e-mail notes by guid via the Evernote
 *   service by using the emailNote method.  Email notes by value
 *   by populating the note parameter instead.
 *   </dd>
 * <dt>noSendMessageToRecipients</dt>
 *   <dd>The client may not send messages to the share recipients of
 *   the notebook.
 *   </dd>
 * <dt>noUpdateNotebook</dt>
 *   <dd>The client may not update the Notebook object itself, for
 *   example, via the updateNotebook method.
 *   </dd>
 * <dt>noExpungeNotebook</dt>
 *   <dd>The client may not expunge the Notebook object itself, for
 *   example, via the expungeNotebook method.
 *   </dd>
 * <dt>noSetDefaultNotebook</dt>
 *   <dd>The client may not set this notebook to be the default notebook.
 *   The caller should leave Notebook.defaultNotebook unset.
 *   </dd>
 * <dt>noSetNotebookStack</dt>
 *   <dd>If the client is able to update the Notebook, the Notebook.stack
 *   value may not be set.
 *   </dd>
 * <dt>noPublishToPublic</dt>
 *   <dd>The client may not publish the notebook to the public.
 *   For example, business notebooks may not be shared publicly.
 *   </dd>
 * <dt>noPublishToBusinessLibrary</dt>
 *   <dd>The client may not publish the notebook to the business library.
 *   </dd>
 * <dt>noCreateTags</dt>
 *   <dd>The client may not complete an operation that results in a new tag
 *   being created in the owner's account.
 *   </dd>
 * <dt>noUpdateTags</dt>
 *   <dd>The client may not update tags in the owner's account.
 *   </dd>
 * <dt>noExpungeTags</dt>
 *   <dd>The client may not expunge tags in the owner's account.
 *   </dd>
 * <dt>noSetParentTag</dt>
 *   <dd>If the client is able to create or update tags in the owner's account,
 *   then they will not be able to set the parent tag.  Leave the value unset.
 *   </dd>
 * <dt>noCreateSharedNotebooks</dt>
 *   <dd>The client is unable to create shared notebooks for the notebook.
 *   </dd>
 * <dt>updateWhichSharedNotebookRestrictions</dt>
 *   <dd>Restrictions on which shared notebook instances can be updated.  If the
 *   value is not set or null, then the client can update any of the shared notebooks
 *   associated with the notebook on which the NotebookRestrictions are defined.
 *   See the enumeration for further details.
 *   </dd>
 * <dt>expungeWhichSharedNotebookRestrictions</dt>
 *   <dd>Restrictions on which shared notebook instances can be expunged.  If the
 *   value is not set or null, then the client can expunge any of the shared notebooks
 *   associated with the notebook on which the NotebookRestrictions are defined.
 *   See the enumeration for further details.
 *   </dd>
 * <dt>noShareNotesWithBusiness</dt>
 *   <dd>The client may not share notes in the notebook via the shareNoteWithBusiness
 *   method.
 *   </dd>
 * <dt>noRenameNotebook</dt>
 *   <dd>The client may not rename this notebook.</dd>
 * <dt>noSetInMyList</dt>
 *   <dd>clients may not change the NotebookRecipientSettings.inMyList settings for
 *   this notebook.</dd>
 * <dt>noSetContact</dt>
 *   <dd>The contact for this notebook may not be changed.</dd>
 * </dl>
 * <dt>canMoveToContainerRestrictions</dt>
 *   <dd>Specifies if the client can move this notebook to a container and if not,
 *   the reason why.</dd>
 * <dt>noCanMoveNote</dt>
 *   <dd>If set, the client cannot move a Note into or out of the Notebook.</dd>
 * </dl>
 */
class NotebookRestrictions
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'noReadNotes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        2 => array(
            'var' => 'noCreateNotes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        3 => array(
            'var' => 'noUpdateNotes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        4 => array(
            'var' => 'noExpungeNotes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        5 => array(
            'var' => 'noShareNotes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        6 => array(
            'var' => 'noEmailNotes',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        7 => array(
            'var' => 'noSendMessageToRecipients',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        8 => array(
            'var' => 'noUpdateNotebook',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        9 => array(
            'var' => 'noExpungeNotebook',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        10 => array(
            'var' => 'noSetDefaultNotebook',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        11 => array(
            'var' => 'noSetNotebookStack',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        12 => array(
            'var' => 'noPublishToPublic',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        13 => array(
            'var' => 'noPublishToBusinessLibrary',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        14 => array(
            'var' => 'noCreateTags',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        15 => array(
            'var' => 'noUpdateTags',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        16 => array(
            'var' => 'noExpungeTags',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        17 => array(
            'var' => 'noSetParentTag',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        18 => array(
            'var' => 'noCreateSharedNotebooks',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        19 => array(
            'var' => 'updateWhichSharedNotebookRestrictions',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\Types\SharedNotebookInstanceRestrictions',
        ),
        20 => array(
            'var' => 'expungeWhichSharedNotebookRestrictions',
            'isRequired' => false,
            'type' => TType::I32,
            'class' => '\EDAM\Types\SharedNotebookInstanceRestrictions',
        ),
        21 => array(
            'var' => 'noShareNotesWithBusiness',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        22 => array(
            'var' => 'noRenameNotebook',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        23 => array(
            'var' => 'noSetInMyList',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        24 => array(
            'var' => 'noChangeContact',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        26 => array(
            'var' => 'canMoveToContainerRestrictions',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\CanMoveToContainerRestrictions',
        ),
        27 => array(
            'var' => 'noSetReminderNotifyEmail',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        28 => array(
            'var' => 'noSetReminderNotifyInApp',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        29 => array(
            'var' => 'noSetRecipientSettingsStack',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        30 => array(
            'var' => 'noCanMoveNote',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var bool
     */
    public $noReadNotes = null;
    /**
     * @var bool
     */
    public $noCreateNotes = null;
    /**
     * @var bool
     */
    public $noUpdateNotes = null;
    /**
     * @var bool
     */
    public $noExpungeNotes = null;
    /**
     * @var bool
     */
    public $noShareNotes = null;
    /**
     * @var bool
     */
    public $noEmailNotes = null;
    /**
     * @var bool
     */
    public $noSendMessageToRecipients = null;
    /**
     * @var bool
     */
    public $noUpdateNotebook = null;
    /**
     * @var bool
     */
    public $noExpungeNotebook = null;
    /**
     * @var bool
     */
    public $noSetDefaultNotebook = null;
    /**
     * @var bool
     */
    public $noSetNotebookStack = null;
    /**
     * @var bool
     */
    public $noPublishToPublic = null;
    /**
     * @var bool
     */
    public $noPublishToBusinessLibrary = null;
    /**
     * @var bool
     */
    public $noCreateTags = null;
    /**
     * @var bool
     */
    public $noUpdateTags = null;
    /**
     * @var bool
     */
    public $noExpungeTags = null;
    /**
     * @var bool
     */
    public $noSetParentTag = null;
    /**
     * @var bool
     */
    public $noCreateSharedNotebooks = null;
    /**
     * @var int
     */
    public $updateWhichSharedNotebookRestrictions = null;
    /**
     * @var int
     */
    public $expungeWhichSharedNotebookRestrictions = null;
    /**
     * @var bool
     */
    public $noShareNotesWithBusiness = null;
    /**
     * @var bool
     */
    public $noRenameNotebook = null;
    /**
     * @var bool
     */
    public $noSetInMyList = null;
    /**
     * @var bool
     */
    public $noChangeContact = null;
    /**
     * @var \EDAM\Types\CanMoveToContainerRestrictions
     */
    public $canMoveToContainerRestrictions = null;
    /**
     * @var bool
     */
    public $noSetReminderNotifyEmail = null;
    /**
     * @var bool
     */
    public $noSetReminderNotifyInApp = null;
    /**
     * @var bool
     */
    public $noSetRecipientSettingsStack = null;
    /**
     * @var bool
     */
    public $noCanMoveNote = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['noReadNotes'])) {
                $this->noReadNotes = $vals['noReadNotes'];
            }
            if (isset($vals['noCreateNotes'])) {
                $this->noCreateNotes = $vals['noCreateNotes'];
            }
            if (isset($vals['noUpdateNotes'])) {
                $this->noUpdateNotes = $vals['noUpdateNotes'];
            }
            if (isset($vals['noExpungeNotes'])) {
                $this->noExpungeNotes = $vals['noExpungeNotes'];
            }
            if (isset($vals['noShareNotes'])) {
                $this->noShareNotes = $vals['noShareNotes'];
            }
            if (isset($vals['noEmailNotes'])) {
                $this->noEmailNotes = $vals['noEmailNotes'];
            }
            if (isset($vals['noSendMessageToRecipients'])) {
                $this->noSendMessageToRecipients = $vals['noSendMessageToRecipients'];
            }
            if (isset($vals['noUpdateNotebook'])) {
                $this->noUpdateNotebook = $vals['noUpdateNotebook'];
            }
            if (isset($vals['noExpungeNotebook'])) {
                $this->noExpungeNotebook = $vals['noExpungeNotebook'];
            }
            if (isset($vals['noSetDefaultNotebook'])) {
                $this->noSetDefaultNotebook = $vals['noSetDefaultNotebook'];
            }
            if (isset($vals['noSetNotebookStack'])) {
                $this->noSetNotebookStack = $vals['noSetNotebookStack'];
            }
            if (isset($vals['noPublishToPublic'])) {
                $this->noPublishToPublic = $vals['noPublishToPublic'];
            }
            if (isset($vals['noPublishToBusinessLibrary'])) {
                $this->noPublishToBusinessLibrary = $vals['noPublishToBusinessLibrary'];
            }
            if (isset($vals['noCreateTags'])) {
                $this->noCreateTags = $vals['noCreateTags'];
            }
            if (isset($vals['noUpdateTags'])) {
                $this->noUpdateTags = $vals['noUpdateTags'];
            }
            if (isset($vals['noExpungeTags'])) {
                $this->noExpungeTags = $vals['noExpungeTags'];
            }
            if (isset($vals['noSetParentTag'])) {
                $this->noSetParentTag = $vals['noSetParentTag'];
            }
            if (isset($vals['noCreateSharedNotebooks'])) {
                $this->noCreateSharedNotebooks = $vals['noCreateSharedNotebooks'];
            }
            if (isset($vals['updateWhichSharedNotebookRestrictions'])) {
                $this->updateWhichSharedNotebookRestrictions = $vals['updateWhichSharedNotebookRestrictions'];
            }
            if (isset($vals['expungeWhichSharedNotebookRestrictions'])) {
                $this->expungeWhichSharedNotebookRestrictions = $vals['expungeWhichSharedNotebookRestrictions'];
            }
            if (isset($vals['noShareNotesWithBusiness'])) {
                $this->noShareNotesWithBusiness = $vals['noShareNotesWithBusiness'];
            }
            if (isset($vals['noRenameNotebook'])) {
                $this->noRenameNotebook = $vals['noRenameNotebook'];
            }
            if (isset($vals['noSetInMyList'])) {
                $this->noSetInMyList = $vals['noSetInMyList'];
            }
            if (isset($vals['noChangeContact'])) {
                $this->noChangeContact = $vals['noChangeContact'];
            }
            if (isset($vals['canMoveToContainerRestrictions'])) {
                $this->canMoveToContainerRestrictions = $vals['canMoveToContainerRestrictions'];
            }
            if (isset($vals['noSetReminderNotifyEmail'])) {
                $this->noSetReminderNotifyEmail = $vals['noSetReminderNotifyEmail'];
            }
            if (isset($vals['noSetReminderNotifyInApp'])) {
                $this->noSetReminderNotifyInApp = $vals['noSetReminderNotifyInApp'];
            }
            if (isset($vals['noSetRecipientSettingsStack'])) {
                $this->noSetRecipientSettingsStack = $vals['noSetRecipientSettingsStack'];
            }
            if (isset($vals['noCanMoveNote'])) {
                $this->noCanMoveNote = $vals['noCanMoveNote'];
            }
        }
    }

    public function getName()
    {
        return 'NotebookRestrictions';
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
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noReadNotes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noCreateNotes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noUpdateNotes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noExpungeNotes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noShareNotes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noEmailNotes);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSendMessageToRecipients);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noUpdateNotebook);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noExpungeNotebook);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetDefaultNotebook);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetNotebookStack);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noPublishToPublic);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noPublishToBusinessLibrary);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 14:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noCreateTags);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 15:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noUpdateTags);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 16:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noExpungeTags);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 17:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetParentTag);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 18:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noCreateSharedNotebooks);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 19:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->updateWhichSharedNotebookRestrictions);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 20:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->expungeWhichSharedNotebookRestrictions);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 21:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noShareNotesWithBusiness);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 22:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noRenameNotebook);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 23:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetInMyList);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 24:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noChangeContact);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 26:
                    if ($ftype == TType::STRUCT) {
                        $this->canMoveToContainerRestrictions = new \EDAM\Types\CanMoveToContainerRestrictions();
                        $xfer += $this->canMoveToContainerRestrictions->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 27:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetReminderNotifyEmail);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 28:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetReminderNotifyInApp);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 29:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noSetRecipientSettingsStack);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 30:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->noCanMoveNote);
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
        $xfer += $output->writeStructBegin('NotebookRestrictions');
        if ($this->noReadNotes !== null) {
            $xfer += $output->writeFieldBegin('noReadNotes', TType::BOOL, 1);
            $xfer += $output->writeBool($this->noReadNotes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noCreateNotes !== null) {
            $xfer += $output->writeFieldBegin('noCreateNotes', TType::BOOL, 2);
            $xfer += $output->writeBool($this->noCreateNotes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noUpdateNotes !== null) {
            $xfer += $output->writeFieldBegin('noUpdateNotes', TType::BOOL, 3);
            $xfer += $output->writeBool($this->noUpdateNotes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noExpungeNotes !== null) {
            $xfer += $output->writeFieldBegin('noExpungeNotes', TType::BOOL, 4);
            $xfer += $output->writeBool($this->noExpungeNotes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noShareNotes !== null) {
            $xfer += $output->writeFieldBegin('noShareNotes', TType::BOOL, 5);
            $xfer += $output->writeBool($this->noShareNotes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noEmailNotes !== null) {
            $xfer += $output->writeFieldBegin('noEmailNotes', TType::BOOL, 6);
            $xfer += $output->writeBool($this->noEmailNotes);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSendMessageToRecipients !== null) {
            $xfer += $output->writeFieldBegin('noSendMessageToRecipients', TType::BOOL, 7);
            $xfer += $output->writeBool($this->noSendMessageToRecipients);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noUpdateNotebook !== null) {
            $xfer += $output->writeFieldBegin('noUpdateNotebook', TType::BOOL, 8);
            $xfer += $output->writeBool($this->noUpdateNotebook);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noExpungeNotebook !== null) {
            $xfer += $output->writeFieldBegin('noExpungeNotebook', TType::BOOL, 9);
            $xfer += $output->writeBool($this->noExpungeNotebook);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetDefaultNotebook !== null) {
            $xfer += $output->writeFieldBegin('noSetDefaultNotebook', TType::BOOL, 10);
            $xfer += $output->writeBool($this->noSetDefaultNotebook);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetNotebookStack !== null) {
            $xfer += $output->writeFieldBegin('noSetNotebookStack', TType::BOOL, 11);
            $xfer += $output->writeBool($this->noSetNotebookStack);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noPublishToPublic !== null) {
            $xfer += $output->writeFieldBegin('noPublishToPublic', TType::BOOL, 12);
            $xfer += $output->writeBool($this->noPublishToPublic);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noPublishToBusinessLibrary !== null) {
            $xfer += $output->writeFieldBegin('noPublishToBusinessLibrary', TType::BOOL, 13);
            $xfer += $output->writeBool($this->noPublishToBusinessLibrary);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noCreateTags !== null) {
            $xfer += $output->writeFieldBegin('noCreateTags', TType::BOOL, 14);
            $xfer += $output->writeBool($this->noCreateTags);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noUpdateTags !== null) {
            $xfer += $output->writeFieldBegin('noUpdateTags', TType::BOOL, 15);
            $xfer += $output->writeBool($this->noUpdateTags);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noExpungeTags !== null) {
            $xfer += $output->writeFieldBegin('noExpungeTags', TType::BOOL, 16);
            $xfer += $output->writeBool($this->noExpungeTags);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetParentTag !== null) {
            $xfer += $output->writeFieldBegin('noSetParentTag', TType::BOOL, 17);
            $xfer += $output->writeBool($this->noSetParentTag);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noCreateSharedNotebooks !== null) {
            $xfer += $output->writeFieldBegin('noCreateSharedNotebooks', TType::BOOL, 18);
            $xfer += $output->writeBool($this->noCreateSharedNotebooks);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->updateWhichSharedNotebookRestrictions !== null) {
            $xfer += $output->writeFieldBegin('updateWhichSharedNotebookRestrictions', TType::I32, 19);
            $xfer += $output->writeI32($this->updateWhichSharedNotebookRestrictions);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->expungeWhichSharedNotebookRestrictions !== null) {
            $xfer += $output->writeFieldBegin('expungeWhichSharedNotebookRestrictions', TType::I32, 20);
            $xfer += $output->writeI32($this->expungeWhichSharedNotebookRestrictions);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noShareNotesWithBusiness !== null) {
            $xfer += $output->writeFieldBegin('noShareNotesWithBusiness', TType::BOOL, 21);
            $xfer += $output->writeBool($this->noShareNotesWithBusiness);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noRenameNotebook !== null) {
            $xfer += $output->writeFieldBegin('noRenameNotebook', TType::BOOL, 22);
            $xfer += $output->writeBool($this->noRenameNotebook);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetInMyList !== null) {
            $xfer += $output->writeFieldBegin('noSetInMyList', TType::BOOL, 23);
            $xfer += $output->writeBool($this->noSetInMyList);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noChangeContact !== null) {
            $xfer += $output->writeFieldBegin('noChangeContact', TType::BOOL, 24);
            $xfer += $output->writeBool($this->noChangeContact);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->canMoveToContainerRestrictions !== null) {
            if (!is_object($this->canMoveToContainerRestrictions)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('canMoveToContainerRestrictions', TType::STRUCT, 26);
            $xfer += $this->canMoveToContainerRestrictions->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetReminderNotifyEmail !== null) {
            $xfer += $output->writeFieldBegin('noSetReminderNotifyEmail', TType::BOOL, 27);
            $xfer += $output->writeBool($this->noSetReminderNotifyEmail);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetReminderNotifyInApp !== null) {
            $xfer += $output->writeFieldBegin('noSetReminderNotifyInApp', TType::BOOL, 28);
            $xfer += $output->writeBool($this->noSetReminderNotifyInApp);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noSetRecipientSettingsStack !== null) {
            $xfer += $output->writeFieldBegin('noSetRecipientSettingsStack', TType::BOOL, 29);
            $xfer += $output->writeBool($this->noSetRecipientSettingsStack);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noCanMoveNote !== null) {
            $xfer += $output->writeFieldBegin('noCanMoveNote', TType::BOOL, 30);
            $xfer += $output->writeBool($this->noCanMoveNote);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
