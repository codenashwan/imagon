<div class="grid md:grid-cols-2 my-5 grid-cols-1 items-center">
    <div class="md:my-0 my-3">
        <p class="text-green-500 font-extrabold my-2">{{ $title ?? 'Just Compress' }}</p>
        <p>
           {!! $details !!}
        </p>
    </div>
    <div>
        <div class="relative z-10 bg-gray-800 rounded-xl shadow-lg ">
            <div class="relative flex text-gray-400 text-xs leading-6">
                <div class="mt-2 flex-none text-sky-300 border-t border-b border-t-transparent border-b-sky-300 px-4 py-1 flex items-center">POST  (:image required)</div>
                <div class="flex-auto flex pt-2 rounded-tr-xl overflow-hidden">
                    <div class="flex-auto -mr-px bg-gray-700/50 border border-gray-500/30 rounded-tl"></div>
                </div>
            </div>
            <div class="relative">
                <pre class="text-sm leading-6 text-gray-50 flex ligatures-none overflow-auto">
                        <span class="flex p-4">
                            <svg viewBox="0 -9 3 24" aria-hidden="true" class="flex-none overflow-visible text-pink-400 w-auto h-6 mr-3">
                                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                            <span class="flex-auto">{{ Request::getHost().$code ?? "---" }}</span>
                        </span>
                </pre>
            </div>
        </div>
    </div>
</div>
<br>
