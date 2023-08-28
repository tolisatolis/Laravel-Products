<?php

namespace App\Services;

class GradeViewConfigurationService extends BaseViewConfigurationService
{
    public GradingSystemService $gradingSystemService;
    public function __construct(GradingSystemService $gradingSystemService)
    {
        $this->gradingSystemService = $gradingSystemService;
    }
    public function createInputConfiguration()
    {
        $baseInputConfiguration = parent::createInputConfiguration();
        $inputConfiguration = array_merge($baseInputConfiguration, array(
            array(
                'inputType' => 'dropdDown',
                'label' => 'Grading System',
                'formControllName' => 'grading_system_id',
                'disabled' => false,
                'data' => $this->gradingSystemService->getAll()
            ),
        ));
        return $inputConfiguration;
    }
}
