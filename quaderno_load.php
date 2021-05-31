<?php
/**
* Quaderno Load
*
* Interface to load every needed file.
* This is the ONLY file to include from external code
*
* @package   Quaderno PHP
* @author    Quaderno <support@quaderno.io>
* @copyright Copyright (c) 2021, Quaderno
* @license   https://opensource.org/licenses/MIT The MIT License
*/

// This can put quaderno wrapper in its own folder
$quaderno_script_path = str_replace('\\', '/', dirname(__FILE__)). '/';

require_once $quaderno_script_path . 'quaderno_class.php';
require_once $quaderno_script_path . 'quaderno_model.php';
require_once $quaderno_script_path . 'quaderno_base.php';
require_once $quaderno_script_path . 'quaderno_contact.php';
require_once $quaderno_script_path . 'quaderno_product.php';
require_once $quaderno_script_path . 'quaderno_document.php';
require_once $quaderno_script_path . 'quaderno_transaction.php';
require_once $quaderno_script_path . 'quaderno_invoice.php';
require_once $quaderno_script_path . 'quaderno_receipt.php';
require_once $quaderno_script_path . 'quaderno_credit.php';
require_once $quaderno_script_path . 'quaderno_expense.php';
require_once $quaderno_script_path . 'quaderno_estimate.php';
require_once $quaderno_script_path . 'quaderno_recurring.php';
require_once $quaderno_script_path . 'quaderno_document_item.php';
require_once $quaderno_script_path . 'quaderno_payment.php';
require_once $quaderno_script_path . 'quaderno_tax_id.php';
require_once $quaderno_script_path . 'quaderno_tax_rate.php';
require_once $quaderno_script_path . 'quaderno_evidence.php';
require_once $quaderno_script_path . 'quaderno_checkout_session.php';
require_once $quaderno_script_path . 'quaderno_webhook.php';
require_once $quaderno_script_path . 'quaderno_reporting.php';
require_once $quaderno_script_path . 'quaderno_json.php';

?>