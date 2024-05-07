<?php

/**
 * @package CRM
 * @copyright CiviCRM LLC https://civicrm.org/licensing
 *
 * Generated from org.project60.sepa/xml/schema/CRM/Sepa/Creditor.xml
 * DO NOT EDIT.  Generated by CRM_Core_CodeGen
 * (GenCodeChecksum:122f2e73e1499df5ed06c1213b35d642)
 */
use CRM_Sepa_ExtensionUtil as E;

/**
 * Database access object for the SEPACreditor entity.
 */
class CRM_Sepa_DAO_SEPACreditor extends CRM_Core_DAO {
  const EXT = E::LONG_NAME;
  const TABLE_ADDED = '4.3';

  /**
   * Static instance to hold the table name.
   *
   * @var string
   */
  public static $_tableName = 'civicrm_sdd_creditor';

  /**
   * Field to show when displaying a record.
   *
   * @var string
   */
  public static $_labelField = 'label';

  /**
   * Should CiviCRM log any modifications to this table in the civicrm_log table.
   *
   * @var bool
   */
  public static $_log = TRUE;

  /**
   * ID
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $id;

  /**
   * FK to Contact ID that owns that account
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $creditor_id;

  /**
   * Provided by the bank. ISO country code+check digit+ZZZ+country specific identifier
   *
   * @var string|null
   *   (SQL type: varchar(35))
   *   Note that values will be retrieved from the database as a string.
   */
  public $identifier;

  /**
   * official creditor name, passed to exported files
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $name;

  /**
   * internally used label for the creditor
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $label;

  /**
   * by default creditor_id.address (billing) at creation
   *
   * @var string|null
   *   (SQL type: varchar(255))
   *   Note that values will be retrieved from the database as a string.
   */
  public $address;

  /**
   * Which Country does this address belong to.
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $country_id;

  /**
   * Iban of the creditor
   *
   * @var string
   *   (SQL type: varchar(42))
   *   Note that values will be retrieved from the database as a string.
   */
  public $iban;

  /**
   * BIC of the creditor
   *
   * @var string|null
   *   (SQL type: varchar(11))
   *   Note that values will be retrieved from the database as a string.
   */
  public $bic;

  /**
   * prefix for mandate identifiers
   *
   * @var string|null
   *   (SQL type: varchar(4))
   *   Note that values will be retrieved from the database as a string.
   */
  public $mandate_prefix;

  /**
   * currency used by this creditor
   *
   * @var string|null
   *   (SQL type: varchar(3))
   *   Note that values will be retrieved from the database as a string.
   */
  public $currency;

  /**
   * Payment processor link (to be deprecated)
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $payment_processor_id;

  /**
   * Default value
   *
   * @var string|null
   *   (SQL type: varchar(4))
   *   Note that values will be retrieved from the database as a string.
   */
  public $category;

  /**
   * Place this creditor's transaction groups in an XML file tagged with this value.
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $tag;

  /**
   * If true, new Mandates for this Creditor are set to active directly upon creation; otherwise, they have
   * to be activated explicitly later on.
   *
   *
   * @var bool|string|null
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $mandate_active;

  /**
   * Variant of the pain.008 format to use when generating SEPA XML files for this creditor. FK to SEPA File
   * Formats in civicrm_option_value.
   *
   *
   * @var int|string|null
   *   (SQL type: int unsigned)
   *   Note that values will be retrieved from the database as a string.
   */
  public $sepa_file_format_id;

  /**
   * Type of the creditor, values are SEPA (default) and PSP
   *
   * @var string|null
   *   (SQL type: varchar(8))
   *   Note that values will be retrieved from the database as a string.
   */
  public $creditor_type;

  /**
   * Payment instruments, comma separated, to be used for one-off collections
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $pi_ooff;

  /**
   * Payment instruments, comma separated, to be used for recurring collections
   *
   * @var string|null
   *   (SQL type: varchar(64))
   *   Note that values will be retrieved from the database as a string.
   */
  public $pi_rcur;

  /**
   * If true, BICs are not used for this creditor
   *
   * @var bool|string|null
   *   (SQL type: tinyint)
   *   Note that values will be retrieved from the database as a string.
   */
  public $uses_bic;

  /**
   * CUC of the creditor
   *
   * @var string|null
   *   (SQL type: varchar(8))
   *   Note that values will be retrieved from the database as a string.
   */
  public $cuc;

  /**
   * Class constructor.
   */
  public function __construct() {
    $this->__table = 'civicrm_sdd_creditor';
    parent::__construct();
  }

