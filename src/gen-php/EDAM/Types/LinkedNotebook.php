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
 * A link in a user's account that refers them to a public or
 * individual shared notebook in another user's account.
 * 
 * <dl>
 * <dt>shareName</dt>
 * <dd>The display name of the shared notebook. The link owner can change this.</dd>
 * 
 * <dt>username</dt>
 * <dd>The username of the user who owns the shared or public notebook.</dd>
 * 
 * <dt>shardId</dt>
 * <dd>The shard ID of the notebook if the notebook is not public.</dt>
 * 
 * <dt>uri</dt>
 * <dd>The identifier of the public notebook.</dd>
 * 
 * <dt>guid</dt>
 *   <dd>The unique identifier of this linked notebook.  Will be set whenever
 *   a linked notebook is retrieved from the service, but may be null when a client
 *   is creating a linked notebook.
 *   <br/>
 *   Length:  EDAM_GUID_LEN_MIN - EDAM_GUID_LEN_MAX
 *   <br/>
 *   Regex:  EDAM_GUID_REGEX
 *   </dd>
 * 
 * <dt>updateSequenceNum</dt>
 *   <dd>A number identifying the last transaction to
 *   modify the state of this object.  The USN values are sequential within an
 *   account, and can be used to compare the order of modifications within the
 *   service.
 *   </dd>
 * 
 * <dt>noteStoreUrl</dt>
 *   <dd>
 *   This field will contain the full URL that clients should use to make
 *   NoteStore requests to the server shard that contains that notebook's data.
 *   I.e. this is the URL that should be used to create the Thrift HTTP client
 *   transport to send messages to the NoteStore service for the account.
 *   </dd>
 * 
 * <dt>webApiUrlPrefix:</dt>
 *   <dd>
 *   This field will contain the initial part of the URLs that should be used
 *   to make requests to Evernote's thin client "web API", which provide
 *   optimized operations for clients that aren't capable of manipulating
 *   the full contents of accounts via the full Thrift data model. Clients
 *   should concatenate the relative path for the various servlets onto the
 *   end of this string to construct the full URL, as documented on our
 *   developer web site.
 *   </dd>
 * 
 * <dt>stack</dt>
 *   <dd>If this is set, then the notebook is visually contained within a stack
 *   of notebooks with this name.  All notebooks in the same account with the
 *   same 'stack' field are considered to be in the same stack.
 *   Notebooks with no stack set are "top level" and not contained within a
 *   stack.  The link owner can change this and this field is for the benefit
 *   of the link owner.
 *   </dd>
 * 
 * <dt>businessId</dt>
 *   <dd>If set, this will be the unique identifier for the business that owns
 *   the notebook to which the linked notebook refers.</dd>
 * 
 * <dt>sharedNotebookGlobalId</dt>
 *   <dd>The globally unique identifier (globalId) of the shared notebook that
 *   corresponds to the share key, or the GUID of the Notebook that the linked notebook
 *   refers to. This field must be filled in with the SharedNotebook.globalId or
 *   Notebook.GUID value when creating new LinkedNotebooks. This field replaces the
 *   deprecated "shareKey" field.
 *   </dd>
 * </dl>
 */
