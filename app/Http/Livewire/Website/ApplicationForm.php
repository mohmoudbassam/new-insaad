<?php

namespace App\Http\Livewire\Website;

use App\Models\Application;
use Livewire\Component;

class ApplicationForm extends Component
{
    public $full_name;
    public $company_name;
    public $phone;
    public $email;
    public $online_store_url;
    public $online_store_platform;
    public $message;
    public $count_orders;
    public $count_orders_ads;
    public $success = false;
    protected $rules = [
        "full_name"                 => "required|string",
        "company_name"                 => "required|string",
        "email"                => "nullable|email",
        "phone"                => "required|string",
        "online_store_platform"                => "required|string",
        "online_store_url"                => "required|url",
        "count_orders"                => "required|integer",
        "count_orders_ads"             => "required|integer",
        "message"             => "nullable|string",
    ];

    public function save()
    {

        Application::create($this->validate());
        $this->reset();
        $this->emit("application-created");
        $this->success = true;
    }
    public function render()
    {
        return view('livewire.website.application-form');
    }
}
