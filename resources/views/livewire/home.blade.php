<div class="space-y-10">
    <div>
        <h2 class="text-lg font-semibold">Choose a professional</h2>
        <div class="grid gap-8 mt-2 grid-col-2 md:grid-cols-5">
            @foreach($employees as $employee)
                <a href="{{ route('employees.show', $employee) }}" class="flex flex-col items-center justify-center px-4 py-8 text-center border rounded-lg shadow-sm border-slate-200 hover:bg-gray-50/75">
                    <img src="{{ $employee->profile_photo_url }}" class="rounded-full size-14">
                    <div class="mt-3 text-sm font-medium text-slate-600">
                        {{ $employee->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div>
        <h2 class="text-lg font-semibold">Or, choose a service first</h2>
        <div class="grid gap-8 mt-2 grid-col-2 md:grid-cols-5">
            @foreach($services as $service)
                <x-service :service="$service" />
            @endforeach
        </div>
    </div>
</div>
