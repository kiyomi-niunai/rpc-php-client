<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: inbox.proto

namespace GPBMetadata;

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
�
inbox.protoinbox"

UIdRequest
uid ("�
InboxContent

id (
inbox_id (
sort (
type (	
title (	
content (	
icon (	
gift_id (

start_time	 (	
end_time
 (	"1
ListResponse!
list (2.inbox.InboxContent"V
AddInboxData
inbox_id (

start_time (	
end_time (	
params (	"<

AddRequest
uid (!
data (2.inbox.AddInboxData"A
BatchAddRequest!
data (2.inbox.AddInboxData
uid ("/
CommonResponse
code (
message (	"7
OperateRequest

id (
type (
uid (2�
Inbox.
list.inbox.UIdRequest.inbox.ListResponse7
operate.inbox.OperateRequest.inbox.CommonResponse/
add.inbox.AddRequest.inbox.CommonResponse9
batchAdd.inbox.BatchAddRequest.inbox.CommonResponseBZinboxbproto3'
        , true);

        static::$is_initialized = true;
    }
}

