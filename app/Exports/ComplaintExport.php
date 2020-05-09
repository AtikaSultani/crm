<?php

namespace App\Exports;

use App\Models\Complaint;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;

class ComplaintExport implements FromCollection,shouldAutoSize,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
   {
       return [
            '#',
            'caller name',
            'tel_no_received',
            'gender',
            'received_date',
            'status',
            'quarter',
            'referred_to',
            'beneficiary_file',
            'broad_category_id',
            'specific_category_id',
            'received_by',
            'person_who_shared_action',
            'close_date',
            'description',
            'province_id',
            'district_id',
            'village',
            'user_id',
            'project_id',
            'program_id',
            'created_at',
            'updated_at',
       ];
   }
   public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:W1')->applyFromArray([
                    'font' => [
                        'bold' => true
                              ]
                          ]);
                      },
                  ];
              }

    public function collection()
    {
        return Complaint::all();
    }
}
