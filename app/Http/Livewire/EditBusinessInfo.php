<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{User, BusinessInfoDetails};
use Illuminate\Http\Request;

class EditBusinessInfo extends Component
{
    public $users, $reportId;
    public $name, $description, $country, $state, $city, $address, $pincode;
    public $email, $phone, $website, $status, $source, $opportunity, $industry;
    public $assign_user, $intelligence_description, $remark_date, $remark_description;
    public $activeTab = 'business-info'; // Default active tab

    public function mount(Request $request)
    {
        $this->users = User::all();
        $this->reportId = $request->route('id'); // Store report ID
        if ($this->reportId) {
            $this->edit($this->reportId); // Load the report details for editing
        }
    }

    public function edit($id)
    {
        $report = BusinessInfoDetails::find($id);
// dd($report);
        if ($report) {
            // Load report data into component properties for the form
            $this->name = $report->name;
            $this->description = $report->description;
            $this->country = $report->country;
            $this->state = $report->state;
            $this->city = $report->city;
            $this->address = $report->address;
            $this->pincode = $report->pincode;
            $this->email = $report->email;
            $this->phone = $report->phone;
            $this->website = $report->website;
            $this->status = $report->status;
            $this->source = $report->source;
            $this->opportunity = $report->opportunity;
            $this->industry = $report->industry;
            $this->assign_user = $report->assign_user;
            $this->intelligence_description = $report->intelligence_description;
            $this->remark_date = $report->remark_date;
            $this->remark_description = $report->remark_description;
        } else {
            session()->flash('error', 'Report not found.');
        }
    }

    public function updateReport()
    {
        $this->validate([
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

        $report = BusinessInfoDetails::find($this->reportId);
        
        if ($report) {
            // Update the report with the form data
            $report->name = $this->name;
            $report->description = $this->description;
            $report->country = $this->country;
            $report->state = $this->state;
            $report->city = $this->city;
            $report->address = $this->address;
            $report->pincode = $this->pincode;
            $report->email = $this->email;
            $report->phone = $this->phone;
            $report->website = $this->website;
            $report->status = $this->status;
            $report->source = $this->source;
            $report->opportunity = $this->opportunity;
            $report->industry = $this->industry;
            $report->assign_user = $this->assign_user;
            $report->intelligence_description = $this->intelligence_description;
            $report->remark_date = $this->remark_date;
            $report->remark_description = $this->remark_description;
            
            // dd($report);
            // Save the updated report
            $report->save();

            // Flash success message
            session()->flash('message', 'Details updated successfully.');
            // $this->emit('alert', ['type' => 'success', 'message' => 'Details updated successfully.']);
        } else {
            session()->flash('message' ,'Report not found.');
        }
    }

    public function render()
    {
        return view('livewire.edit-business-info');
    }
}
