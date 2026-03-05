<?php

namespace App\Controllers;

use App\Models\SiteSettingModel;
use App\Models\DoctorProfileModel;
use App\Models\TreatmentModel;

class Home extends BaseController
{
    public function index()
    {
        $settingsModel = new SiteSettingModel();
        $profileModel = new DoctorProfileModel();
        $treatmentModel = new TreatmentModel();

        // Como criamos com id = 1 apenas
        $settings = $settingsModel->find(1);
        $profile  = $profileModel->find(1);

        // Busca tratamentos ativos, separando por categoria
        $allTreatments = $treatmentModel->where('is_active', true)->orderBy('order_index', 'ASC')->findAll();
        
        $exams = array_filter($allTreatments, function($t) { return $t['category'] == 'exame'; });
        $surgeries = array_filter($allTreatments, function($t) { return $t['category'] == 'cirurgia'; });
        $diseases = array_filter($allTreatments, function($t) { return $t['category'] == 'doenca'; });

        $data = [
            'settings'  => $settings,
            'profile'   => $profile,
            'exams'     => $exams,
            'surgeries' => $surgeries,
            'diseases'  => $diseases
        ];

        return view('home', $data);
    }
}