class LinkedNotebook
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        2 => array(
            'var' => 'shareName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'username',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'shardId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'sharedNotebookGlobalId',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        6 => array(
            'var' => 'uri',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'guid',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'updateSequenceNum',
            'isRequired' => false,
            'type' => TType::I32,
        ),
        9 => array(
            'var' => 'noteStoreUrl',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'webApiUrlPrefix',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        11 => array(
            'var' => 'stack',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        12 => array(
            'var' => 'businessId',
            'isRequired' => false,
            'type' => TType::I32,
        ),
    );

    /**
     * @var string
     */
    public $shareName = null;
    /**
     * @var string
     */
    public $username = null;
    /**
     * @var string
     */
    public $shardId = null;
    /**
     * @var string
     */
    public $sharedNotebookGlobalId = null;
    /**
     * @var string
     */
    public $uri = null;
    /**
     * @var string
     */
    public $guid = null;
    /**
     * @var int
     */
    public $updateSequenceNum = null;
    /**
     * @var string
     */
    public $noteStoreUrl = null;
    /**
     * @var string
     */
    public $webApiUrlPrefix = null;
    /**
     * @var string
     */
    public $stack = null;
    /**
     * @var int
     */
    public $businessId = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['shareName'])) {
                $this->shareName = $vals['shareName'];
            }
            if (isset($vals['username'])) {
                $this->username = $vals['username'];
            }
            if (isset($vals['shardId'])) {
                $this->shardId = $vals['shardId'];
            }
            if (isset($vals['sharedNotebookGlobalId'])) {
                $this->sharedNotebookGlobalId = $vals['sharedNotebookGlobalId'];
            }
            if (isset($vals['uri'])) {
                $this->uri = $vals['uri'];
            }
            if (isset($vals['guid'])) {
                $this->guid = $vals['guid'];
            }
            if (isset($vals['updateSequenceNum'])) {
                $this->updateSequenceNum = $vals['updateSequenceNum'];
            }
            if (isset($vals['noteStoreUrl'])) {
                $this->noteStoreUrl = $vals['noteStoreUrl'];
            }
            if (isset($vals['webApiUrlPrefix'])) {
                $this->webApiUrlPrefix = $vals['webApiUrlPrefix'];
            }
            if (isset($vals['stack'])) {
                $this->stack = $vals['stack'];
            }
            if (isset($vals['businessId'])) {
                $this->businessId = $vals['businessId'];
            }
        }
    }

    public function getName()
    {
        return 'LinkedNotebook';
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
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->shareName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->username);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->shardId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->sharedNotebookGlobalId);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->uri);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->guid);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->updateSequenceNum);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->noteStoreUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->webApiUrlPrefix);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->stack);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::I32) {
                        $xfer += $input->readI32($this->businessId);
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
        $xfer += $output->writeStructBegin('LinkedNotebook');
        if ($this->shareName !== null) {
            $xfer += $output->writeFieldBegin('shareName', TType::STRING, 2);
            $xfer += $output->writeString($this->shareName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->username !== null) {
            $xfer += $output->writeFieldBegin('username', TType::STRING, 3);
            $xfer += $output->writeString($this->username);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->shardId !== null) {
            $xfer += $output->writeFieldBegin('shardId', TType::STRING, 4);
            $xfer += $output->writeString($this->shardId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->sharedNotebookGlobalId !== null) {
            $xfer += $output->writeFieldBegin('sharedNotebookGlobalId', TType::STRING, 5);
            $xfer += $output->writeString($this->sharedNotebookGlobalId);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->uri !== null) {
            $xfer += $output->writeFieldBegin('uri', TType::STRING, 6);
            $xfer += $output->writeString($this->uri);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->guid !== null) {
            $xfer += $output->writeFieldBegin('guid', TType::STRING, 7);
            $xfer += $output->writeString($this->guid);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->updateSequenceNum !== null) {
            $xfer += $output->writeFieldBegin('updateSequenceNum', TType::I32, 8);
            $xfer += $output->writeI32($this->updateSequenceNum);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noteStoreUrl !== null) {
            $xfer += $output->writeFieldBegin('noteStoreUrl', TType::STRING, 9);
            $xfer += $output->writeString($this->noteStoreUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->webApiUrlPrefix !== null) {
            $xfer += $output->writeFieldBegin('webApiUrlPrefix', TType::STRING, 10);
            $xfer += $output->writeString($this->webApiUrlPrefix);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->stack !== null) {
            $xfer += $output->writeFieldBegin('stack', TType::STRING, 11);
            $xfer += $output->writeString($this->stack);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->businessId !== null) {
            $xfer += $output->writeFieldBegin('businessId', TType::I32, 12);
            $xfer += $output->writeI32($this->businessId);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
