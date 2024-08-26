<div class="space-y-6">
    
    <div>
        <x-input-label for="name" :value="__('Name')"/>
        <x-text-input wire:model="form.name" id="name" name="name" type="text" class="mt-1 block w-full" autocomplete="name" placeholder="Name"/>
        @error('form.name')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="description" :value="__('Description')"/>
        <x-text-input wire:model="form.description" id="description" name="description" type="text" class="mt-1 block w-full" autocomplete="description" placeholder="Description"/>
        @error('form.description')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="start_date" :value="__('Start Date')"/>
        <x-text-input wire:model="form.start_date" id="start_date" name="start_date" type="text" class="mt-1 block w-full" autocomplete="start_date" placeholder="Start Date"/>
        @error('form.start_date')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="end_date" :value="__('End Date')"/>
        <x-text-input wire:model="form.end_date" id="end_date" name="end_date" type="text" class="mt-1 block w-full" autocomplete="end_date" placeholder="End Date"/>
        @error('form.end_date')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>