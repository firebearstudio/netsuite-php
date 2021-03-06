<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class VendorSearchRow extends SearchRow {
    public $basic;
    public $accountJoin;
    public $campaignResponseJoin;
    public $contactJoin;
    public $contactPrimaryJoin;
    public $expAccountJoin;
    public $fileJoin;
    public $messagesJoin;
    public $mseSubsidiaryJoin;
    public $messagesFromJoin;
    public $messagesToJoin;
    public $taxRegistrationJoin;
    public $timeApproverJoin;
    public $transactionJoin;
    public $userJoin;
    public $userNotesJoin;
    public $customSearchJoin;
    static $paramtypesmap = array(
        "basic" => "VendorSearchRowBasic",
        "accountJoin" => "AccountSearchRowBasic",
        "campaignResponseJoin" => "CampaignSearchRowBasic",
        "contactJoin" => "ContactSearchRowBasic",
        "contactPrimaryJoin" => "ContactSearchRowBasic",
        "expAccountJoin" => "AccountSearchRowBasic",
        "fileJoin" => "FileSearchRowBasic",
        "messagesJoin" => "MessageSearchRowBasic",
        "mseSubsidiaryJoin" => "MseSubsidiarySearchRowBasic",
        "messagesFromJoin" => "MessageSearchRowBasic",
        "messagesToJoin" => "MessageSearchRowBasic",
        "taxRegistrationJoin" => "EntityTaxRegistrationSearchRowBasic",
        "timeApproverJoin" => "EmployeeSearchRowBasic",
        "transactionJoin" => "TransactionSearchRowBasic",
        "userJoin" => "EmployeeSearchRowBasic",
        "userNotesJoin" => "NoteSearchRowBasic",
        "customSearchJoin" => "CustomSearchRowBasic[]",
    );
}
