<?php
/**
 *
 *   Magecom
 *
 *   NOTICE OF LICENSE
 *
 *   This source file is subject to the Open Software License (OSL 3.0)
 *   that is bundled with this package in the file LICENSE.txt.
 *   It is also available through the world-wide-web at this URL:
 *   http://opensource.org/licenses/osl-3.0.php
 *   If you did not receive a copy of the license and are unable to
 *   obtain it through the world-wide-web, please send an email
 *   to info@magecom.net so we can send you a copy immediately.
 *
 *   @category Magecom
 *  @package Magecom_Module
 *  @copyright Copyright (c)  2019 Magecom, Inc. (http://www.magecom.net)
 *   @license  http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

declare(strict_types=1);

namespace Test\GraphQL\Model\Resolver;

use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

/**
 * Class Store
 * @package Test\GraphQL\Model\Resolver
 */
class Store implements ResolverInterface
{
    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        $stores = [
            [
                'name' => 'Brick and Mortar Kolbermoor',
                'street' => 'JosefMeier Straße',
                'street_num' => '1002',
                'postcode' => '83059',
            ],
            [
                'name' => 'Brick and Mortar  Erfurt',
                'street' => 'Max Meier Straße',
                'street_num' => '102',
                'postcode' => '99338',
            ],
        ];
        return [
            'total_count' => count($stores),
            'items' => $stores
        ];
    }
}