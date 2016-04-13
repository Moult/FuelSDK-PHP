<?php

class DataExtensionColumn
{
    public $name = '';
    public $field_type = self::FIELD_TYPE_TEXT;
    public $is_primary_key = FALSE;
    public $max_length = 255;
    public $is_required = FALSE;

    const FIELD_TYPE_TEXT = 'Text';
    const FIELD_TYPE_NUMBER = 'Number';
    const FIELD_TYPE_DATE = 'Date';
    const FIELD_TYPE_BOOLEAN = 'Boolean';
    const FIELD_TYPE_EMAIL_ADDRESS = 'EmailAddress';
    const FIELD_TYPE_PHONE = 'Phone';
    const FIELD_TYPE_DECIMAL = 'Decimal';
    const FIELD_TYPE_LOCALE = 'Locale';
}
