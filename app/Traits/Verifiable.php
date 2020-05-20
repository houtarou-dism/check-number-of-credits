<?php

namespace App\Traits;

trait Verifiable
{
    private $data = [];
    private $selectYears = ['freshman', 'sophomore', 'junior', 'senior'];

    /**
     * 大学１年次必修科目
     *
     * @param $data
     * @return array|string
     */
    public function requiredFreshman($data)
    {
        $compulsorySubject = [
            'communication_basics', 'career_development', 'physics_one', 'linear_algebra_one', 'analysis_one', 'basic_information_seminar',
            'computer_science', 'computer_literacy', 'c_programming_one', 'c_programming_two', 'electric_circuit_one', 'computer_architecture_one',
        ];

        return array_values(array_diff($compulsorySubject, $data));
    }

    /**
     * 大学２年次必修科目
     *
     * @param $data
     * @return array|string
     */
    public function requiredSophomore($data)
    {
        $compulsorySubject = [
            'stochastic_theory', 'automata_and_formal_languages', 'java_programming_one', 'operating_system',
            'data_structures_and_algorithms', 'logic_circuit', 'information_engineering_experiment_one', 'information_engineering_experiment_two',
        ];

        return array_values(array_diff($compulsorySubject, $data));
    }
}
