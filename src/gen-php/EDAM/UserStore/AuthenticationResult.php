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
 *  When an authentication (or re-authentication) is performed, this structure
 *  provides the result to the client.
 * <dl>
 *  <dt>currentTime:</dt>
 *    <dd>
 *    The server-side date and time when this result was
 *    generated.
 *    </dd>
 *  <dt>authenticationToken:</dt>
 *    <dd>
 *    Holds an opaque, ASCII-encoded token that can be
 *    used by the client to perform actions on a NoteStore.
 *    </dd>
 *  <dt>expiration:</dt>
 *    <dd>
 *    Holds the server-side date and time when the
 *    authentication token will expire.
 *    This time can be compared to "currentTime" to produce an expiration
 *    time that can be reconciled with the client's local clock.
 *    </dd>
 *  <dt>user:</dt>
 *    <dd>
 *    Holds the information about the account which was
 *    authenticated if this was a full authentication.  May be absent if this
 *    particular authentication did not require user information.
 *    </dd>
 *  <dt>publicUserInfo:</dt>
 *    <dd>
 *    If this authentication result was achieved without full permissions to
 *    access the full User structure, this field may be set to give back
 *    a more limited public set of data.
 *    </dd>
 *  <dt>noteStoreUrl:</dt>
 *    <dd>
 *    DEPRECATED - Client applications should use urls.noteStoreUrl.
 *    </dd>
 *  <dt>webApiUrlPrefix:</dt>
 *    <dd>
 *    DEPRECATED - Client applications should use urls.webApiUrlPrefix.
 *    </dd>
 *  <dt>secondFactorRequired:</dt>
 *    <dd>
 *    If set to true, this field indicates that the user has enabled two-factor
 *    authentication and must enter their second factor in order to complete
 *    authentication. In this case the value of authenticationResult will be
 *    a short-lived authentication token that may only be used to make a
 *    subsequent call to completeTwoFactorAuthentication.
 *    </dd>
 *  <dt>secondFactorDeliveryHint:</dt>
 *    <dd>
 *    When secondFactorRequired is set to true, this field may contain a string
 *    describing the second factor delivery method that the user has configured.
 *    This will typically be an obfuscated mobile device number, such as
 *    "(xxx) xxx-x095". This string can be displayed to the user to remind them
 *    how to obtain the required second factor.
 *    </dd>
 *  <dt>urls</dt>
 *    <dd>
 *    This structure will contain all of the URLs that clients need to make requests to the
 *    Evernote service on behalf of the authenticated User.
 *    </dd>
 *  </dl>
 */
