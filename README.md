# Mage2 Module SoftwareEngineer Donation

    ``softwareengineer/module-donation``

 - [Main Functionalities](#main-functionalities)
 - [Installation](#installation)
 - [Configuration](#configuration)
 - [Specifications](#specifications)
 - [Attributes](#attributes)

## Main Functionalities
Final project of Software Engineer on TDTU. <br/>
Follow team by Trello: https://bit.ly/2T8q5Pe

## Installation
\* = in production please use the `--keep-generated` option

### Type 1: Zip file

 - Unzip the zip file in `app/code/SoftwareEngineer`
 - Enable the module by running `php bin/magento module:enable SoftwareEngineer_Donation`
 - Apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

### Type 2: Composer

 - Make the module available in a composer repository for example:
    - private repository `repo.magento.com`
    - public repository `packagist.org`
    - public github repository as vcs
 - Add the composer repository to the configuration by running `composer config repositories.repo.magento.com composer https://repo.magento.com/`
 - Install the module composer by running `composer require softwareengineer/module-donation`
 - enable the module by running `php bin/magento module:enable SoftwareEngineer_Donation`
 - apply database updates by running `php bin/magento setup:upgrade`\*
 - Flush the cache by running `php bin/magento cache:flush`

## Attributes
+ Can configure in backend.<br />
![alt text](image/config_donation.jpeg)
+ Show donation dropdown in PDP.<br />
![alt text](image/display_to_product.jpeg)
+ Show fee in checkout cart, order.<br />
![alt text](image/add_donation_to_total.jpeg)
![alt text](image/add_donation_to_total_2.jpeg)
+ Show donation in invoice, creditmemo in backend and my account page.<br />
![alt text](image/show_donation_in_order.jpeg)
![alt text](image/show_donation_in_invoice.jpeg)
![alt text](image/show_donation_in_creditmemo.jpeg)
![alt text](image/show_donation_in_my_order.jpeg)
+ Show donation in Print order, order email.<br />
![alt text](image/show_donation_to_my_order.jpeg)
![alt text](image/show_donation_to_order_email.jpeg)
+ Sort, filter in order grid and invoice grid.<br />
![alt text](image/show_column_donation.jpeg)
![alt text](image/Sort-filterinordergridandinvoicegrid.jpeg)
+ Apply multiple product.


