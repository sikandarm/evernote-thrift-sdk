<?php
namespace EDAM\UserStore;

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
 *  This structure describes a collection of bootstrap settings.
 * <dl>
 *  <dt>serviceHost:</dt>
 *    <dd>
 *    The hostname and optional port for composing Evernote web service URLs.
 *    This URL can be used to access the UserStore and related services,
 *    but must not be used to compose the NoteStore URL. Client applications
 *    must handle serviceHost values that include only the hostname
 *    (e.g. www.evernote.com) or both the hostname and port (e.g. www.evernote.com:8080).
 *    If no port is specified, or if port 443 is specified, client applications must
 *    use the scheme "https" when composing URLs. Otherwise, a client must use the
 *    scheme "http".
 *  </dd>
 *  <dt>marketingUrl:</dt>
 *    <dd>
 *    The URL stem for the Evernote corporate marketing website, e.g. http://www.evernote.com.
 *    This stem can be used to compose website URLs. For example, the URL of the Evernote
 *    Trunk is composed by appending "/about/trunk/" to the value of marketingUrl.
 *    </dd>
 *  <dt>supportUrl:</dt>
 *    <dd>
 *    The full URL for the Evernote customer support website, e.g. https://support.evernote.com.
 *    </dd>
 *  <dt>accountEmailDomain:</dt>
 *    <dd>
 *    The domain used for an Evernote user's incoming email address, which allows notes to
 *    be emailed into an account. E.g. m.evernote.com.
 *    </dd>
 *  <dt>enableFacebookSharing:</dt>
 *    <dd>
 *    Whether the client application should enable sharing of notes on Facebook.
 *    </dd>
 *  <dt>enableGiftSubscriptions:</dt>
 *    <dd>
 *    Whether the client application should enable gift subscriptions.
 *    </dd>
 *  <dt>enableSupportTickets:</dt>
 *    <dd>
 *    Whether the client application should enable in-client creation of support tickets.
 *    </dd>
 *  <dt>enableSharedNotebooks:</dt>
 *    <dd>
 *    Whether the client application should enable shared notebooks.
 *    </dd>
 *  <dt>enableSingleNoteSharing:</dt>
 *    <dd>
 *    Whether the client application should enable single note sharing.
 *    </dd>
 *  <dt>enableSponsoredAccounts:</dt>
 *    <dd>
 *    Whether the client application should enable sponsored accounts.
 *    </dd>
 *  <dt>enableTwitterSharing:</dt>
 *    <dd>
 *    Whether the client application should enable sharing of notes on Twitter.
 *    </dd>
 *  <dt>enableGoogle:</dt>
 *    <dd>
 *    Whether the client application should enable authentication with Google,
 *    for example to allow integration with a user's Gmail contacts.
 *  </dl>
 */
