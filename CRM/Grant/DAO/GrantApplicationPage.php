<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from /home/seamus/buildkit/build/47-test/web/sites/default/files/civicrm/ext/biz.jmaconsulting.grantapplications/xml/schema/CRM/Grantapplications/GrantApplicationPage.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:252976d7540e7735a96c37f38d75190c)
 */

/**
 * Database access object for the GrantApplicationPage entity.
 */
class CRM_Grant_DAO_GrantApplicationPage extends CRM_Core_DAO {

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_grant_app_page';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * Grant Application Page ID
   *
   * @var int
   */
  public $id;

  /**
   * Grant Application Page title. For top of page display.
   *
   * @var string
   */
  public $title;

  /**
   * Text and html allowed. Displayed below title.
   *
   * @var text
   */
  public $intro_text;

  /**
   * Text and html allowed. Displayed at the bottom of the first page of the grant application wizard.
   *
   * @var text
   */
  public $footer_text;

  /**
   * Grant type assigned to applications submitted via this page.
   *
   * @var int
   */
  public $grant_type_id;

  /**
   * Default amount of grant applied for.
   *
   * @var float
   */
  public $default_amount;

  /**
   * Does this page have a Save as Draft button?
   *
   * @var bool
   */
  public $is_draft;

  /**
   * Title for Save as Draft page (header title tag, and display at the top of the page).
   *
   * @var string
   */
  public $draft_title;

  /**
   * Text and html allowed. Displayed above application fields on Save as Draft page
   *
   * @var text
   */
  public $draft_text;

  /**
   * Text and html allowed. Displayed at the bottom of the Save as Draft page.
   *
   * @var text
   */
  public $draft_footer;

  /**
   * Title for Thank-you page (header title tag, and display at the top of the page).
   *
   * @var string
   */
  public $thankyou_title;

  /**
   * Text and html allowed. Displayed above result on success page
   *
   * @var text
   */
  public $thankyou_text;

  /**
   * Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.
   *
   * @var text
   */
  public $thankyou_footer;

  /**
   * Text and html allowed. Displayed above result on confirmation page
   *
   * @var text
   */
  public $confirm_text;

  /**
   * Text and html allowed. displayed at the bottom of the confirmation page.
   *
   * @var text
   */
  public $confirm_footer;

  /**
   * If true, receipt is automatically emailed to contact on success
   *
   * @var bool
   */
  public $is_email_receipt;

  /**
   * FROM email name used for receipts generated by applications to this grant application page.
   *
   * @var string
   */
  public $receipt_from_name;

  /**
   * FROM email address used for receipts generated by applications to this grant application page.
   *
   * @var string
   */
  public $receipt_from_email;

  /**
   * Comma-separated list of email addresses to cc each time a receipt is sent
   *
   * @var string
   */
  public $cc_receipt;

  /**
   * Comma-separated list of email addresses to bcc each time a receipt is sent
   *
   * @var string
   */
  public $bcc_receipt;

  /**
   * Text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now
   *
   * @var text
   */
  public $receipt_text;

  /**
   * Is this grant application page active?
   *
   * @var bool
   */
  public $is_active;

  /**
   * Date and time that this page starts.
   *
   * @var datetime
   */
  public $start_date;

  /**
   * Date and time that this page ends. May be NULL if no defined end date/time
   *
   * @var datetime
   */
  public $end_date;

  /**
   * FK to civicrm_contact, who created this grant application page
   *
   * @var int
   */
  public $created_id;

  /**
   * Date and time that grant application page was created.
   *
   * @var datetime
   */
  public $created_date;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_grant_app_page';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   */
  public static function getEntityTitle() {
    return ts('Grant Application Pages');
  }

