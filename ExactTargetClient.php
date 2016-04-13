<?php

class ExactTargetClient
{
    public function __construct()
    {
        $this->client = new ET_Client(TRUE);
    }

    public function get_all_data_extensions()
    {
        $getDE = new ET_DataExtension();
        $getDE->authStub = $this->client;
        $getDE->props = array("CustomerKey", "Name");	
        $getResult = $getDE->get();
        return $getResult->results;
    }

    public function get_data_extension($customer_key)
    {
        $getDE = new ET_DataExtension();
        $getDE->authStub = $this->client;
        $getDE->props = ['CustomerKey', 'Name'];	
        $getDE->filter = [
            'Property' => 'CustomerKey',
            'SimpleOperator' => 'equals',
            'Value' => $customer_key
        ];
        $getResult = $getDE->get();
        return $getResult->results;
    }

    public function get_data_extension_fields($customer_key)
    {
        $getDEColumns = new ET_DataExtension_Column();
        $getDEColumns->authStub = $this->client;
        $getDEColumns->props = ['CustomerKey', 'Name'];	
        $getDEColumns->filter = [
            'Property' => 'CustomerKey',
            'SimpleOperator' => 'equals',
            'Value' => $customer_key
        ];
        $getResult = $getDEColumns->get();
        return $getResult->results;
    }

    /**
     * @param array $data ['field_name' => 'field_value']
     */
    public function add_data_extension_row($customer_key, array $data)
    {
        $postDRRow = new ET_DataExtension_Row();
        $postDRRow->authStub = $this->client;
        $postDRRow->props = $data;
        $postDRRow->CustomerKey = $customer_key;	
        $postResult = $postDRRow->post();
        return $postResult->results;
    }

    public function create_data_extension($data_extension_name, $customer_key, array $columns) {
        throw new Exception('This function does not work yet as FuelSDK does not properly format XML.');

        $postDE = new ET_DataExtension();
        $postDE->authStub = $this->client;
        $postDE->props = [
            'Name' => $data_extension_name,
            'CustomerKey' => $customer_key
        ];

        $postDE->columns = [];

        foreach ($columns as $column)
        {
            $postDE->columns[] = [
                'Name' => $column->name,
                'FieldType' => $column->field_type,
                'IsPrimaryKey' => $column->is_primary_key ? 'true' : 'false',
                'MaxLength' => (string) $column->max_length,
                'IsRequired' => $column->is_required ? 'true' : 'false'
            ];
        }

        $postResult = $postDE->post();
        return $postResult->results;
    }
}
