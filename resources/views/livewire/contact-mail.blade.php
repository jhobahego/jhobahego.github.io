<div>
    <section class="flex flex-col items-center max-w-md mx-auto p-6 bg-white dark:bg-gray-800 mt-12 rounded-md">
        <h1 class="text-xl md:text-2xl text-gray-800 md:text-white mb-2">Contacta con nuestros asesores
        </h1>
        <p class="text-base md:text-lg text-opacity-80 text-gray-800 md:text-white mb-6">Lorem ipsum dolor sit amet,
            consectetur adipisicing elit.</p>

        <form wire:submit="enviarEmail" class="flex flex-col items-center gap-3 w-full">
            <div class="w-full">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Email</label>
                <input type="email" name="email" id="email" wire:model="email" autocomplete="email" required
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200">
            </div>
            <div class="w-full">
                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Asunto</label>
                <input type="text" name="subject" id="subject" wire:model="subject" autocomplete="subject" required
                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200">
            </div>
            <div class="w-full">
                <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Mensaje</label>
                <textarea id="content" name="content" wire:model="content" rows="3"
                    class="mt-1 focus:ring-1 focus:border-1 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-200"></textarea>
            </div>

            <x-button type="submit" class="mt-4 self-end px-8">
                Enviar
            </x-button>
        </form>
    </section>
</div>
