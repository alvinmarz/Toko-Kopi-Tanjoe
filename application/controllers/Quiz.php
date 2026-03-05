<?php
class Quiz extends CI_Controller
{
    public function index()
    {
        $this->load->view('quiz'); // Load form quiz
    }

    public function result()
    {
        // Tangkap input quiz
        $flavor = $this->input->post('flavor');
        $acidity = $this->input->post('acidity');

        // Logika rekomendasi kopi
        if ($flavor == 'bold' && $acidity == 'low') {
            $recommendation = "Aceh Gayo Literal 1975";
        } elseif ($flavor == 'smooth' && $acidity == 'medium') {
            $recommendation = "Aceh Gayo Rampoge";
        } elseif ($flavor == 'fruity' && $acidity == 'high') {
            $recommendation = "Aceh gayo nektars";
        } else {
            $recommendation = "Aceh Gayo Rismara";
        }

        // Kirim data ke view hasil
        $data['recommendation'] = $recommendation;
        $this->load->view('quiz_result', $data);
    }
}
