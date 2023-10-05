<x-app-layout>

<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 
bg-gray-100 dark:bg-gray-900">

<h1 class="text-white text-lg font-bold">Update ticket</h1>
<div class="w-full sm:max-w-xl mt-6 px-6 py-4  dark:bg-gray-800 shadow-md overflow-hidden
sm:rounded-lg">
<form method="post" action="{{ route('ticket.update',$ticket->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf   
        @method('patch')

            <div class="mt-4 ">
            <x-input-label class="text-white" for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" autofocus value="{{ $ticket->title }}" /> 
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>


        <div class="mt-4 ">
            <x-input-label class="text-white" for="description" :value="__('Description')" />
           <x-textarea  placeholder="Add Description"  name="description" id="description"  value="{{ $ticket->description }}"/>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        <div class="mt-4 ">
            @if($ticket->attachment)
            <a href="{{ '/storage/'. $ticket->attachment }}" class="text-white" target="_blank">See attachment</a>
            @endif
            <x-input-label class="text-white" for="attachment" :value="__('Attachment (if any)')" />
            <x-file-input class="bg-white" type="file" id="attachment" name="attachment"  autofocus />
            <x-input-error class="mt-2" :messages="$errors->get('attachment')" />
        </div>
        

        <div class="flex items-center justify-center mt-4">
        <x-primary-button class="ml-3 ">
             Save
            </x-primary-button>
        </div>          
       </div>
    </form>
    </div>

</x-app-layout>