class AuthenticationResult
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'currentTime',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        2 => array(
            'var' => 'authenticationToken',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'expiration',
            'isRequired' => true,
            'type' => TType::I64,
        ),
        4 => array(
            'var' => 'user',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\Types\User',
        ),
        5 => array(
            'var' => 'publicUserInfo',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\UserStore\PublicUserInfo',
        ),
        6 => array(
            'var' => 'noteStoreUrl',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        7 => array(
            'var' => 'webApiUrlPrefix',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        8 => array(
            'var' => 'secondFactorRequired',
            'isRequired' => false,
            'type' => TType::BOOL,
        ),
        9 => array(
            'var' => 'secondFactorDeliveryHint',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        10 => array(
            'var' => 'urls',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\EDAM\UserStore\UserUrls',
        ),
    );

    /**
     * @var int
     */
    public $currentTime = null;
    /**
     * @var string
     */
    public $authenticationToken = null;
    /**
     * @var int
     */
    public $expiration = null;
    /**
     * @var \EDAM\Types\User
     */
    public $user = null;
    /**
     * @var \EDAM\UserStore\PublicUserInfo
     */
    public $publicUserInfo = null;
    /**
     * @var string
     */
    public $noteStoreUrl = null;
    /**
     * @var string
     */
    public $webApiUrlPrefix = null;
    /**
     * @var bool
     */
    public $secondFactorRequired = null;
    /**
     * @var string
     */
    public $secondFactorDeliveryHint = null;
    /**
     * @var \EDAM\UserStore\UserUrls
     */
    public $urls = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['currentTime'])) {
                $this->currentTime = $vals['currentTime'];
            }
            if (isset($vals['authenticationToken'])) {
                $this->authenticationToken = $vals['authenticationToken'];
            }
            if (isset($vals['expiration'])) {
                $this->expiration = $vals['expiration'];
            }
            if (isset($vals['user'])) {
                $this->user = $vals['user'];
            }
            if (isset($vals['publicUserInfo'])) {
                $this->publicUserInfo = $vals['publicUserInfo'];
            }
            if (isset($vals['noteStoreUrl'])) {
                $this->noteStoreUrl = $vals['noteStoreUrl'];
            }
            if (isset($vals['webApiUrlPrefix'])) {
                $this->webApiUrlPrefix = $vals['webApiUrlPrefix'];
            }
            if (isset($vals['secondFactorRequired'])) {
                $this->secondFactorRequired = $vals['secondFactorRequired'];
            }
            if (isset($vals['secondFactorDeliveryHint'])) {
                $this->secondFactorDeliveryHint = $vals['secondFactorDeliveryHint'];
            }
            if (isset($vals['urls'])) {
                $this->urls = $vals['urls'];
            }
        }
    }

    public function getName()
    {
        return 'AuthenticationResult';
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
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->currentTime);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->authenticationToken);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::I64) {
                        $xfer += $input->readI64($this->expiration);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->user = new \EDAM\Types\User();
                        $xfer += $this->user->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->publicUserInfo = new \EDAM\UserStore\PublicUserInfo();
                        $xfer += $this->publicUserInfo->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->noteStoreUrl);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->webApiUrlPrefix);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::BOOL) {
                        $xfer += $input->readBool($this->secondFactorRequired);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 9:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->secondFactorDeliveryHint);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 10:
                    if ($ftype == TType::STRUCT) {
                        $this->urls = new \EDAM\UserStore\UserUrls();
                        $xfer += $this->urls->read($input);
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
        $xfer += $output->writeStructBegin('AuthenticationResult');
        if ($this->currentTime !== null) {
            $xfer += $output->writeFieldBegin('currentTime', TType::I64, 1);
            $xfer += $output->writeI64($this->currentTime);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->authenticationToken !== null) {
            $xfer += $output->writeFieldBegin('authenticationToken', TType::STRING, 2);
            $xfer += $output->writeString($this->authenticationToken);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->expiration !== null) {
            $xfer += $output->writeFieldBegin('expiration', TType::I64, 3);
            $xfer += $output->writeI64($this->expiration);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->user !== null) {
            if (!is_object($this->user)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('user', TType::STRUCT, 4);
            $xfer += $this->user->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->publicUserInfo !== null) {
            if (!is_object($this->publicUserInfo)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('publicUserInfo', TType::STRUCT, 5);
            $xfer += $this->publicUserInfo->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->noteStoreUrl !== null) {
            $xfer += $output->writeFieldBegin('noteStoreUrl', TType::STRING, 6);
            $xfer += $output->writeString($this->noteStoreUrl);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->webApiUrlPrefix !== null) {
            $xfer += $output->writeFieldBegin('webApiUrlPrefix', TType::STRING, 7);
            $xfer += $output->writeString($this->webApiUrlPrefix);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->secondFactorRequired !== null) {
            $xfer += $output->writeFieldBegin('secondFactorRequired', TType::BOOL, 8);
            $xfer += $output->writeBool($this->secondFactorRequired);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->secondFactorDeliveryHint !== null) {
            $xfer += $output->writeFieldBegin('secondFactorDeliveryHint', TType::STRING, 9);
            $xfer += $output->writeString($this->secondFactorDeliveryHint);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->urls !== null) {
            if (!is_object($this->urls)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('urls', TType::STRUCT, 10);
            $xfer += $this->urls->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
