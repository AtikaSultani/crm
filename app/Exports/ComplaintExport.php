<?php

namespace App\Exports;

use App\Models\Complaint;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class ComplaintExport implements FromView, ShouldAutoSize
{

    protected $request;

    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * @return View
     */
    public function view(): View
    {
        $complaints = Complaint::query();

        if ($this->request['year']) {
            $complaints->whereYear('received_date', $this->request['year']);
        }

        if ($this->request['quarter']) {
            $complaints->where('quarter', $this->request['quarter']);
        }

        if ($this->request['project']) {
            $complaints->where('project_id', $this->request['project']);
        }

        $complaints = $complaints->get();

        return view('complaint.partial.export-view')->with(['complaints' => $complaints]);
    }
}
