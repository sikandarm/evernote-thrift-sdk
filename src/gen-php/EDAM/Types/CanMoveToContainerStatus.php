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
 * This enumeration defines the possible types of canMoveToContainer outcomes.
 * <p />
 * An outdated client is expected to signal a "Cannot Move, Please Upgrade To Learn Why"
 * like response to the user if an unknown enumeration value is received.
 * <dl>
 * <dt>CAN_BE_MOVED</dt>
 * <dd>Can move Notebook to Workspace.</dd>
 * <dt>INSUFFICIENT_ENTITY_PRIVILEGE</dt>
 * <dd>Can not move Notebook to Workspace, because either:
 *  a) Notebook not in Workspace and insufficient privilege on Notebook
 *  or b) Notebook in Workspace and membership on Workspace with insufficient privilege
 *  for move</dd>
 * <dt>INSUFFICIENT_CONTAINER_PRIVILEGE</dt>
 * <dd>Notebook in Workspace and no membership on Workspace.
 * </dd>
 * </dl>
 */
final class CanMoveToContainerStatus
{
    const CAN_BE_MOVED = 1;

    const INSUFFICIENT_ENTITY_PRIVILEGE = 2;

    const INSUFFICIENT_CONTAINER_PRIVILEGE = 3;

    static public $__names = array(
        1 => 'CAN_BE_MOVED',
        2 => 'INSUFFICIENT_ENTITY_PRIVILEGE',
        3 => 'INSUFFICIENT_CONTAINER_PRIVILEGE',
    );
}

