<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\Message;
use Livewire\WithPagination;

class Messages extends Component
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

    public function readAtMessage($id)
    {
        $message = Message::findOrFail($id);

        $message->markAsRead();

    }



    public function render()
    {
        $messages = Message::query();

        if (! empty($this->search)) {

            $messages->where('name', 'like', '%' . $this->search . '%')
                ->Orwhere('message', '%' . $this->search . '%')
                ->Orwhere('subject', '%' . $this->search . '%')
                ->Orwhere('email', '%' . $this->search . '%');
        }

        return view('livewire.dashboard.messages', [
            'messages' => $messages->orderBy('created_at', 'DESC')
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
        Message::where('id', $id)->delete();

        $this->dispatchBrowserEvent('swal:done', [
            'type'    => 'success',
            'message' => 'Done!',
            'text'    => trans('dashboard.It was done successfully!'),
        ]);

    }


}
