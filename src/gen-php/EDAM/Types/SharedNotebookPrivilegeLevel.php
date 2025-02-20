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
 * Privilege levels for accessing shared notebooks.
 * 
 * Note that as of 2014-04, FULL_ACCESS is synonymous with BUSINESS_FULL_ACCESS.  If a
 * user is a member of a business and has FULL_ACCESS privileges, then they will
 * automatically be granted BUSINESS_FULL_ACCESS for notebooks in their business.  This
 * will happen implicitly when they attempt to access the corresponding notebooks of
 * the business.  BUSINESS_FULL_ACCESS is therefore deprecated.
 * 
 * READ_NOTEBOOK: Recipient is able to read the contents of the shared notebook
 *   but does not have access to information about other recipients of the
 *   notebook or the activity stream information.
 * 
 * MODIFY_NOTEBOOK_PLUS_ACTIVITY: Recipient has rights to read and modify the contents
 *   of the shared notebook, including the right to move notes to the trash and to create
 *   notes in the notebook.  The recipient can also access information about other
 *   recipients and the activity stream.
 * 
 * READ_NOTEBOOK_PLUS_ACTIVITY: Recipient has READ_NOTEBOOK rights and can also
 *   access information about other recipients and the activity stream.
 * 
 * GROUP: If the user belongs to a group, such as a Business, that has a defined
 *   privilege level, use the privilege level of the group as the privilege for
 *   the individual.
 * 
 * FULL_ACCESS: Recipient has full rights to the shared notebook and recipient lists,
 *   including privilege to revoke and create invitations and to change privilege
 *   levels on invitations for individuals.  For members of a business, FULL_ACCESS
 *   privilege on business notebooks also grants the ability to change how the notebook
 *   will appear when shared with the business, including the rights to share and
 *   unshare the notebook with the business.
 * 
 * BUSINESS_FULL_ACCESS: Deprecated.  See the note above about BUSINESS_FULL_ACCESS and
 *   FULL_ACCESS being synonymous.
 */
final class SharedNotebookPrivilegeLevel
{
    const READ_NOTEBOOK = 0;

    const MODIFY_NOTEBOOK_PLUS_ACTIVITY = 1;

    const READ_NOTEBOOK_PLUS_ACTIVITY = 2;

    const GROUP = 3;

    const FULL_ACCESS = 4;

    const BUSINESS_FULL_ACCESS = 5;

    static public $__names = array(
        0 => 'READ_NOTEBOOK',
        1 => 'MODIFY_NOTEBOOK_PLUS_ACTIVITY',
        2 => 'READ_NOTEBOOK_PLUS_ACTIVITY',
        3 => 'GROUP',
        4 => 'FULL_ACCESS',
        5 => 'BUSINESS_FULL_ACCESS',
    );
}

