<?php

namespace App\Services;

class BaseViewConfigurationService
{
    public function createInputConfiguration()
    {
        $inputConfiguration =
            array(

                array(
                    'inputType' => 'number',
                    'label' => 'Id',
                    'formControllName' => 'id',
                    'disabled' => true
                ),
                array(
                    'inputType' => 'text',
                    'label' => 'Name',
                    'formControllName' => 'name',
                    'disabled' => false
                ),
            );
        return $inputConfiguration;
    }
}
