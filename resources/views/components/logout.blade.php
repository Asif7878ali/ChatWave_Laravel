<div id="logout" class="fixed inset-0 z-50 flex items-center justify-center bg-gray-800 bg-opacity-50 hidden" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="bg-white rounded-lg shadow-lg w-full max-w-md">
        <div class="border-b px-4 py-3 flex justify-between items-center">
            <h5 class="text-lg font-semibold" id="logoutLabel">Logout</h5>
            <button type="button" class="text-gray-500 hover:text-gray-700" onclick="toggleModal('logout')">
                &times;
            </button>
        </div>
        <div class="px-4 py-5">
            <p>Are you sure you want to logout?</p>
        </div>
        <div class="border-t px-4 py-3 flex justify-end space-x-2">
            <button type="button" class="bg-gray-300 hover:bg-gray-400 text-gray-700 rounded px-4 py-2 text-sm" onclick="toggleModal('logout')">Cancel</button>
            <form action="#" method="POST" class="inline">
                @csrf
                <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded px-4 py-2 text-sm">Logout</button>
            </form>
        </div>
    </div>
</div>