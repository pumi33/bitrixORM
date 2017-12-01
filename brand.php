<?

namespace Bitrix\Main;

use Bitrix\Main,
	Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

/**
 * Class Table
 * 
 * Fields:
 * <ul>
 * <li> ID int mandatory
 * <li> UF_BRAND string optional
 * <li> UF_CODE_COUNTRY string optional
 * </ul>
 *
 * @package Bitrix\
 **/

class BrandTable extends Main\Entity\DataManager
{
	/**
	 * Returns DB table name for entity.
	 *
	 * @return string
	 */
	public static function getTableName()
	{
		return 'brands';
	}

	/**
	 * Returns entity map definition.
	 *
	 * @return array
	 */
	public static function getMap()
	{
		return array(
			'ID' => array(
				'data_type' => 'integer',
				'primary' => true,
				'autocomplete' => true,
				'title' => Loc::getMessage('_ENTITY_ID_FIELD'),
			),
			'UF_BRAND' => array(
				'data_type' => 'text',
				'title' => Loc::getMessage('_ENTITY_UF_BRAND_FIELD'),
			),
			'UF_CODE_COUNTRY' => array(
				'data_type' => 'text',
				'title' => Loc::getMessage('_ENTITY_UF_CODE_COUNTRY_FIELD'),
			),
		);
	}
}