  /**
   * Returns localized title of this entity.
   *
   * @param bool $plural
   *   Whether to return the plural version of the title.
   */
  public static function getEntityTitle($plural = FALSE) {
    return $plural ? E::ts('SEPACreditors') : E::ts('SEPACreditor');
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
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'creditor_id', 'civicrm_contact', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'country_id', 'civicrm_country', 'id');
      Civi::$statics[__CLASS__]['links'][] = new CRM_Core_Reference_Basic(self::getTableName(), 'payment_processor_id', 'civicrm_payment_processor', 'id');
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
          'title' => E::ts('ID'),
          'description' => E::ts('ID'),
          'required' => TRUE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.id',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'readonly' => TRUE,
          'add' => '4.3',
        ],
        'creditor_id' => [
          'name' => 'creditor_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Creditor Contact ID'),
          'description' => E::ts('FK to Contact ID that owns that account'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.creditor_id',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'FKClassName' => 'CRM_Contact_DAO_Contact',
          'add' => '4.3',
        ],
        'identifier' => [
          'name' => 'identifier',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('SEPA Creditor identifier'),
          'description' => E::ts('Provided by the bank. ISO country code+check digit+ZZZ+country specific identifier'),
          'maxlength' => 35,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.identifier',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'name' => [
          'name' => 'name',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Creditor Name'),
          'description' => E::ts('official creditor name, passed to exported files'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.name',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'label' => [
          'name' => 'label',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Creditor Label'),
          'description' => E::ts('internally used label for the creditor'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.label',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'address' => [
          'name' => 'address',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Address of the creditor'),
          'description' => E::ts('by default creditor_id.address (billing) at creation'),
          'maxlength' => 255,
          'size' => CRM_Utils_Type::HUGE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.address',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'country_id' => [
          'name' => 'country_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Country'),
          'description' => E::ts('Which Country does this address belong to.'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.country_id',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'FKClassName' => 'CRM_Core_DAO_Country',
          'add' => '4.3',
        ],
        'iban' => [
          'name' => 'iban',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Iban'),
          'description' => E::ts('Iban of the creditor'),
          'required' => FALSE,
          'maxlength' => 42,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.iban',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'bic' => [
          'name' => 'bic',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Bic'),
          'description' => E::ts('BIC of the creditor'),
          'maxlength' => 11,
          'size' => CRM_Utils_Type::TWELVE,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.bic',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'mandate_prefix' => [
          'name' => 'mandate_prefix',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Mandate numering prefix'),
          'description' => E::ts('prefix for mandate identifiers'),
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.mandate_prefix',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'currency' => [
          'name' => 'currency',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Currency'),
          'description' => E::ts('currency used by this creditor'),
          'maxlength' => 3,
          'size' => CRM_Utils_Type::FOUR,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.currency',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'payment_processor_id' => [
          'name' => 'payment_processor_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('Payment Processor ID'),
          'description' => E::ts('Payment processor link (to be deprecated)'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.payment_processor_id',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'FKClassName' => 'CRM_Financial_DAO_PaymentProcessor',
          'add' => '4.3',
        ],
        'category' => [
          'name' => 'category',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Category purpose of the collection'),
          'description' => E::ts('Default value'),
          'maxlength' => 4,
          'size' => CRM_Utils_Type::FOUR,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.category',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'tag' => [
          'name' => 'tag',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Tag'),
          'description' => E::ts('Place this creditor\'s transaction groups in an XML file tagged with this value.'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.tag',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.3',
        ],
        'mandate_active' => [
          'name' => 'mandate_active',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Immediately activate new Mandates'),
          'description' => E::ts('If true, new Mandates for this Creditor are set to active directly upon creation; otherwise, they have
            to be activated explicitly later on.
        '),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.mandate_active',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => '4.4',
        ],
        'sepa_file_format_id' => [
          'name' => 'sepa_file_format_id',
          'type' => CRM_Utils_Type::T_INT,
          'title' => E::ts('SEPA File Format'),
          'description' => E::ts('Variant of the pain.008 format to use when generating SEPA XML files for this creditor. FK to SEPA File
            Formats in civicrm_option_value.
        '),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.sepa_file_format_id',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'pseudoconstant' => [
            'optionGroupName' => 'sepa_file_format',
            'optionEditPath' => 'civicrm/admin/options/sepa_file_format',
          ],
          'add' => '4.4',
        ],
        'creditor_type' => [
          'name' => 'creditor_type',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('Creditor Type'),
          'description' => E::ts('Type of the creditor, values are SEPA (default) and PSP'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.creditor_type',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => NULL,
        ],
        'pi_ooff' => [
          'name' => 'pi_ooff',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('OOFF Payment Instruments'),
          'description' => E::ts('Payment instruments, comma separated, to be used for one-off collections'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.pi_ooff',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => NULL,
        ],
        'pi_rcur' => [
          'name' => 'pi_rcur',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('RCUR Payment Instruments'),
          'description' => E::ts('Payment instruments, comma separated, to be used for recurring collections'),
          'maxlength' => 64,
          'size' => CRM_Utils_Type::BIG,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.pi_rcur',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => NULL,
        ],
        'uses_bic' => [
          'name' => 'uses_bic',
          'type' => CRM_Utils_Type::T_BOOLEAN,
          'title' => E::ts('Immediately activate new Mandates'),
          'description' => E::ts('If true, BICs are not used for this creditor'),
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.uses_bic',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => NULL,
        ],
        'cuc' => [
          'name' => 'cuc',
          'type' => CRM_Utils_Type::T_STRING,
          'title' => E::ts('CUC'),
          'description' => E::ts('CUC of the creditor'),
          'maxlength' => 8,
          'size' => CRM_Utils_Type::EIGHT,
          'usage' => [
            'import' => FALSE,
            'export' => FALSE,
            'duplicate_matching' => FALSE,
            'token' => FALSE,
          ],
          'where' => 'civicrm_sdd_creditor.cuc',
          'table_name' => 'civicrm_sdd_creditor',
          'entity' => 'SEPACreditor',
          'bao' => 'CRM_Sepa_DAO_SEPACreditor',
          'localizable' => 0,
          'add' => NULL,
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
    $r = CRM_Core_DAO_AllCoreTables::getImports(__CLASS__, 'sdd_creditor', $prefix, [
      'CRM_Core_DAO_Country',
    ]);
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
    $r = CRM_Core_DAO_AllCoreTables::getExports(__CLASS__, 'sdd_creditor', $prefix, [
      'CRM_Core_DAO_Country',
    ]);
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
