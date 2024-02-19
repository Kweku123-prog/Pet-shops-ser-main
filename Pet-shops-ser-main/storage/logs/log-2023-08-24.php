<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-08-24 15:01:18 --> Query error: Table 'truelysell.service' doesn't exist - Invalid query: INSERT INTO `service` (`user_id`, `service_title`, `currency_code`, `service_sub_title`, `category`, `subcategory`, `service_location`, `service_latitude`, `service_longitude`, `service_amount`, `about`, `service_image`, `service_details_image`, `thumb_image`, `mobile_image`, `created_at`, `updated_at`, `status`, `admin_verification`, `service_offered`) VALUES ('1', 'gggg', 'USD', NULL, '2', '2', 'f', '', '', '33', '', 'uploads/services/se_full_1692869478download_(9).jpg', 'uploads/services/de_full_1692869478download_(9).jpg', 'uploads/services/th_full_1692869478download_(9).jpg', 'uploads/services/mo_full_1692869478download_(9).jpg', '2023-08-24 15:01:18', '2023-08-24 15:01:18', 1, 1, '[\"afff\"]')
ERROR - 2023-08-24 15:08:13 --> Query error: Duplicate entry '13' for key 'PRIMARY' - Invalid query: INSERT INTO `service_offered` (`service_id`, `service_offered`) VALUES (13, '[\"sa\"]')
ERROR - 2023-08-24 17:12:02 --> Severity: error --> Exception: Division by zero C:\xampp\htdocs\truelysell-web\application\helpers\currency_helper.php 429
ERROR - 2023-08-24 17:21:46 --> Severity: error --> Exception: Division by zero C:\xampp\htdocs\truelysell-web\application\helpers\currency_helper.php 429
ERROR - 2023-08-24 17:35:36 --> 404 Page Not Found: Assets/js
ERROR - 2023-08-24 17:37:12 --> 404 Page Not Found: Assets/js
ERROR - 2023-08-24 18:05:46 --> Query error: Table 'truelysell.susbscription_expired_mail' doesn't exist - Invalid query: INSERT INTO `susbscription_expired_mail` (`subscriber_id`, `subscription_id`, `subscription_date`, `expiry_date_time`, `type`) VALUES ('2', '1', '2023-08-24 18:05:46', '2023-08-25 18:05:46', 1)
ERROR - 2023-08-24 18:10:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:10:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:26:18 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:26:18 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:31:18 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:31:18 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:36:18 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:36:18 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:41:18 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:41:18 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:41:59 --> Query error: Duplicate entry '14' for key 'PRIMARY' - Invalid query: INSERT INTO `service_offered` (`service_id`, `service_offered`) VALUES (14, '[\"sccsc\"]')
ERROR - 2023-08-24 18:47:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:47:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:52:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:52:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 18:57:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 18:57:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:02:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:02:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:07:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:07:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:12:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:12:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:17:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:17:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:22:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:22:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:27:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:27:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:32:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:32:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:37:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:37:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:42:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:42:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:47:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:47:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:52:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:52:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 19:57:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 19:57:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:02:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:02:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:07:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:07:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:12:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:12:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:17:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:17:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:22:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:22:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:27:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:27:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:32:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:32:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:37:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:37:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:42:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:42:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 20:47:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 20:47:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 21:41:58 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 21:41:58 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 21:47:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 21:47:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 21:52:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 21:52:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 21:57:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 21:57:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 22:02:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 22:02:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 22:07:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 22:07:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 22:12:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 22:12:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 22:17:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 22:17:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
ERROR - 2023-08-24 22:22:14 --> Query error: Table 'truelysell.subscription_expired_mail' doesn't exist - Invalid query: SELECT *
FROM `subscription_expired_mail`
WHERE date(expiry_date) = '2023-08-25'
AND `message_status` = 1
AND `subscriper_id` = '2'
AND `subscription_id` = '1'
ORDER BY `id` DESC
ERROR - 2023-08-24 22:22:14 --> Severity: error --> Exception: Call to a member function row_array() on bool C:\xampp\htdocs\truelysell-web\application\controllers\admin\Dashboard.php 1396
