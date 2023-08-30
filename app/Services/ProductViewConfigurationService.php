<?php

namespace App\Services;

class ProductViewConfigurationService
{
    public GradingSystemService $gradingSystemsService;
    public GradeService $gradesService;
    public SpeciesService $speciesService;
    public TreatmentService $treatmentsService;
    public DryingMethodService $dryingMethodsService;
    public function __construct(
        GradingSystemService $gradingSystemsService,
        GradeService $gradesService,
        SpeciesService $speciesService,
        TreatmentService $treatmentsService,
        DryingMethodService $dryingMethodsService
    ) {
        $this->gradingSystemsService = $gradingSystemsService;
        $this->gradesService = $gradesService;
        $this->speciesService = $speciesService;
        $this->treatmentsService = $treatmentsService;
        $this->dryingMethodsService = $dryingMethodsService;
    }
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
                    'inputType' => 'thickness',
                    'label' => 'Name',
                    'formControllName' => 'name',
                    'disabled' => false
                ),
                array(
                    'inputType' => 'length',
                    'label' => 'Name',
                    'formControllName' => 'name',
                    'disabled' => false
                ),
                array(
                    'inputType' => 'width',
                    'label' => 'Name',
                    'formControllName' => 'name',
                    'disabled' => false
                ),
                array(
                    'inputType' => 'dropdDown',
                    'label' => 'Species',
                    'formControllName' => 'species_id',
                    'disabled' => false,
                    'data' => $this->speciesService->getAll()
                ),
                array(
                    'inputType' => 'dropdDown',
                    'label' => 'Treatment',
                    'formControllName' => 'treatment_id',
                    'disabled' => false,
                    'data' => $this->treatmentsService->getAll()
                ),
                array(
                    'inputType' => 'dropdDown',
                    'label' => 'Drying Method',
                    'formControllName' => 'drying_method_id',
                    'disabled' => false,
                    'data' => $this->dryingMethodsService->getAll()
                ),
                array(
                    'inputType' => 'dropdDown',
                    'label' => 'Grading System',
                    'formControllName' => 'grading_system_id',
                    'disabled' => false,
                    'data' => $this->gradingSystemsService->getAll()
                ),
                array(
                    'inputType' => 'dropdDown',
                    'label' => 'Grade',
                    'formControllName' => 'grade_id',
                    'disabled' => false,
                    'data' => $this->gradesService->getAll()
                ),
            );
        return $inputConfiguration;
    }
}
