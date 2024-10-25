<div>
    <div class="fixed z-50 inset-0 flex items-center justify-center overflow-hidden">
        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>
    
        <div class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:max-w-lg w-full mx-4">
            <div class="flex items-center justify-center bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4 ">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    {{ $title  }}
                </h3>
            </div>

            <!-- Modal body -->    
            <div class="border rounded mx-8 my-4 p-4">
                {{ $content }}
            </div>
    
            <div class="p-2">
                <div class="flex justify-end space-x-2 " >
                  {{ $footer }}
                </div>
            </div>            
        </div>
        
    </div>
    
</div>