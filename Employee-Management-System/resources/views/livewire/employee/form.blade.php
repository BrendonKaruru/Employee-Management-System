<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')"/>
        <x-text-input wire:model="form.email" id="email" name="email" type="text" class="mt-1 block w-full" autocomplete="email" placeholder="Email"/>
        @error('form.email')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="position" :value="__('Position')"/>
        <x-text-input wire:model="form.position" id="position" name="position" type="text" class="mt-1 block w-full" autocomplete="position" placeholder="Position"/>
        @error('form.position')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="department_id" :value="__('Department Id')"/>
        <x-text-input wire:model="form.department_id" id="department_id" name="department_id" type="text" class="mt-1 block w-full" autocomplete="department_id" placeholder="Department Id"/>
        @error('form.department_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="hire_date" :value="__('Hire Date')"/>
        <x-text-input wire:model="form.hire_date" id="hire_date" name="hire_date" type="text" class="mt-1 block w-full" autocomplete="hire_date" placeholder="Hire Date"/>
        @error('form.hire_date')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>