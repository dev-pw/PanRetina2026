<!-- MODAL FORM -->
<!-- Button trigger modal -->

<!-- Modal toggle -->
<button id="btn_modal" data-modal-target="modalRetorno" data-modal-toggle="modalRetorno" class="btn-primary hidden" type="button">
  Botão modal
</button>

<!-- Main modal -->
<div id="modalRetorno" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-140 max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm p-8 md:p-12">

            <!-- Modal header -->
            <div class="flex items-center justify-between rounded-t">
              <h2 class="text-red-500 h3 !font-normal" id="titulo_modal"> <strong> Título </strong></h2>
              <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="modalRetorno">
                  <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                  </svg>
                  <span class="sr-only">Close modal</span>
              </button>
            </div>

            <!-- Modal body -->
            <div class="mt-8">
              <p class="text-base font-normal leading-relaxed text-gray-500" id="modal_mensagem"> Conteúdo </p>
            </div>

        </div>
    </div>
</div>
