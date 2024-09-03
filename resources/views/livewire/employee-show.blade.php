<div>
    <div>
        <h2 class="text-xl font-medium">Choose a service from {{ $employee->name }}</h2>
        <div class="grid gap-8 mt-6 grid-col-2 md:grid-cols-5">
            @foreach($employee->services as $service)
                <x-service :service="$service" />
            @endforeach
        </div>
    </div>
</div>
