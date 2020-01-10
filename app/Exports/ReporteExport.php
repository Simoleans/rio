<?php

namespace App\Exports;

use App\Reporte;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\Exportable;



class ReporteExport implements FromView, ShouldAutoSize, WithEvents
{

	use Exportable;

	public function __construct($desde,$hasta)
    {
        $this->desde = $desde;
        $this->hasta = $hasta;
    }

    /**
    * @return \Illuminate\Support\View
    */
     public function view(): View
    {
        return view('reporte.excel', [
            'reporte' => Reporte::excelSearch($this->desde,$this->hasta)
        ]);
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $cellRange = 'A1:M1'; // All headers
                $event->sheet->getStyle('A2:K537')->getAlignment()->setWrapText(true);
                //fondo del header
                // $event->sheet->getStyle($cellRange)->getFill()
                // ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                // ->getStartColor()->setARGB('FFE699');

                //fondo de la celda de la suma de KG
                $event->sheet->getStyle('I3')->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FEF11B');

                
                


                $styleArray = [
                        'font' => [
                            'bold' => true,
                        ],
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                        ],
                        'borders' => [
                            'top' => [
                                'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            ],
                        ],
                        'fill' => [
                            'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                            'rotation' => 90,
                            'startColor' => [
                                'argb' => 'FFE699',
                            ],
                            
                        ],
                    ];

				$event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray)->getFont()->setSize(14);
                 //$event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(17);


            },


        ];
    }


    
}