  /**
   * Returns foreign keys and entity references.
   *
   * @return array
   *   [CRM_Core_Reference_Interface]
   */
  public static function getReferenceColumns() {
    if (!isset(Civi::$statics[__CLASS__]['links'])) {
      Civi::$statics[__CLASS__]['links'] = static::createReferenceColumns(__CLASS__);
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'created_id', 'civicrm_contact', 'id');
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'links_callback', Civi::$statics[__CLASS__]['links']);
    }
    return Civi::$statics[__CLASS__]['links'];
  }

  /**
   * Returns all the column names of this table
   *
   * @return array
   */
  public static function &fields() {
    if (!isset(Civi::$statics[__CLASS__]['fields'])) {
      Civi::$statics[__CLASS__]['fields'] = [
        'id' => [
          'name' => 'id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Grant Application Page ID'),
          'required' => TRUE,
          'where' => 'civicrm_grant_app_page.id',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'title' => [
          'name' => 'title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Title'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Grant Application Page title. For top of page display.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.title',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'text',
          ],
          'add' => NULL,
        ],
        'intro_text' => [
          'name' => 'intro_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Intro Text'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. Displayed below title.'),
          'rows' => 4,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.intro_text',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'footer_text' => [
          'name' => 'footer_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Footer Text'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. Displayed at the bottom of the first page of the grant application wizard.'),
          'rows' => 4,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.footer_text',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'grant_type_id' => [
          'name' => 'grant_type_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Grant Type'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Grant type assigned to applications submitted via this page.'),
          'required' => TRUE,
          'where' => 'civicrm_grant_app_page.grant_type_id',
          'export' => TRUE,
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'Select',
          ],
          'pseudoconstant' => [
            'optionGroupName' => 'grant_type',
            'optionEditPath' => 'civicrm/admin/options/grant_type',
          ],
          'add' => '1.8',
        ],
        'default_amount' => [
          'name' => 'default_amount',
          'type' => CRM_Utils_Type::T_MONEY,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Amount'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Default amount of grant applied for.'),
          'precision' => [
            20,
            2,
          ],
          'where' => 'civicrm_grant_app_page.default_amount',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'Text',
          ],
          'add' => '1.8',
        ],
        'is_draft' => [
          'name' => 'is_draft',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Does this page have a Save as Draft button?'),
          'where' => 'civicrm_grant_app_page.is_draft',
          'default' => '0',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'draft_title' => [
          'name' => 'draft_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Draft Title'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Title for Save as Draft page (header title tag, and display at the top of the page).'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.draft_title',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'text',
          ],
          'add' => NULL,
        ],
        'draft_text' => [
          'name' => 'draft_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Draft Text'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. Displayed above application fields on Save as Draft page'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.draft_text',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'draft_footer' => [
          'name' => 'draft_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Draft Footer'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. Displayed at the bottom of the Save as Draft page.'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.draft_footer',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'thankyou_title' => [
          'name' => 'thankyou_title',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Thankyou Title'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Title for Thank-you page (header title tag, and display at the top of the page).'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.thankyou_title',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'text',
          ],
          'add' => NULL,
        ],
        'thankyou_text' => [
          'name' => 'thankyou_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Thankyou Text'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. Displayed above result on success page'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.thankyou_text',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'thankyou_footer' => [
          'name' => 'thankyou_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Thankyou Footer'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. displayed at the bottom of the success page. Common usage is to include link(s) to other pages such as tell-a-friend, etc.'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.thankyou_footer',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'confirm_text' => [
          'name' => 'confirm_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Confirm Text'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. Displayed above result on confirmation page'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.confirm_text',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'confirm_footer' => [
          'name' => 'confirm_footer',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Confirm Footer'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text and html allowed. displayed at the bottom of the confirmation page.'),
          'rows' => 8,
          'cols' => 60,
          'where' => 'civicrm_grant_app_page.confirm_footer',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'is_email_receipt' => [
          'name' => 'is_email_receipt',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'description' => CRM_Grantapplications_ExtensionUtil::ts('If true, receipt is automatically emailed to contact on success'),
          'where' => 'civicrm_grant_app_page.is_email_receipt',
          'default' => '0',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'receipt_from_name' => [
          'name' => 'receipt_from_name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Receipt From Name'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('FROM email name used for receipts generated by applications to this grant application page.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.receipt_from_name',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'receipt_from_email' => [
          'name' => 'receipt_from_email',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Receipt From Email'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('FROM email address used for receipts generated by applications to this grant application page.'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.receipt_from_email',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'cc_receipt' => [
          'name' => 'cc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Cc Receipt'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Comma-separated list of email addresses to cc each time a receipt is sent'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.cc_receipt',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'bcc_receipt' => [
          'name' => 'bcc_receipt',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Bcc Receipt'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Comma-separated list of email addresses to bcc each time a receipt is sent'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'where' => 'civicrm_grant_app_page.bcc_receipt',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => NULL,
        ],
        'receipt_text' => [
          'name' => 'receipt_text',
          'type' => CRM_Utils_Type::T_TEXT,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Receipt Text'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Text to include above standard receipt info on receipt email. emails are text-only, so do not allow html for now'),
          'rows' => 6,
          'cols' => 50,
          'where' => 'civicrm_grant_app_page.receipt_text',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'TextArea',
          ],
          'add' => '1.8',
        ],
        'is_active' => [
          'name' => 'is_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Is this grant application page active?'),
          'where' => 'civicrm_grant_app_page.is_active',
          'default' => '1',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => '1.8',
        ],
        'grant_app_start_date' => [
          'name' => 'start_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Grant Application Page Start Date'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Date and time that this page starts.'),
          'import' => TRUE,
          'where' => 'civicrm_grant_app_page.start_date',
          'headerPattern' => '/^start|(s(tart\s)?date)$/i',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
          'add' => '1.7',
        ],
        'grant_app_end_date' => [
          'name' => 'end_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Grant Application Page End Date'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Date and time that this page ends. May be NULL if no defined end date/time'),
          'import' => TRUE,
          'where' => 'civicrm_grant_app_page.end_date',
          'headerPattern' => '/^end|(e(nd\s)?date)$/i',
          'export' => TRUE,
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'html' => [
            'type' => 'Select Date',
            'formatType' => 'activityDateTime',
          ],
          'add' => '1.7',
        ],
        'created_id' => [
          'name' => 'created_id',
          'type' => CRM_Utils_Type::T_INT,
          'description' => CRM_Grantapplications_ExtensionUtil::ts('FK to civicrm_contact, who created this grant application page'),
          'where' => 'civicrm_grant_app_page.created_id',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => NULL,
        ],
        'created_date' => [
          'name' => 'created_date',
          'type' => CRM_Utils_Type::T_DATE + CRM_Utils_Type::T_TIME,
          'title' => CRM_Grantapplications_ExtensionUtil::ts('Event Created Date'),
          'description' => CRM_Grantapplications_ExtensionUtil::ts('Date and time that grant application page was created.'),
          'where' => 'civicrm_grant_app_page.created_date',
          'default' => 'NULL',
          'table_name' => 'civicrm_grant_app_page',
          'entity' => 'GrantApplicationPage',
          'bao' => 'CRM_Grant_DAO_GrantApplicationPage',
          'localizable' => 0,
          'add' => '3.0',
        ],
      ];
      CRM_Core_DAO_AllCoreTables::invoke(__CLASS__, 'fields_callback', Civi::$statics[__CLASS__]['fields']);
    }
    return Civi::$statics[__CLASS__]['fields'];
  }

  /**
   * Return a mapping from field-name to the corresponding key (as used in fields()).
   *
   * @return array
   *   Array(string $name => string $uniqueName).
   */
  public static function &fieldKeys() {
    if (!isset(Civi::$statics[__CLASS__]['fieldKeys'])) {
      Civi::$statics[__CLASS__]['fieldKeys'] = array_flip(CRM_Utils_Array::collect('name', self::fields()));
    }
    return Civi::$statics[__CLASS__]['fieldKeys'];
  }

  /**
   * Returns the names of this table
   *
   * @return string
   */
  public static function getTableName() {
    return self::$_tableName;
  }

  /**
   * Returns if this table needs to be logged
   *
   * @return bool
   */
  public function getLog() {
    return self::$_log;
  }

  /**
   * Returns the list of fields that can be imported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &import($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'grant_app_page', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of fields that can be exported
   *
   * @param bool $prefix
   *
   * @return array
   */
  public static function &export($prefix = FALSE) {
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'grant_app_page', $prefix, []);
    return $r;
  }

  /**
   * Returns the list of indices
   *
   * @param bool $localize
   *
   * @return array
   */
  public static function indices($localize = TRUE) {
    $indices = [];
    return ($localize && !empty($indices)) ? CRM_Core_DAO_AllCoreTables::multilingualize(__CLASS__, $indices) : $indices;
  }

}
