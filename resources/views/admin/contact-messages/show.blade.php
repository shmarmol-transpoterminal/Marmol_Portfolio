<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('View Message') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <a href="{{ route('admin.contact-messages.index') }}" class="text-blue-500 hover:text-blue-700">
                            &larr; Back to all messages
                        </a>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase">From</h4>
                            <p class="text-lg">{{ $contactMessage->name }} ({{ $contactMessage->email }})</p>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-gray-500 uppercase">Date</h4>
                            <p class="text-lg">{{ $contactMessage->created_at->format('F d, Y H:i') }}</p>
                        </div>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-sm font-bold text-gray-500 uppercase">Subject</h4>
                        <p class="text-lg">{{ $contactMessage->subject ?? '(No Subject)' }}</p>
                    </div>

                    <div class="mb-6">
                        <h4 class="text-sm font-bold text-gray-500 uppercase">Message</h4>
                        <div class="mt-2 p-4 bg-gray-50 rounded border border-gray-200 whitespace-pre-wrap">
                            {{ $contactMessage->message }}
                        </div>
                    </div>

                    <form action="{{ route('admin.contact-messages.destroy', $contactMessage) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure you want to delete this message?')">
                            Delete Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
