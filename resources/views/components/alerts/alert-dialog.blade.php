<div>
    <button data-modal-trigger data-modal-target="modal-message-def"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
        Default Message
    </button>
    <div data-alert-dialog aria-hidden="true" data-modal-id="modal-message-def"
         data-modal-overlay="bg-gray-800/70 backdrop-filter backdrop-blur-3xl"
         class="hidden justify-center items-start p-4 fixed w-screen h-screen top-0 left-0">
        <dialog data-modal-content data-enter-animation="fadeInScale .4s linear"
                data-exit-animation="fadeOutScale .1s linear"
                class="relative bg-white dark:bg-gray-950 rounded-lg overflow-hidden w-full max-w-xl p-8 flex flex-col gap-y-4 items-center ease-linear transition-all ">
            <div
                class="w-max p-3 rounded-full bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                </svg>
            </div>
            <h2 class="font-semibold text-xl text-gray-900 dark:text-white">
                Confirm your action
            </h2>
            <p class="text-gray-700 dark:text-gray-300">
                Are you sure you want to proceed with this action?
            </p>
            <div class="flex justify-center gap-x-3 pt-4">
                <button
                    class="h-9 text-sm flex items-center px-5 rounded-md bg-blue-600 duration-200 hover:bg-opacity-80 text-white">
                    Yes, Proceed
                </button>
                <button data-close-modal
                        class="h-9 text-sm flex items-center px-5 rounded-md bg-gray-100 dark:bg-gray-900 duration-300 hover:!bg-opacity-60 text-gray-800 dark:text-gray-200">
                    No, Cancel
                </button>
            </div>

        </dialog>
    </div>
</div>
