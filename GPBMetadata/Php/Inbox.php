<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: php/inbox.proto

namespace GPBMetadata\Php;

class Inbox
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
?
php/inbox.protoinbox"

UIdRequest
uid ("?
InboxContent

id (
inbox_id (
type (	
sort (
title (	
icon (	
gift_id (!
rewards (2.inbox.ItemBonus

start_time	 (	
end_time
 (	"1
ListResponse!
list (2.inbox.InboxContent"9
	ItemBonus
item_id (
count (
type (	"S
	InboxData
inbox_id (

start_time (	
end_time (	
params (	"9

AddRequest
uid (
data (2.inbox.InboxData">
BatchAddRequest
data (2.inbox.InboxData
uid ("/
CommonResponse
code (
message (	"7
OperateRequest

id (
type (
uid (2?
Inbox.
list.inbox.UIdRequest.inbox.ListResponse7
operate.inbox.OperateRequest.inbox.CommonResponse/
add.inbox.AddRequest.inbox.CommonResponse9
batchAdd.inbox.BatchAddRequest.inbox.CommonResponseBZinboxbproto3'
        , true);

        static::$is_initialized = true;
    }
}

