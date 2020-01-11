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
               
              // //bordes en todo el excel
              //  $styleBorder = [
              //           'borders' => [
              //               'allBorders' => [
              //                   'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
              //                   'color' => ['argb' => '000000'],
              //               ],
              //           ],
              //       ];
              //   $event->sheet->getStyle('A2:K537')->applyFromArray($styleBorder)->getAlignment()->setWrapText(true);


                //fondo de la celda de la suma de KG
                $event->sheet->getStyle('I3')->getFill()
                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                ->getStartColor()->setARGB('FEF11B');

                
                

                // Todo el diseño del header
                $cellRange = 'A1:K1'; // All headers
                $styleArray = [
                        'font' => [
                            'bold' => true,
                        ],
                        'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_RIGHT,
                        ],
                       
                        'borders' => [
                                'allBorders' => [
                                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                                    'color' => ['argb' => '000000'],
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
                $event->sheet->getColumnDimension('E')->setAutoSize(true);
				$event->sheet->getDelegate()->getStyle($cellRange)->applyFromArray($styleArray)->getFont()->setSize(14);
                //fin header


            },


        ];
    }


    
}
