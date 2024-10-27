<?php 
namespace App\Http\Livewire;

use App\Models\{User, BusinessInfoDetails};
use Livewire\Component;

class BusinessInfo extends Component
{
    public $users, $name, $description, $country, $state, $city, $address, $pincode;
    public $status, $source, $opportunity, $industry, $assign_user, $intelligence_description;
    public $email, $phone, $website, $remark_date, $remark_description;
    public $activeTab = 'business-info'; // Default active tab

    public function mount()
    {
        // Fetch all users for the assign_user dropdown
        $this->users = User::all();
    }

    public function submitAll()
    {
        // Define the validation rules
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'pincode' => 'required|integer',
            'email' => 'required|email',
            'phone' => 'required|string|max:15',
            'website' => 'nullable|url',
            'status' => 'required|string|max:255',
            'source' => 'required|string|max:255',
            'opportunity' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'assign_user' => 'nullable|exists:users,id',
            'intelligence_description' => 'nullable|string|max:255',
            'remark_date' => 'required|date',
            'remark_description' => 'nullable|string|max:255',
        ]);

        // If there are validation errors, set the active tab based on the errors
        if ($this->getErrorBag()->has('email') || $this->getErrorBag()->has('phone')) {
            $this->activeTab = 'contact';
        } elseif ($this->getErrorBag()->has('status') || $this->getErrorBag()->has('source')) {
            $this->activeTab = 'business-intelligence';
        } elseif ($this->getErrorBag()->has('remark_date') || $this->getErrorBag()->has('remark_description')) {
            $this->activeTab = 'remarks';
        } else {
            $this->activeTab = 'business-info'; // Default back to business-info if no errors
        }

        // Proceed to save data if validation passes
        BusinessInfoDetails::create([
            'name' => $this->name,
            'description' => $this->description,
            'country' => $this->country,
            'state' => $this->state,
            'city' => $this->city,
            'address' => $this->address,
            'pincode' => $this->pincode,
            'email' => $this->email,
            'phone' => $this->phone,
            'website' => $this->website,
            'status' => $this->status,
            'source' => $this->source,
            'opportunity' => $this->opportunity,
            'industry' => $this->industry,
            'assign_user' => $this->assign_user,
            'intelligence_description' => $this->intelligence_description,
            'remark_date' => $this->remark_date,
            'remark_description' => $this->remark_description,
        ]);

        // Flash success message
        session()->flash('message', 'All information saved successfully.');
    }

    public function render()
    {
        return view('livewire.business-info');
    }
}
