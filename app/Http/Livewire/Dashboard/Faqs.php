<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Faq;
use Livewire\Component;
use Livewire\WithPagination;

class Faqs extends Component
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

    public function availability($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->update(['available' => ! $faq->available]);
    }

    public function render()
    {
        $faqs = Faq::query();

        $faqs->with(["translations"]);

        if (! empty($this->search)) {

            $faqs->whereTranslationLike('question','%'.$this->search.'%')
            ->OrwhereTranslationLike('answer','%'.$this->search.'%');
        }

        return view('livewire.dashboard.faqs', [
            'faqs' => $faqs->orderBy('created_at', 'DESC')
                ->paginate(10),
        ]);
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type'    => 'warning',
            'message' => __('dashboard.main.are you sure'),
             'text'    => trans('dashboard.Be careful It will be deleted!'),
            'id'      => $id,
        ]);
    }

    public function delete($id)
    {
        Faq::where('id', $id)->delete();

        $this->dispatchBrowserEvent('swal:done', [
            'type'    => 'success',
            'message' => 'Done!',
             'text'    => trans('dashboard.It was done successfully!'),
        ]);

    }
}
