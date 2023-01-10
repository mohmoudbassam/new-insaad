<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithPagination;

class Services extends Component
{
    use WithPagination;

    public $search;
    public $sortField;
    public $sortAsc = true;
    protected $listeners = ['delete'];

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updateServiceOrder($list)
    {
        foreach ($list as $item) {
            $item = Service::find($item['value'])->update(['order' => $item['order']]);
        }
    }

    public function availabilityLogistics($id)
    {
        $service = Service::findOrFail($id);
        $service->update(['logistics' => ! $service->logistics]);
    }

    public function render()
    {
        $services = Service::query();

        $services->with(["translations"]);

        if (! empty($this->search)) {
            $services->whereTranslationLike('title', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.services', [
            'services' => $services->orderBy('order')
                ->get(),
        ]);
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type'    => 'warning',
            'message' => __('dashboard.main.are you sure'),
            'text'    => '',
            'id'      => $id,
        ]);
    }

    public function delete($id)
    {
        Service::where('id', $id)->delete();

        $this->dispatchBrowserEvent('swal:done', [
            'type'    => 'success',
            'message' => 'Done!',
            'text'    => '',
        ]);

    }
}
