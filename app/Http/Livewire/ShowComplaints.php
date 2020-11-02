<?php

namespace App\Http\Livewire;

use App\Models\Complaint;
use App\Models\Province;
use Livewire\Component;
use Livewire\WithPagination;

class ShowComplaints extends Component
{

    use WithPagination;

    public $province;
    public $search;
    public $status;
    public $quarter;


    public function paginationView()
    {
        return 'vendor.pagination.livewire';
    }

    public function render()
    {
        $complaints = $this->getComplaints();

        $provinces = Province::all();

        return view('livewire.show-complaints', compact('complaints', 'provinces'));
    }

    /**
     * Get paginated the businesses
     *
     * @return mixed
     */
    private function getComplaints()
    {
        $business = Complaint::query();

        if ($this->quarter) {
            $business->whereQuarter($this->quarter);
        }

        if ($this->province) {
            $business->whereProvinceId($this->province);
        }

        if ($this->search) {
            $business->where('caller_name', 'like', '%'.$this->search.'%');
        }

        if ($this->status) {
            $business->whereStatus($this->status);
        }

        return $business
            ->orderBy('id', 'desc')
            ->paginate();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingCategory()
    {
        $this->resetPage();
    }

    public function updatingStatus()
    {
        $this->resetPage();
    }
}
