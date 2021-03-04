<div class="m-10 border border-black w-2/3">
    <label for="about"
      class="block  py-1.5 pl-3 font-medium text-gray-100 bg-blue-400"
    >
        {{ ucfirst($sectionName) }}
    </label>
    
    <div class="mt-1 p-3">
        <textarea 
            id="{{ $sectionName }}" name="{{ $sectionName }}" rows="10"
            class="border w-full shadow-sm focus:ring-green-500 focus:border-green-500block sm:text-sm border-gray-300 rounded-md resize-none"
        ></textarea>
    </div>
    <div class="m-3 flex justify-between">
        <p class="ml-2 text-sm text-gray-500">{{ $sectionInfo }}</p>
        <a href=""
            class="py-1 px-1.5 bg-blue-400 text-blue-50 hover:bg-blue-500 text-blue-100"
        >
            next
        </a>
    </div>
</div>