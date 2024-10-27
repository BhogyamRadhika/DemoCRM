<div>
    @if (session()->has('message'))
        <div class="alert alert-success mt-4">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updateReport">
        <!-- Main Flex Container -->
        <div x-data="{ openTab: @entangle('activeTab') }" class="flex space-x-4">
            <!-- Sidebar Buttons -->
            <div class="w-1/4 bg-gray-200 p-4">
                <div class="flex flex-col space-y-2">
                    <button @click.prevent="openTab = 'business-info'" :class="{ 'bg-blue-800 text-white': openTab === 'business-info', 'bg-white text-black': openTab !== 'business-info' }" class="p-2 rounded-lg">Business Info</button>
                    <button @click.prevent="openTab = 'contact'" :class="{ 'bg-blue-800 text-white': openTab === 'contact', 'bg-white text-black': openTab !== 'contact' }" class="p-2 rounded-lg">Contact Details</button>
                    <button @click.prevent="openTab = 'business-intelligence'" :class="{ 'bg-blue-800 text-white': openTab === 'business-intelligence', 'bg-white text-black': openTab !== 'business-intelligence' }" class="p-2 rounded-lg">Business Intelligence</button>
                    <button @click.prevent="openTab = 'remarks'" :class="{ 'bg-blue-800 text-white': openTab === 'remarks', 'bg-white text-black': openTab !== 'remarks' }" class="p-2 rounded-lg">Remarks</button>
                </div>
            </div>

            <!-- Content Section -->
            <div class="w-3/4 p-4">
                <!-- Business Info Section -->
                <div x-show="openTab === 'business-info'" class="space-y-4" style="display: none;">
                    <h2 class="text-lg font-bold mb-4">Business Info</h2>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" class="form-control small-placeholder" id="name" placeholder="Enter Name" wire:model="name">
                            @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="description" class="col-form-label">Description</label>
                            <input type="text" class="form-control small-placeholder" id="description" placeholder="Enter Description" wire:model="description">
                            @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="country" class="col-form-label">Country</label>
                            <input type="text" class="form-control small-placeholder" id="country" placeholder="Country" wire:model="country">
                            @error('country') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="state" class="col-form-label">State</label>
                            <input type="text" class="form-control small-placeholder" id="state" placeholder="State" wire:model="state">
                            @error('state') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="city" class="col-form-label">City</label>
                            <input type="text" class="form-control small-placeholder" id="city" placeholder="City" wire:model="city">
                            @error('city') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label for="address" class="col-form-label">Address</label>
                            <input type="text" class="form-control small-placeholder" id="address" placeholder="Address" wire:model="address">
                            @error('address') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="pincode" class="col-form-label">Pincode</label>
                            <input type="number" class="form-control small-placeholder" id="pincode" placeholder="Pincode" wire:model="pincode">
                            @error('pincode') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Contact Details Section -->
                <div x-show="openTab === 'contact'" class="space-y-4" style="display: none;">
                    <h2 class="text-lg font-bold mb-4">Contact Details</h2>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control small-placeholder" id="email" placeholder="Email" wire:model="email">
                            @error('email') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="phone" class="col-form-label">Phone</label>
                            <input type="text" class="form-control small-placeholder" id="phone" placeholder="Phone" wire:model="phone">
                            @error('phone') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="website" class="col-form-label">Website</label>
                            <input type="text" class="form-control small-placeholder" id="website" placeholder="Website" wire:model="website">
                            @error('website') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Business Intelligence Section -->
                <div x-show="openTab === 'business-intelligence'" class="space-y-4" style="display: none;">
                    <h2 class="text-lg font-bold mb-4">Business Intelligence</h2>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="status" class="col-form-label">Status</label>
                            <input type="text" class="form-control small-placeholder" id="status" placeholder="Status" wire:model="status">
                            @error('status') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="source" class="col-form-label">Source</label>
                            <input type="text" class="form-control small-placeholder" id="source" placeholder="Source" wire:model="source">
                            @error('source') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="opportunity" class="col-form-label">Opportunity</label>
                            <input type="text" class="form-control small-placeholder" id="opportunity" placeholder="Opportunity" wire:model="opportunity">
                            @error('opportunity') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="industry" class="col-form-label">Industry</label>
                            <select id="industry" class="form-control select2" wire:model="industry">
                                <option value="">Select Industry</option>
                                <option value="Industry 1">Industry 1</option>
                                <option value="Industry 2">Industry 2</option>
                                <option value="Industry 3">Industry 3</option>
                            </select>
                            @error('industry') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="assign_user" class="col-form-label">Assign User</label>
                            <select id="assign_user" class="form-control select2" wire:model="assign_user">
                                <option value="">Select User</option>
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->first_name }} {{$user->last_name}}</option>
                                @endforeach
                            </select>
                            @error('assign_user') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="intelligence_description" class="col-form-label">Intelligence Description</label>
                            <textarea class="form-control small-placeholder" id="intelligence_description" placeholder="Enter description" wire:model="intelligence_description"></textarea>
                            @error('intelligence_description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Remarks Section -->
                <div x-show="openTab === 'remarks'" class="space-y-4" style="display: none;">
                    <h2 class="text-lg font-bold mb-4">Remarks</h2>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            <label for="remark_date" class="col-form-label">Remark Date</label>
                            <input type="date" class="form-control small-placeholder" id="remark_date" wire:model="remark_date">
                            @error('remark_date') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group col-sm-8">
                            <label for="remark_description" class="col-form-label">Remark Description</label>
                            <textarea class="form-control small-placeholder" id="remark_description" placeholder="Enter remark" wire:model="remark_description"></textarea>
                            @error('remark_description') <span class="text-danger small">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="mt-8">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