class BootstrapSettings
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'serviceHost',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        2 => array(
            'var' => 'marketingUrl',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'supportUrl',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'accountEmailDomain',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        5 => array(
            'var' => 'enableFacebookSharing',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        6 => array(
            'var' => 'enableGiftSubscriptions',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        7 => array(
            'var' => 'enableSupportTickets',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        8 => array(
            'var' => 'enableSharedNotebooks',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        9 => array(
            'var' => 'enableSingleNoteSharing',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        10 => array(
            'var' => 'enableSponsoredAccounts',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        11 => array(
            'var' => 'enableTwitterSharing',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        12 => array(
            'var' => 'enableLinkedInSharing',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        13 => array(
            'var' => 'enablePublicNotebooks',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        16 => array(
            'var' => 'enableGoogle',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
    );

    /**
     * @var string
     */
    public $serviceHost = null;
    /**
     * @var string
     */
    public $marketingUrl = null;
    /**
     * @var string
     */
    public $supportUrl = null;
    /**
     * @var string
     */
    public $accountEmailDomain = null;
    /**
     * @var bool
     */
    public $enableFacebookSharing = null;
    /**
     * @var bool
     */
    public $enableGiftSubscriptions = null;
    /**
     * @var bool
     */
    public $enableSupportTickets = null;
    /**
     * @var bool
     */
    public $enableSharedNotebooks = null;
    /**
     * @var bool
     */
    public $enableSingleNoteSharing = null;
    /**
     * @var bool
     */
    public $enableSponsoredAccounts = null;
    /**
     * @var bool
     */
    public $enableTwitterSharing = null;
    /**
     * @var bool
     */
    public $enableLinkedInSharing = null;
    /**
     * @var bool
     */
    public $enablePublicNotebooks = null;
    /**
     * @var bool
     */
    public $enableGoogle = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['serviceHost'])) {
                $this->serviceHost = $vals['serviceHost'];
            }
            if (isset($vals['marketingUrl'])) {
                $this->marketingUrl = $vals['marketingUrl'];
            }
            if (isset($vals['supportUrl'])) {
                $this->supportUrl = $vals['supportUrl'];
            }
            if (isset($vals['accountEmailDomain'])) {
                $this->accountEmailDomain = $vals['accountEmailDomain'];
            }
            if (isset($vals['enableFacebookSharing'])) {
                $this->enableFacebookSharing = $vals['enableFacebookSharing'];
            }
            if (isset($vals['enableGiftSubscriptions'])) {
                $this->enableGiftSubscriptions = $vals['enableGiftSubscriptions'];
            }
            if (isset($vals['enableSupportTickets'])) {
                $this->enableSupportTickets = $vals['enableSupportTickets'];
            }
            if (isset($vals['enableSharedNotebooks'])) {
                $this->enableSharedNotebooks = $vals['enableSharedNotebooks'];
            }
            if (isset($vals['enableSingleNoteSharing'])) {
                $this->enableSingleNoteSharing = $vals['enableSingleNoteSharing'];
            }
            if (isset($vals['enableSponsoredAccounts'])) {
                $this->enableSponsoredAccounts = $vals['enableSponsoredAccounts'];
            }
            if (isset($vals['enableTwitterSharing'])) {
                $this->enableTwitterSharing = $vals['enableTwitterSharing'];
            }
            if (isset($vals['enableLinkedInSharing'])) {
                $this->enableLinkedInSharing = $vals['enableLinkedInSharing'];
            }
            if (isset($vals['enablePublicNotebooks'])) {
                $this->enablePublicNotebooks = $vals['enablePublicNotebooks'];
            }
            if (isset($vals['enableGoogle'])) {
                $this->enableGoogle = $vals['enableGoogle'];
            }
        }
    }

    public function getName()
    {
        return 'BootstrapSettings';
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
                        $xfer += $input->readString($this->serviceHost);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->marketingUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->supportUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->accountEmailDomain);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableFacebookSharing);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableGiftSubscriptions);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableSupportTickets);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableSharedNotebooks);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableSingleNoteSharing);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableSponsoredAccounts);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 11:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableTwitterSharing);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 12:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableLinkedInSharing);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 13:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enablePublicNotebooks);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 16:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->enableGoogle);
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
        $xfer += $output->writeStructBegin('BootstrapSettings');
        if ($this->serviceHost !== null) {
            $xfer += $output->writeFieldBegin('serviceHost', TType::STRING, 1);
            $xfer += $output->writeString($this->serviceHost);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->marketingUrl !== null) {
            $xfer += $output->writeFieldBegin('marketingUrl', TType::STRING, 2);
            $xfer += $output->writeString($this->marketingUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->supportUrl !== null) {
            $xfer += $output->writeFieldBegin('supportUrl', TType::STRING, 3);
            $xfer += $output->writeString($this->supportUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->accountEmailDomain !== null) {
            $xfer += $output->writeFieldBegin('accountEmailDomain', TType::STRING, 4);
            $xfer += $output->writeString($this->accountEmailDomain);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableFacebookSharing !== null) {
            $xfer += $output->writeFieldBegin('enableFacebookSharing', TType::BOOL, 5);
            $xfer += $output->writeBool($this->enableFacebookSharing);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableGiftSubscriptions !== null) {
            $xfer += $output->writeFieldBegin('enableGiftSubscriptions', TType::BOOL, 6);
            $xfer += $output->writeBool($this->enableGiftSubscriptions);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableSupportTickets !== null) {
            $xfer += $output->writeFieldBegin('enableSupportTickets', TType::BOOL, 7);
            $xfer += $output->writeBool($this->enableSupportTickets);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableSharedNotebooks !== null) {
            $xfer += $output->writeFieldBegin('enableSharedNotebooks', TType::BOOL, 8);
            $xfer += $output->writeBool($this->enableSharedNotebooks);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableSingleNoteSharing !== null) {
            $xfer += $output->writeFieldBegin('enableSingleNoteSharing', TType::BOOL, 9);
            $xfer += $output->writeBool($this->enableSingleNoteSharing);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableSponsoredAccounts !== null) {
            $xfer += $output->writeFieldBegin('enableSponsoredAccounts', TType::BOOL, 10);
            $xfer += $output->writeBool($this->enableSponsoredAccounts);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableTwitterSharing !== null) {
            $xfer += $output->writeFieldBegin('enableTwitterSharing', TType::BOOL, 11);
            $xfer += $output->writeBool($this->enableTwitterSharing);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableLinkedInSharing !== null) {
            $xfer += $output->writeFieldBegin('enableLinkedInSharing', TType::BOOL, 12);
            $xfer += $output->writeBool($this->enableLinkedInSharing);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enablePublicNotebooks !== null) {
            $xfer += $output->writeFieldBegin('enablePublicNotebooks', TType::BOOL, 13);
            $xfer += $output->writeBool($this->enablePublicNotebooks);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->enableGoogle !== null) {
            $xfer += $output->writeFieldBegin('enableGoogle', TType::BOOL, 16);
            $xfer += $output->writeBool($this->enableGoogle);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
