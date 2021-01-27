<?php
/**
 *
 *
 * @author Roman Piták <roman@pitak.net>
 *
 */

namespace DotMailer\Api\DataTypes;


/**
 * Class ApiDataField
 *
 * @property XsString name
 * @property ApiDataTypes type
 * @property ApiDataFieldVisibility visibility
 * @property MixedType defaultValue
 */
final class ApiDataField extends JsonObject
{

    protected function getProperties()
    {
        return array(
            'Name' => 'XsString',
            'Type' => 'ApiDataTypes',
            'Visibility' => 'ApiDataFieldVisibility',
            'DefaultValue' => 'MixedType'
        );
    }

}
