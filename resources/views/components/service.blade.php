<a href="#" class="flex flex-col items-center justify-center px-4 py-8 text-center border rounded-lg shadow-sm border-slate-200 hover:bg-gray-50/75">
    <div class="mt-3 text-sm font-medium text-slate-600">
        {{ $service->title }}
    </div>
    <div class="mt-1 text-sm font-medium text-slate-400">
        {{ $service->duration }} minutes
    </div>
    <div class="text-xs font-medium mt-3 text-slate-600 bg-slate-200 rounded-lg py-0.5 px-1.5">
        {{ $service->price }}
    </div>
</a>
