<?php

class Zangeressen extends BaseController
{
    private $zangeresModel;

    public function __construct()
    {
        $this->zangeresModel = $this->model('Zangeres');
    }

    public function index()
    {
        $zangeressen = $this->zangeresModel->getZangeressen();
        
        // var_dump($zangeressen);exit();

        $dataRows = "";

        foreach ($zangeressen as $zangeres) {
            $dataRows .= "<tr>
                            <td>{$zangeres->Naam}</td>
                            <td>{$zangeres->NettoWaarde}</td>
                            <td>{$zangeres->Land}</td>
                            <td>{$zangeres->Mobiel}</td>
                            <td>{$zangeres->Leeftijd}</td>
                            <td>" . number_format($country->Population, 0, ",", ".") . "</td>            
                        </tr>";
        }

        $data = [
            'title' => 'Landen van de Wereld',
            'dataRows' => $dataRows
        ];

        $this->view('zangeressen/index', $data);
    }
}