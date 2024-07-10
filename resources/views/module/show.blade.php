<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-8 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="space-y-10 divide-y divide-gray-900/10">
                    <div class="grid grid-cols-1 gap-x-8 gap-y-8 md:grid-cols-3">
                        <div class="px-4 sm:px-0">
                            <h2 class="text-base font-semibold leading-7 text-gray-900">Module {{ $module->name }}</h2>
                            <p class="mt-1 text-sm leading-6 text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                        </div>

                        <div  class="bg-white shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl md:col-span-2 p-4">
                            <ul role="list" class="divide-y divide-gray-100">
                                @foreach($module->contents as $content)
                                    <li class="relative flex justify-between gap-x-6 py-4">
                                        <div class="flex min-w-0 gap-x-4">
                                            <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                                                 src="https://picsum.photos/200/300?random={{$content->id}}" alt="">
                                            <div class="min-w-0 flex-auto">
                                                <p class="text-sm font-semibold leading-6 text-gray-900">
                                                    <a href="{{ route('content.show', $content->id) }}">
                                                        {{ $content->name }}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flex shrink-0 items-center gap-x-4">
                                            <div class="flex flex-col sm:items-end">
                                                <a href="#" class="text-sm leading-6 text-gray-900">Editar</a>
                                                <a href="#2" class="mt-1 text-xs leading-5 text-gray-500">Remover</a>
                                            </div>
                                            <a href="{{ route('content.show', $content->id) }}">
                                                <svg class="h-5 w-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

</x-app-layout>
