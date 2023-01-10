<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Application;
use Livewire\Component;
use Livewire\WithPagination;

class Applications extends Component
{
    use WithPagination;

    public $search;
    public $sortField;
    public $sortAsc = true;
    public $filter = [
        'search' => null,
    ];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatedFilter()
    {
        $this->resetPage();
    }

    public function render()
    {
        $applications = Application::query();

        if (!empty($this->filter['search'])) {
            $applications->where('full_name', 'like', '%' . $this->filter['search'] . '%')
                ->orWhere( 'company_name','like', '%' . $this->filter['search'] . '%')
                ->orWhere('email', 'like', '%' . $this->filter['search'] . '%');
        }


        return view('livewire.dashboard.applications', [
            'applications' => $applications->orderBy('created_at', 'DESC')
                ->paginate(30)
        ]);
    }

}
