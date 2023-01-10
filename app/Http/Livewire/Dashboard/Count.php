<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class Count extends Component
{
    use WithPagination;

    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $listeners = ['delete'];

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

    public function availability($id)
    {
        $count = \App\Models\Count::findOrFail($id);
        $count->update(['available' => !$count->available]);
    }

    public function render()
    {
        $counts = \App\Models\Count::query();

        $counts->with(["translations"]);

        if (!empty($this->search)) {
            $counts->whereTranslationLike('name', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.count', [
            'counts' => $counts->orderBy('created_at', 'DESC')
                ->paginate(10),
        ]);
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => __('dashboard.main.are you sure'),
            'text' => trans('dashboard.Be careful It will be deleted!'),
            'id' => $id,
        ]);
    }

    public function delete($id)
    {
        \App\Models\Count::where('id', $id)->delete();

        $this->dispatchBrowserEvent('swal:done', [
            'type' => 'success',
            'message' => 'Done!',
            'text' => trans('dashboard.It was done successfully!'),
        ]);
    }
}
