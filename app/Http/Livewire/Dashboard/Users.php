<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;

    public $filter=[
        'search' => '',
        'role' => '',
    ];
    public $sortField;
    public $sortAsc = true;
    protected $listeners=['delete'];

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

    public function render()
    {
        $users = User::query();

        if (! empty($this->filter['search'])) {
            $users->where('first_name','like', '%' . $this->filter['search'] . '%' )
                ->orWhere('email', 'like', '%' . $this->filter['search'] . '%');
        }
        if (! empty($this->filter['role'])) {
            $users->where('role',$this->filter['role']  );
        }

        return view('livewire.dashboard.users', [
            'users' => $users->orderBy('created_at', 'DESC')
                ->paginate(10),
        ]);
    }

    public function deleteConfirm($id)
    {
        $this->dispatchBrowserEvent('swal:confirm', [
            'type' => 'warning',
            'message' => __('dashboard.main.are you sure'),
            'text' => '',
            'id' => $id
        ]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        if (count($user->applications) > 0 || $user->role == User::ADMIN_ROLE) {
            $this->dispatchBrowserEvent('swal:done', [
                'type' => 'warning',
                'message' => 'Sorry !',
                'text' => 'You can not delete this, It has content',

            ]);
        } else {
            $user->delete();

            $this->dispatchBrowserEvent('swal:done', [
                'type' => 'success',
                'message' => 'Done!',
                'text' => trans('dashboard.It was done successfully!'),
            ]);
        }

    }
}
